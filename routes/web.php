<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;




Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/service',[UserController::class,'service'])->name('service');
Route::get('/blog',[UserController::class,'blog'])->name('blog');
Route::get('/feature',[UserController::class,'feature'])->name('feature');
Route::get('/gallery',[UserController::class,'gallery'])->name('gallery');
Route::get('/attraction',[UserController::class,'attraction'])->name('attraction');
Route::get('/package',[UserController::class,'package'])->name('package');
Route::get('/team',[UserController::class,'team'])->name('team');
Route::get('/testimonial',[UserController::class,'testimonial'])->name('testimonial');
Route::get('/404',[UserController::class,'404'])->name('404');
Route::resource('contact',UserContactController::class);
Route::get('/testimonial',[UserController::class,'testimonial'])->name('testimonial');
Route::resource('contact', UserContactController::class)
    ->only(['index', 'store']);

Route::post('/book-event', [BookingController::class, 'store'])
    ->name('booking.store');

require __DIR__.'/auth.php';
