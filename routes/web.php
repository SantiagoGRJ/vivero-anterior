<?php

use App\Http\Controllers\ExposicionController;
use App\Http\Controllers\FertilizacionController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiegoController;
use App\Http\Controllers\VivereController;

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

Route::middleware('auth')->group(function (){
    Route::resource('plantas',PlantaController::class);
    Route::resource('viveres', VivereController::class);
    Route::resource('riegos', RiegoController::class);
    Route::resource('exposicion',ExposicionController::class);
    Route::resource('fertilizacion', FertilizacionController::class);
});
require __DIR__.'/auth.php';
