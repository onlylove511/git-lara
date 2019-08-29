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

//Route::get('/', function () {
//    return view('PagesController@index');
//});

Route::get('/','PagesController@index');

Route::get('/articles', [
    'as'    => 'article.index',
    'uses'  =>  'ArticlesController@index'
]);

//Tạo 1 trang riêng
Route::get('/articles/abc',[
    'as'    =>  'article.abc',
    'uses'  =>  'ArticlesController@abc'
]);

Route::get('/articles/create',[
    'as'    =>  'article.create',
    'uses'  =>  'ArticlesController@create'
]);

//Vào chi tiết bài viết
Route::get('/articles/{id}',[
    'as'      => 'article.show',
    'uses'    => 'ArticlesController@show'
]);

Route::post('/articles',[
    'as'    => 'article.store',
    'uses'  =>  'ArticlesController@store'
]);