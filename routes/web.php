<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\PratosController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('inicio');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/cardapio', [CardapioController::class, 'view'])->middleware(['auth','verified'])->name('cardapio');
Route::get('todospratos',[PratosController::class, 'getTodosPratos'])->name('getTodosPratos');





require __DIR__.'/auth.php';
