<?php

use App\Http\Controllers\KontakController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/detail/{id}', [WelcomeController::class, 'show'])->name('portfolio.detail');

// Route::resource('portfolio', PortfolioController::class);

Route::post('/', [KontakController::class, 'kirim'])->name('kontak.kirim');
