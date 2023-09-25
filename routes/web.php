<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/products/{category?}', [ProductController::class, 'index'])->name('products.index');

Route::get('/product/{slug?}', [ProductController::class, 'show'])->name('products.show');

