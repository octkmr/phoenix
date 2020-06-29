<?php

use Illuminate\Support\Facades\Route;

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

//ログイン認証群
Auth::routes();

//ホーム画面
Route::get('/', 'HomeController@index')->name('root');
Route::get('/home', 'HomeController@index')->name('home');

// //ログイン画面
// Route::get('/login', function () {
//     return view('Login.index');
// });

// //tweet一覧画面
// Route::get('/tweetlist', function () {
//     return view('TweetList.index');
// });

// //tweet詳細画面
// Route::get('/tweetdetails', function () {
//     return view('TweetDetails.index');
// });

// //mypage画面
// Route::get('/mypage', function () {
//     return view('MyPage.index');
// });
