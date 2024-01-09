<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Recipe;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use App\Http\Resources\CommentUserResource;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            $request->validate([
                'comment' => 'required|string',
                'date' => 'required|date',
            ]);

            $user = $request->user();

            $comment = new Comment();
            $comment->user_id = $user->id;
            $comment->recipe_id = $request->recipe_id;
            $comment->comment = $request->comment;
            $comment->date = $request->date;
            $comment->save();

            return [
                'status' => Response::HTTP_OK,
                'message' => 'Comment Created',
                'data' => $comment,
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
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $comment = Comment::findOrFail($request->id);

            if (
                $request->user()->id !== $comment->user_id &&
                $request->user()->id !== $comment->recipe->user_id
            ) {
                return [
                    'status' => Response::HTTP_FORBIDDEN,
                    'message' => 'You do not have permission to delete this comment.',
                    'data' => [],
                ];
            }

            $comment->delete();

            return [
                'status' => Response::HTTP_OK,
                'message' => 'Comment deleted successfully.',
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

    public function viewRecipeComments(Request $request)
{
    try {
        $recipe = Recipe::find($request->id);

        if (!$recipe) {
            return [
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Recipe not found',
                'data' => [],
            ];
        }

        $comments = $recipe->comments;

        if (!$comments) {
            return [
                'status' => Response::HTTP_OK,
                'message' => 'No comments found for the recipe',
                'data' => [],
            ];
        }

        return response()->json(CommentUserResource::collection($comments));
    } catch (Exception $e) {
        return [
            'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            'message' => $e->getMessage(),
            'data' => [],
        ];
    }
}

}
