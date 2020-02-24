<?php

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

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/', 'WelcomeController@index');

Route::get('/login', 'usercontroller@index')->name('login');
Route::post('/postLogin', 'usercontroller@postLogin');
Route::get('/register', 'usercontroller@register');
Route::post('/storeLogin', 'usercontroller@store');
Route::get('/logout', 'usercontroller@logout');

Route::get('Product', 'productcontroller@produk')->middleware('auth');
Route::get('Product/create', 'productcontroller@create')->middleware('auth');
Route::post('Product', 'productcontroller@store')->middleware('auth');
Route::get('Product/{Product}/edit', 'productcontroller@edit')->middleware('auth');
Route::post('Product/{Product}/update', 'productcontroller@update')->middleware('auth');
Route::get('Product/{Product}/delete', 'productcontroller@delete')->middleware('auth');

Route::get('Category', 'kategoricontroller@index')->middleware('auth');
Route::get('Category/create', 'kategoricontroller@create')->middleware('auth');
Route::post('Category', 'kategoricontroller@store')->middleware('auth');
Route::get('Category/{Category}/edit', 'kategoricontroller@edit')->middleware('auth');
Route::post('Category/{Category}/update', 'kategoricontroller@update')->middleware('auth');
Route::get('Category/{Category}/delete', 'kategoricontroller@delete')->middleware('auth');
