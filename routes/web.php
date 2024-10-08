<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventHubController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\FeedbackController;

// Rute utama
Route::get('/', function () {
    return view('/auth/login');
});

// Rute untuk Event Hub
Route::get('/eventhub', [EventHubController::class, 'index'])->name('eventhub');
Route::get('/eventhubshow/{kode_event}', [EventHubController::class, 'show'])->name('eventhub.show');

// Rute yang memerlukan otentikasi
Route::middleware('auth')->group(function () {
    
    // Rute untuk admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [HomeAdminController::class, 'index'])->name('admin.dashboard');
        
        // Rute untuk Events
        Route::resource('events', EventController::class);
         Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
        
        // Rute untuk Pembayaran dan Masukan
        Route::resource('pembayaran', PembayaranController::class);
        Route::resource('masukan', MasukanController::class);
    });

    // Rute untuk admin dan user
     Route::middleware('role:admin|user')->group(function () {
        Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    });
});

// Rute untuk otentikasi
Auth::routes();
