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

Route::get('/style', function () {
    return view('style');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::controller('/admin', 'AdminController');
Route::controller('/api', 'ApiController');
Route::get('/ministries', 'HomeController@ministries');
Route::get('/ministries/worship-music', 'HomeController@ministriesWorshipMusic');
Route::get('/ministries/educational', 'HomeController@ministriesEducational');
Route::get('/ministries/children-youth', 'HomeController@ministriesChildrenYouth');
Route::get('/ministries/community-global', 'HomeController@ministriesCommunityGlobal');
Route::get('/ministries/congregational-life', 'HomeController@ministriesCongregationalLife');
Route::controller('/', 'HomeController');