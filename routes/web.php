<?php

use App\Helpers\Miscellaneous;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);

/* Web */

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// User
//TODO: Al hacer un update o create que los tabs se muevan y muestren el mensaje (Ver view)
Route::get('/myAccount', 'UserController@show')->name('user.show')->middleware('auth');
Route::patch('/myAccount/{user}', 'UserController@update')->name('user.update')->middleware('auth');
Route::post('/myAccount/paymentMethod/store', 'UserController@paymentMethod')->name('user.paymentMethod.store')->middleware('auth');
Route::delete('/myAccount/paymentMethod/destroy', 'UserController@paymentMethodDestroy')->name('user.paymentMethod.destroy')->middleware('auth');

//Shop
Route::get('/shop', 'ProductController@index')->name('product.index');
Route::get('/shop/{slug}', 'ProductController@show')->name('product.show');
Route::get('/shop/category/{slug}', 'ProductController@showCategory')->name('category.show');

//Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{id}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

// Wish List
Route::get('/wish-list', 'WishListController@index')->name('wishlist.index');
Route::post('/wish-list/{product}', 'WishListController@store')->name('wishlist.store');
Route::post('/wish-list/switchToCart/{id}', 'WishListController@switchToCart')->name('wishlist.switchToCart');

//Checkout
Route::get('checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('checkout/confirm', 'CheckoutController@confirm')->name('checkout.confirm')->middleware('auth');

// Order
Route::get('order/{id}', 'OrderController@show')->name('order.show')->middleware('auth');

//Emails
Route::prefix('emails')->group(function (){
  Route::post('send/contactUs', 'EmailController@contactUs')->name('email.contact-us');
});

/* Admin */
Route::prefix('admin')->middleware('auth')->group(function (){

//  Dashboard
  Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');

//  Users
  Route::get('users', 'Admin\UserController@index')->name('admin.user.index');
  Route::get('user/create', 'Admin\UserController@create')->name('admin.user.create');
  Route::post('user/store', 'Admin\UserController@store')->name('admin.user.store');
  Route::get('user/{id}', 'Admin\UserController@show')->name('admin.user.show');
  Route::patch('user/edit/{id}', 'Admin\UserController@update')->name('admin.user.update');
  Route::delete('user/delete/{id}', 'Admin\UserController@destroy')->name('admin.user.destroy');


//  Categories
  Route::get('categories', 'Admin\CategoryController@index')->name('admin.category.index');
  Route::get('category/create', 'Admin\CategoryController@create')->name('admin.category.create');
  Route::post('category/storage', 'Admin\CategoryController@store')->name('admin.category.store');
  Route::get('category/{id}', 'Admin\CategoryController@show')->name('admin.category.show');
  Route::post('category/edit/{id}', 'Admin\CategoryController@update')->name('admin.category.update');
  Route::delete('category/delete/{id}', 'Admin\CategoryController@destroy')->name('admin.category.destroy');

//  Products
  Route::get('products', 'Admin\ProductController@index')->name('admin.product.index');
  Route::get('product/create', 'Admin\ProductController@create')->name('admin.product.create');
  Route::post('product/storage', 'Admin\ProductController@store')->name('admin.product.store');
  Route::get('product/{id}', 'Admin\ProductController@show')->name('admin.product.show');
  Route::post('product/edit/{id}', 'Admin\ProductController@update')->name('admin.product.update');
  Route::delete('product/delete/{id}', 'Admin\ProductController@destroy')->name('admin.product.destroy');

//  Orders
  Route::get('orders', 'Admin\OrderController@index')->name('admin.order.index');
  Route::get('orders/{id}', 'Admin\OrderController@show')->name('admin.order.show');

//  Media (Images and more)
  Route::post('media/store/{id?}', 'Admin\MediaController@store')->name('admin.media.store');
  Route::delete('media/destroy/{id?}', 'Admin\MediaController@destroy')->name('admin.media.destroy');
  Route::get('media/show/{id}/{type?}', 'Admin\MediaController@show')->name('admin.media.show');
  Route::post('media/simple-image/', 'Admin\MediaController@storeImage')->name('admin.simple.image');


});


