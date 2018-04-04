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

//Route::get('/articles/aa', 'ArticlesController@create');
//
//Route::get('/articles/{id}', 'ArticlesController@show');
//
//Route::get('/articles/asdf', 'ArticlesController@create');


Route::group(['prefix' => 'articles'], function () {
    Route::get('/', 'ArticlesController@index');
    Route::get('/show/{id}', 'ArticlesController@show');
    Route::get('/create', 'ArticlesController@create');
    Route::post('/', 'ArticlesController@store');
});