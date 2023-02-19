<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RouteController;



Route::get('/', function () {
    return view('User.main.master');
});


Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', function () {  return view('admin.dashboard');  })->name('dashboard');
    Route::resource('books', BookController::class)->name('index', 'books');

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

require __DIR__.'/auth.php';
