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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

});