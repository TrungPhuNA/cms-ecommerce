<?php

use Illuminate\Support\Facades\Route;
Route::get('','UserDashboardController@index')->name('get.dashboard');
Route::post('update','UserUpdateInfoController@updateInfo')->name('post.update_info');
Route::get('transaction','UserTransactionController@index')->name('get.transaction');
