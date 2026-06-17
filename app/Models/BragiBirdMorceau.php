<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BragiBirdMorceau extends Model
{
    protected $table = 'bragi_bird_morceaux';

    protected $fillable = [
        'titre', 'titre_en',
        'compositeur', 'compositeur_en',
        'description', 'description_en',
        'youtube_url', 'mp3_path',
        'publie', 'ordre',
    ];

    protected $casts = [
        'publie' => 'boolean',
    ];
}
