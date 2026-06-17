<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaiaDeerSection extends Model
{
    protected $table = 'gaia_deer_sections';

    protected $fillable = [
        'rubrique',
        'titre',
        'titre_en',
        'contenu',
        'contenu_en',
        'ordre',
        'publie',
    ];

    protected $casts = [
        'publie' => 'boolean',
        'ordre'  => 'integer',
    ];

    public static array $rubriques = ['sante', 'nutrition', 'investissement'];

    public static function rubriquesLabels(string $locale = 'fr'): array
    {
        return $locale === 'en'
            ? ['sante' => 'Health', 'nutrition' => 'Nutrition', 'investissement' => 'Investing']
            : ['sante' => 'Santé physique', 'nutrition' => 'Nutrition', 'investissement' => 'Investissement'];
    }
}
