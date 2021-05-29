<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.admin');
});
// Route::get('/categorias', function () {
//     return view('admin.category');
// });

Route::resource('categories', 'CategoryController')->names('categories');
Route::resource('clients', 'ClientController')->names('clients');
Route::resource('products', 'ProductController')->names('products');
Route::resource('providers', 'ProviderController')->names('providers');
Route::resource('purchases', 'PurchaseController')->names('purchases');
Route::resource('sales', 'SaleController')->names('sales');

Route::get('purchases/pdf/{purchase}', 'PurchaseController@pdf')->name('purchases.pdf');
Route::get('sales/pdf/{sale}', 'SaleController@pdf')->name('sales.pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
