<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('pages-post');
});

Route::get('/go-to-login', function(){
    return view('pages-login');
});

Route::get('/go-to-logout', function(){
    return view('pages-login');
});

Route::get('/go-to-register', function(){
    return view('welcome');
});

Route::get('/esAdministrador', function () {
    return view('esOnoAdministrador');
});

Route::get('/go-to-editUser', function(){
    return view('editUser');
});