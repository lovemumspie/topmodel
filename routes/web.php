<?php
Route::get('/','BaseController@getIndex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('{url}','MaintextController@getindex');// always in the end