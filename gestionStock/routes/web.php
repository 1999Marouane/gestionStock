<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::resource('/gestionstock','App\Http\Controllers\gestionController');
Route::resource('categories', 'App\Http\Controllers\categorieController');
Route::resource('product','App\Http\Controllers\ProductController');
Route::resource('suppliers', 'App\Http\Controllers\SupplierController');


require __DIR__.'/auth.php';
