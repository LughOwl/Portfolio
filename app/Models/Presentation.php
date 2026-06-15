<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $table    = 'presentation';
    protected $fillable = ['locale', 'subtitle', 'availability', 'typewriter_phrases'];
    protected $casts    = ['typewriter_phrases' => 'array'];
}
