<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\EventController;

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
    return view('admin.home');
});

Route::get('/dashboard', [HomeAdminController::class, 'index'])->name('admin.home');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/home', [EventController::class, 'index'])->name('event');

Auth::routes();

Route::get('/homeadmin', [App\Http\Controllers\HomeAdminController::class, 'index'])->name('home');
