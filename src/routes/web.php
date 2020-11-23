<?php
use Illuminate\Http\Request;

Route::group(['namespace' => 'Hexasol\Contact\Http\Controllers'],function(){
	Route::get('/','ContactController@index')->name('contact');
	Route::post('contact','ContactController@store')->name('store.contact');
});