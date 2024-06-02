<?php

use App\Models\Recette;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;

Route::get('/', [RecetteController::class, 'index']);
Route::get('/recettes', [RecetteController::class, 'index']);
Route::get('/recettes/form', [RecetteController::class, 'form']);
Route::get('/recettes/creer', [RecetteController::class, 'creer']);


