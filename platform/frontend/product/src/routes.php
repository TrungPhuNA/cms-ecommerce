<?php

use Illuminate\Support\Facades\Route;

Route::get('','ProductHomeController@index')->name('get.product.home');
Route::get('{slug}','HubProductController@renderAction')->name('get.product.action');
