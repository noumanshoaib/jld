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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/article','articleController@article_view');

Route::get('/delete-article/{id}','articleController@delete_article');

Route::get('/create-article','articleController@create_article_view');

Route::post('/create-article','articleController@create_article');
Route::get('/update-article/{id}','articleController@update_article_view');

Route::post('/update-article/{id}','articleController@update_article_post');