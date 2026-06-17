<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZeusBugArticle extends Model
{
    protected $table = 'zeus_bug_articles';

    protected $fillable = [
        'titre', 'titre_en',
        'intro', 'intro_en',
        'contenu', 'contenu_en',
        'categorie', 'tags', 'github_url',
        'date_projet', 'publie', 'ordre',
    ];

    protected $casts = [
        'publie'      => 'boolean',
        'date_projet' => 'date',
    ];

    public static $categories = [
        'web'            => 'Web',
        'algorithme'     => 'Algorithme',
        'jeu'            => 'Jeu',
        'bdd'            => 'Base de données',
        'data'           => 'Data Science',
        'reseau'         => 'Réseau',
        'systeme'        => 'Système / Linux',
        'infrastructure' => 'Infrastructure / Serveur',
        'autre'          => 'Autre',
    ];
}
