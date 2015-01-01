<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@index'
]);

/**
 * User
 */
Route::get('store', [
    'as' => 'pages.store',
    'uses' => 'PagesController@create'
]);

Route::post('store', [
    'as' => 'pages.store',
    'uses' => 'PagesController@store'
]);


