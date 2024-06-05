<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recette extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'titre',
        'description',
        'image_url',
        'nouveaute'
    ];

    // Permet de recuperer tous les commentaires lié a une article
    public function commentaires(): HasMany
    {
        return $this->hasMany(Commentaire::class);
    }
}
