<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventHubController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EventReqDosenController;
use App\Http\Controllers\Auth\RegisterDosenController;
use App\Http\Controllers\Auth\RegisterMahasiswaController;
use App\Http\Controllers\EventMhsController;
use App\Http\Controllers\EventDosenController;
// Rute utama
// Rute umum
Route::get('/', function () {
    return view('/auth/login');
});

// Rute registrasi
Route::prefix('register')->group(function () {
    Route::get('/dosen', [RegisterDosenController::class, 'showRegistrationForm'])->name('register.dosen');
    Route::post('/dosen', [RegisterDosenController::class, 'register']);

    Route::get('/mahasiswa', [RegisterMahasiswaController::class, 'showRegistrationForm'])->name('register.mahasiswa');
    Route::post('/mahasiswa', [RegisterMahasiswaController::class, 'register']);
});

// Rute untuk Event Hub
Route::get('/eventhubshow/{kode_event}', [EventHubController::class, 'show'])->name('eventhub.show');

// Rute yang memerlukan otentikasi
Route::middleware('auth')->group(function () {
    
    // Rute untuk admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [HomeAdminController::class, 'index'])->name('admin.dashboard');
        
        // Rute untuk Events
        Route::resource('events', EventController::class);
        Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
        
        // Rute untuk Pembayaran dan Transaksi
        Route::resource('pembayaran', PembayaranController::class);
        Route::resource('transaction', TransactionController::class);
    });

    // Rute untuk admin dan dosen
    Route::middleware('role:admin|dosen')->group(function () {
        Route::resource('eventreqdosens', EventReqDosenController::class);
        Route::get('/eventdosenshow/{kode_evndsn}', [EventHubController::class, 'showdosen'])->name('eventhub.showdosen');
        Route::resource('eventdosens', EventDosenController::class);
        Route::get('/eventhub', [EventHubController::class, 'index'])->name('eventhub');
    });

    // Rute untuk mahasiswa
    Route::middleware('role:mahasiswa')->group(function () {
        Route::get('/eventmhs', [EventMhsController::class, 'index'])->name('eventmhs');

        Route::get('/pembayaran/sukses', function () {
            return view('pembayaran.sukses'); // Ganti dengan view yang sesuai
        })->name('payment.success');

        // Rute untuk menangani callback dari Midtrans
        Route::post('/pembayaran/callback', [PembayaranController::class, 'callback'])->name('pembayaran.callback');
    });

    // Rute untuk transaksi dan feedback untuk semua yang terautentikasi
    Route::middleware('role:mahasiswa|dosen|admin')->group(function () {
        Route::post('/transactions', [TransactionController::class, 'createTransaction'])->name('transactions.create');
        Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    });
});

// Rute untuk otentikasi
Auth::routes();