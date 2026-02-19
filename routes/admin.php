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

        Route::get('contacts', [ContactController::class, 'index'])
        ->name('contacts.index'); 
        
    });

   
});

