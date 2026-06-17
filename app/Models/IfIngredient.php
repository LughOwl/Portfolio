<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IfIngredient extends Model
{
    protected $table = 'if_ingredients';

    protected $fillable = ['nom_fr', 'nom_en', 'precision_fr', 'precision_en', 'categorie_id'];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(IfCategorieIngredient::class, 'categorie_id');
    }

    public function recetteIngredients(): HasMany
    {
        return $this->hasMany(IfRecetteIngredient::class, 'ingredient_id');
    }

    public function nomComplet(string $locale = 'fr'): string
    {
        $nom = $locale === 'en' ? $this->nom_en : $this->nom_fr;
        $precision = $locale === 'en' ? $this->precision_en : $this->precision_fr;

        return $precision ? "{$nom} — {$precision}" : $nom;
    }
}
