<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LughOwlArticle;

class LughOwlArticleSeeder extends Seeder
{
    private const ARTICLES = [
        'modeles' => [
            'balance', 'boussole', 'lanterne', 'lunettes', 'pendule', 'pont', 'reservoir',
        ],
        'idees' => [
            'acteur-spectateur', 'bouc-emissaire', 'capitalisme', 'consommation',
            'creation-destruction', 'danger-fiction', 'divertissement-peur',
            'entraide', 'etres-vivants-information', 'fragile-puissant',
            'lachete-courage', 'haine-indifference-amour', 'humanite-amour-mort',
            'inevitable-servitude', 'logique-sacrifice', 'normalite',
            'fierte-puissance-argent', 'puissance-soumission-liberte',
            'tripartition-etre', 'verite-raison', 'vitalite-emotions',
            'optimisme', 'volonte-puissance-desharmonie',
        ],
        'vie' => [
            'champ-de-bataille', 'dialogue-chaos', 'enfer-necessaire',
            'jeu-video-realiste', 'orchestre-symphonique', 'paradis-precaire',
            'piece-theatre',
        ],
    ];

    private const FOLDER_MAP = [
        'modeles' => 'modele',
        'idees'   => 'idee',
        'vie'     => 'vie',
    ];

    public function run(): void
    {
        LughOwlArticle::truncate();

        $ordre = 0;
        foreach (self::ARTICLES as $categorie => $slugs) {
            $ordre = 0;
            foreach ($slugs as $slug) {
                $folder = self::FOLDER_MAP[$categorie];
                $path = resource_path("views/lugh-owl/{$folder}/{$slug}.blade.php");

                if (!file_exists($path)) {
                    echo "MISSING: {$path}\n";
                    continue;
                }

                $html = file_get_contents($path);
                $data = $this->parse($html);

                LughOwlArticle::create([
                    'slug'        => $slug,
                    'categorie'   => $categorie,
                    'titre'       => $data['titre'],
                    'description' => $data['description'],
                    'contenu'     => $data['contenu'],
                    'image'       => $data['image'],
                    'ordre'       => $ordre++,
                    'publie'      => true,
                ]);

                echo "OK: {$categorie}/{$slug}\n";
            }
        }
    }

    private function parse(string $html): array
    {
        // Title from h1
        $titre = '';
        if (preg_match('/<h1[^>]*>(.*?)<\/h1>/s', $html, $m)) {
            $titre = trim(strip_tags($m[1]));
        }

        // Description from first <p><em>
        $description = '';
        if (preg_match('/<p>\s*<em>(.*?)<\/em>\s*<\/p>/s', $html, $m)) {
            $description = trim(preg_replace('/\s+/', ' ', strip_tags($m[1])));
        }

        // Image filename from src="/assets/Lugh-Owl/..."
        $image = null;
        if (preg_match('/src="\/assets\/Lugh-Owl\/([^"]+)"/', $html, $m)) {
            $image = $m[1];
        }

        // Content: everything inside <section><div> after the img tag, up to </div></section>
        $contenu = '';
        if (preg_match('/<section>\s*<div>(.*?)<\/div>\s*<\/section>/s', $html, $m)) {
            $inner = $m[1];
            // Remove h1, first <p><em>...</em></p>, and img
            $inner = preg_replace('/<h1[^>]*>.*?<\/h1>/s', '', $inner, 1);
            $inner = preg_replace('/<p>\s*<em>.*?<\/em>\s*<\/p>/s', '', $inner, 1);
            $inner = preg_replace('/<img[^>]+>/s', '', $inner, 1);
            $contenu = trim($inner);
        }

        return compact('titre', 'description', 'image', 'contenu');
    }
}
