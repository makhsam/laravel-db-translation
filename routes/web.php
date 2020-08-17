<?php

/**
 * Client app routes
 */
$router->group(['namespace' => 'Client'], function () use ($router) {
    // Using The "App\Http\Controllers\Client" Namespace...

    $router->get('translations', 'FrontendController@translations');
    $router->get('assets', 'FrontendController@assets');
});

/**
 * Admin panel routes
 */
$router->group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'role:admin']], function () use ($router) {
    // Using The "App\Http\Controllers\Admin" Namespace...

    // Frontend locales & translations
    $router->get('locales', 'FrontendController@locales');
    $router->get('translation-groups', 'FrontendController@groups');
    $router->get('translations', 'FrontendController@index');
    $router->patch('translations', 'FrontendController@update');

    // Frontend assets: image, video, link, phone
    $router->put('upload/assets', 'FrontendAssetController@uploadFile');
    $router->get('assets', 'FrontendAssetController@index');
    $router->patch('assets', 'FrontendAssetController@update');
});
