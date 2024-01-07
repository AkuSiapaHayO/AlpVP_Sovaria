<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
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
            $user->profile_picture = $request->profile_picture;
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
        $user = User::find($request->id)->first();
        return new UserResource($user);
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
                $user->profile_picture = $request->profile_picture;
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

            // Check if the user is trying to follow themselves
            if ($request->user()->id == $userToFollow->id) {
                return [
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'Cannot follow yourself',
                    'data' => []
                ];
            }

            // Check if the user is already following the target user
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

            // Check if the user is trying to unfollow themselves
            if ($request->user()->id == $userToUnfollow->id) {
                return [
                    'status' => Response::HTTP_BAD_REQUEST,
                    'message' => 'Cannot unfollow yourself',
                    'data' => []
                ];
            }

            // Check if the user is not currently following the target user
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
