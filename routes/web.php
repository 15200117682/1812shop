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


Route::prefix('cart')->group(function () {
    Route::get('cart_list','Cart\CartController@cart_list');//购物车页面
});

//崔健
Route::prefix('alipay')->group(function(){
	Route::get('pay','Alipay\AlipayController@pay'); //支付方法
	Route::get('return_url','Alipay\AlipayController@aliReturn');//同步通知
});

