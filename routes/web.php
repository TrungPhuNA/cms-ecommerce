<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'authentication','namespace' => 'AuthAdmin'], function() {
    Route::get('login','AdminLoginController@getLoginAdmin')->name('cms_get.login');
    Route::post('login','AdminLoginController@postLoginAdmin');

    Route::get('logout','AdminLoginController@getLogoutAdmin')->name('cms_get.logout');
});

Route::get('/','HomeController@index')->name('get.home');

Route::group(['prefix' => 'locale','namespace' => 'Language'], function(){
    Route::get('{language}','LanguageController@renderLanguage')->name('get.language');
});

Route::group(['prefix' => 'ajax','namespace' => 'Ajax'], function(){
    Route::post('save-email','AjaxSaveEmailController@saveEmail')
        ->name('ajax_post.email');

    Route::post('next-tab','AjaxHomeController@loadActiveByMenu')
        ->name('ajax_post.next_tab');
});
