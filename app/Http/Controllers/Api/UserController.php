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

    public function viewUser() {
        $users = User::all();
        return UserResource::collection($users);
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
}