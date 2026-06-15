<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = ['locale', 'data'];
    protected $casts    = ['data' => 'array'];
}
