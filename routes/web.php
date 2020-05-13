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
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sensors', 'SensorController@index')->name('sensors.index');
Route::post('/sensors/post','SensorController@post')->name('sensors.post');
Route::get('/users','UsersController@users')->name('users');
Route::get('/users/{user}','UsersController@user')->name('users.user');
Route::post('/users/psw','UsersController@psw')->name('users.psw');
