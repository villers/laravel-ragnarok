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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/staff', 'HomeController@staff')->name('staff');
Route::get('/onlines', 'HomeController@online')->name('onlines');
Route::get('/emblem/{id}', 'HomeController@emblem')->name('emblem');

Route::middleware(['auth'])->prefix('user')->group(function() {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('password', 'UserController@changePassword')->name('user.password');
    Route::post('password', 'UserController@postChangePassword')->name('user.post.password');
});

