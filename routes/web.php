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
    //Route::resource('riegos', RiegoController::class);

   // Route::resource('exposicion',ExposicionController::class);


   // Route::resource('fertilizacion', FertilizacionController::class);
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

Route::controller(FertilizacionController::class)->group(function () {

    Route::get('fertilizacion', 'index')->name('fertilizacion.index');

    Route::get('fertilizacion/{id}/create', 'create')->name('fertilizacion.create');

    Route::post('fertilizacion', 'store')->name('fertilizacion.store');

    Route::get('fertilizacion/{id}/edit', 'edit')->name('fertilizacion.edit');

    Route::patch('fertilizacion/{id}', 'update')->name('fertilizacion.update');

    Route::get('fertilizacion/{id}', 'show')->name('fertilizacion.show');

    Route::delete('fertilizacion/{id}', 'destroy')->name('fertilizacion.destroy');
});

Route::controller(RiegoController::class)->group(function () {

    Route::get('riegos', 'index')->name('riegos.index');

    Route::get('riegos/{id}/create', 'create')->name('riegos.create');

    Route::post('riegos', 'store')->name('riegos.store');

    Route::get('riegos/{id}/edit', 'edit')->name('riegos.edit');

    Route::patch('riegos/{id}', 'update')->name('riegos.update');

    Route::get('riegos/{id}', 'show')->name('riegos.show');

    Route::delete('riegos/{id}', 'destroy')->name('riegos.destroy');
});








require __DIR__.'/auth.php';
