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

// ルート
Route::get('/', 'HomeController@index')->name('home');

// ホーム
Route::get('/home', 'HomeController@index')->name('home');

/***************************************
 * メニュー
 ***************************************/
Route::prefix('menu')->group(function () {
    Route::get('/List', 'Menu\MenuController@menuList')->name('menu_list');
    Route::get('/Add', 'Menu\MenuController@addShow')->name('menu_addShow');
    Route::post('/Add', 'Menu\MenuController@add')->name('menu_add');
    Route::get('/Edit/{menuId}', 'Menu\MenuController@editShow')->name('menu_editShow');
    Route::post('/Edit/{menuId}', 'Menu\MenuController@edit')->name('menu_edit');
    Route::get('/Delete', 'Menu\MenuController@delShow')->name('menu_delShow');
    Route::post('/Delete', 'Menu\MenuController@delete')->name('menu_del');
});
