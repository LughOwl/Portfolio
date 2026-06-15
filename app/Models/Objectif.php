<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    protected $table    = 'objectifs';
    protected $fillable = ['locale', 'priorite', 'label_terme', 'type', 'titre', 'badge_color', 'details'];
    protected $casts    = ['details' => 'array'];
}
