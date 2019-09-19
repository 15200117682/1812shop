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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','index\IndexController@index');//前台首页

Route::prefix('index')->group(function(){
<<<<<<< HEAD
	Route::get('register','login\RegisterController@register');//前台注册
=======
    Route::get('register','login\RegisterController@register');//前台注册
    Route::post('register_do','login\RegisterController@register_do');//前台注册执行入库
>>>>>>> login
});