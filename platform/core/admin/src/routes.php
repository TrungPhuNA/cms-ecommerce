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
    Route::group(['prefix' => 'page-static'], function () {
        Route::get('', 'CmsPageStaticController@index')->name('cms_get.page_static.index');
        Route::get('create', 'CmsPageStaticController@create')->name('cms_get.page_static.create');
        Route::post('create', 'CmsPageStaticController@store');
        Route::get('update/{id}', 'CmsPageStaticController@edit')->name('cms_get.page_static.edit');
        Route::post('update/{id}', 'CmsPageStaticController@update');
        Route::get('delete/{id}', 'CmsPageStaticController@delete')->name('cms_get.page_static.delete');
    });
});
