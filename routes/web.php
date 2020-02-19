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

Auth::routes();

Route::get('Product', 'productcontroller@produk')->middleware('auth');
Route::get('Product/create', 'productcontroller@create')->middleware('auth');
Route::post('Product', 'productcontroller@store');
Route::get('Product/{Product}/edit', 'productcontroller@edit')->middleware('auth');
Route::post('Product/{Product}/update', 'productcontroller@update');
Route::get('Product/{Product}/delete', 'productcontroller@delete');

Route::get('Category', 'kategoricontroller@index')->middleware('auth');
Route::get('Category/create', 'kategoricontroller@create');
Route::post('Category', 'kategoricontroller@store');
Route::get('Category/{Category}/edit', 'kategoricontroller@edit')->middleware('auth');
Route::post('Category/{Category}/update', 'kategoricontroller@update');
Route::get('Category/{Category}/delete', 'kategoricontroller@delete');

Route::get('/', 'productcontroller@produk')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
