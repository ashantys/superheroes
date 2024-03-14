<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;
use App\Models\Superheroe;

Route::get('/', function () {
    return view('welcome');
});


// Ruta para mostrar el formulario de creación
Route::get('/create', [SuperheroeController::class, 'create'])->name('superheroes.create');

// Ruta para almacenar (store) los datos enviados desde el formulario de creación
Route::post('/store', [SuperheroeController::class, 'store'])->name('superheroes.store');

// Ruta para mostrar el listado de superhéroes (índice)
Route::get('/index', [SuperheroeController::class, 'index'])->name('superheroes.index');

//Ruta para mostrar los detalles de un superheroes específico
Route::get('/show/{id}', [SuperheroeController::class, 'show'])->name('superheroes.show');

// Ruta para mostrar el formulario de edición de un superhéroe específico
Route::get('/edit/{id}', [SuperheroeController::class, 'edit'])->name('superheroes.edit');


