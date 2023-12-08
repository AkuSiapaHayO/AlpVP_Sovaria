<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('createUser', [UserController::class, 'createUser']);
Route::post('login', [AuthenticationController::class, 'login']);
Route::get('viewUser', [UserController::class, 'viewUser']);
Route::middleware(['auth:sanctum'])->group(
    function () {
        
        Route::patch('updateUser', [UserController::class,'updateUser']);
        Route::delete('logout', [AuthenticationController::class, 'logout']);
        Route::delete('deleteUser', [UserController::class, 'deleteUser']);
    }
);


