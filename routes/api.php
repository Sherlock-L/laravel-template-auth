<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//人机认证
//api 注册登录，以及认证  参考文档https://blog.csdn.net/gh254172840/article/details/79070575
Route::post('login', 'ApiUserAuthController@login');
Route::post('register', 'ApiUserAuthController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('get-details', 'ApiUserAuthController@getDetails');
});

//机器对机器的认证
Route::get('/test/index', 'TestController@index')->middleware('client');
