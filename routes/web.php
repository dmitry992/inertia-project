<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [BookController::class, 'index']);


Route::get('/dashboard', function () {
    return Inertia::render('Books/Dashboard');
})->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'submit']);
