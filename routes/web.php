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
    return view('user.index');
});



Route::get('/users/create','UserController@create');
Route::get('users','UserController@getUsers');
Route::post('/store','UserController@store');
//    ->name('user.store');
