<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Resources\RecipeResource;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use Symfony\Component\HttpFoundation\Response;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return response()->json(RecipeResource::collection($recipes));
        // return RecipeResource::collection($recipes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $user = $request->user();
            $recipe = new Recipe();
            $recipe->user_id = $user->id;
            $recipe->recipe_name = $request->recipe_name;
            $recipe->caption = $request->caption;
            $recipe->ingredients = $request->ingredients;
            $recipe->steps = $request->steps;
            if ($request->file) {
                $image = $request->file;
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('images'), $imageName);
                $recipe->image = 'http://10.0.2.2:8000/images/' . $imageName;
            } else {
                $recipe->image = null;
            }
            $recipe->calorie = $request->calorie;
            $recipe->servings = $request->servings;
            $recipe->time = $request->time;
            $recipe->save();
            $recipe->categories()->sync($request->categories);

            return [
                'status' => Response::HTTP_OK,
                'message' => 'Recipe Created',
                'data' => $recipe,
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $recipe = Recipe::find($request->id);
        return response()->json(new RecipeResource($recipe));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $recipe = Recipe::where('id', $request->id)->first();

        if (!empty($recipe)) {
            if ($request->user()->id !== $recipe->user_id) {
                return [
                    'status' => Response::HTTP_FORBIDDEN,
                    'message' => 'You are not authorized to update this recipe.',
                    'data' => []
                ];
            } else {
                try {
                    $recipe->update([
                        'recipe_name' => $request->recipe_name,
                        'caption' => $request->caption,
                        'ingredients' => $request->ingredients,
                        'steps' => $request->steps,
                        'calorie' => $request->calorie,
                        'servings' => $request->servings,
                        'time' => $request->time,
                    ]);
                    $recipe->categories()->sync($request->categories);
                    return [
                        'status' => Response::HTTP_OK,
                        'message' => 'Recipe Updated',
                        'data' => $recipe,
                    ];
                } catch (Exception $e) {
                    return [
                        'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                        'message' => $e->getMessage(),
                        'data' => [],
                    ];
                }
            }
        }
        return [
            'status' => Response::HTTP_NOT_FOUND,
            'message' => 'User not Found',
            'data' => []
        ];
    }

    public function updateImage(Request $request)
    {
        try {
            $recipe = Recipe::findOrFail($request->id);
            $oldData = [
                'image' => $recipe->image,
            ];
            if ($request->file) {
                $oldImagePath = public_path('images') . '/' . $recipe->image;
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }

                $image = $request->file;
                if ($image) {
                    $imageName = time() . '.' . $image->extension();
                } else {
                    return [
                        'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                        'message' => "Image is not valid",
                        'data' => []
                    ];
                }
                $image->move(public_path('images'), $imageName);
                $recipe->image = 'http://10.0.2.2:8000/images/' . $imageName;
            } else {
                $recipe->image = $oldData['image'];
                return [
                    'status' => Response::HTTP_OK,
                    'message' => "No image uploaded",
                    'data' => $recipe->loadMissing('user:id,name')
                ];
            }

            $recipe->save();
            return $recipe->loadMissing('user:id,name');
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $user = $request->user();
            $recipe = Recipe::find($request->id);

            if (!$recipe) {
                return [
                    'status' => Response::HTTP_NOT_FOUND,
                    'message' => 'Recipe not found',
                    'data' => [],
                ];
            }

            if ($user->id !== $recipe->user_id) {
                return [
                    'status' => Response::HTTP_FORBIDDEN,
                    'message' => 'You do not have permission to delete this recipe',
                    'data' => [],
                ];
            }

            $recipe->categories()->detach();
            $recipe->delete();

            return [
                'status' => Response::HTTP_OK,
                'message' => 'Recipe deleted successfully',
                'data' => [],
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function addFavorite(Request $request)
    {
        try {
            $user = $request->user();
            $recipe = Recipe::find($request->id);

            if (!$recipe) {
                return [
                    'status' => Response::HTTP_NOT_FOUND,
                    'message' => 'Recipe not found',
                    'data' => [],
                ];
            }

            if ($user->savedRecipes()->where('recipe_id', $request->id)->exists()) {
                return [
                    'status' => Response::HTTP_CONFLICT,
                    'message' => 'Recipe already saved',
                    'data' => [],
                ];
            }

            $user->savedRecipes()->attach($recipe);

            return [
                'status' => Response::HTTP_OK,
                'message' => 'Recipe saved successfully',
                'data' => [],
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function viewFavorite(Request $request)
    {
        try {
            $user = $request->user();
            // $savedRecipes = RecipeResource::collection($user->savedRecipes);

            return response()->json(RecipeResource::collection($user->savedRecipes));
            // return [
            //     'status' => Response::HTTP_OK,
            //     'message' => 'Saved recipes retrieved successfully',
            //     'data' => $savedRecipes,
            // ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function deleteFavorite(Request $request)
    {
        try {
            $user = $request->user();
            $recipe = Recipe::find($request->id);

            if (!$recipe) {
                return [
                    'status' => Response::HTTP_NOT_FOUND,
                    'message' => 'Recipe not found',
                    'data' => [],
                ];
            }

            if (!$user->savedRecipes()->where('recipe_id', $request->id)->exists()) {
                return [
                    'status' => Response::HTTP_NOT_FOUND,
                    'message' => 'Recipe not saved by the user',
                    'data' => [],
                ];
            }

            $user->savedRecipes()->detach($recipe);

            return [
                'status' => Response::HTTP_OK,
                'message' => 'Recipe unsaved successfully',
                'data' => [],
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function getRecipesFromFollowedUsers()
    {
        try {
            $currentUser = Auth::user();

            if (!$currentUser) {
                return [
                    'status' => Response::HTTP_UNAUTHORIZED,
                    'message' => 'User not logged in',
                    'data' => [],
                ];
            }

            $currentUser->load('followings');

            $followingUserIds = $currentUser->followings->pluck('id')->toArray();

            $recipesFromFollowedUsers = Recipe::whereIn('user_id', $followingUserIds)->get();

            return response()->json(RecipeResource::collection($recipesFromFollowedUsers));

        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function searchRecipes(Request $request)
    {
        try {
            $currentUser = Auth::user();

            if (!$currentUser) {
                return [
                    'status' => Response::HTTP_UNAUTHORIZED,
                    'message' => 'User not logged in',
                    'data' => [],
                ];
            }

            $searchString = $request->input('search');

            $filteredRecipes = Recipe::where('recipe_name', 'like', "%$searchString%")
                ->orWhereHas('categories', function ($query) use ($searchString) {
                    $query->where('name', 'like', "%$searchString%");
                })
                ->get();

            return response()->json(RecipeResource::collection($filteredRecipes));

        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function getRecipesByCategory(Request $request)
    {
        try {
            $category = Category::find($request->id);

            if (!$category) {
                return [
                    'status' => Response::HTTP_NOT_FOUND,
                    'message' => 'Category not found',
                    'data' => [],
                ];
            }

            $recipes = $category->recipes;

            return response()->json(RecipeResource::collection($recipes));

        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function getRecipesByUser(Request $request)
    {
        try {
            $user = User::find($request->id);

            if (!$user) {
                return [
                    'status' => Response::HTTP_NOT_FOUND,
                    'message' => 'Category not found',
                    'data' => [],
                ];
            }

            $recipes = $user->recipes;

            return response()->json(RecipeResource::collection($recipes));

        } catch(Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }

    public function getTopSavedRecipes()
    {
        try {
            $topRecipes = Recipe::withCount('savedByUsers')->orderByDesc('saved_by_users_count')->take(5)->get();

            return response()->json(RecipeResource::collection($topRecipes));

        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }
    }
}
