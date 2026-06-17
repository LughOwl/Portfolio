<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class IfRegime extends Model
{
    protected $table = 'if_regimes';

    protected $fillable = ['nom_fr', 'nom_en', 'icone'];

    public function recettes(): BelongsToMany
    {
        return $this->belongsToMany(IfRecette::class, 'if_recette_regime', 'regime_id', 'recette_id');
    }
}
