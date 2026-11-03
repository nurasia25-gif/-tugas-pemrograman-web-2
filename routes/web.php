<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;



Route::get('/film', [FilmController::class, 'index'])->name('film.index'); 
Route::get('/film/create', [FilmController::class, 'create'])->name('film.create'); 
Route::get('/film/{film}', [FilmController::class, 'show'])->name('film.show'); 
Route::post('/film', [FilmController::class, 'store'])->name('film.store'); 
Route::get('/film/{film}/edit', [FilmController::class, 'edit'])->name('film.edit'); 
Route::put('/film/{film}', [FilmController::class, 'update'])->name('film.update'); 
Route::delete('/film/{film}', [FilmController::class, 'destroy'])->name('film.destroy'); 

Route::get('/', function () {
    return to_route('film.index');
});