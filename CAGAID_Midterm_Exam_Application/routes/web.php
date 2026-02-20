<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('products');
});

// Products route with optional theme parameter
Route::get('/products/{theme?}', [ProductController::class, 'showByTheme'])
    ->name('products.theme');