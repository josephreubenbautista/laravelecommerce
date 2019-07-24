<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/items','ItemController');

Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@create');
Route::get('/cart/checkout', 'CartController@checkout');
