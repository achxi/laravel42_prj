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
Route::get('logout',array('as' => 'default.user.logout', 'uses' => 'DefaultUserController@logout'));

Route::get('cart',array('as' => 'default.user.cart', 'uses' => 'DefaultUserController@cart'));
Route::post('cart_add',array('as' => 'default.user.cart_add', 'uses' => 'DefaultUserController@cart_add'));
Route::get('cart_destroy/{id}',array('as' => 'default.user.cart_destroy', 'uses' => 'DefaultUserController@cart_destroy'));
Route::post('cart_update',array('as' => 'default.user.cart_update', 'uses' => 'DefaultUserController@cart_update'));

Route::get('wishlist/{id}',array('as' => 'default.user.wishlist_add', 'uses' => 'DefaultUserController@wishlist_add'));
Route::get('wishlist',array('as' => 'default.user.wishlist', 'uses' => 'DefaultUserController@wishlist'));
Route::get('wishlist_remove/{id}',array('as' => 'default.user.wishlist_remove', 'uses' => 'DefaultUserController@wishlist_remove'));

Route::get('compare/{id}',array('as' => 'default.user.compare_add', 'uses' => 'DefaultUserController@compare_add'));
Route::get('compare',array('as' => 'default.user.compare', 'uses' => 'DefaultUserController@compare'));
Route::get('compare_remove/{id}',array('as' => 'default.user.compare_remove', 'uses' => 'DefaultUserController@compare_remove'));

Route::get('contact',array('as' => 'default.user.contact', 'uses' => 'DefaultUserController@contact'));

Route::get('checkout',array('as' => 'default.user.checkout', 'uses' => 'DefaultUserController@checkout'));
Route::post('postcheckout',array('as' => 'default.user.postcheckout', 'uses' => 'DefaultUserController@postcheckout'));

Route::get('register',array('as' => 'default.user.register', 'uses' => 'DefaultUserController@register'));
Route::post('postregister',array('as' => 'default.user.postregister', 'uses' => 'DefaultUserController@postregister'));

Route::get('account', array('before' => 'auth','as' => 'default.user.account', 'uses' => 'DefaultUserController@account'));
Route::post('postaccount',array('as' => 'default.user.postaccount', 'uses' => 'DefaultUserController@postaccount'));

// Route::get('search_ajax',array('as' => 'default.user.search_ajax', 'uses' => 'DefaultUserController@search_ajax'));
