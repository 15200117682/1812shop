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


// 董鑫
Route::get('register','login\RegisterController@register');//前台注册
Route::post('register_do','login\RegisterController@register_do');//前台注册执行入库
Route::get('login','login\LoginController@login');//登陆视图
Route::post('login_do','login\LoginController@login_do');//登录验证
Route::get('logout','login\LoginController@logout');//退出登录

// 登录中间件,有需要登录才能使用的功能,把路由往这里面放
Route::middleware(['loginMiddleware'])->group(function () {
    
});

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
	Route::any('pay','Alipay\AlipayController@pay'); //阿里支付方法,测试先用any,杀青时改为post
	Route::get('return_url','Alipay\AlipayController@aliReturn');//同步通知
});

//订单部分

Route::prefix('order_code')->group(function(){
    Route::get('order_show','Order\OrderController@order_show');   //订单展示
    Route::get('create','Order\OrderController@order_show');  //订单展示
});

