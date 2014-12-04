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
Route::get('cart',array('as' => 'default.user.cart', 'uses' => 'DefaultUserController@cart'));
Route::post('cart_add',array('as' => 'default.user.cart_add', 'uses' => 'DefaultUserController@cart_add'));
Route::get('cart_destroy/{id}',array('as' => 'default.user.cart_destroy', 'uses' => 'DefaultUserController@cart_destroy'));
Route::post('cart_update',array('as' => 'default.user.cart_update', 'uses' => 'DefaultUserController@cart_update'));
Route::get('wishlist/{id}',array('as' => 'default.user.wishlist_add', 'uses' => 'DefaultUserController@wishlist_add'));
Route::get('wishlist',array('as' => 'default.user.wishlist', 'uses' => 'DefaultUserController@wishlist'));
Route::get('wishlist_remove/{id}',array('as' => 'default.user.wishlist_remove', 'uses' => 'DefaultUserController@wishlist_remove'));

 /*Route::group(array('before' => 'auth'), function(){
	Route::post('postlogin',array('as' => 'default.user.postLogin', 'uses' => 'DefaultUserController@postLogin'));
}); */