<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LughOwlArticle extends Model
{
    protected $table = 'lugh_owl_articles';

    protected $fillable = ['slug', 'categorie', 'titre', 'description', 'contenu', 'image', 'ordre', 'publie'];

    protected $casts = ['publie' => 'boolean'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function categorieLabel(): string
    {
        return match($this->categorie) {
            'modeles' => 'Modèles philosophiques',
            'idees'   => 'Idées immuables',
            'vie'     => 'La Vie est [...]',
            default   => $this->categorie,
        };
    }

    public function categorieRoute(): string
    {
        return match($this->categorie) {
            'modeles' => 'fr.lugh-owl.modeles',
            'idees'   => 'fr.lugh-owl.idees',
            'vie'     => 'fr.lugh-owl.vie',
            default   => 'fr.lugh-owl.accueil',
        };
    }
}
