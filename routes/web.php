<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MessageController;



Route::get('/', function () {
    return view('User.main.master');
});


Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', function () {  return view('admin.dashboard');  })->name('dashboard');
    Route::resource('books', BookController::class)->name('index', 'books');
    Route::resource('orders',ClientController::class)->name('index','orders');
    Route::resource('messages',MessageController::class)->name('index','messages');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[RouteController::class,'main'])->name('/');
Route::get('/products',[RouteController::class,'products'])->name('products');
Route::post('/search',[RouteController::class,'search'])->name('search');
Route::get('/about',[RouteController::class,'about'])->name('about');
Route::get('/contact',[RouteController::class,'contact'])->name('contact');
Route::post('/message',[RouteController::class,'message'])->name('message');
Route::get('/product/{id}',[RouteController::class,'product'])->name('product');
Route::get('/rent/{id}',[RouteController::class,'rent'])->name('rent');
Route::post('/order/{id}',[RouteController::class,'order'])->name('order');

require __DIR__.'/auth.php';
