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

Route::get('/', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::post('/post/store', 'PostsController@store');
Route::get('/post/{post}', 'PostsController@show');
Route::get('/post/{post}/edit', 'PostsController@edit');
Route::patch('/post/{post}/update', 'PostsController@update');
Route::delete('/post/{post}/delete', 'PostsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
