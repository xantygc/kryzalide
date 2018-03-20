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
Route::resource('/', 'HomeController');
Route::get('/leave', 'FellowsController@leave');
Route::post('/leave', 'FellowsController@leave');
Route::get('/fellow', 'FellowsController@index');
Route::post('/fellow', 'FellowsController@index');
Route::get('/like/{newsId}', 'HomeController@like');
Route::get('/unlike/{newsId}', 'HomeController@unlike');
Route::post('/relationship', 'RelationshipsController@addRelationship');
