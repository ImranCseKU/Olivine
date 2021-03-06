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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('todos', 'TodoController')->middleware('auth');
Route::get('todos/{todo}/complete', 'TodoController@complete')->name('todos.complete')->middleware('auth');

Route::get('/verify', 'Auth\RegisterController@verifyUser')->name('verify.user');
// Route::get('verify/{token}', 'Auth\RegisterController@verifyUser')->name('verify.user');
