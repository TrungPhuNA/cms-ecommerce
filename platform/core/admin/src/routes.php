<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'CmsAdminController@index')->name('cms_get.admin');

include __DIR__.'/routes/route_blog.php';
include __DIR__."/routes/route_ecommerce.php";
include __DIR__."/routes/route_acl.php";
include __DIR__."/routes/route_marketing.php";
include __DIR__."/routes/route_system.php";
//Route::group(['prefix' => 'cms-admin/laravel-filemanager'], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});
Route::group(['prefix' => 'ajax','namespace' => 'Ajax'], function (){
    Route::post('upload-images','CmsUploadImagesController@uploads')->name('cms_post_ajax.upload_images');
});


