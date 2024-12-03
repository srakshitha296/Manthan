<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/about',[HomeController::class,'about'])->name('about');

Route::get('/events',[EventController::class,'events'])->name('events');
Route::get('/events-details/{id}',[EventController::class, 'show'])->name('events.show');
Route::post('/event-register/{id}',[EventController::class, 'store'])->name('event.register');

Route::get('/gallery',[GalleryController::class, 'index'])->name('gallery');


require __DIR__.'/auth.php';
