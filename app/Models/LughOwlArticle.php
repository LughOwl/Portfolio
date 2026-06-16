<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LughOwlArticle extends Model
{
    protected $table = 'lugh_owl_articles';

    protected $fillable = [
        'slug', 'categorie',
        'titre', 'titre_en',
        'description', 'description_en',
        'contenu', 'contenu_en',
        'image', 'ordre', 'publie', 'en_vedette',
    ];

    protected $casts = ['publie' => 'boolean', 'en_vedette' => 'boolean'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function categorieLabel(string $locale = 'fr'): string
    {
        if ($locale === 'en') {
            return match($this->categorie) {
                'modeles' => 'Philosophical Models',
                'idees'   => 'Timeless Ideas',
                'vie'     => 'Life is [...]',
                default   => $this->categorie,
            };
        }
        return match($this->categorie) {
            'modeles' => 'Modèles philosophiques',
            'idees'   => 'Idées immuables',
            'vie'     => 'La Vie est [...]',
            default   => $this->categorie,
        };
    }

    public function categorieUrl(string $locale = 'fr'): string
    {
        $prefix = $locale === 'en' ? 'en' : 'fr';
        return match($this->categorie) {
            'modeles', 'idees', 'vie' => route("{$prefix}.lugh-owl.catalogue", ['cat' => $this->categorie]),
            default                   => route("{$prefix}.lugh-owl.accueil"),
        };
    }
}
