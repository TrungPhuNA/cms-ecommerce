<?php

use Illuminate\Support\Facades\Route;

Route::get('{slug}','HubProductController@renderAction')->name('get.product.action');
