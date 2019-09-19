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

<<<<<<< HEAD
=======

Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> 290900ceacac0c6cc7fe526007d6b300a8c1e5a1

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','index\IndexController@index');//前台首页

<<<<<<< HEAD
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
=======
//崔健
Route::prefix('alipay')->group(function(){
	Route::get('pay','Alipay\AlipayController@pay'); //支付方法
	Route::get('return_url','Alipay\AlipayController@aliReturn');//同步通知
});
>>>>>>> 290900ceacac0c6cc7fe526007d6b300a8c1e5a1
