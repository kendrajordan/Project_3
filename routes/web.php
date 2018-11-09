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

Auth::routes();

Route::get('/','PostsController@index')->middleware('auth');
Route::post('/','PostsController@store')->middleware('auth');
Route::put('/{post}','PostsController@edit')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/profile/create','PostsController@create')->middleware('auth');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');
Route::delete('/{post}','PostsController@delete')->middleware('auth');
