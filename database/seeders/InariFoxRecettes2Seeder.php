<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\IfRecette;
use App\Models\IfRecetteIngredient;
use App\Models\IfEtape;
use App\Models\IfAstuce;

class InariFoxRecettes2Seeder extends Seeder
{
    public function run(): void
    {
        $ing    = DB::table('if_ingredients')->pluck('id', 'nom_fr');
        $unit   = DB::table('if_unites')->pluck('id', 'abreviation');
        $regime = DB::table('if_regimes')->pluck('id', 'nom_fr');

        $recettes = [

            // ── 11. Tartiflette ───────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Tartiflette au reblochon',
                    'titre_en'          => 'Tartiflette with reblochon',
                    'description_fr'    => 'Le gratin savoyard par excellence : des pommes de terre fondantes, des lardons dorés et un reblochon entier coulant sur le dessus.',
                    'description_en'    => 'The ultimate Savoyard gratin: melt-in-the-mouth potatoes, golden lardons and a whole runny reblochon on top.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 45,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Pomme de terre', 'qte' => 1.2,  'unite' => 'kg',       'precision' => 'à chair ferme, cuites'],
                    ['nom' => 'Reblochon',       'qte' => 1,    'unite' => 'pièce',    'precision' => 'entier (450 g environ)'],
                    ['nom' => 'Porc',            'qte' => 200,  'unite' => 'g',        'precision' => 'lardons fumés'],
                    ['nom' => 'Oignon',          'qte' => 2,    'unite' => 'pièce',    'precision' => 'émincé'],
                    ['nom' => 'Crème',           'qte' => 100,  'unite' => 'ml',       'precision' => 'fraîche épaisse'],
                    ['nom' => 'Vin blanc',       'qte' => 10,   'unite' => 'cl',       'precision' => 'sec de Savoie'],
                    ['nom' => 'Ail',             'qte' => 1,    'unite' => 'gousse',   'precision' => 'pour frotter le plat'],
                    ['nom' => 'Beurre',          'qte' => 15,   'unite' => 'g',        'precision' => 'pour le plat'],
                    ['nom' => 'Poivre',          'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer les pommes de terre et les lardons',
                        'titre_en'       => 'Prepare the potatoes and lardons',
                        'description_fr' => 'Cuire les pommes de terre en robe des champs 20 minutes. Les peler et les couper en rondelles épaisses. Faire revenir les lardons avec les oignons émincés dans une poêle jusqu\'à légère coloration. Déglacer au vin blanc.',
                        'description_en' => 'Boil potatoes in their skins for 20 minutes. Peel and cut into thick slices. Fry the lardons with the sliced onions in a pan until lightly coloured. Deglaze with white wine.',
                    ],
                    [
                        'titre_fr'       => 'Monter le gratin',
                        'titre_en'       => 'Assemble the gratin',
                        'description_fr' => 'Frotter le plat à gratin avec l\'ail puis le beurrer. Alterner une couche de pommes de terre, une couche de lardons-oignons. Poivrer. Verser la crème fraîche.',
                        'description_en' => 'Rub the gratin dish with garlic then butter it. Alternate a layer of potatoes, a layer of lardons and onions. Season with pepper. Pour over the crème fraîche.',
                    ],
                    [
                        'titre_fr'       => 'Déposer le reblochon et gratiner',
                        'titre_en'       => 'Add the reblochon and bake',
                        'description_fr' => 'Couper le reblochon en deux dans l\'épaisseur. Le déposer croûte vers le haut sur les pommes de terre. Enfourner à 200 °C pendant 25 à 30 minutes jusqu\'à ce que le fromage soit bien fondu et doré.',
                        'description_en' => 'Cut the reblochon in half horizontally. Place it rind-side up on top of the potatoes. Bake at 200°C for 25 to 30 minutes until the cheese is well melted and golden.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Servez directement dans le plat de cuisson, accompagné d\'une salade verte et de cornichons. Une charcuterie de Savoie en entrée est bienvenue.',
                        'description_en' => 'Serve directly from the baking dish, with a green salad and gherkins. A Savoyard charcuterie starter is a perfect pairing.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 12. Confit de canard ──────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Confit de canard maison',
                    'titre_en'          => 'Homemade duck confit',
                    'description_fr'    => 'La recette de conservation gasconne par excellence : des cuisses de canard salées puis cuites longuement dans leur propre graisse jusqu\'à tendreté absolue.',
                    'description_en'    => 'The quintessential Gascon preservation recipe: duck legs salted then slowly cooked in their own fat until perfectly tender.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 15,
                    'temps_cuisson'     => 120,
                    'temps_repos'       => 720,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Canard',          'qte' => 4,    'unite' => 'pièce',    'precision' => 'cuisses'],
                    ['nom' => 'Graisse de canard','qte' => 500,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Sel',             'qte' => 30,   'unite' => 'g',        'precision' => 'gros sel'],
                    ['nom' => 'Ail',             'qte' => 4,    'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Thym',            'qte' => 4,    'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Laurier',         'qte' => 3,    'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Poivre',          'qte' => 1,    'unite' => 'c. à c.',  'precision' => 'noir concassé'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Saler les cuisses',
                        'titre_en'       => 'Salt the legs',
                        'description_fr' => 'Frotter les cuisses de canard avec le gros sel, l\'ail écrasé, le thym, le laurier et le poivre. Placer dans un plat, couvrir et réfrigérer au moins 12 heures (idéalement 24 h).',
                        'description_en' => 'Rub the duck legs with coarse salt, crushed garlic, thyme, bay leaf and pepper. Place in a dish, cover and refrigerate for at least 12 hours (ideally 24 h).',
                    ],
                    [
                        'titre_fr'       => 'Rincer et sécher',
                        'titre_en'       => 'Rinse and dry',
                        'description_fr' => 'Rincer les cuisses pour enlever l\'excès de sel. Bien les sécher avec du papier absorbant.',
                        'description_en' => 'Rinse the legs to remove excess salt. Pat them thoroughly dry with kitchen paper.',
                    ],
                    [
                        'titre_fr'       => 'Confire dans la graisse',
                        'titre_en'       => 'Confit in the fat',
                        'description_fr' => 'Faire fondre la graisse de canard dans une cocotte. Plonger les cuisses — elles doivent être entièrement immergées. Cuire à très basse température (85-90 °C) pendant 1h30 à 2h. La viande est prête quand elle se détache facilement de l\'os.',
                        'description_en' => 'Melt the duck fat in a casserole. Submerge the legs completely. Cook at very low temperature (85-90°C) for 1.5 to 2 hours. The meat is ready when it pulls easily from the bone.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Pour une peau croustillante, sortez les cuisses de la graisse et faites-les saisir côté peau dans une poêle très chaude 5 minutes sans matière grasse.',
                        'description_en' => 'For crispy skin, remove the legs from the fat and sear them skin-side down in a very hot dry pan for 5 minutes.',
                    ],
                ],
                'regimes' => ['Sans gluten'],
            ],

            // ── 13. Bouillabaisse ─────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Bouillabaisse marseillaise',
                    'titre_en'          => 'Marseille bouillabaisse',
                    'description_fr'    => 'La soupe de poisson emblématique de Marseille : un bouillon safranné avec plusieurs poissons de roche, servi avec une rouille et des croûtons.',
                    'description_en'    => 'Marseille\'s iconic fish soup: a saffron broth with several rock fish, served with rouille and croutons.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'difficile',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 40,
                    'temps_cuisson'     => 60,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Rouget',            'qte' => 400,  'unite' => 'g',        'precision' => 'vidé et écaillé'],
                    ['nom' => 'Bar',               'qte' => 400,  'unite' => 'g',        'precision' => 'en tronçons'],
                    ['nom' => 'Dorade',            'qte' => 400,  'unite' => 'g',        'precision' => 'en tronçons'],
                    ['nom' => 'Crevette',          'qte' => 200,  'unite' => 'g',        'precision' => 'grosses, entières'],
                    ['nom' => 'Bouillon de poisson','qte' => 1.5, 'unite' => 'l',        'precision' => null],
                    ['nom' => 'Tomate',            'qte' => 4,    'unite' => 'pièce',    'precision' => 'concassées'],
                    ['nom' => 'Oignon',            'qte' => 2,    'unite' => 'pièce',    'precision' => 'émincé'],
                    ['nom' => 'Fenouil',           'qte' => 1,    'unite' => 'pièce',    'precision' => 'émincé'],
                    ['nom' => 'Ail',               'qte' => 4,    'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Safran',            'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Huile d\'olive',    'qte' => 4,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Vin blanc',         'qte' => 20,   'unite' => 'cl',       'precision' => null],
                    ['nom' => 'Concentré de tomate','qte' => 2,   'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Pain',              'qte' => 12,   'unite' => 'tranche',  'precision' => 'baguette, grillé'],
                    ['nom' => 'Thym',              'qte' => 2,    'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Laurier',           'qte' => 2,    'unite' => 'feuille',  'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer le fond',
                        'titre_en'       => 'Make the base',
                        'description_fr' => 'Faire revenir oignons, fenouil et ail dans l\'huile d\'olive 10 minutes. Ajouter les tomates concassées, le concentré, le vin blanc, le safran, le thym et le laurier. Verser le bouillon de poisson et laisser mijoter 30 minutes.',
                        'description_en' => 'Sauté onions, fennel and garlic in olive oil for 10 minutes. Add concassed tomatoes, paste, white wine, saffron, thyme and bay leaf. Pour in the fish broth and simmer for 30 minutes.',
                    ],
                    [
                        'titre_fr'       => 'Cuire les poissons',
                        'titre_en'       => 'Cook the fish',
                        'description_fr' => 'Porter le bouillon à vive ébullition. Ajouter d\'abord les poissons à chair ferme (rouget, dorade) et cuire 5 minutes. Ajouter ensuite le bar et les crevettes, cuire encore 5 minutes. Ne pas trop mélanger pour ne pas casser les poissons.',
                        'description_en' => 'Bring the broth to a vigorous boil. Add the firm-fleshed fish first (rouget, bream) and cook 5 minutes. Then add the sea bass and prawns and cook 5 more minutes. Stir gently to avoid breaking up the fish.',
                    ],
                    [
                        'titre_fr'       => 'Préparer la rouille et servir',
                        'titre_en'       => 'Make the rouille and serve',
                        'description_fr' => 'Écraser 2 gousses d\'ail avec une pincée de sel, ajouter 1 jaune d\'œuf, du safran, et monter à l\'huile d\'olive comme une mayonnaise. Servir la bouillabaisse avec les croûtons frottés à l\'ail et la rouille à part.',
                        'description_en' => 'Crush 2 garlic cloves with a pinch of salt, add 1 egg yolk, saffron, and whisk in olive oil like a mayonnaise. Serve the bouillabaisse with garlic-rubbed croutons and rouille on the side.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'L\'ébullition forte est indispensable : c\'est elle qui émulsionne la graisse du poisson dans le bouillon et lui donne sa couleur orangée caractéristique.',
                        'description_en' => 'A vigorous boil is essential: it emulsifies the fish fat into the broth and gives it its characteristic orange colour.',
                    ],
                ],
                'regimes' => ['Sans gluten'],
            ],

            // ── 14. Sole meunière ─────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Sole meunière',
                    'titre_en'          => 'Sole meunière',
                    'description_fr'    => 'Un des grands classiques de la cuisine française : une sole farineuse dorée dans le beurre noisette, nappée de jus de citron et de persil frais.',
                    'description_en'    => 'One of the great French classics: a floured sole pan-fried in brown butter, drizzled with lemon juice and fresh parsley.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 2,
                    'temps_preparation' => 10,
                    'temps_cuisson'     => 10,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Sole',    'qte' => 2,    'unite' => 'pièce',    'precision' => 'entière, environ 300 g, parée'],
                    ['nom' => 'Beurre',  'qte' => 80,   'unite' => 'g',        'precision' => null],
                    ['nom' => 'Farine',  'qte' => 4,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Citron',  'qte' => 1,    'unite' => 'pièce',    'precision' => 'jus'],
                    ['nom' => 'Persil',  'qte' => 4,    'unite' => 'branche',  'precision' => 'frais, haché'],
                    ['nom' => 'Sel',     'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',  'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Fariner les soles',
                        'titre_en'       => 'Flour the soles',
                        'description_fr' => 'Assaisonner les soles des deux côtés. Les passer dans la farine en secouant pour enlever l\'excès.',
                        'description_en' => 'Season the soles on both sides. Coat them in flour, shaking off the excess.',
                    ],
                    [
                        'titre_fr'       => 'Cuire au beurre noisette',
                        'titre_en'       => 'Cook in brown butter',
                        'description_fr' => 'Faire mousser 60 g de beurre dans une grande poêle. Cuire les soles 3 à 4 minutes par côté à feu moyen-vif. La peau doit être bien dorée. Déposer sur les assiettes chaudes.',
                        'description_en' => 'Foam 60 g butter in a large pan. Cook the soles for 3 to 4 minutes per side over medium-high heat. The skin should be well golden. Place on warm plates.',
                    ],
                    [
                        'titre_fr'       => 'Préparer le beurre citron',
                        'titre_en'       => 'Make the lemon butter',
                        'description_fr' => 'Dans la même poêle, faire chauffer les 20 g de beurre restants jusqu\'à coloration noisette. Hors du feu, ajouter le jus de citron et le persil. Napper immédiatement les soles et servir.',
                        'description_en' => 'In the same pan, heat the remaining 20 g of butter until nut-brown. Off the heat, add lemon juice and parsley. Immediately pour over the soles and serve.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'La sole doit être servie à la seconde — le beurre noisette se fige très vite. Préparez les assiettes et les accompagnements avant de cuire le poisson.',
                        'description_en' => 'Sole must be served immediately — brown butter sets very quickly. Prepare the plates and sides before cooking the fish.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 15. Navarin d'agneau ──────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Navarin d\'agneau printanier',
                    'titre_en'          => 'Spring lamb navarin',
                    'description_fr'    => 'Le plat de printemps français par excellence : de l\'agneau mijoté avec des légumes nouveaux, petits pois, navets et carottes dans un bouillon parfumé.',
                    'description_en'    => 'The ultimate French spring dish: lamb simmered with baby vegetables, peas, turnips and carrots in a fragrant broth.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 90,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Agneau',           'qte' => 1.2,  'unite' => 'kg',       'precision' => 'épaule et collier, en morceaux'],
                    ['nom' => 'Carotte',           'qte' => 4,    'unite' => 'pièce',    'precision' => 'en tronçons'],
                    ['nom' => 'Navet',             'qte' => 4,    'unite' => 'pièce',    'precision' => 'en quartiers'],
                    ['nom' => 'Pomme de terre',    'qte' => 4,    'unite' => 'pièce',    'precision' => 'petites, entières'],
                    ['nom' => 'Petit pois',        'qte' => 200,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Oignon',            'qte' => 2,    'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Ail',               'qte' => 3,    'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Tomate',            'qte' => 2,    'unite' => 'pièce',    'precision' => 'concassées'],
                    ['nom' => 'Bouillon de veau',  'qte' => 500,  'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Farine',            'qte' => 2,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Beurre',            'qte' => 30,   'unite' => 'g',        'precision' => null],
                    ['nom' => 'Thym',              'qte' => 3,    'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Laurier',           'qte' => 2,    'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Persil',            'qte' => 4,    'unite' => 'branche',  'precision' => 'haché, pour le service'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Colorer et fariner l\'agneau',
                        'titre_en'       => 'Colour and flour the lamb',
                        'description_fr' => 'Faire dorer les morceaux d\'agneau dans le beurre sur toutes les faces. Saupoudrer de farine, mélanger 2 minutes. Ajouter les oignons, l\'ail et les tomates. Mouiller avec le bouillon.',
                        'description_en' => 'Brown the lamb pieces in butter on all sides. Sprinkle with flour, stir for 2 minutes. Add onions, garlic and tomatoes. Pour in the broth.',
                    ],
                    [
                        'titre_fr'       => 'Mijoter avec les légumes racines',
                        'titre_en'       => 'Simmer with root vegetables',
                        'description_fr' => 'Ajouter thym, laurier, carottes et navets. Couvrir et mijoter à feu doux 45 minutes.',
                        'description_en' => 'Add thyme, bay leaf, carrots and turnips. Cover and simmer over low heat for 45 minutes.',
                    ],
                    [
                        'titre_fr'       => 'Finir avec les légumes nouveaux',
                        'titre_en'       => 'Finish with spring vegetables',
                        'description_fr' => 'Ajouter les pommes de terre 20 minutes avant la fin, les petits pois 5 minutes avant. Rectifier l\'assaisonnement et parsemer de persil frais.',
                        'description_en' => 'Add potatoes 20 minutes before the end, peas 5 minutes before. Adjust seasoning and scatter with fresh parsley.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Les morceaux avec os (collier, côtelettes) donnent plus de goût au bouillon que l\'épaule seule.',
                        'description_en' => 'Bone-in cuts (neck, chops) give more flavour to the broth than shoulder alone.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 16. Pot-au-feu ────────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Pot-au-feu',
                    'titre_en'          => 'Pot-au-feu',
                    'description_fr'    => 'Le plat national français par excellence : du bœuf bouilli longuement avec des légumes d\'hiver dans un bouillon clair et parfumé.',
                    'description_en'    => 'The quintessential French national dish: beef slowly simmered with winter vegetables in a clear and fragrant broth.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 180,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Bœuf',          'qte' => 1.5,  'unite' => 'kg',       'precision' => 'plat de côtes, paleron et os à moelle'],
                    ['nom' => 'Carotte',       'qte' => 4,    'unite' => 'pièce',    'precision' => 'entières'],
                    ['nom' => 'Navet',         'qte' => 3,    'unite' => 'pièce',    'precision' => 'en quartiers'],
                    ['nom' => 'Poireau',       'qte' => 3,    'unite' => 'pièce',    'precision' => 'ficelés en botte'],
                    ['nom' => 'Céleri',        'qte' => 3,    'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Oignon',        'qte' => 2,    'unite' => 'pièce',    'precision' => 'piqué de clous de girofle'],
                    ['nom' => 'Pomme de terre','qte' => 6,    'unite' => 'pièce',    'precision' => 'à chair ferme'],
                    ['nom' => 'Ail',           'qte' => 4,    'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Clou de girofle','qte' => 3,   'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Thym',          'qte' => 3,    'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Laurier',       'qte' => 3,    'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Sel',           'qte' => 1,    'unite' => 'c. à s.',  'precision' => 'gros sel'],
                    ['nom' => 'Poivre',        'qte' => 1,    'unite' => 'pincée',   'precision' => 'grains'],
                    ['nom' => 'Moutarde',      'qte' => 1,    'unite' => 'pièce',    'precision' => 'pot, pour le service'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Démarrer à l\'eau froide',
                        'titre_en'       => 'Start in cold water',
                        'description_fr' => 'Mettre la viande dans une grande marmite, couvrir d\'eau froide. Porter lentement à ébullition en écumant soigneusement les impuretés qui remontent en surface.',
                        'description_en' => 'Place the meat in a large pot, cover with cold water. Bring slowly to a boil, carefully skimming the impurities that rise to the surface.',
                    ],
                    [
                        'titre_fr'       => 'Ajouter les aromates et mijoter',
                        'titre_en'       => 'Add aromatics and simmer',
                        'description_fr' => 'Ajouter l\'oignon piqué, l\'ail, le thym, le laurier, les grains de poivre, le gros sel. Faire mijoter à très faible ébullition 2 heures en écumant de temps en temps.',
                        'description_en' => 'Add the studded onion, garlic, thyme, bay leaf, peppercorns and coarse salt. Simmer at a very gentle boil for 2 hours, skimming occasionally.',
                    ],
                    [
                        'titre_fr'       => 'Cuire les légumes et servir',
                        'titre_en'       => 'Cook the vegetables and serve',
                        'description_fr' => 'Ajouter carottes, navets, poireaux, céleri et cuire encore 45 minutes. Ajouter les pommes de terre 20 minutes avant la fin. Servir la viande avec les légumes, le bouillon à part en tasse, moutarde et gros sel sur la table.',
                        'description_en' => 'Add carrots, turnips, leeks, celery and cook 45 more minutes. Add potatoes 20 minutes before the end. Serve the meat with the vegetables, broth separately in cups, mustard and coarse salt on the table.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'L\'écumage des premières 30 minutes est crucial pour obtenir un bouillon limpide et sans amertume.',
                        'description_en' => 'Skimming during the first 30 minutes is crucial to obtain a clear, bitter-free broth.',
                    ],
                ],
                'regimes' => ['Sans gluten'],
            ],

            // ── 17. Flamiche aux poireaux ─────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Flamiche aux poireaux',
                    'titre_en'          => 'Leek flamiche',
                    'description_fr'    => 'La tarte salée du Nord de la France : une pâte brisée généreusement garnie de poireaux fondus à la crème et au comté.',
                    'description_en'    => 'The savoury tart of northern France: a shortcrust pastry generously filled with cream-stewed leeks and comté.',
                    'categorie'         => 'entree',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 25,
                    'temps_cuisson'     => 45,
                    'temps_repos'       => 30,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Poireau',    'qte' => 1,    'unite' => 'kg',       'precision' => 'en fines rondelles, blanc et vert tendre'],
                    ['nom' => 'Crème',     'qte' => 200,  'unite' => 'ml',       'precision' => 'fraîche épaisse'],
                    ['nom' => 'Œuf',       'qte' => 3,    'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Comté',     'qte' => 100,  'unite' => 'g',        'precision' => 'râpé'],
                    ['nom' => 'Beurre',    'qte' => 100,  'unite' => 'g',        'precision' => 'dont 50 g pour la pâte'],
                    ['nom' => 'Farine',    'qte' => 200,  'unite' => 'g',        'precision' => 'pour la pâte brisée'],
                    ['nom' => 'Noix de muscade', 'qte' => 1, 'unite' => 'pincée', 'precision' => null],
                    ['nom' => 'Sel',       'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',    'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Fondre les poireaux',
                        'titre_en'       => 'Melt the leeks',
                        'description_fr' => 'Faire fondre 50 g de beurre dans une sauteuse. Ajouter les poireaux, saler, poivrer. Cuire à feu doux 20 minutes en couvrant jusqu\'à ce qu\'ils soient tendres et sans coloration. Laisser refroidir légèrement.',
                        'description_en' => 'Melt 50 g butter in a sauté pan. Add the leeks, season. Cook covered over low heat for 20 minutes until soft and uncoloured. Allow to cool slightly.',
                    ],
                    [
                        'titre_fr'       => 'Préparer la pâte et l\'appareil',
                        'titre_en'       => 'Make the pastry and filling',
                        'description_fr' => 'Préparer une pâte brisée avec la farine, 50 g de beurre froid et un peu d\'eau froide. Foncer le moule, piquer et précuire à blanc 10 minutes à 180 °C. Battre les œufs avec la crème, la muscade, puis incorporer les poireaux et le comté.',
                        'description_en' => 'Make a shortcrust with flour, 50 g cold butter and a little cold water. Line the tin, prick and blind-bake 10 minutes at 180°C. Beat eggs with cream, nutmeg, then fold in the leeks and comté.',
                    ],
                    [
                        'titre_fr'       => 'Garnir et cuire',
                        'titre_en'       => 'Fill and bake',
                        'description_fr' => 'Verser l\'appareil dans le fond précuit. Enfourner à 180 °C pendant 30 à 35 minutes jusqu\'à ce que la flamiche soit bien prise et dorée.',
                        'description_en' => 'Pour the filling into the pre-baked shell. Bake at 180°C for 30 to 35 minutes until the flamiche is set and golden.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Les poireaux doivent être bien égouttés avant d\'être ajoutés à l\'appareil — l\'excès d\'eau détremperait la pâte.',
                        'description_en' => 'The leeks must be well drained before adding to the filling — excess water would make the pastry soggy.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],

            // ── 18. Crêpes bretonnes ──────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Crêpes bretonnes au beurre',
                    'titre_en'          => 'Breton butter crêpes',
                    'description_fr'    => 'La recette de crêpes à la française : fines, légères et dorées, parfumées au beurre fondu et à la vanille, servies au sucre et au citron.',
                    'description_en'    => 'The French crêpe recipe: thin, light and golden, scented with melted butter and vanilla, served with sugar and lemon.',
                    'categorie'         => 'dessert',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 10,
                    'temps_cuisson'     => 30,
                    'temps_repos'       => 60,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Farine',      'qte' => 250,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Œuf',         'qte' => 3,    'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Lait',        'qte' => 500,  'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Beurre',      'qte' => 50,   'unite' => 'g',        'precision' => 'fondu'],
                    ['nom' => 'Sucre blanc', 'qte' => 1,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Vanille',     'qte' => 1,    'unite' => 'pièce',    'precision' => 'gousse ou extrait'],
                    ['nom' => 'Sel',         'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Citron',      'qte' => 2,    'unite' => 'pièce',    'precision' => 'jus, pour le service'],
                    ['nom' => 'Sucre blanc', 'qte' => 4,    'unite' => 'c. à s.',  'precision' => 'pour le service'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer la pâte',
                        'titre_en'       => 'Make the batter',
                        'description_fr' => 'Mélanger la farine, le sucre et le sel. Creuser un puits et ajouter les œufs. Incorporer le lait progressivement en fouettant. Ajouter le beurre fondu et la vanille. Laisser reposer 1 heure au réfrigérateur.',
                        'description_en' => 'Mix flour, sugar and salt. Make a well and add the eggs. Gradually whisk in the milk. Add melted butter and vanilla. Rest for 1 hour in the refrigerator.',
                    ],
                    [
                        'titre_fr'       => 'Cuire les crêpes',
                        'titre_en'       => 'Cook the crêpes',
                        'description_fr' => 'Chauffer une poêle antiadhésive légèrement beurrée à feu moyen-vif. Verser une petite louche de pâte et incliner la poêle pour étaler en cercle mince. Cuire 1 minute, retourner et cuire 30 secondes de l\'autre côté.',
                        'description_en' => 'Heat a lightly buttered non-stick pan over medium-high heat. Pour in a small ladle of batter and tilt the pan to spread into a thin circle. Cook 1 minute, flip and cook 30 seconds on the other side.',
                    ],
                    [
                        'titre_fr'       => 'Servir',
                        'titre_en'       => 'Serve',
                        'description_fr' => 'Servir les crêpes chaudes avec du sucre saupoudré et un filet de jus de citron. Plier en quatre ou en rouleau.',
                        'description_en' => 'Serve the hot crêpes with a sprinkle of sugar and a drizzle of lemon juice. Fold into quarters or roll.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'La première crêpe est souvent ratée — c\'est normal, elle sert à calibrer la poêle. Ne vous en préoccupez pas.',
                        'description_en' => 'The first crêpe is often a failure — that\'s normal, it serves to calibrate the pan. Don\'t worry about it.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],

            // ── 19. Tarte au citron meringuée ─────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Tarte au citron meringuée',
                    'titre_en'          => 'Lemon meringue tart',
                    'description_fr'    => 'Un dessert acidulé et aérien : une pâte sablée croustillante, une crème citron intense et une meringue italienne moelleuse légèrement dorée.',
                    'description_en'    => 'A tangy and light dessert: crisp shortbread pastry, intense lemon cream and soft Italian meringue lightly browned.',
                    'categorie'         => 'dessert',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 8,
                    'temps_preparation' => 40,
                    'temps_cuisson'     => 30,
                    'temps_repos'       => 120,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Farine',      'qte' => 200,  'unite' => 'g',        'precision' => 'pour la pâte sablée'],
                    ['nom' => 'Beurre',      'qte' => 100,  'unite' => 'g',        'precision' => 'froid, pour la pâte'],
                    ['nom' => 'Sucre glace', 'qte' => 60,   'unite' => 'g',        'precision' => 'pour la pâte'],
                    ['nom' => 'Citron',      'qte' => 4,    'unite' => 'pièce',    'precision' => 'jus et zeste'],
                    ['nom' => 'Œuf',         'qte' => 6,    'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Sucre blanc', 'qte' => 200,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Beurre',      'qte' => 80,   'unite' => 'g',        'precision' => 'pour la crème citron'],
                    ['nom' => 'Maïzena',     'qte' => 1,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Eau',         'qte' => 5,    'unite' => 'cl',       'precision' => 'pour le sirop de meringue'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Pâte sablée et cuisson à blanc',
                        'titre_en'       => 'Shortbread pastry and blind-bake',
                        'description_fr' => 'Sabler la farine avec 100 g de beurre froid et le sucre glace. Ajouter 1 jaune d\'œuf et un peu d\'eau. Former une boule, réfrigérer 30 minutes. Foncer le moule, piquer le fond, cuire à blanc 20 minutes à 170 °C.',
                        'description_en' => 'Rub flour with 100 g cold butter and icing sugar to a sandy texture. Add 1 egg yolk and a little water. Form a ball, refrigerate 30 minutes. Line the tin, prick the base, blind-bake 20 minutes at 170°C.',
                    ],
                    [
                        'titre_fr'       => 'Crème citron (lemon curd)',
                        'titre_en'       => 'Lemon curd',
                        'description_fr' => 'Fouetter 4 œufs avec 150 g de sucre, les zestes et jus des citrons, et la maïzena. Cuire à feu doux en remuant jusqu\'à épaississement. Hors du feu, incorporer 80 g de beurre en morceaux. Verser dans le fond de tarte refroidi.',
                        'description_en' => 'Whisk 4 eggs with 150 g sugar, lemon zest and juice, and cornstarch. Cook over low heat stirring until thickened. Off the heat, whisk in 80 g butter in pieces. Pour into the cooled tart shell.',
                    ],
                    [
                        'titre_fr'       => 'Meringue italienne et finition',
                        'titre_en'       => 'Italian meringue and finishing',
                        'description_fr' => 'Monter 2 blancs en neige. Cuire 50 g de sucre avec 5 cl d\'eau à 121 °C et le verser en filet sur les blancs en continuant de battre jusqu\'à refroidissement. Déposer la meringue sur la tarte et dorer au chalumeau.',
                        'description_en' => 'Whisk 2 egg whites to stiff peaks. Cook 50 g sugar with 5 cl water to 121°C and pour in a thin stream onto the whites while beating until cooled. Spread the meringue over the tart and torch until golden.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'La crème citron doit être versée sur un fond de tarte complètement refroidi — sinon la pâte ramollit et la crème ne prend pas bien.',
                        'description_en' => 'The lemon curd must be poured onto a completely cooled tart shell — otherwise the pastry softens and the cream doesn\'t set properly.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],

            // ── 20. Île flottante ─────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Île flottante',
                    'titre_en'          => 'Floating island',
                    'description_fr'    => 'Un dessert français classique et léger : des blancs en neige pochés flottant sur une crème anglaise à la vanille, nappés d\'un caramel ambré.',
                    'description_en'    => 'A classic light French dessert: poached meringue floating on vanilla custard, drizzled with amber caramel.',
                    'categorie'         => 'dessert',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 25,
                    'temps_cuisson'     => 20,
                    'temps_repos'       => 60,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Œuf',       'qte' => 4,    'unite' => 'pièce',    'precision' => 'blancs et jaunes séparés'],
                    ['nom' => 'Lait',      'qte' => 500,  'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Sucre blanc','qte' => 150,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Vanille',   'qte' => 1,    'unite' => 'pièce',    'precision' => 'gousse'],
                    ['nom' => 'Cassonade', 'qte' => 100,  'unite' => 'g',        'precision' => 'pour le caramel'],
                    ['nom' => 'Crème de tartre', 'qte' => 1, 'unite' => 'pincée', 'precision' => 'pour serrer les blancs'],
                    ['nom' => 'Amande',    'qte' => 30,   'unite' => 'g',        'precision' => 'effilées, torréfiées'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer la crème anglaise',
                        'titre_en'       => 'Make the custard',
                        'description_fr' => 'Infuser la vanille dans le lait chaud. Fouetter les jaunes avec 80 g de sucre. Verser le lait filtré en filet sur les jaunes, puis remettre sur feu doux en remuant jusqu\'à ce que la crème nappe la cuillère (82 °C). Laisser refroidir.',
                        'description_en' => 'Infuse vanilla in hot milk. Whisk yolks with 80 g sugar. Pour the strained milk in a thin stream onto the yolks, then cook over low heat stirring until the custard coats a spoon (82°C). Allow to cool.',
                    ],
                    [
                        'titre_fr'       => 'Pocher les blancs en neige',
                        'titre_en'       => 'Poach the meringues',
                        'description_fr' => 'Monter les blancs en neige ferme avec la crème de tartre et 70 g de sucre. Former des quenelles et les pocher dans du lait frémissant 2 minutes de chaque côté. Égoutter sur un linge.',
                        'description_en' => 'Whisk egg whites to stiff peaks with cream of tartar and 70 g sugar. Shape into quenelles and poach in simmering milk for 2 minutes each side. Drain on a cloth.',
                    ],
                    [
                        'titre_fr'       => 'Caramel et dressage',
                        'titre_en'       => 'Caramel and plating',
                        'description_fr' => 'Faire fondre la cassonade à sec dans une casserole jusqu\'à caramel ambré. Verser la crème anglaise dans les bols, déposer les îles flottantes, napper de caramel et parsemer d\'amandes effilées torréfiées.',
                        'description_en' => 'Melt the cane sugar dry in a pan until amber caramel. Pour the custard into bowls, place the floating islands on top, drizzle with caramel and scatter with toasted flaked almonds.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'La crème anglaise ne doit jamais bouillir au-delà de 84 °C — elle trancherait. Si cela arrive, mixez-la immédiatement pour la rattraper.',
                        'description_en' => 'The custard must never boil above 84°C — it will curdle. If it does, immediately blend it to rescue it.',
                    ],
                ],
                'regimes' => ['Végétarien', 'Sans gluten'],
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
