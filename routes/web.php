<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventHubController;


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
    Route::get('/dashboard', [HomeAdminController::class, 'index'])->name('admin.home');
});
Route::resource('events', EventController::class);
Route::get('/home', [EventController::class, 'index'])->name('event');
Route::delete('events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');

Route::get('/eventhub', [EventHubController::class, 'index'])->name('eventhub');




Auth::routes();

Route::get('/homeadmin', [App\Http\Controllers\HomeAdminController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
