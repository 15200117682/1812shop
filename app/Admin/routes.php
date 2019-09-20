<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('/users', UsersController::class);          //用户管理

    $router->resource('/cate', CateController::class);          //分类管理

    $router->resource('/brand', BrandController::class);  //品牌管理
});
