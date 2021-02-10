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

use App\Models\OnlineReviews;

Route::get('/', function () {
    return view('welcome');
});


//ログイン機能
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//OnlineReviewsのルーティングと
// ログインしないとページに遷移できないようにmiddlewareを記述
Route::group(['prefix' => 'online_reviews','middleware' => 'auth'], function(){
  Route::get('index','OnlineReviewsController@index')->name('online_reviews.index'); // 投稿一覧表
  Route::get('create','OnlineReviewsController@create')->name('online_reviews.create');//投稿ページの表示
  Route::post('store','OnlineReviewsController@store')->name('online_reviews.store');//投稿を保存するルーティング
  Route::get('show/{id}', 'OnlineReviewsController@show')->name('online_reviews.show');
});


//shopのルーティング
Route::group(['prefix' => 'shop'],function(){
  Route::get('index','ShopController@index')->name('shop.list');
  Route::get('show','ShopController@show')->name('shop.show');//お店の詳細を確認する

});