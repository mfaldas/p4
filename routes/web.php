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

Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

Route::get('/verbs/search', 'VerbController@search');
Route::get('/verbs/{id}', 'VerbController@show');
Route::get('/edit', 'VerbController@edit');

Route::get('/saved', 'VerbController@saved');
Route::post('/add', 'VerbController@add');
Route::get('/delete', 'VerbController@delete');

Route::post('/update', 'VerbController@update');