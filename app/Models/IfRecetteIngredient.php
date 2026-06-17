<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IfRecetteIngredient extends Model
{
    public $timestamps = false;

    protected $table = 'if_recette_ingredient';

    protected $fillable = [
        'recette_id', 'ingredient_id', 'quantite', 'unite_id', 'precision_libre', 'position',
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
        if ($this->precision_libre) {
            $nom = $locale === 'en' ? $this->ingredient->nom_en : $this->ingredient->nom_fr;
            return "{$nom} — {$this->precision_libre}";
        }
        return $this->ingredient->nomComplet($locale);
    }

    public function abreviationUnite(string $locale = 'fr'): string
    {
        return $this->unite->abreviation;
    }
}
