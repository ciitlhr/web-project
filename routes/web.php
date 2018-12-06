<?php

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

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Auth::routes();

Route::get('/dashboard', 'DashBoardController@index');
Route::get('myprofile', 'DashBoardController@myprofile');
Route::get('/blog', 'DashBoardController@blog');
Route::post('myprofile','DashBoardController@update_avatar');


Route::resource('/posts','PostsController');
Route::get('/posts/{{$id}}', 'PostsController@show');
