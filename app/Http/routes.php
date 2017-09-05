<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Formulario de inicio de sesión */
Route::get('login', [
     'uses' => 'Auth\AuthController@index',
     'as' => 'login_form_path'
]);
Route::post('login', [
     'uses' => 'Auth\AuthController@login',
     'as' => 'login_path'
]);
Route::get('logout', [
     'uses' => 'Auth\AuthController@logout',
     'as' => 'logout_path'
]);

Route::group(['middleware' => 'auth'], function(){
    /* Página principal */
    Route::get('/', [
        'uses' => 'IndexController@index',
        'as' => 'index_path'
    ]);
});