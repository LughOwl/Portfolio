<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = ['locale', 'ordre', 'nom', 'couleur', 'desc'];
}
