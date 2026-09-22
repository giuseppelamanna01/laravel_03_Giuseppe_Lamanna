<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticlesController;


Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/articoli', [ArticlesController::class, 'articoli'])->name('articoli');

Route::get('/articolo/{id}', [ArticlesController::class, 'dettaglio'])->name('dettagli');

