<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::resource('products', ProductController::class);