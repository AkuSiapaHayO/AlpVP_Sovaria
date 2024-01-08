<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\CommentController;
use App\Models\Comment;
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
Route::post('login', [AuthenticationController::class, 'login'])->name('login');
Route::get('viewUserDetails', [UserController::class, 'viewUserDetails'])->name('viewUserDetails');
Route::middleware(['auth:sanctum'])->group(
    function () {
        Route::get('viewUser', [UserController::class, 'viewUser']);
        // Route::get('viewUserDetails/{id}', [UserController::class, 'viewUserDetails']);
        Route::patch('updateUser', [UserController::class, 'updateUser']);
        Route::get('logout', [AuthenticationController::class, 'logout']);
        Route::delete('deleteUser', [UserController::class, 'deleteUser']);
        Route::post('followUser', [UserController::class, 'followUser']);
        Route::post('unfollowUser', [UserController::class, 'unfollowUser']);

        Route::post('createRecipe', [RecipeController::class, 'store']);
        Route::get('viewRecipe', [RecipeController::class, 'index']);
        Route::get('viewRecipeDetails', [RecipeController::class, 'show']);
        Route::patch('updateRecipe', [RecipeController::class, 'update']);
        Route::put('updateRecipeImage', [RecipeController::class, 'updateImage']);
        Route::delete('deleteRecipe', [RecipeController::class, 'destroy']);
        Route::post('addFavorite', [RecipeController::class, 'addFavorite']);
        Route::get('viewFavorite', [RecipeController::class, 'viewFavorite']);
        Route::delete('deleteFavorite', [RecipeController::class, 'deleteFavorite']);

        Route::get('viewCategory', [CategoryController::class, 'index']);

        Route::post('createComment', [CommentController::class, 'store']);
        Route::get('viewUserComments', [CommentController::class, 'viewUserComments']);
        Route::delete('deleteComment', [CommentController::class, 'destroy']);
    }
);


