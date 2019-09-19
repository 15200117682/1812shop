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

Route::prefix('admin')->group(function(){
    Route::prefix('index')->group(function(){
        Route::get('index','AdminController@index'); //后台首页
        Route::get('login','LoginController@login');//后台登陆
    });
    Route::prefix('realName')->group(function(){
        Route::get('realNameRequest','RealNameController@realNameRequest'); //实名认证请求管理
        Route::post('realNameRequestDo','RealNameController@realNameRequestDo'); //实名认证处理
    });
});
