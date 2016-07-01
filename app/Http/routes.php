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

Route::get('signup','HomeController@signupform');
Route::post('test/auth','HomeController@postAuth');
Route::get('test/profile','HomeController@show');
Route::get('test/friends','HomeController@showAll');
Route::get('test/manipulate','HomeController@manipulate');
Route::get('test/update','HomeController@edit');
Route::post('edit','HomeController@update');
Route::post('registered','HomeController@showRegister');
Route::post('delete', 'HomeController@delete');
Route::get('test/logout','HomeController@logOut');



?>
  




