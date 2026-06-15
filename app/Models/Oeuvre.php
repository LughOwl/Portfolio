<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Oeuvre extends Model
{
    protected $fillable = [
        'titre', 'titres_alternatifs', 'image',
        'sortie', 'status', 'duree', 'synopsis', 'video', 'en_vedette', 'ordre',
    ];

    protected $casts = [
        'titres_alternatifs' => 'array',
        'en_vedette'         => 'boolean',
    ];


    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class, 'oeuvre_type');
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'oeuvre_genre');
    }
}
