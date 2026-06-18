<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InariFoxPrecisionEnSeeder extends Seeder
{
    public function run(): void
    {
        $map = [
            '1 rouleau ou 300 g maison'                                         => '1 roll or 300 g homemade',
            'à chair ferme'                                                      => 'firm flesh',
            'à chair ferme, cuites'                                              => 'firm flesh, cooked',
            'baguette, grillé'                                                   => 'baguette, toasted',
            'baies'                                                              => 'berries',
            'blancs et jaunes séparés'                                           => 'whites and yolks separated',
            'blonde alsacienne'                                                  => 'Alsatian lager',
            'bouchot, grattées et rincées'                                       => 'bouchot, scrubbed and rinsed',
            'Bourgogne'                                                          => 'Burgundy',
            'ciselée'                                                            => 'finely chopped',
            'concassées'                                                         => 'roughly chopped',
            'coupé en dés'                                                       => 'diced',
            'crue, bien rincée'                                                  => 'raw, well rinsed',
            'cuisses'                                                            => 'thighs',
            'cuits, décoquillés'                                                 => 'cooked, shelled',
            'décortiquées'                                                       => 'peeled',
            'découpé en morceaux'                                                => 'cut into pieces',
            'demi-sel de préférence'                                             => 'lightly salted preferred',
            'dont 50 g pour la pâte'                                             => 'including 50 g for the pastry',
            'effilées, torréfiées'                                               => 'flaked, toasted',
            'émincé'                                                             => 'sliced',
            'émincé finement'                                                    => 'finely sliced',
            'en cubes'                                                           => 'cubed',
            'en fines rondelles, blanc et vert tendre'                           => 'finely sliced, white and tender green parts',
            'en lanières'                                                        => 'cut into strips',
            'en morceaux'                                                        => 'in pieces',
            'en quartiers'                                                       => 'quartered',
            'en rondelles'                                                       => 'sliced into rounds',
            'en tronçons'                                                        => 'cut into chunks',
            'entier (450 g environ)'                                             => 'whole (about 450 g)',
            'entière, environ 300 g, parée'                                      => 'whole, about 300 g, trimmed',
            'entières'                                                           => 'whole',
            'entières avec noyaux (conservent le parfum à la cuisson)'           => 'whole with pits (they release flavour during cooking)',
            'épaule et collier, en morceaux'                                     => 'shoulder and neck, in pieces',
            'épaule ou tendron, en cubes'                                        => 'shoulder or breast, cubed',
            'facultatif'                                                         => 'optional',
            'ficelés en botte'                                                   => 'tied in a bundle',
            'finement ciselée'                                                   => 'finely chopped',
            'fondu'                                                              => 'melted',
            'fraîche épaisse'                                                    => 'thick crème fraîche',
            'fraîche épaisse, pour le service'                                   => 'thick crème fraîche, for serving',
            'fraîche liquide'                                                    => 'single cream',
            'fraîches, équeutées'                                                => 'fresh, hulled',
            'frais'                                                              => 'fresh',
            'frais, ciselé'                                                      => 'fresh, chopped',
            'frais, haché'                                                       => 'fresh, chopped',
            'fraise ou abricot, pour le nappage'                                 => 'strawberry or apricot, for the glaze',
            'froid, en dés'                                                      => 'cold, diced',
            'froid, pour la pâte'                                                => 'cold, for the pastry',
            'Golden ou Reinette, pelées en quartiers'                            => 'Golden or Reinette, peeled and quartered',
            'gousse'                                                             => 'pod',
            'gousse ou extrait'                                                  => 'pod or extract',
            'grains'                                                             => 'whole peppercorns',
            'grelots'                                                            => 'button onions',
            'gros sel'                                                           => 'coarse salt',
            'grosses, entières'                                                  => 'large, whole',
            'haché'                                                              => 'chopped',
            'haché, pour le service'                                             => 'chopped, for serving',
            'jaune, dorure'                                                      => 'yolk, for egg wash',
            'jaunes seulement'                                                   => 'yolks only',
            'jus'                                                                => 'juice',
            'jus et zeste'                                                       => 'juice and zest',
            'jus, pour le service'                                               => 'juice, for serving',
            'lardons'                                                            => 'lardons',
            'lardons fumés'                                                      => 'smoked lardons',
            'liquide entière'                                                    => 'whole milk',
            'noir concassé'                                                      => 'black, cracked',
            'noix uniquement'                                                    => 'scallops only',
            'ou saindoux'                                                        => 'or lard',
            'pain de campagne, grillé'                                           => 'country bread, toasted',
            'paleron ou bourguignon, en cubes'                                   => 'chuck or stewing beef, cubed',
            'palette fumée + jambonneau + saucisses de Strasbourg'               => 'smoked shoulder + ham hock + Strasbourg sausages',
            'petites, entières'                                                  => 'small, whole',
            'piqué de clous de girofle'                                          => 'studded with cloves',
            'plat de côtes, paleron et os à moelle'                              => 'short ribs, chuck and marrowbones',
            'pot, pour le service'                                               => 'jar, for serving',
            'pour décorer'                                                       => 'to decorate',
            'pour frotter le plat'                                               => 'to rub the dish',
            'pour la caramélisation'                                             => 'for caramelising',
            'pour la crème citron'                                               => 'for the lemon cream',
            'pour la finition'                                                   => 'for finishing',
            'pour la pâte'                                                       => 'for the pastry',
            'pour la pâte brisée'                                                => 'for the shortcrust pastry',
            'pour la pâte sablée'                                                => 'for the sweet pastry',
            'pour le caramel'                                                    => 'for the caramel',
            'pour le plat'                                                       => 'for the dish',
            'pour le roux'                                                       => 'for the roux',
            'pour le service'                                                    => 'for serving',
            'pour le sirop de meringue'                                          => 'for the meringue syrup',
            'pour serrer les blancs'                                             => 'to stabilise the egg whites',
            'préparée à partir de 125 ml eau + 60 g beurre + 75 g farine + 3 œufs' => 'made from 125 ml water + 60 g butter + 75 g flour + 3 eggs',
            'préparée ou recette maison'                                         => 'store-bought or homemade',
            'râpé'                                                               => 'grated',
            'râpé finement, + 30 g pour parsemer'                                => 'finely grated, + 30 g for sprinkling',
            'rouleaux du commerce ou maison'                                     => 'store-bought rolls or homemade',
            'sec'                                                                => 'dry',
            'sec de Savoie'                                                      => 'dry Savoyard',
            'type Charlotte, en fines rondelles'                                 => 'Charlotte variety, thinly sliced',
            'vidé et écaillé'                                                    => 'gutted and scaled',
        ];

        $updated = 0;
        foreach ($map as $fr => $en) {
            $count = DB::table('if_recette_ingredient')
                ->where('precision_libre', $fr)
                ->whereNull('precision_libre_en')
                ->update(['precision_libre_en' => $en]);
            $updated += $count;
        }

        $this->command->info("Traductions appliquées : {$updated} lignes mises à jour.");

        $remaining = DB::table('if_recette_ingredient')
            ->whereNotNull('precision_libre')
            ->whereNull('precision_libre_en')
            ->count();

        if ($remaining > 0) {
            $this->command->warn("{$remaining} ligne(s) sans traduction EN — à compléter manuellement.");
        }
    }
}
