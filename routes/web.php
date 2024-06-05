<?php

use App\Models\Recette;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\CommentaireController;

Route::get('/', [RecetteController::class, 'index']);
Route::get('/recettes', [RecetteController::class, 'index']);
Route::get('/recettes/creer', [RecetteController::class, 'form']);
Route::get('/recettes/modifier/{id}', [RecetteController::class, 'form']);
Route::post('/recettes/creer_ou_modifier', [RecetteController::class, 'creer_ou_modifier']);
Route::get('/recettes/detail/{id}', [RecetteController::class, 'detail']);
Route::get('/recettes/supprimer/{id}', [RecetteController::class, 'supprimer']);


Route::post('/commentaires/sauvegarder', [CommentaireController::class, 'sauvegarder']);
Route::get('/commentaires/supprimer/{id}', [CommentaireController::class, 'supprimer']);




