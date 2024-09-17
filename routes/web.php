<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/login', function () {
    return view('loginpage.login');
});


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user_create', [UserController::class, 'create'])->name('user.create');
Route::post('/user_store', [UserController::class, 'store'])->name('user.store');
Route::get('/user_edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user_update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user_delete/{id}', [UserController::class, 'delete'])->name('user.delete');


Route::get('/order', [OrderController::class, 'index'])->name('orders.index');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/order_create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/order_store', [OrderController::class, 'store'])->name('orders.store');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category_create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category_store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product_create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product_store', [ProductController::class, 'store'])->name('product.store');

Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::PUT('/update/{id}', [ProductController::class, 'update'])->name('product.update');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');


