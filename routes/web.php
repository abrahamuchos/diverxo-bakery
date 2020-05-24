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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Emails
Route::prefix('emails')->group(function (){
  Route::post('send/contactUs', 'EmailController@contactUs')->name('email.contact-us');
});

// Admin
Route::prefix('admin')->middleware('auth')->group(function (){

//  Dashboard
  Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');

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

//  Media (Images and more)
  Route::post('media/store/{id?}', 'Admin\MediaController@store')->name('admin.media.store');
  Route::delete('media/destroy/{id?}', 'Admin\MediaController@destroy')->name('admin.media.destroy');
  Route::get('media/show/{id}/{type?}', 'Admin\MediaController@show')->name('admin.media.show');
  Route::post('media/simple-image/', 'Admin\MediaController@storeImage')->name('admin.simple.image');


});


