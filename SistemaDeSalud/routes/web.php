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

    // Profesionales de Salud
    Route::get('/profesionales', [ProfesionalController::class, 'index'])->name('profesionales.index');
    Route::get('/profesionales/create', [ProfesionalController::class, 'create'])->name('profesionales.create');
    Route::post('/profesionales', [ProfesionalController::class, 'store'])->name('profesionales.store');
    Route::delete('/profesionales/{profesional}', [ProfesionalController::class, 'destroy'])->name('profesionales.destroy');
    Route::get('/profesionales/{profesional}', [ProfesionalController::class, 'show'])->name('profesionales.show');
    


    
});


require __DIR__.'/auth.php';
