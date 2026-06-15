<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['locale', 'ordre', 'nom', 'sujet', 'desc', 'logo', 'color', 'route', 'etat'];
}
