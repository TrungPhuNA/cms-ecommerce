<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'ecommerce', 'namespace' => 'Ecommerce'], function (){
    Route::group(['prefix' => 'category'], function(){
        Route::get('','CmsCategoryController@index')->name('cms_get.category.index');
        Route::get('create','CmsCategoryController@create')->name('cms_get.category.create');
        Route::post('create','CmsCategoryController@store');

        Route::get('update/{id}','CmsCategoryController@edit')->name('cms_get.category.edit');
        Route::post('update/{id}','CmsCategoryController@update');

        Route::get('delete/{id}','CmsCategoryController@delete')->name('cms_get.category.delete');
    });

    Route::group(['prefix' => 'attribute'], function(){
        Route::get('','CmsAttributeController@index')->name('cms_get.attribute.index');
        Route::get('create','CmsAttributeController@create')->name('cms_get.attribute.create');
        Route::post('create','CmsAttributeController@store');

        Route::get('update/{id}','CmsAttributeController@edit')->name('cms_get.attribute.edit');
        Route::post('update/{id}','CmsAttributeController@update');

        Route::get('delete/{id}','CmsAttributeController@delete')->name('cms_get.attribute.delete');
    });

    Route::group(['prefix' => 'product'], function(){
        Route::get('','CmsProductController@index')->name('cms_get.product.index');
        Route::get('create','CmsProductController@create')->name('cms_get.product.create');
        Route::post('create','CmsProductController@store');

        Route::get('update/{id}','CmsProductController@edit')->name('cms_get.product.edit');
        Route::post('update/{id}','CmsProductController@update');

        Route::get('delete/{id}','CmsProductController@delete')->name('cms_get.product.delete');
    });
});
