<?php

Route::get('/', 'WelcomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::controllers([
        'auth' => 'AuthController',
        //'password' => 'PasswordController',
    ]);

    Route::get('top', 'TopController@index');
});
