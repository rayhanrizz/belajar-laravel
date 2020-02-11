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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('Product', 'productcontroller@produk');
Route::get('Product/create', 'productcontroller@create');
Route::post('Product', 'productcontroller@store');
Route::get('Product/{Product}/edit', 'productcontroller@edit');
Route::post('Product/{Product}/update', 'productcontroller@update');
Route::get('Product/{Product}/delete', 'productcontroller@delete');
// Route::get('Product/cari', 'productcontroller@cari');