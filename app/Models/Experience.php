<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['locale', 'ordre', 'periode', 'titre', 'org', 'desc', 'dot', 'tags'];
    protected $casts    = ['tags' => 'array'];
}
