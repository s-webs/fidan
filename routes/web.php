<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');
