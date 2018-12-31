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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' =>'AdminDashboardController@index']);
    Route::get('posts' , ['as' => 'admin.posts.index' , 'uses'=> 'AdminPostsController@index']);
    Route::get('posts/create' , ['as' => 'admin.posts.create', 'uses'=> 'AdminPostsController@create']);
    Route::get('posts/{id}/edit', ['as' => 'admin.posts.edit' , 'uses'=> 'AdminPostsController@show']);
});
