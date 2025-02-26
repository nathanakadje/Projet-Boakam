<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::get('/', function () {
//     return redirect()->route('index');
// });

Route::get('/cana-plage-hotel', [VueController::class, 'chooseRoom']);
// Route::post('/reservation/store', [VueController::class, 'store'])->name('reservation.store');
Route::get('/index', [VueController::class, 'acceuil'])->name('index');
Route::get('/cana-plage-services', [VueController::class, 'canaanservice']);
Route::get('/cana-plage-rooms', [VueController::class, 'canaanroom']);
Route::get('/about-us', [VueController::class, 'about']);
Route::get('/cana-plage-contacts', [VueController::class, 'canaancontact']);
Route::get('/contact', [VueController::class, 'contacts']);
Route::post('/email', [ReservationController::class, 'emails'])->name('email.emails');
Route::post('/stores', [ReservationController::class, 'store'])->name('stores.store');
Route::post('/subjects', [ReservationController::class, 'subject'])->name('subjects.subject');