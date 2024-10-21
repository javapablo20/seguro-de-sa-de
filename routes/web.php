<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanoController;

Route::get('/pesquisar-planos', [PlanoController::class, 'showSearchForm'])->name('pesquisarPlanos');

Route::get('/comparar-planos', [PlanoController::class, 'showComparisonForm'])->name('compararPlanosForm');
Route::post('/comparar-planos', [PlanoController::class, 'comparar'])->name('compararPlanos');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/bemvindo', function () {
    return view('bemvindo');
})->name('bemvindo');

