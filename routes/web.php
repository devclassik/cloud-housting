<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', [App\Http\Controllers\Controller::class, 'index']);
Route::get('/user-login', [App\Http\Controllers\Controller::class, 'userLogin']);
Route::get('/user-register', [App\Http\Controllers\Controller::class, 'userRegister']);

