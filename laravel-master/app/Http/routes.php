<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index/index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

});
//显示主页面
Route::get('index','IndexController@index');
//添加房源
Route::get('register','IndexController@register');

Route::get('basicinfoone','BasicinfoController@basicinfoone');
Route::post('basicinfotwo','BasicinfoController@basicinfotwo');

Route::post('basicinfofour','BasicinfoController@basicinfofour');
Route::post('basicinfofive','BasicinfoController@basicinfofive');
Route::post('basicinfosix','BasicinfoController@basicinfosix');
Route::post('edit_address','BasicinfoController@edit_address');
Route::post('basicinfothree','BasicinfoController@basicinfothree');
Route::post('fun_code','BasicinfoController@fun_code');
//显示登录
Route::get('login','IndexController@login');
//页面详情
Route::get('detail_list','DetailController@detail_list');
Route::get('detail_show','DetailController@detail_show');
Route::get('collect','DetailController@Collect');
//页面注册
Route::get('register','IndexController@register');
Route::post('add_users','IndexController@add_users');
Route::get('landlord_list','IndexController@landlord_list');
//验证登陆
Route::any('yan_login','IndexController@yan_login');
Route::any('bton_click','IndexController@bton_click');
Route::get('my_tujia','IndexController@my_tujia');
Route::post('up_users','IndexController@up_users');
Route::post('up_users','IndexController@up_users');
Route::post('up_pwd','IndexController@up_pwd');
//头像上传
Route::post('up_tou','IndexController@up_tou');
//订单详情
Route::get('order_list','OrderController@order_list');
Route::post('order_show','OrderController@order_show');


