<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     







    // Profesionales de Salud
    Route::get('/profesionales', [ProfesionalController::class, 'index'])->name('profesionales.index');
    Route::get('/profesionales/create', [ProfesionalController::class, 'create'])->name('profesionales.create');
    Route::post('/profesionales', [ProfesionalController::class, 'store'])->name('profesionales.store');
    Route::get('/profesionales/{profesional}', [ProfesionalController::class, 'show'])->name('profesionales.show');
    Route::get('/profesionales/{profesional}/edit', [ProfesionalController::class, 'edit'])->name('profesionales.edit');
    Route::put('/profesionales/{profesional}', [ProfesionalController::class, 'update'])->name('profesionales.update');

    
    








});

require __DIR__.'/auth.php';