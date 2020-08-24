<?php

use Illuminate\Support\Facades\Route;

Route::get('{slug}','HubBlogController@renderAction')->name('get.action.blog');
