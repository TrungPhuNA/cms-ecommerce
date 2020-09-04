<?php
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'marketing', 'namespace' => 'Marketing'], function () {
    Route::group(['prefix' => 'template'], function () {
        Route::get('', 'CmsTemplateEmailController@index')->name('cms_get.template_email.index');
        Route::get('create', 'CmsTemplateEmailController@create')->name('cms_get.template_email.create');
        Route::post('create', 'CmsTemplateEmailController@store');
        Route::get('update/{id}', 'CmsTemplateEmailController@edit')->name('cms_get.template_email.update');
        Route::post('update/{id}', 'CmsTemplateEmailController@update');

        Route::get('delete/{id}', 'CmsTemplateEmailController@delete')->name('cms_get.template_email.delete');
    });

    Route::group(['prefix' => 'send-email'], function () {
        Route::get('', 'CmsTemplateEmailSendUserController@index')->name('cms_get.send_email.index');
        Route::get('create', 'CmsTemplateEmailSendUserController@create')->name('cms_get.send_email.create');
        Route::post('create', 'CmsTemplateEmailSendUserController@store');
        Route::get('update/{id}', 'CmsTemplateEmailSendUserController@edit')->name('cms_get.send_email.update');
        Route::post('update/{id}', 'CmsTemplateEmailSendUserController@update');
        Route::get('delete/{id}', 'CmsTemplateEmailSendUserController@delete')->name('cms_get.send_email.delete');
        Route::group(['prefix' => 'ajax'], function (){
            Route::get('list-user/{id}','CmsTemplateEmailSendUserController@getListUserByIdSendEmail')
                ->name('cms_ajax_get.users_send_email');
        });
    });
});
