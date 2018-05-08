<?php

/**
 * web.php
 * Routes file.
 * Created by: Marc-Eli Faldas
 * Last Modified: 5/8/2018
 */


/*
 * Functionality that only logged in members can look.
 */

Route::group(['middleware' => 'auth'], function () {
    Route::get('/verbs/search', 'VerbController@search');
    Route::get('/verbs/{id}', 'VerbController@show');
    Route::get('/edit', 'VerbController@edit');

    Route::get('/saved', 'VerbController@saved');
    Route::post('/add', 'VerbController@add');
    Route::delete('/delete', 'VerbController@delete');

    Route::put('/update', 'VerbController@update');

});

/*
 * Functionality that guests and members can see.
 */

Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

Auth::routes();


