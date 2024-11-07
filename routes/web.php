<?php

use App\Http\Controllers\SuporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanoController;

Route::get('/pesquisar-planos', [PlanoController::class, 'showSearchForm'])->name('pesquisarPlanos');
Route::get('/resultados-pesquisa', [PlanoController::class, 'pesquisarPlanos'])->name('resultadosPesquisa');

Route::get('/comparar-planos', [PlanoController::class, 'showComparisonForm'])->name('compararPlanosForm');
Route::post('/comparar-planos', [PlanoController::class, 'comparar'])->name('compararPlanos');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/suporte', [SuporteController::class, 'index'])->name('suporte');
Route::post('/suporte/ticket', [SuporteController::class, 'criarTicket'])->name('suporte.ticket');

Route::get('/comprar', [PlanoController::class, 'showCompra'])->name('comprar.planos');
Route::get('/comprar/{id}', [PlanoController::class, 'finalizarCompra'])->name('comprar.plano');
Route::get('/{id}/detalhes', [PlanoController::class, 'detalhes'])->name('plano.detalhes');
Route::middleware(['auth'])->group(function () {
    Route::post('/comprar/{id}/confirmar', [PlanoController::class, 'confirmarCompra'])->name('confirmarCompra');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/bemvindo', function () {
    return view('bemvindo');
})->name('bemvindo');

