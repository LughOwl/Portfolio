<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IfAstuce extends Model
{
    protected $table = 'if_astuces';

    protected $fillable = ['recette_id', 'description_fr', 'description_en', 'position'];

    public function recette(): BelongsTo
    {
        return $this->belongsTo(IfRecette::class, 'recette_id');
    }

    public function description(string $locale = 'fr'): string
    {
        return $locale === 'en' ? $this->description_en : $this->description_fr;
    }
}
