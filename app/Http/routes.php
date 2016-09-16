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

Route::get('/', ['as' => 'home','uses' => 'HomeController@index',]);
Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index',]);
Route::get('about_me', ['as' => 'about_me', 'uses' => 'ProfilesController@home',]);
Route::get('services', ['as' => 'services', 'uses' => 'ServicesController@home',]);
Route::get('portfolio', ['as' => 'portfolio', 'uses' => 'PortfolioController@index',]);
/*******************************LOGIN******************************************/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', [ 'as' => 'auth/login','uses' => 'Auth\AuthController@postLogin',]);
Route::get('public/logout', ['as' => 'auth/logout','uses' => 'Auth\AuthController@getLogout',]);
Route::get('public/registro', ['as' => 'auth/register','uses' => 'Auth\AuthController@getRegister',]);
Route::post('public/registro', ['as' => 'auth/register','uses' => 'Auth\AuthController@postRegister',]);
Route::get('public/password', [ 'as' => 'password/email', 'uses' => 'Auth\PasswordController@getEmail',]);
Route::post('public/password', ['as' => 'password/postEmail','uses' => 'Auth\PasswordController@postEmail']);
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', ['as' => 'password/postReset', 'uses' =>  'Auth\PasswordController@postReset']);
//Socialite
Route::get('login/{provider}',['uses' => 'Auth\AuthController@login','as'   => 'auth.getSocialAuth']);
/*******************************FIN LOGIN******************************************/

/*******************************ADMINISTRADOR******************************************/
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin'], 'namespace' =>'Admin'], function () {

    Route::resource('users','UsersController');

});
/*******************************FIN DE ADMINISTRADOR******************************************/