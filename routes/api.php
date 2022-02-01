<?php

Route::namespace('Auth')->group(
function () {
    Route::post('login', 'AuthController');
});
Route::get('user', 'UserController@index');