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
// 認証
Auth::routes();

// サンプル
// Route::get('/bootstrap/{name}', 'BoostController@index')->name('bootstrap');

// ルート
Route::get('/', 'HomeController@index')->name('home');

// ホーム
Route::get('/home', 'HomeController@index')->name('home');
