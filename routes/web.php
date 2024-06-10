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

/*Route::controller(PlantaController::class)->group(function () {

    Route::get('plantas', 'index')->name('plantas.index');

    Route::get('plantas/create', 'create')->name('plantas.create');

    Route::post('plantas', 'store')->name('plantas.store');

    Route::get('plantas/{id}/edit', 'edit')->name('plantas.edit');

    Route::patch('plantas/{id}', 'update')->name('plantas.update');

    Route::get('plantas/{id}', 'show')->name('plantas.show');

    Route::delete('plantas/{id}', 'destroy')->name('plantas.destroy');
});*/

Route::middleware('auth')->group(function (){
   Route::resource('plantas',PlantaController::class);
    Route::resource('viveres', VivereController::class);
    Route::resource('riegos', RiegoController::class);

   // Route::resource('exposicion',ExposicionController::class);


    Route::resource('fertilizacion', FertilizacionController::class);
});

Route::controller(ExposicionController::class)->group(function () {

    Route::get('exposicion', 'index')->name('exposicion.index');

    Route::get('exposicion/{id}/create', 'create')->name('exposicion.create');

    Route::post('exposicion', 'store')->name('exposicion.store');

    Route::get('exposicion/{id}/edit', 'edit')->name('exposicion.edit');

    Route::patch('exposicion/{id}', 'update')->name('exposicion.update');

    Route::get('exposicion/{id}', 'show')->name('exposicion.show');

    Route::delete('exposicion/{id}', 'destroy')->name('exposicion.destroy');
});









require __DIR__.'/auth.php';
