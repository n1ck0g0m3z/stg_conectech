<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/redis',function(){
   print_r(app()->make('redis')); //Redisの確認
})->middleware('admin');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('profile/edit','ProfileController@edit');
Route::resource('profile', 'ProfileController');

Route::get('blog','ArticleController@index');
Route::get('/article/{id}', 'ArticleController@showList');
Route::get('/article/detail/{id}', 'ArticleController@showDetail');
Route::post('/article', 'ArticleController@store');
Route::post('/article/comment', 'ArticleController@commentStore');
Route::match(['put','patch'],'/article/{id}', 'ArticleController@update');
Route::delete('/article/{id}', 'ArticleController@destroy');
Route::delete('/article/comment/{id}', 'ArticleController@commentDestroy');

Route::get('/home', 'ProfileController@testImg');

Route::get('/timeline', 'HomeController@timeline');
