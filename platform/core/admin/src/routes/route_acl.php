<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'acl', 'namespace' => 'Acl'], function (){
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
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/','AclProfileController@index')->name('cms_get.admin.profile');
        Route::post('/update/{id}','AclProfileController@updateProfile')->name('cms_get.admin.profile.update');
    });
});
