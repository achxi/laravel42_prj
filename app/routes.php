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

Route::get('/',array('as' => 'default.user.index', 'uses' => 'DefaultUserController@index'));
Route::get('show/{id}',array('as' => 'default.user.show', 'uses' => 'DefaultUserController@show'));
Route::get('type/{id}',array('as' => 'default.user.type', 'uses' => 'DefaultUserController@type'));
Route::post('search',array('as' => 'default.user.search', 'uses' => 'DefaultUserController@search'));
Route::get('login',array('as' => 'default.user.login', 'uses' => 'DefaultUserController@login'));
Route::post('postlogin',array('as' => 'default.user.postLogin', 'uses' => 'DefaultUserController@postLogin'));
 /*Route::group(array('before' => 'auth'), function(){
	Route::post('postlogin',array('as' => 'default.user.postLogin', 'uses' => 'DefaultUserController@postLogin'));
}); */