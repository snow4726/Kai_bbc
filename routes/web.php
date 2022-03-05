<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::resource('/', 'App\Http\Controllers\PostsController');

Route::get('/{id}/kobetu', 'App\Http\Controllers\PostsController@show');
Route::get('/{id}/toukou', 'App\Http\Controllers\PostsController@show_toukou');

Route::resource('comment', 'App\Http\Controllers\CommentsController');

Route::get('/category/{id}','App\Http\Controllers\PostsController@showCategory');