<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::post('/event-register/{id}',[EventController::class, 'register'])->name('event.register')->middleware('auth');

Route::get('/gallery',[GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery-details/{id}',[GalleryController::class, 'show'])->name('gallery.show');

Route::get('/blogs',[BlogController::class,'index'])->name('blogs');
Route::get('/blogs-details/{id}',[BlogController::class,'show'])->name('blogs.show');

Route::get('/user-dashboard',[DashboardController::class,'index'])->name('user.dashboard')->middleware('auth');
Route::get('/user-dashboard/profile',[DashboardController::class,'viewProfile'])->name('user.view.profile')->middleware('auth');
Route::get('/user-dashboard/profile/edit',[DashboardController::class,'editProfile'])->name('user.edit.profile')->middleware('auth');
Route::get('/user-dashboard/events',[DashboardController::class,'viewEvents'])->name('user.view.events')->middleware('auth');
Route::get('/user-dashboard/my-events',[DashboardController::class,'myEvents'])->name('user.my.events')->middleware('auth');

require __DIR__.'/auth.php';
