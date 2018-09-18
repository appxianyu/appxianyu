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

/*
*后台
 */

//登陆操作
Route::post('/admin/login','AdminController@dologin');

//退出登入
Route::get('/admin/logout','AdminController@logout');

/*
*后台
 */
//登陆页面
Route::get('/admin/login','AdminController@login');

//登陆操作
Route::post('/admin/login','AdminController@dologin');

//退出登入
Route::get('/admin/logout','AdminController@logout');


Route::group(['middleware'=>'admin'],function(){
	//用户设置
	Route::resource('user','UserController');

	//消息管理
	Route::resource('content','ContentController');

	//活动管理
	Route::resource('huodong','HuoDongController');

	//大类管理
	Route::resource('dcate','DcateController');

	//小类管理
	Route::resource('xcate','XcateController');

	//小小类管理
	Route::resource('xxcate','XxcateController');

	//广告管理
	Route::resource('guanggao','GgController');

	//发布商品管理
	Route::resource('shangpin','SpController');

	//拍卖管理
	Route::resource('paimai','PmController');

	//后台首页
	Route::get('/admin','AdminController@index');

	//举报后台显示
	Route::get('/jubao','AdminController@inde');

	//网站配置
	Route::resource('/wzpz','WzPeiZhiController');

	//友链管理
	Route::resource('youlian','YoulianController');

	//商品标签
	Route::resource('tag','TagController');

	//评论管理
	Route::resource('pinglun','PlController');

	//后台购物车
	Route::get('/admin/gouwu','AdminController@gouwu');

	//合作伙伴
	Route::resource('huoban','HbController');

	//关于我们
	Route::get('/admin/gy','HomeController@gy');

	//关于我们修改
	Route::post('/admin/gy','HomeController@xiu');

	//logo管理
	Route::resource('logo','LogoController');

	//订单管理
	Route::resource('dingdan','DingController');
	//收货地址管理
	Route::resource('huo','HuoController');

	//收藏管理
	Route::resource('shoucang','ScController');
});


/**
 * 前台
 */
Route::get('/','HomeController@index');

Route::group(['middleware'=>'login'],function(){
	

});

//前台购物车
Route::get('/car','CarController@car');

//购物车删除
Route::get('/qrsc','CarController@qrsc');