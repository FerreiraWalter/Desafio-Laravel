<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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


Route::resource('/index', RegisterController::class);

Route::get('/user', 'App\Http\Controllers\RegisterController@create');

Route::get('/user/{id}', 'App\Http\Controllers\RegisterController@edit');

Route::put('user/{id}', 'App\Http\Controllers\RegisterController@update');
