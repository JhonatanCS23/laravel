<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OperacionesController;


 Route::get('/products',[ProductController::class,'index']);
 Route::get('/product/create',[ProductController::class,'create']);
 Route::post('/product/store',[ProductController::class,'store'])->name('product.store');