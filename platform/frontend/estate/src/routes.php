<?php

use Illuminate\Support\Facades\Route;
Route::get('','EstateDashboardController@index')->name('get.estate.dashboard');
Route::get('create','EstateController@create')->name('get.estate.create');
Route::post('create','EstateController@store');
Route::get('update','EstateController@edit')->name('get.estate.update');
Route::post('create','EstateController@update');
