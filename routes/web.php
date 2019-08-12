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
//首页
Route::get('/','HomeController@index')->name('home');
//类别下的文章
Route::get('type/{type}','ArticletypeController@index')->name('type');
//文章内容
Route::get('article/{article}','ArticleController@show')->name('article');
//文章点赞
Route::put('praise','ArticleController@praise')->name('praise');
//创建文章
Route::get('create/article','ArticleController@create_show')->name('create.article');
//处理请求
Route::post('create/article','ArticleController@create')->name('create.article');
<<<<<<< HEAD
//密码生成器
Route::get('password','PassWordController@index')->name('password');
//获取当前所在城市名称
Route::get('city','CityController@index')->name('city');
=======
>>>>>>> parent of 1dadc94... 统一
