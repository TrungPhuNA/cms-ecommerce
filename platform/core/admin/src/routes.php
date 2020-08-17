<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'CmsAdminController@index')->name('cms_get.admin');

include __DIR__.'/routes/route_blog.php';
include __DIR__."/routes/route_ecommerce.php";
include __DIR__."/routes/route_acl.php";

Route::group(['prefix' => 'system', 'namespace' => 'System'], function () {
    Route::group(['prefix' => 'information'], function () {
        Route::get('', 'CmsInformationController@index')->name('cms_get.information.index');
    });
});
