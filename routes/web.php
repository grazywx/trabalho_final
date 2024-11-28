<?php
use App\Http\Controllers\FichaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/fichas', [FichaController::class, 'index'])->name('fichas.index');
    Route::get('/fichas/create', [FichaController::class, 'create'])->name('fichas.create');
    Route::post('/fichas', [FichaController::class, 'store'])->name('fichas.store');
    Route::get('/fichas/{ficha}', [FichaController::class, 'show'])->name('fichas.show');
    Route::get('/fichas/{ficha}/edit', [FichaController::class, 'edit'])->name('fichas.edit');
    Route::put('/fichas/{ficha}', [FichaController::class, 'update'])->name('fichas.update');
    Route::delete('/fichas/{ficha}', [FichaController::class, 'destroy'])->name('fichas.destroy');

    Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
    Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
    Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
    Route::get('/medicos/{medico}', [MedicoController::class, 'show'])->name('medicos.show');
    Route::get('/medicos/{medico}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
    Route::put('/medicos/{medico}', [MedicoController::class, 'update'])->name('medicos.update');
    Route::delete('/medicos/{medico}', [MedicoController::class, 'destroy'])->name('medicos.destroy');

    Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
    Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
    Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
    Route::get('/pacientes/{paciente}', [PacienteController::class, 'show'])->name('pacientes.show');
    Route::get('/pacientes/{paciente}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');
    Route::put('/pacientes/{paciente}', [PacienteController::class, 'update'])->name('pacientes.update');
    Route::delete('/pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');

    Route::get('/consultas', [ConsultaController::class, 'index'])->name('consultas.index');
    Route::get('/consultas/create', [ConsultaController::class, 'create'])->name('consultas.create');
    Route::post('/consultas', [ConsultaController::class, 'store'])->name('consultas.store');
    Route::get('/consultas/{consulta}', [ConsultaController::class, 'show'])->name('consultas.show');
    Route::get('/consultas/{consulta}/edit', [ConsultaController::class, 'edit'])->name('consultas.edit');
    Route::put('/consultas/{consulta}', [ConsultaController::class, 'update'])->name('consultas.update');
    Route::delete('/consultas/{consulta}', [ConsultaController::class, 'destroy'])->name('consultas.destroy');
});



require __DIR__.'/auth.php';

