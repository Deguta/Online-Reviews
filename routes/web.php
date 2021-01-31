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


//ログイン機能
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//OnlineReviewsのルーティングと
// ログインしないとページに遷移できないようにmiddlewareを記述
Route::group(['prefix' => 'online_reviews','middleware' => 'auth'], function(){
  Route::get('index','OnlineReviewsController@index')->name('online_reviews.index'); // 病院一覧表
  Route::get('create','OnlineReviewsController@create')->name('online_reviews.create');//投稿ページの表示
  Route::post('store','OnlineReviewsController@store')->name('online_reviews.store');//投稿を保存するルーティング
  Route::get('show/{id}','OnlineReviewsController@show')->name('online_reviews.show');//投稿の詳細を確認するルーティング
});


// hospitalのルーティング
// Route::group(['prefix' => 'hospital'],function(){
//   Route::get('/hospitals/index','HospitalController@index')->name('hospital.list');
// });