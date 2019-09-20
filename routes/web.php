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
Route::get('register','login\RegisterController@register');//前台注册视图
Route::post('register_do','login\RegisterController@register_do');//前台注册执行入库
Route::get('login','login\LoginController@login');//登陆视图
Route::post('login_do','login\LoginController@login_do');//登录验证

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
//崔健
Route::prefix('alipay')->group(function(){
	Route::any('pay','Alipay\AlipayController@pay'); //支付方法,测试先用any,杀青时改为post
	Route::get('return_url','Alipay\AlipayController@aliReturn');//同步通知
});


//订单部分
Route::get('order_show','Order\OrderController@order_show');  //订单展示
