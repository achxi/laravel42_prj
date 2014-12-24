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
Route::pattern('id', '[1-9][0-9]?');

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

Route::get('page_404',array('as' => 'default.user.page_404', 'uses' => 'DefaultUserController@page_404'));
Route::get('faq',array('as' => 'default.user.faq', 'uses' => 'DefaultUserController@faq'));
Route::get('career',array('as' => 'default.user.career', 'uses' => 'DefaultUserController@career'));
Route::get('company_info',array('as' => 'default.user.company_info', 'uses' => 'DefaultUserController@company_info'));

Route::get('price_range/',array('as' => 'default.user.price_range', 'uses' => 'DefaultUserController@price_range'));

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function()
{
    Route::get('/',array('as' => 'admin.index', 'uses' => 'AdminDefaultController@index'));
    Route::get('products',array('as' => 'admin.products', 'uses' => 'AdminDefaultController@products'));
    Route::get('product_destroy/{id}',array('as' => 'admin.product_destroy', 'uses' => 'AdminDefaultController@product_destroy'));
    Route::get('product_add',array('as' => 'admin.product_add', 'uses' => 'AdminDefaultController@product_add'));

    Route::get('members',array('as' => 'admin.members', 'uses' => 'AdminDefaultController@members'));
    Route::get('member_new',array('as' => 'admin.member_new', 'uses' => 'AdminDefaultController@member_new'));
    Route::post('member_add',array('as' => 'admin.member_add', 'uses' => 'AdminDefaultController@member_add'));
    Route::get('member_destroy/{id}',array('as' => 'admin.member_destroy', 'uses' => 'AdminDefaultController@member_destroy'));
    Route::get('member_edit_form/{id}',array('as' => 'admin.member_edit_form', 'uses' => 'AdminDefaultController@member_edit_form'));
    Route::post('member_edit',array('as' => 'admin.member_edit', 'uses' => 'AdminDefaultController@member_edit'));

    Route::get('products_type',array('as' => 'admin.products_type', 'uses' => 'AdminDefaultController@products_type'));
    Route::get('type_destroy/{id}',array('as' => 'admin.type_destroy', 'uses' => 'AdminDefaultController@type_destroy'));
    Route::get('type_new',array('as' => 'admin.type_new', 'uses' => 'AdminDefaultController@type_new'));
    Route::post('type_add',array('as' => 'admin.type_add', 'uses' => 'AdminDefaultController@type_add'));
    Route::get('type_edit_form/{id}',array('as' => 'admin.type_edit_form', 'uses' => 'AdminDefaultController@type_edit_form'));
    Route::post('type_edit',array('as' => 'admin.type_edit', 'uses' => 'AdminDefaultController@type_edit'));

    Route::get('products_kind',array('as' => 'admin.products_kind', 'uses' => 'AdminDefaultController@products_kind'));
    Route::get('kind_destroy/{id}',array('as' => 'admin.kind_destroy', 'uses' => 'AdminDefaultController@kind_destroy'));
    Route::get('kind_new',array('as' => 'admin.kind_new', 'uses' => 'AdminDefaultController@kind_new'));
    Route::post('kind_add',array('as' => 'admin.kind_add', 'uses' => 'AdminDefaultController@kind_add'));
    Route::get('kind_edit_form/{id}',array('as' => 'admin.kind_edit_form', 'uses' => 'AdminDefaultController@kind_edit_form'));
    Route::post('kind_edit',array('as' => 'admin.kind_edit', 'uses' => 'AdminDefaultController@kind_edit'));

    Route::get('bill',array('as' => 'admin.bill', 'uses' => 'AdminDefaultController@bill'));
    Route::get('bill_destroy/{id}',array('as' => 'admin.bill_destroy', 'uses' => 'AdminDefaultController@bill_destroy'));
    Route::get('bill_new',array('as' => 'admin.bill_new', 'uses' => 'AdminDefaultController@bill_new'));
    Route::post('bill_add',array('as' => 'admin.bill_add', 'uses' => 'AdminDefaultController@bill_add'));
    Route::get('bill_edit_form/{id}',array('as' => 'admin.bill_edit_form', 'uses' => 'AdminDefaultController@bill_edit_form'));
    Route::post('bill_edit',array('as' => 'admin.bill_edit', 'uses' => 'AdminDefaultController@bill_edit'));


});


// 
// 
// Route::get('search_ajax',array('as' => 'default.user.search_ajax', 'uses' => 'DefaultUserController@search_ajax'));
