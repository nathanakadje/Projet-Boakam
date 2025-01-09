<?php

use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/canaan', [VueController::class, 'chooseRoom']);