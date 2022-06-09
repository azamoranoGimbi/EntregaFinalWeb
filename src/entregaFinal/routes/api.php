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

Route::get('/esAdministrador', function () {
    return view('esOnoAdministrador');
});
Route::post('/loginAdministrador', [UserManagingController::class, 'loginAdministrador']);

Route::get('/go-to-login', function(){
    return view('pages-login');
});
Route::get('/go-to-register', function(){
    return view('welcome');
});
Route::post('/login', [UserManagingController::class, 'loginUser']);

Route::post('/userRegister', [UserManagingController::class, 'addUser']);
Route::post('/deleteUser', [UserManagingController::class, 'deleteUser']);
Route::put('/editUser', [UserManagingController::class, 'editUser']);
Route::post('/addPost', [UserManagingController::class, 'addPost']);
Route::get('/getPosts', [UserManagingController::class, 'getPosts']);
Route::get('/getUserPost', [UserManagingController::class, 'getUserPost']);