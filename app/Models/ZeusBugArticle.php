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
        'algorithme'     => 'Algorithme',
        'autre'          => 'Autre',
        'bdd'            => 'Base de données',
        'cybersecurite'  => 'Cybersécurité',
        'data'           => 'Data Science',
        'infrastructure' => 'Infrastructure / Serveur',
        'jeu'            => 'Jeu',
        'reseau'         => 'Réseau',
        'systeme'        => 'Système / Linux',
        'web'            => 'Web',
    ];
}
