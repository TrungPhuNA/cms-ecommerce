<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'blog', 'namespace' => 'Blog'], function (){
    Route::group(['prefix' => 'menu'], function(){
        Route::get('','CmsMenuController@index')->name('cms_get.menu.index');
        Route::get('create','CmsMenuController@create')->name('cms_get.menu.create');
        Route::post('create','CmsMenuController@store');

        Route::get('update/{id}','CmsMenuController@edit')->name('cms_get.menu.edit');
        Route::post('update/{id}','CmsMenuController@update');

        Route::get('delete/{id}','CmsMenuController@delete')->name('cms_get.menu.delete');
    });

    Route::group(['prefix' => 'tag'], function(){
        Route::get('','CmsTagController@index')->name('cms_get.tag.index');
        Route::get('create','CmsTagController@create')->name('cms_get.tag.create');
        Route::post('create','CmsTagController@store');

        Route::get('update/{id}','CmsTagController@edit')->name('cms_get.tag.edit');
        Route::post('update/{id}','CmsTagController@update');

        Route::get('delete/{id}','CmsTagController@delete')->name('cms_get.tag.delete');
    });
    Route::group(['prefix' => 'article'], function(){
        Route::get('','CmsArticleController@index')->name('cms_get.article.index');
        Route::get('create','CmsArticleController@create')->name('cms_get.article.create');
        Route::post('create','CmsArticleController@store');

        Route::get('update/{id}','CmsArticleController@edit')->name('cms_get.article.edit');
        Route::post('update/{id}','CmsArticleController@update');

        Route::get('delete/{id}','CmsArticleController@delete')->name('cms_get.article.delete');
    });
});
