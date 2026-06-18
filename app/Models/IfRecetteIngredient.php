<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IfRecetteIngredient extends Model
{
    public $timestamps = false;

    protected $table = 'if_recette_ingredient';

    protected $fillable = [
        'recette_id', 'ingredient_id', 'quantite', 'unite_id', 'precision_libre', 'precision_libre_en', 'position',
    ];

    protected $casts = ['quantite' => 'float'];

    public function recette(): BelongsTo
    {
        return $this->belongsTo(IfRecette::class, 'recette_id');
    }

    public function ingredient(): BelongsTo
    {
        return $this->belongsTo(IfIngredient::class, 'ingredient_id');
    }

    public function unite(): BelongsTo
    {
        return $this->belongsTo(IfUnite::class, 'unite_id');
    }

    public function nomIngredient(string $locale = 'fr'): string
    {
        $nom = $locale === 'en' ? $this->ingredient->nom_en : $this->ingredient->nom_fr;
        $precision = $locale === 'en'
            ? ($this->precision_libre_en ?: $this->precision_libre)
            : $this->precision_libre;

        return $precision ? "{$nom} — {$precision}" : $this->ingredient->nomComplet($locale);
    }

    public function abreviationUnite(string $locale = 'fr'): string
    {
        return $this->unite->abreviation;
    }
}
