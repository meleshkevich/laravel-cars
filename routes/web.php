<?php

namespace App\Http\Controllers;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/create-product', [ProductController::class, 'show_page']);
Route::get('/product/{productId}', [ProductController::class, 'show']);
Route::get('/product/{productId}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{productId}', [ProductController::class, 'update'])->name('product.update');
Route::post('/create-product', [ProductController::class, 'create']);
