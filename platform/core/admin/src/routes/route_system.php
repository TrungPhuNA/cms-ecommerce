<?php
use Illuminate\Support\Facades\Route;

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

    Route::group(['prefix' => 'email'], function () {
        Route::get('', 'CmsSettingEmailController@index')->name('cms_get.email.index');
        Route::post('create', 'CmsSettingEmailController@store')->name('cms_get.email.store');
    });

    Route::group(['prefix' => 'text-link'], function () {
        Route::get('', 'CmsTextLinkController@index')->name('cms_get.text_link.index');
        Route::get('create', 'CmsTextLinkController@create')->name('cms_get.text_link.create');
        Route::post('create', 'CmsTextLinkController@store');
        Route::get('update/{id}', 'CmsTextLinkController@edit')->name('cms_get.text_link.edit');
        Route::post('update/{id}', 'CmsTextLinkController@update');
        Route::get('delete/{id}', 'CmsTextLinkController@delete')->name('cms_get.text_link.delete');
    });
});
