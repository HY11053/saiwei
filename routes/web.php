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
Auth::routes();
Route::get('/', 'Frontend\IndexController@index')->name('index');
Route::get('{path}', 'Frontend\ListArticleController@CategoryLists')->where('path','[a-zA-Z0-9/_]+')->name('newslist');
Route::get('html/xinwenzhongxin/jituanxinwen/1014.html', 'Frontend\ArticleController@Article');
Route::get('phonecomplate', 'Frontend\PhoneController@phoneComplate');

