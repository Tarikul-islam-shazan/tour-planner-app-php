<?php


Route::get('/', 'PagesController@index');
Route::get('/admin','PagesController@admin');

Route::get('/hotel','HotelController@index');
Route::post('/hotel/create','HotelController@store');
Route::get('/hotel/show','HotelController@show');
Route::get('/hotel/edit/{id}','HotelController@edit');
Route::post('/hotel/edit/{id}','HotelController@update');
Route::get('/hotel/delete/{id}','HotelController@delete');

Route::get('/booking', 'BookingController@index');
Route::post('/booking/create','BookingController@create');

Route::get('/login','SessionController@index')->name('login');
Route::post('/login','SessionController@create');
Route::get('/logout','SessionController@destroy');
