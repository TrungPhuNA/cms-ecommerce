<?php

use Illuminate\Support\Facades\Route;
Route::get('','UserDashboardController@index')->name('get.dashboard');
Route::post('update','UserUpdateInfoController@updateInfo')->name('post.update_info');
Route::post('update/password','UserUpdateInfoController@updatePassword')->name('post.update_password');
Route::get('transaction','UserTransactionController@index')->name('get.transaction');
Route::group(['prefix' => 'payment'], function (){
    Route::get('','UserPaymentCardController@index')->name('get.payment_card');
    Route::get('create','UserPaymentCardController@create')->name('get.payment_card.create');
    Route::post('create','UserPaymentCardController@store');

    Route::get('update/{id}','UserPaymentCardController@edit')->name('get.payment_card.update');
    Route::post('update/{id}','UserPaymentCardController@update');
    Route::get('active-main/{id}','UserPaymentCardController@activeMain')->name('get.payment_card.active_main');

    Route::get('delete/{id}','UserPaymentCardController@delete')->name('get.payment_card.delete');
});
