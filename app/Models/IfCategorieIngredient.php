<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IfCategorieIngredient extends Model
{
    protected $table = 'if_categories_ingredient';

    protected $fillable = ['nom_fr', 'nom_en', 'icone', 'ordre'];

    public function ingredients(): HasMany
    {
        return $this->hasMany(IfIngredient::class, 'categorie_id');
    }
}
