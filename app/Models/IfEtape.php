<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IfEtape extends Model
{
    protected $table = 'if_etapes';

    protected $fillable = [
        'recette_id', 'position', 'titre_fr', 'titre_en',
        'description_fr', 'description_en', 'duree',
    ];

    public function recette(): BelongsTo
    {
        return $this->belongsTo(IfRecette::class, 'recette_id');
    }

    public function titre(string $locale = 'fr'): string
    {
        return $locale === 'en' ? $this->titre_en : $this->titre_fr;
    }

    public function description(string $locale = 'fr'): string
    {
        return $locale === 'en' ? $this->description_en : $this->description_fr;
    }
}
