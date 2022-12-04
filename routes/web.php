<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

Route::get('/', HomeController::class)->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
