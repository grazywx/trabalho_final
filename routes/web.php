<?php
use App\Http\Models\Ficha;
use App\Http\Controllers\FichaController;
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
});

Route::get('/fichas', [FichaController::class, 'index'])->name('fichas.index');
Route::get('/fichas/create', [FichaController::class, 'create'])->name('fichas.create');
Route::post('/fichas', [FichaController::class, 'store'])->name('fichas.store');
Route::post('/fichas/{ficha}', [FichaController::class, 'show'])->name('fichas.show');
Route::post('/fichas/{ficha}/edit', [FichaController::class, 'edit'])->name('fichas.edit');
Route::put('/fichas/{ficha}', [FichaController::class, 'update'])->name('fichas.update');
Route::delete('/fichas/{ficha}', [FichaController::class, 'destroy'])->name('fichas.destroy');




require __DIR__.'/auth.php';

