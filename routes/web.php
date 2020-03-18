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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/','Article\ArticleController@index')->name('home.index');
Route::post('/','Article\ArticleController@search')->name('article.search');
Route::get('/{article}','Article\ArticleController@show')->name('article.show');



