<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/login', 'LoginController@showFormLogin')->name('showLogin');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/admin', 'LoginController@admin')->name('admin');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::prefix('users')->group(function () {
    Route::get('/index', 'UserController@index')->name('user.index');
    Route::get('/delete/{id}', 'UserController@destroy')->name('user.destroy');
    Route::post('/edit/{id}', 'UserController@update')->name('user.edit');
    Route::post('/editUser/{id}', 'UserController@updateUser')->name('user.editUser');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.showedit');
});


Route::prefix('/images')->group(function () {
    Route::get('/', 'ImageController@index')->name('image.index');
    Route::get('/create', 'ImageController@create')->name('image.create');
    Route::post('/create', 'ImageController@store')->name('image.store');
    Route::get('/delete/{id}', 'ImageController@destroy')->name('image.delete');
    Route::get('/edit/{id}', 'ImageController@edit')->name('image.edit');
    Route::post('/edit/{id}', 'ImageController@update')->name('image.update');
});


Route::prefix('/category')->group(function () {
    Route::get('/', 'CategoriesController@index')->name('category.index');
    Route::get('/create', 'CategoriesController@create')->name('category.create');
    Route::post('/create', 'CategoriesController@store')->name('category.store');
    Route::get('/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
    Route::get('/edit/{id}', 'CategoriesController@edit')->name('category.edit');
    Route::post('/edit/{id}', 'CategoriesController@update')->name('category.update');
});


Route::prefix('reviews')->group(function () {
    Route::get('/index', 'ReviewController@index')->name('review.index');
    Route::get('/delete/{id}', 'ReviewController@destroy')->name('review.destroy');
    Route::post('/create', 'ReviewController@store')->name('review.create');
    Route::post('/edit/{id}', 'ReviewController@update')->name('review.edit');
});


Route::get('show', 'ReturnShopController@index')->name('showList');
Route::get('/', 'ReturnShopController@showShop')->name('showShop');
Route::get('showCart', 'ReturnShopController@showCart')->name('showCart');
Route::get('/search', 'ReturnShopController@search')->name('shop.search');
Route::get('/findByCategory/{id}', 'ReturnShopController@findByIdCategory')->name('shop.searchByCategory');
Route::get('/getImages/{id}', 'ReturnShopController@getImagesByCategory')->name('shop.getImages');


Route::get('/cart', 'ShoppingCartController@index')->name('cart.index');
Route::get('/index', 'ShoppingCartController@showFormCart')->name('cart.cart');

//Cart
Route::get('/add-to-cart/{id}', 'ShoppingCartController@addToCart')->name('cart.addToCart');
Route::get('/remove-to-cart/{id}', 'ShoppingCartController@removeProductIntoCart')->name('cart.removeProductIntoCart');
Route::post('/update-to-cart/{id}', 'ShoppingCartController@updateProductIntoCart')->name('cart.updateProductIntoCart');


Route::get('/details-{id}', 'DetailsController@index')->name('shop.index');
Route::post('/new/review', 'DetailsController@store')->name('shop.store');
Route::get('/star/{id}', 'DetailsController@detailOnHomePage');


//Login Google
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

