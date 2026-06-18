<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\IfRecette;
use App\Models\IfRecetteIngredient;
use App\Models\IfEtape;
use App\Models\IfAstuce;

class InariFoxRecettes3Seeder extends Seeder
{
    public function run(): void
    {
        $ing    = DB::table('if_ingredients')->pluck('id', 'nom_fr');
        $unit   = DB::table('if_unites')->pluck('id', 'abreviation');
        $regime = DB::table('if_regimes')->pluck('id', 'nom_fr');

        $recettes = [

            // ── 21. Choucroute garnie alsacienne ──────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Choucroute garnie alsacienne',
                    'titre_en'          => 'Alsatian choucroute garnie',
                    'description_fr'    => 'Le grand plat alsacien : de la choucroute confite à la bière et au genièvre, généreusement garnie de charcuteries et de pommes de terre fondantes.',
                    'description_en'    => 'The great Alsatian dish: sauerkraut braised in beer with juniper, generously topped with cured meats and soft potatoes.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 90,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Choucroute',    'qte' => 1.5,  'unite' => 'kg',       'precision' => 'crue, bien rincée'],
                    ['nom' => 'Porc',          'qte' => 800,  'unite' => 'g',        'precision' => 'palette fumée + jambonneau + saucisses de Strasbourg'],
                    ['nom' => 'Pomme de terre','qte' => 6,    'unite' => 'pièce',    'precision' => 'à chair ferme'],
                    ['nom' => 'Bière',         'qte' => 50,   'unite' => 'cl',       'precision' => 'blonde alsacienne'],
                    ['nom' => 'Bouillon de poulet','qte' => 25, 'unite' => 'cl',     'precision' => null],
                    ['nom' => 'Oignon',        'qte' => 2,    'unite' => 'pièce',    'precision' => 'émincé'],
                    ['nom' => 'Genièvre',      'qte' => 10,   'unite' => 'pièce',    'precision' => 'baies'],
                    ['nom' => 'Clou de girofle','qte' => 4,   'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Laurier',       'qte' => 3,    'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Thym',          'qte' => 2,    'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Graisse de canard','qte' => 2, 'unite' => 'c. à s.',  'precision' => 'ou saindoux'],
                    ['nom' => 'Moutarde',      'qte' => 1,    'unite' => 'pièce',    'precision' => 'pot, pour le service'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Rincer et fondre la choucroute',
                        'titre_en'       => 'Rinse and soften the sauerkraut',
                        'description_fr' => 'Bien rincer la choucroute à l\'eau froide deux fois pour réduire l\'acidité. L\'égoutter et la presser entre les mains. Faire revenir les oignons dans la graisse de canard dans une cocotte. Ajouter la choucroute et mélanger 5 minutes.',
                        'description_en' => 'Rinse the sauerkraut thoroughly in cold water twice to reduce acidity. Drain and squeeze dry. Sauté the onions in duck fat in a casserole. Add the sauerkraut and stir for 5 minutes.',
                    ],
                    [
                        'titre_fr'       => 'Braiser à la bière',
                        'titre_en'       => 'Braise in beer',
                        'description_fr' => 'Enfouir les baies de genièvre, les clous de girofle, le laurier et le thym dans la choucroute. Placer la palette et le jambonneau sur le dessus. Verser la bière et le bouillon. Couvrir et cuire à feu doux 1 heure.',
                        'description_en' => 'Bury the juniper berries, cloves, bay leaf and thyme in the sauerkraut. Place the smoked shoulder and hock on top. Pour in the beer and broth. Cover and cook over low heat for 1 hour.',
                    ],
                    [
                        'titre_fr'       => 'Ajouter pommes de terre et saucisses',
                        'titre_en'       => 'Add potatoes and sausages',
                        'description_fr' => 'Ajouter les pommes de terre entières 20 minutes avant la fin. Pocher les saucisses de Strasbourg dans de l\'eau frémissante (non bouillante) 10 minutes. Dresser la choucroute au centre, disposer les charcuteries et les pommes de terre autour. Servir avec de la moutarde.',
                        'description_en' => 'Add the whole potatoes 20 minutes before the end. Poach the Strasbourg sausages in simmering (not boiling) water for 10 minutes. Plate the sauerkraut in the centre with the meats and potatoes around. Serve with mustard.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'La choucroute peut être préparée la veille — elle n\'en sera que meilleure réchauffée. Ajouter un peu de bière si elle dessèche.',
                        'description_en' => 'The choucroute can be prepared the day before — it will only be better reheated. Add a little beer if it dries out.',
                    ],
                ],
                'regimes' => ['Sans gluten'],
            ],

            // ── 22. Vol-au-vent aux fruits de mer ─────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Vol-au-vent aux fruits de mer',
                    'titre_en'          => 'Seafood vol-au-vent',
                    'description_fr'    => 'Une entrée élégante de la cuisine bourgeoise : des croustades de pâte feuilletée dorées garnies d\'une fricassée de crevettes et de coquilles Saint-Jacques en sauce veloutée.',
                    'description_en'    => 'An elegant bourgeois starter: golden puff pastry shells filled with a fricassee of prawns and scallops in a velvety sauce.',
                    'categorie'         => 'entree',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 30,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Pâte feuilletée',     'qte' => 2,    'unite' => 'pièce',    'precision' => 'rouleaux du commerce ou maison'],
                    ['nom' => 'Crevette',             'qte' => 200,  'unite' => 'g',        'precision' => 'décortiquées'],
                    ['nom' => 'Coquille Saint-Jacques','qte' => 12,  'unite' => 'pièce',    'precision' => 'noix uniquement'],
                    ['nom' => 'Moule',                'qte' => 200,  'unite' => 'g',        'precision' => 'cuits, décoquillés'],
                    ['nom' => 'Crème',                'qte' => 200,  'unite' => 'ml',       'precision' => 'fraîche liquide'],
                    ['nom' => 'Vin blanc',            'qte' => 10,   'unite' => 'cl',       'precision' => 'sec'],
                    ['nom' => 'Échalote',             'qte' => 2,    'unite' => 'pièce',    'precision' => 'ciselée'],
                    ['nom' => 'Beurre',               'qte' => 40,   'unite' => 'g',        'precision' => null],
                    ['nom' => 'Farine',               'qte' => 20,   'unite' => 'g',        'precision' => 'pour le roux'],
                    ['nom' => 'Bouillon de poisson',  'qte' => 10,   'unite' => 'cl',       'precision' => null],
                    ['nom' => 'Persil',               'qte' => 2,    'unite' => 'branche',  'precision' => 'haché'],
                    ['nom' => 'Œuf',                  'qte' => 1,    'unite' => 'pièce',    'precision' => 'jaune, dorure'],
                    ['nom' => 'Sel',                  'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',               'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Façonner et cuire les croustades',
                        'titre_en'       => 'Shape and bake the pastry cases',
                        'description_fr' => 'Découper des disques de pâte feuilletée de 10 cm. Sur 4 d\'entre eux, creuser un cercle intérieur sans traverser la pâte pour former le couvercle. Dorer au jaune d\'œuf. Cuire à 200 °C pendant 20 minutes. Soulever délicatement les couvercles.',
                        'description_en' => 'Cut 10 cm discs of puff pastry. On half of them, score an inner circle without cutting through to form the lid. Glaze with egg yolk. Bake at 200°C for 20 minutes. Gently lift the lids.',
                    ],
                    [
                        'titre_fr'       => 'Préparer la sauce veloutée',
                        'titre_en'       => 'Make the velouté sauce',
                        'description_fr' => 'Faire fondre le beurre, suer les échalotes. Ajouter la farine et cuire 2 minutes (roux blanc). Déglacer au vin blanc, ajouter le bouillon de poisson. Incorporer la crème, saler, poivrer. Cuire à feu doux 5 minutes jusqu\'à consistance nappante.',
                        'description_en' => 'Melt the butter, sweat the shallots. Add the flour and cook for 2 minutes (white roux). Deglaze with white wine, add fish broth. Stir in the cream, season. Cook over low heat 5 minutes until coating consistency.',
                    ],
                    [
                        'titre_fr'       => 'Incorporer les fruits de mer et garnir',
                        'titre_en'       => 'Add the seafood and fill',
                        'description_fr' => 'Saisir les noix de Saint-Jacques 1 minute par face dans une poêle bien chaude. Les ajouter avec les crevettes et les moules dans la sauce chaude. Garnir généreusement les croustades, replacer le couvercle et parsemer de persil.',
                        'description_en' => 'Sear the scallops for 1 minute per side in a very hot pan. Add them with the prawns and mussels to the hot sauce. Generously fill the pastry cases, replace the lids and scatter with parsley.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Les croustades peuvent être cuites à l\'avance et réchauffées 5 minutes au four à 160 °C. Ne jamais les garnir longtemps à l\'avance — la vapeur détremprait la pâte.',
                        'description_en' => 'The pastry cases can be baked in advance and reheated for 5 minutes at 160°C. Never fill them too far ahead — the steam would make the pastry soggy.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 23. Tarte aux fraises ─────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Tarte aux fraises à la crème pâtissière',
                    'titre_en'          => 'Strawberry tart with pastry cream',
                    'description_fr'    => 'Le grand classique de la pâtisserie française de printemps : un fond de pâte sablée croustillant, une crème pâtissière généreuse et des fraises fraîches disposées en rosace.',
                    'description_en'    => 'The great classic of French spring patisserie: a crisp shortbread base, a generous pastry cream and fresh strawberries arranged in a rosette.',
                    'categorie'         => 'dessert',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 8,
                    'temps_preparation' => 40,
                    'temps_cuisson'     => 25,
                    'temps_repos'       => 90,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Pâte sablée',      'qte' => 1,    'unite' => 'pièce',    'precision' => '1 rouleau ou 300 g maison'],
                    ['nom' => 'Crème pâtissière', 'qte' => 500,  'unite' => 'g',        'precision' => 'préparée ou recette maison'],
                    ['nom' => 'Fraise',           'qte' => 500,  'unite' => 'g',        'precision' => 'fraîches, équeutées'],
                    ['nom' => 'Confiture',        'qte' => 3,    'unite' => 'c. à s.',  'precision' => 'fraise ou abricot, pour le nappage'],
                    ['nom' => 'Sucre glace',      'qte' => 1,    'unite' => 'c. à s.',  'precision' => 'pour décorer'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Cuire la pâte sablée à blanc',
                        'titre_en'       => 'Blind-bake the shortbread pastry',
                        'description_fr' => 'Foncer le moule à tarte (26 cm) avec la pâte sablée. Piquer le fond à la fourchette. Couvrir de papier cuisson et de billes. Cuire à blanc à 175 °C pendant 15 minutes, puis retirer les billes et cuire encore 10 minutes jusqu\'à coloration dorée. Laisser refroidir complètement.',
                        'description_en' => 'Line the tart tin (26 cm) with the shortbread pastry. Prick the base with a fork. Cover with parchment and baking beans. Blind-bake at 175°C for 15 minutes, then remove the beans and bake 10 more minutes until golden. Cool completely.',
                    ],
                    [
                        'titre_fr'       => 'Garnir de crème pâtissière',
                        'titre_en'       => 'Fill with pastry cream',
                        'description_fr' => 'Étaler la crème pâtissière froide en une couche régulière sur le fond de tarte refroidi, en laissant un bord de 5 mm libre. Placer la tarte au réfrigérateur 30 minutes pour que la crème raffermisse.',
                        'description_en' => 'Spread the cold pastry cream in an even layer over the cooled tart base, leaving a 5 mm border. Refrigerate the tart for 30 minutes to let the cream firm up.',
                    ],
                    [
                        'titre_fr'       => 'Disposer les fraises et napper',
                        'titre_en'       => 'Arrange the strawberries and glaze',
                        'description_fr' => 'Couper les fraises en deux dans la longueur. Les disposer en rosace sur la crème pâtissière, côté coupé vers l\'extérieur. Faire fondre la confiture avec une cuillère d\'eau et la passer au chinois. Napper délicatement les fraises au pinceau.',
                        'description_en' => 'Halve the strawberries lengthwise. Arrange them in a rosette over the pastry cream, cut-side outwards. Melt the jam with a spoonful of water and strain. Gently brush the glaze over the strawberries.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'La crème pâtissière du commerce peut faire l\'affaire pour gagner du temps. Pour la maison : fouetter 4 jaunes + 80 g de sucre + 40 g de maïzena, porter 500 ml de lait à ébullition, verser sur les jaunes, remettre sur feu et cuire en remuant 2 minutes.',
                        'description_en' => 'Store-bought pastry cream works fine to save time. For homemade: whisk 4 yolks + 80 g sugar + 40 g cornstarch, bring 500 ml milk to a boil, pour over the yolks, return to heat and stir for 2 minutes.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],

            // ── 24. Clafoutis aux cerises ─────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Clafoutis aux cerises',
                    'titre_en'          => 'Cherry clafoutis',
                    'description_fr'    => 'Le dessert rustique du Limousin : des cerises entières noyées dans un appareil à mi-chemin entre le flan et la crêpe épaisse, doré et légèrement gonflé.',
                    'description_en'    => 'The rustic dessert of Limousin: whole cherries nestled in a batter halfway between a flan and a thick crêpe, golden and slightly puffed.',
                    'categorie'         => 'dessert',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 15,
                    'temps_cuisson'     => 40,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Cerise',      'qte' => 500,  'unite' => 'g',        'precision' => 'entières avec noyaux (conservent le parfum à la cuisson)'],
                    ['nom' => 'Œuf',         'qte' => 3,    'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Lait',        'qte' => 300,  'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Crème',       'qte' => 100,  'unite' => 'ml',       'precision' => 'fraîche liquide'],
                    ['nom' => 'Farine',      'qte' => 80,   'unite' => 'g',        'precision' => null],
                    ['nom' => 'Sucre blanc', 'qte' => 100,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Vanille',     'qte' => 1,    'unite' => 'pièce',    'precision' => 'gousse ou extrait'],
                    ['nom' => 'Kirsch',      'qte' => 2,    'unite' => 'c. à s.',  'precision' => 'facultatif'],
                    ['nom' => 'Beurre',      'qte' => 20,   'unite' => 'g',        'precision' => 'pour le plat'],
                    ['nom' => 'Sucre glace', 'qte' => 1,    'unite' => 'c. à s.',  'precision' => 'pour la finition'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer l\'appareil',
                        'titre_en'       => 'Make the batter',
                        'description_fr' => 'Fouetter les œufs avec le sucre jusqu\'à blanchiment. Ajouter la farine, puis le lait, la crème, la vanille et le kirsch. La pâte doit être lisse et fluide, légèrement plus épaisse qu\'une pâte à crêpes.',
                        'description_en' => 'Whisk the eggs with the sugar until pale. Add the flour, then the milk, cream, vanilla and kirsch. The batter should be smooth and fluid, slightly thicker than crêpe batter.',
                    ],
                    [
                        'titre_fr'       => 'Monter et enfourner',
                        'titre_en'       => 'Assemble and bake',
                        'description_fr' => 'Beurrer généreusement un plat à gratin. Disposer les cerises entières en couche uniforme. Verser l\'appareil par-dessus. Enfourner à 180 °C pendant 35 à 40 minutes. Le clafoutis doit être gonflé et légèrement doré, encore tremblotant au centre.',
                        'description_en' => 'Generously butter a gratin dish. Arrange the whole cherries in an even layer. Pour the batter over. Bake at 180°C for 35 to 40 minutes. The clafoutis should be puffed and lightly golden, still slightly wobbly in the centre.',
                    ],
                    [
                        'titre_fr'       => 'Finition et service',
                        'titre_en'       => 'Finishing and serving',
                        'description_fr' => 'Laisser tiédir 10 minutes. Saupoudrer de sucre glace et servir tiède directement dans le plat. Le clafoutis retombe en refroidissant — c\'est normal.',
                        'description_en' => 'Allow to cool for 10 minutes. Dust with icing sugar and serve warm directly from the dish. The clafoutis will deflate as it cools — this is normal.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Ne pas dénoyauter les cerises : les noyaux libèrent un léger arôme d\'amande pendant la cuisson qui parfume délicatement l\'appareil.',
                        'description_en' => 'Do not pit the cherries: the stones release a subtle almond aroma during baking that gently flavours the batter.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],

            // ── 25. Gougères au comté ─────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Gougères au comté',
                    'titre_en'          => 'Comté cheese gougères',
                    'description_fr'    => 'Les petits choux bourguignons au fromage : une pâte à choux légère et croustillante parfumée au comté, incontournables à l\'apéritif.',
                    'description_en'    => 'The little Burgundian cheese choux: a light, crisp choux pastry flavoured with comté, the essential French aperitif bite.',
                    'categorie'         => 'aperitif',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 25,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Pâte à choux',  'qte' => 1,    'unite' => 'pièce',    'precision' => 'préparée à partir de 125 ml eau + 60 g beurre + 75 g farine + 3 œufs'],
                    ['nom' => 'Comté',         'qte' => 120,  'unite' => 'g',        'precision' => 'râpé finement, + 30 g pour parsemer'],
                    ['nom' => 'Eau',           'qte' => 125,  'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Beurre',        'qte' => 60,   'unite' => 'g',        'precision' => 'coupé en dés'],
                    ['nom' => 'Farine',        'qte' => 75,   'unite' => 'g',        'precision' => null],
                    ['nom' => 'Œuf',           'qte' => 3,    'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Noix de muscade','qte' => 1,   'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Sel',           'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',        'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Réaliser la panade (base de la pâte à choux)',
                        'titre_en'       => 'Make the panade (choux base)',
                        'description_fr' => 'Porter l\'eau, le beurre et le sel à ébullition. Hors du feu, verser la farine d\'un coup et mélanger vigoureusement. Remettre sur feu doux et dessécher la pâte en remuant 2 minutes jusqu\'à ce qu\'elle se détache des parois.',
                        'description_en' => 'Bring water, butter and salt to a boil. Off the heat, add the flour all at once and stir vigorously. Return to low heat and dry the paste for 2 minutes, stirring until it pulls away from the sides.',
                    ],
                    [
                        'titre_fr'       => 'Incorporer les œufs et le comté',
                        'titre_en'       => 'Add the eggs and comté',
                        'description_fr' => 'Laisser tiédir légèrement. Incorporer les œufs un à un en mélangeant bien entre chaque ajout — la pâte doit être souple et former un ruban. Ajouter 120 g de comté râpé, la muscade et le poivre.',
                        'description_en' => 'Allow to cool slightly. Beat in the eggs one at a time, mixing well between each addition — the paste should be supple and form a ribbon. Add 120 g grated comté, nutmeg and pepper.',
                    ],
                    [
                        'titre_fr'       => 'Dresser et cuire',
                        'titre_en'       => 'Pipe and bake',
                        'description_fr' => 'Dresser des boules de 4 cm à la poche à douille ou à la cuillère sur une plaque recouverte de papier cuisson. Parsemer du comté restant. Cuire à 200 °C pendant 20 à 25 minutes sans ouvrir le four. Les gougères doivent être bien gonflées et dorées.',
                        'description_en' => 'Pipe 4 cm balls onto a baking-paper-lined tray, or use a spoon. Scatter the remaining comté on top. Bake at 200°C for 20 to 25 minutes without opening the oven. The gougères should be well puffed and golden.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Ne jamais ouvrir le four pendant la cuisson : un choc thermique ferait retomber les gougères. Servez-les immédiatement à la sortie du four pour qu\'elles restent creuses et croustillantes.',
                        'description_en' => 'Never open the oven during baking: a temperature shock would deflate the gougères. Serve them immediately out of the oven so they stay hollow and crisp.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],
        ];

        foreach ($recettes as $data) {
            $r       = $data['recette'];
            $recette = IfRecette::create([
                ...$r,
                'slug' => IfRecette::generateSlug($r['titre_fr']),
            ]);

            foreach ($data['ingredients'] as $pos => $item) {
                $ingId  = $ing[$item['nom']]   ?? null;
                $unitId = $unit[$item['unite']] ?? null;
                if (! $ingId || ! $unitId) continue;
                IfRecetteIngredient::create([
                    'recette_id'      => $recette->id,
                    'ingredient_id'   => $ingId,
                    'quantite'        => $item['qte'],
                    'unite_id'        => $unitId,
                    'precision_libre' => $item['precision'],
                    'position'        => $pos,
                ]);
            }

            foreach ($data['etapes'] as $pos => $etape) {
                IfEtape::create([
                    'recette_id'     => $recette->id,
                    'position'       => $pos + 1,
                    'titre_fr'       => $etape['titre_fr'],
                    'titre_en'       => $etape['titre_en'],
                    'description_fr' => $etape['description_fr'],
                    'description_en' => $etape['description_en'],
                ]);
            }

            foreach ($data['astuces'] as $pos => $astuce) {
                IfAstuce::create([
                    'recette_id'     => $recette->id,
                    'description_fr' => $astuce['description_fr'],
                    'description_en' => $astuce['description_en'],
                    'position'       => $pos,
                ]);
            }

            if (! empty($data['regimes'])) {
                $ids = collect($data['regimes'])
                    ->map(fn($n) => $regime[$n] ?? null)
                    ->filter()
                    ->values()
                    ->toArray();
                $recette->regimes()->sync($ids);
            }
        }
    }
}
