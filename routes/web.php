<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

// Landing page 
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

// Dashboard protegido con autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas para usuarios autenticados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD de jugadores - Solo accesible para usuarios autenticados
    Route::resource('players', PlayerController::class);
});

// Requiere el archivo de autenticación de Laravel
require __DIR__.'/auth.php';
