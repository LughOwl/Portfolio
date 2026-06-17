<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IfUnite extends Model
{
    protected $table = 'if_unites';

    protected $fillable = ['nom_fr', 'nom_en', 'abreviation', 'disponible_en'];

    protected $casts = ['disponible_en' => 'boolean'];

    public function recetteIngredients(): HasMany
    {
        return $this->hasMany(IfRecetteIngredient::class, 'unite_id');
    }
}
