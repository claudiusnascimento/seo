<?php

// get prefix from config
// get middlewares from config
// open route group and add prefix and middlewares


$package_middlewares = config('seo.middlewares', []);
$prefix = config('seo.route_prefix', '');

Route::group(['middleware' => $package_middlewares, 'prefix' => $prefix], function() {

    Route::post('seo/store', ['as' => 'seo.store','uses' => 'ClaudiusNascimento\Seo\SeoController@store']);

    Route::post('seo/{id}/edit', ['as' => 'seo.edit','uses' => 'ClaudiusNascimento\Seo\SeoController@update']);

    Route::post('seo/{id}/delete', ['as' => 'seo.delete','uses' => 'ClaudiusNascimento\Seo\SeoController@destroy']);

});
