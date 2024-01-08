<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        try {
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->name = $request->name;
            $user->birthdate = $request->birthdate;
            $user->description = $request->description;
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            if ($request->file) {
                $photo = $request->file;
                $photoName = time() . '.' . $photo->extension();
                $photo->move(public_path('photos'), $photoName);
                $user->profile_picture = 'http://10.0.2.2:8000/photos/' . $photoName;
            }
            else {
                $user->profile_picture = 'https://yourteachingmentor.com/wp-content/uploads/2020/12/istockphoto-1223671392-612x612-1.jpg';
            }
            $user->save();
            return [
                'status' => Response::HTTP_OK,
                'message' => 'User Created',
                'data' => $user
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    public function viewUser()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function viewUserDetails(Request $request)
    {
        $user = User::find($request->id);
        return response()->json(new UserResource($user));
        // return $user;
    }


    public function updateUser(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        if (!empty($user)) {
            try {
                $user->username = $request->username;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->name = $request->name;
                $user->birthdate = $request->birthdate;
                $user->description = $request->description;
                $user->phone = $request->phone;
                $user->gender = $request->gender;
                $user->save();
                return [
                    'status' => Response::HTTP_OK,
                    'message' => 'User Updated',
                    'data' => $user
                ];
            } catch (Exception $e) {
                return [
                    'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                    'message' => $e->getMessage(),
                    'data' => []
                ];
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
        $user = Auth::user();

        if (!$user) {
            return [
                'status' => Response::HTTP_UNAUTHORIZED,
                'message' => "User not authenticated",
                'data' => []
            ];
        }

        try {
            $oldData = [
                'profile_picture' => $user->profile_picture,
            ];
            if ($request->file) {
                $oldImagePath = public_path('photos') . '/' . $user->profile_picture;
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }

                $photo = $request->file;
                if ($photo) {
                    $photoName = time() . '.' . $photo->extension();
                } else {
                   return [
                        'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                        'message' => "Image is not valid",
                        'data' => []
                    ];
                }
                $photo->move(public_path('photos'), $photoName);
                $user->photo = 'https://http://10.0.2.2:8000/photos/' . $photoName;
            } else {
                $user->photo = $oldData['profile_picture'];
                return [
                    'status' => Response::HTTP_OK,
                    'message' => "No image uploaded",
                    'data' => $user
                ];
            }

            $user->save();
            return [
                'status' => Response::HTTP_OK,
                'message' => "User updated successfully",
                'data' => $user
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    public function deleteUser(Request $request)
    {
        if (!empty($request->id)) {
            $user = User::where('id', $request->id)->first();
        }

        if (!empty($user)) {
            $user->delete();
            return [
                'status' => Response::HTTP_OK,
                'message' => 'User Deleted',
                'data' => []
            ];
        }

        return [
            'status' => Response::HTTP_NOT_FOUND,
            'message' => 'User not Found',
            'data' => []
        ];
    }

    public function followUser(Request $request)
    {
        try {
            $userToFollow = User::find($request->id);

            if ($request->user()->id == $userToFollow->id) {
                return [
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'Cannot follow yourself',
                    'data' => []
                ];
            }

            if ($request->user()->followings()->where('users.id', $userToFollow->id)->exists()) {
                return [
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'User is already followed',
                    'data' => []
                ];
            }

            $request->user()->followings()->attach($userToFollow);

            return [
                'status' => Response::HTTP_OK,
                'message' => 'User Followed',
                'data' => []
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    public function unfollowUser(Request $request)
    {
        try {
            $userToUnfollow = User::find($request->id);

            if ($request->user()->id == $userToUnfollow->id) {
                return [
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'Cannot unfollow yourself',
                    'data' => []
                ];
            }

            if (!$request->user()->followings()->where('users.id', $userToUnfollow->id)->exists()) {
                return [
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'User is not currently followed',
                    'data' => []
                ];
            }

            $request->user()->followings()->detach($userToUnfollow);

            return [
                'status' => Response::HTTP_OK,
                'message' => 'User Unfollowed',
                'data' => []
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

}
