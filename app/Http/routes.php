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

Route::get('/',         ['as' => 'home',      'uses' => 'PagesController@index',     'middleware' => 'guest']);
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index', 'middleware' => 'auth']);

Route::get('login',  ['as' => 'login',         'uses' => 'AuthController@login',   'middleware' => 'guest']);
Route::post('login', ['as' => 'login.attempt', 'uses' => 'AuthController@attempt', 'middleware' => 'guest']);
Route::get('logout', ['as' => 'logout',        'uses' => 'AuthController@logout']);

Route::get('auth/social/{provider}',          ['as' => 'auth.social',          'uses' => 'AuthController@redirectToProvider',     'middleware' => 'social.callback']);
Route::get('auth/social/{provider}/callback', ['as' => 'auth.social.callback', 'uses' => 'AuthController@handleProviderCallback', 'middleware' => 'social.callback']);
