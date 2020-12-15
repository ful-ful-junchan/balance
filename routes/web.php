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
// 認証 - ログイン
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
// 認証 - 新規登録
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
// 認証 - ログアウト
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Auth::routes();

// サンプル
Route::get('/bootstrap/{name}', 'BoostController@index')->name('bootstrap');

// ルート
Route::get('/', 'HomeController@index')->name('home');

// ホーム
Route::get('/home', 'HomeController@index')->name('home');
