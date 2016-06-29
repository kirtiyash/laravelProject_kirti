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
Route::get('signme', 'HomeController@signme');
Route::post('test/auth','HomeController@postAuth');
Route::get('test/profile','HomeController@show');
Route::post('registered','HomeController@showRegister');
Route::get('logout','HomeController@logOut');



?>
  




