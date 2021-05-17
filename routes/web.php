<?php

use App\Http\Controllers\Product\ProductController as ProductProductController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('layouts.admin-layout');
})->name('admin-dashboard');
Route::resource('/product',ProductProductController::class);
Auth::routes();
// Route::get('admin/list-product')

Route::get('/admin/list-product', function () {
    return view('pages.product.list-product');
})->name('list-product');
// // Route::get('/add-product', [ProductController::class,'create'])->name('add-product');
// Route::resource('product', ProductController::class);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
