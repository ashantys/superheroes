<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;
use App\Models\Superheroe;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('superheroes', 'SuperheroeController');

Route::get('/index', [SuperheroeController::class, 'index'])->name('superheroes.index');

Route::get('/create', [SuperheroeController::class, 'create'])->name('superheroes.create');



