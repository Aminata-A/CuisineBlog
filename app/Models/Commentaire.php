<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_auteur',
        'contenu',
        'recette_id'
    ];


    // Permet de recuperer l'recette du commentaire
    public function recette(): BelongsTo
    {
        return $this->belongsTo(Recette::class);
    }}
