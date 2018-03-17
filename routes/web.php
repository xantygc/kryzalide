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
Route::get('/fellow', 'FellowsController@index');
Route::post('/fellow', 'FellowsController@index');
Route::resource('/', 'HomeController');
Route::GET('/like/{newsId}', 'HomeController@like');
Route::GET('/unlike/{newsId}', 'HomeController@unlike');

