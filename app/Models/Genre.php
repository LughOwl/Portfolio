<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    protected $fillable = ['nom', 'nom_en'];

    public function oeuvres(): BelongsToMany
    {
        return $this->belongsToMany(Oeuvre::class, 'oeuvre_genre');
    }
}
