<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/userRegister', [UserManagingController::class, 'addUser']);
Route::get('/userLogin', [UserManagingController::class, 'loginUser']);
Route::delete('/deleteUser', [UserManagingController::class, 'deleteUser']);
Route::put('/editUser', [UserManagingController::class, 'editUser']);
Route::post('/addPost', [UserManagingController::class, 'addPost']);
Route::get('/getPosts', [UserManagingController::class, 'getPosts']);
Route::get('/getUserPost', [UserManagingController::class, 'getUserPost']);