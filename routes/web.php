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

Route::get('/', function () {
    return view('welcome');
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


});


Route::get('/home', 'HomeController@index')->name('home');
