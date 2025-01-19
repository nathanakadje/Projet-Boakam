<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return redirect()->route('index');
});

Route::get('/canaan', [VueController::class, 'chooseRoom']);
// Route::post('/reservation/store', [VueController::class, 'store'])->name('reservation.store');
Route::get('/index', [VueController::class, 'acceuil'])->name('index');
Route::get('/canaanservices', [VueController::class, 'canaanservice']);
Route::get('/canaanrooms', [VueController::class, 'canaanroom']);
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');