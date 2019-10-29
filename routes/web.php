<?php
Route::get('/','BaseController@getIndex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/models','EmployeeController@showUsersCards');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('home','HomeController@postIndex');

Route::get('{url}','MaintextController@getindex');// always in the end
 