<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/store', [ProductsController::class, 'store'])->name('store');

Route::get('/index', [ProductsController::class, 'index'])->name('index');

Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit');
Route::put('/{id}', [ProductsController::class, 'update'])->name('update');
Route::get('/show/{id}', [ProductsController::class, 'show'])->name('product.view');
Route::delete('/delete/{id}', [ProductsController::class, 'destroy'])->name('delete');
