<?php
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AttractionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::post('/login', [LoginController::class, 'dologin'])
            ->name('login.submit');
    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 

         Route::resource('service', ServiceController::class);
        Route::resource('attractions', AttractionController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('contacts', ContactController::class)
         ->only(['index', 'show', 'destroy']);
         Route::post('contacts/{contact}/reply', 
        [ContactController::class, 'reply']
            )->name('contacts.reply');
        });

   
});

