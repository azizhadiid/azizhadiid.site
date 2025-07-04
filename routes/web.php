<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [KontakController::class, 'kirim'])->name('kontak.kirim');
