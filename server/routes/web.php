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
Route::get('/', 'GeneralController@home');

Route::resource('shops', 'ShopController');

Route::resource('users', 'UserController');

// 以下の処理により、
// 会員登録画面は /register
// ログイン画面は /login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
