<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventHubController;
use App\Http\Controllers\PembayaranController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [HomeAdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('events', EventController::class);
    Route::delete('events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::get('/events/{kode_event}', [EventController::class, 'show'])->name('events.show');


     Route::resource('pembayaran', PembayaranController::class);
});



Route::get('/eventhub', [EventHubController::class, 'index'])->name('eventhub');
// routes/web.php
Route::get('/eventhubshow/{kode_event}', [EventHubController::class, 'show'])->name('eventhub.show');





Auth::routes();

