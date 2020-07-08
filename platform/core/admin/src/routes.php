<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'CmsAdminController@index')->name('cms_get.admin');

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
});

Route::group(['prefix' => 'acl','namespace' => 'Acl'], function (){
    Route::group(['prefix' => 'permission'], function () {
        Route::get('/','AclPermissionController@index')->name('cms_get.permission.list');
        Route::get('create','AclPermissionController@create')->name('cms_get.permission.create');
        Route::post('create','AclPermissionController@store');
        Route::get('update/{id}','AclPermissionController@edit')->name('cms_get.permission.update');
        Route::post('update/{id}','AclPermissionController@update');
        Route::get('delete/{id}','AclPermissionController@delete')->name('cms_get.permission.delete');
    });

    Route::group(['prefix' => 'role'], function () {
        Route::get('/','AclRoleController@index')->name('cms_get.role.list');
        Route::get('create','AclRoleController@create')->name('cms_get.role.create');
        Route::post('create','AclRoleController@store');
        Route::get('update/{id}','AclRoleController@edit')->name('cms_get.role.update');
        Route::post('update/{id}','AclRoleController@update');
        Route::get('delete/{id}','AclRoleController@delete')->name('cms_get.role.delete');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/','AclAdminController@index')->name('cms_get.admin.list');
        Route::get('create','AclAdminController@create')->name('cms_get.admin.create');
        Route::post('create','AclAdminController@store');
        Route::get('update/{id}','AclAdminController@edit')->name('cms_get.admin.update');
        Route::post('update/{id}','AclAdminController@update');
        Route::get('delete/{id}','AclAdminController@delete')->name('cms_get.admin.delete');
        Route::get('status/{id}','AclAdminController@changeStatus')->name('cms_get.admin.status');
    });
});
