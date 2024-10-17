<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanoController;

// Exibir o formulário de comparação de planos
Route::get('/comparar-planos', [PlanoController::class, 'showComparisonForm'])->name('compararPlanos');

// Comparar planos
Route::post('/comparar-planos', [PlanoController::class, 'comparar']);


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/pagina', function () {
    return view('pagina');
})->name('pagina');

