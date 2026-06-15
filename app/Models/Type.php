<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    protected $fillable = ['nom'];

    public function oeuvres(): BelongsToMany
    {
        return $this->belongsToMany(Oeuvre::class, 'oeuvre_type');
    }
}
