<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Services\ServiceController;
// use App\Http\Controllers\Testimonios\TestimonioController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Services routes
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    // Route::get('/testimonios',[ TestimonioController::class, 'index'])->name('testimonios.index');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');

    // Testimonios routes (add these)
    // Route::resource('testimonios', TestimonioController::class);
});
