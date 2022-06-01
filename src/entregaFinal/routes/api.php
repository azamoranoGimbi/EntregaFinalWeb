<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/userRegister', 'UserManagingController@addUser');
Route::delete('/deleteUser', 'UserManagingController@deleteUser');
Route::put('/editUser', 'UserManagingController@editUser');
Route::post('/addPost', 'UserManagingController@addPost');
Route::get('/getPosts', 'UserManagingController@getPosts');
Route::get('/getUserPost', 'UserManagingController@getUserPost');