<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','PageController@index' );
Route::get('login','LoginController@index');
Route::post('valido','LoginController@valido');
Route::get('logout','LoginController@logout');
