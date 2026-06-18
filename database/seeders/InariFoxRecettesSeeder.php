<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\IfRecette;
use App\Models\IfRecetteIngredient;
use App\Models\IfEtape;
use App\Models\IfAstuce;

class InariFoxRecettesSeeder extends Seeder
{
    public function run(): void
    {
        $ing    = DB::table('if_ingredients')->pluck('id', 'nom_fr');
        $unit   = DB::table('if_unites')->pluck('id', 'abreviation');
        $regime = DB::table('if_regimes')->pluck('id', 'nom_fr');

        $recettes = [

            // ── 1. Bœuf bourguignon ───────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Bœuf bourguignon',
                    'titre_en'          => 'Beef bourguignon',
                    'description_fr'    => 'Le grand classique de la cuisine française mijotée : du bœuf fondant braisé au vin rouge de Bourgogne avec des lardons, champignons et carottes.',
                    'description_en'    => 'The great classic of French braised cuisine: melt-in-the-mouth beef slow-cooked in Burgundy red wine with lardons, mushrooms and carrots.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 30,
                    'temps_cuisson'     => 180,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Bœuf',                'qte' => 1.2,  'unite' => 'kg',       'precision' => 'paleron ou bourguignon, en cubes'],
                    ['nom' => 'Vin rouge',            'qte' => 75,   'unite' => 'cl',       'precision' => 'Bourgogne'],
                    ['nom' => 'Porc',                 'qte' => 200,  'unite' => 'g',        'precision' => 'lardons'],
                    ['nom' => 'Champignon de Paris',  'qte' => 300,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Carotte',              'qte' => 3,    'unite' => 'pièce',    'precision' => 'en rondelles'],
                    ['nom' => 'Oignon',               'qte' => 2,    'unite' => 'pièce',    'precision' => 'émincé'],
                    ['nom' => 'Ail',                  'qte' => 3,    'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Bouillon de bœuf',     'qte' => 300,  'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Concentré de tomate',  'qte' => 1,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Farine',               'qte' => 2,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Beurre',               'qte' => 30,   'unite' => 'g',        'precision' => null],
                    ['nom' => 'Huile de tournesol',   'qte' => 2,    'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Thym',                 'qte' => 3,    'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Laurier',              'qte' => 2,    'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Sel',                  'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',               'qte' => 1,    'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Faire revenir et fariner',
                        'titre_en'       => 'Brown and flour',
                        'description_fr' => 'Faire dorer les lardons dans la cocotte avec l\'huile et le beurre. Réserver. Dans la même cocotte, saisir les cubes de bœuf en plusieurs fois jusqu\'à coloration sur toutes les faces. Saupoudrer de farine, mélanger 1 minute.',
                        'description_en' => 'Brown the lardons in the casserole with oil and butter. Set aside. In the same pot, sear the beef cubes in batches until coloured on all sides. Sprinkle with flour and stir for 1 minute.',
                    ],
                    [
                        'titre_fr'       => 'Déglacer et braiser',
                        'titre_en'       => 'Deglaze and braise',
                        'description_fr' => 'Ajouter les oignons, les carottes, l\'ail et le concentré de tomate. Verser le vin rouge et le bouillon. Remettre les lardons, ajouter thym et laurier. Porter à ébullition, couvrir et laisser mijoter à feu très doux 2h30 à 3h.',
                        'description_en' => 'Add onions, carrots, garlic and tomato paste. Pour in the red wine and broth. Return the lardons, add thyme and bay leaf. Bring to a boil, cover and simmer over very low heat for 2.5 to 3 hours.',
                    ],
                    [
                        'titre_fr'       => 'Ajouter les champignons',
                        'titre_en'       => 'Add the mushrooms',
                        'description_fr' => 'Faire sauter les champignons à part dans un peu de beurre. Les ajouter dans la cocotte 30 minutes avant la fin de cuisson. Rectifier l\'assaisonnement.',
                        'description_en' => 'Sauté the mushrooms separately in a little butter. Add them to the casserole 30 minutes before the end of cooking. Adjust seasoning.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Préparé la veille et réchauffé le lendemain, le bœuf bourguignon n\'en est que meilleur — les saveurs ont le temps de se développer.',
                        'description_en' => 'Made the day before and reheated the next day, beef bourguignon is even better — the flavours have time to develop.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 2. Blanquette de veau ─────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Blanquette de veau aux champignons',
                    'titre_en'          => 'Veal blanquette with mushrooms',
                    'description_fr'    => 'Un plat mijoté tout en douceur : du veau moelleux nappé d\'une sauce veloutée à la crème et au citron, avec des champignons et carottes.',
                    'description_en'    => 'A gently simmered dish: tender veal coated in a velvety cream and lemon sauce, with mushrooms and carrots.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 90,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Veau',                'qte' => 1,   'unite' => 'kg',       'precision' => 'épaule ou tendron, en cubes'],
                    ['nom' => 'Champignon de Paris',  'qte' => 250, 'unite' => 'g',        'precision' => null],
                    ['nom' => 'Carotte',              'qte' => 3,   'unite' => 'pièce',    'precision' => 'en tronçons'],
                    ['nom' => 'Oignon',               'qte' => 2,   'unite' => 'pièce',    'precision' => null],
                    ['nom' => 'Crème',                'qte' => 200, 'unite' => 'ml',       'precision' => 'fraîche épaisse'],
                    ['nom' => 'Œuf',                  'qte' => 2,   'unite' => 'pièce',    'precision' => 'jaunes seulement'],
                    ['nom' => 'Beurre',               'qte' => 40,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Farine',               'qte' => 3,   'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Citron',               'qte' => 1,   'unite' => 'pièce',    'precision' => 'jus'],
                    ['nom' => 'Eau',                  'qte' => 1,   'unite' => 'l',        'precision' => null],
                    ['nom' => 'Laurier',              'qte' => 2,   'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Thym',                 'qte' => 2,   'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Noix de muscade',      'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Sel',                  'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',               'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Blanchir et cuire le veau',
                        'titre_en'       => 'Blanch and cook the veal',
                        'description_fr' => 'Plonger les cubes de veau dans l\'eau froide, porter à ébullition 2 minutes et égoutter — c\'est le blanchiment. Couvrir à nouveau d\'eau froide avec les carottes, oignons, laurier, thym, sel. Mijoter 1 h à feu doux.',
                        'description_en' => 'Plunge the veal cubes in cold water, bring to a boil for 2 minutes and drain — this is the blanching step. Cover again with cold water with carrots, onions, bay leaf, thyme, salt. Simmer for 1 hour over low heat.',
                    ],
                    [
                        'titre_fr'       => 'Préparer le velouté',
                        'titre_en'       => 'Make the velouté',
                        'description_fr' => 'Faire fondre le beurre dans une casserole, ajouter la farine et cuire 2 minutes en remuant (roux blanc). Verser progressivement 500 ml de bouillon de cuisson filtré en fouettant. Ajouter les champignons et laisser épaissir 10 minutes.',
                        'description_en' => 'Melt butter in a saucepan, add flour and cook 2 minutes stirring (white roux). Gradually whisk in 500 ml of strained cooking broth. Add mushrooms and thicken for 10 minutes.',
                    ],
                    [
                        'titre_fr'       => 'Liaison crème-citron',
                        'titre_en'       => 'Cream and lemon liaison',
                        'description_fr' => 'Hors du feu, mélanger les jaunes d\'œuf avec la crème fraîche. Verser dans la sauce en fouettant. Ne plus faire bouillir. Ajouter le jus de citron et la muscade. Remettre le veau dans la sauce et servir avec du riz.',
                        'description_en' => 'Off the heat, mix egg yolks with crème fraîche. Whisk into the sauce. Do not boil again. Add lemon juice and nutmeg. Return the veal to the sauce and serve with rice.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Le blanchiment en début de recette est essentiel : il élimine les impuretés et garantit une sauce d\'un blanc immaculé.',
                        'description_en' => 'The blanching step at the start is essential: it removes impurities and guarantees a perfectly white sauce.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 3. Coq au vin ─────────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Coq au vin',
                    'titre_en'          => 'Coq au vin',
                    'description_fr'    => 'Un plat de bistrot mythique : du poulet braisé longuement au vin rouge avec des lardons, des champignons et des petits oignons.',
                    'description_en'    => 'A legendary bistro dish: chicken slowly braised in red wine with lardons, mushrooms and pearl onions.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 75,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Poulet',              'qte' => 1.5, 'unite' => 'kg',       'precision' => 'découpé en morceaux'],
                    ['nom' => 'Vin rouge',           'qte' => 75,  'unite' => 'cl',       'precision' => null],
                    ['nom' => 'Porc',                'qte' => 150, 'unite' => 'g',        'precision' => 'lardons'],
                    ['nom' => 'Champignon de Paris', 'qte' => 200, 'unite' => 'g',        'precision' => null],
                    ['nom' => 'Oignon',              'qte' => 12,  'unite' => 'pièce',    'precision' => 'grelots'],
                    ['nom' => 'Ail',                 'qte' => 3,   'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Bouillon de poulet',  'qte' => 200, 'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Concentré de tomate', 'qte' => 1,   'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Farine',              'qte' => 2,   'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Beurre',              'qte' => 30,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Cognac',              'qte' => 3,   'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Thym',                'qte' => 3,   'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Laurier',             'qte' => 2,   'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Persil',              'qte' => 4,   'unite' => 'branche',  'precision' => 'haché, pour le service'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Faire revenir lardons et poulet',
                        'titre_en'       => 'Brown the lardons and chicken',
                        'description_fr' => 'Dans une grande cocotte, faire dorer les lardons. Réserver. Dans la même cocotte avec le beurre, colorer les morceaux de poulet sur toutes les faces. Flamber au cognac.',
                        'description_en' => 'In a large casserole, brown the lardons. Set aside. In the same pot with butter, colour the chicken pieces on all sides. Flambé with cognac.',
                    ],
                    [
                        'titre_fr'       => 'Braiser au vin rouge',
                        'titre_en'       => 'Braise in red wine',
                        'description_fr' => 'Fariner le poulet, ajouter l\'ail, les oignons grelots, le concentré de tomate. Verser le vin rouge et le bouillon. Remettre les lardons, ajouter thym et laurier. Couvrir et mijoter 1 heure à feu doux.',
                        'description_en' => 'Flour the chicken, add garlic, pearl onions and tomato paste. Pour in the red wine and broth. Return the lardons, add thyme and bay leaf. Cover and simmer for 1 hour over low heat.',
                    ],
                    [
                        'titre_fr'       => 'Finir avec les champignons',
                        'titre_en'       => 'Finish with mushrooms',
                        'description_fr' => 'Faire sauter les champignons à part, les ajouter 15 minutes avant la fin. Retirer le poulet, faire réduire la sauce si nécessaire. Rectifier l\'assaisonnement et parsemer de persil frais au service.',
                        'description_en' => 'Sauté mushrooms separately, add them 15 minutes before the end. Remove the chicken, reduce the sauce if needed. Adjust seasoning and scatter fresh parsley when serving.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Laisser mariner le poulet dans le vin rouge avec les aromates quelques heures avant de cuire pour un goût encore plus profond.',
                        'description_en' => 'Marinate the chicken in the red wine with aromatics for a few hours before cooking for an even deeper flavour.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 4. Quiche lorraine ────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Quiche lorraine',
                    'titre_en'          => 'Quiche lorraine',
                    'description_fr'    => 'La tarte salée française la plus célèbre : une pâte brisée croustillante garnie d\'un appareil crémeux aux lardons et au gruyère.',
                    'description_en'    => 'France\'s most famous savoury tart: a crisp shortcrust pastry filled with a creamy lardons and gruyère custard.',
                    'categorie'         => 'entree',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 40,
                    'temps_repos'       => 30,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Farine',          'qte' => 250, 'unite' => 'g',       'precision' => 'pour la pâte brisée'],
                    ['nom' => 'Beurre',          'qte' => 125, 'unite' => 'g',       'precision' => 'froid, en dés'],
                    ['nom' => 'Œuf',             'qte' => 4,   'unite' => 'pièce',   'precision' => null],
                    ['nom' => 'Crème',           'qte' => 200, 'unite' => 'ml',      'precision' => 'fraîche liquide'],
                    ['nom' => 'Lait',            'qte' => 100, 'unite' => 'ml',      'precision' => null],
                    ['nom' => 'Porc',            'qte' => 200, 'unite' => 'g',       'precision' => 'lardons fumés'],
                    ['nom' => 'Gruyère',         'qte' => 100, 'unite' => 'g',       'precision' => 'râpé'],
                    ['nom' => 'Noix de muscade', 'qte' => 1,   'unite' => 'pincée',  'precision' => null],
                    ['nom' => 'Sel',             'qte' => 1,   'unite' => 'pincée',  'precision' => null],
                    ['nom' => 'Poivre',          'qte' => 1,   'unite' => 'pincée',  'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer la pâte brisée',
                        'titre_en'       => 'Make the shortcrust pastry',
                        'description_fr' => 'Sabler la farine avec le beurre froid du bout des doigts. Ajouter 1 œuf battu et 2 cuillères à soupe d\'eau froide. Rassembler en boule sans pétrir. Réfrigérer 30 minutes puis foncer le moule. Piquer le fond et précuire à blanc 15 minutes à 180 °C.',
                        'description_en' => 'Rub flour and cold butter to a sandy texture. Add 1 beaten egg and 2 tablespoons of cold water. Bring together into a ball without kneading. Refrigerate 30 minutes then line the tin. Prick the base and blind-bake for 15 minutes at 180°C.',
                    ],
                    [
                        'titre_fr'       => 'Préparer l\'appareil',
                        'titre_en'       => 'Make the custard filling',
                        'description_fr' => 'Faire revenir les lardons à sec dans une poêle. Battre 3 œufs avec la crème, le lait, la muscade, sel et poivre.',
                        'description_en' => 'Dry-fry the lardons in a pan. Beat 3 eggs with the cream, milk, nutmeg, salt and pepper.',
                    ],
                    [
                        'titre_fr'       => 'Garnir et cuire',
                        'titre_en'       => 'Fill and bake',
                        'description_fr' => 'Répartir les lardons sur le fond précuit. Parsemer de gruyère râpé. Verser l\'appareil. Cuire 25 à 30 minutes à 180 °C jusqu\'à ce que la quiche soit légèrement dorée et prise au centre.',
                        'description_en' => 'Spread the lardons over the pre-baked base. Sprinkle with grated gruyère. Pour in the custard. Bake 25 to 30 minutes at 180°C until the quiche is lightly golden and set in the centre.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'La vraie quiche lorraine traditionnelle ne contient pas de fromage — mais le gruyère la rend plus gourmande.',
                        'description_en' => 'The true traditional quiche lorraine contains no cheese — but gruyère makes it all the more indulgent.',
                    ],
                ],
                'regimes' => [],
            ],

            // ── 5. Soupe à l'oignon ───────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Soupe à l\'oignon gratinée',
                    'titre_en'          => 'French onion soup',
                    'description_fr'    => 'La soupe bistrot par excellence : des oignons longuement caramélisés dans un bouillon de bœuf, gratinée sous une croûte de gruyère fondu.',
                    'description_en'    => 'The ultimate bistro soup: onions slowly caramelised in a beef broth, gratinéed under a melted gruyère crust.',
                    'categorie'         => 'entree',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 10,
                    'temps_cuisson'     => 60,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Oignon',           'qte' => 1.2, 'unite' => 'kg',       'precision' => 'émincé finement'],
                    ['nom' => 'Bouillon de bœuf', 'qte' => 1.5, 'unite' => 'l',        'precision' => null],
                    ['nom' => 'Vin blanc',         'qte' => 15,  'unite' => 'cl',       'precision' => null],
                    ['nom' => 'Beurre',            'qte' => 40,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Farine',            'qte' => 1,   'unite' => 'c. à s.',  'precision' => null],
                    ['nom' => 'Pain',              'qte' => 4,   'unite' => 'tranche',  'precision' => 'pain de campagne, grillé'],
                    ['nom' => 'Gruyère',           'qte' => 150, 'unite' => 'g',        'precision' => 'râpé'],
                    ['nom' => 'Laurier',           'qte' => 1,   'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Thym',              'qte' => 2,   'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Sel',               'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',            'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Caraméliser les oignons',
                        'titre_en'       => 'Caramelise the onions',
                        'description_fr' => 'Faire fondre le beurre dans une grande casserole. Ajouter les oignons avec une pincée de sel. Cuire à feu doux en remuant régulièrement pendant 40 minutes jusqu\'à ce qu\'ils soient bien dorés et caramélisés.',
                        'description_en' => 'Melt the butter in a large pot. Add the onions with a pinch of salt. Cook over low heat, stirring regularly, for 40 minutes until well golden and caramelised.',
                    ],
                    [
                        'titre_fr'       => 'Déglacer et faire la soupe',
                        'titre_en'       => 'Deglaze and make the soup',
                        'description_fr' => 'Saupoudrer de farine, mélanger 1 minute. Déglacer au vin blanc. Verser le bouillon de bœuf, ajouter laurier et thym. Laisser mijoter 20 minutes. Rectifier l\'assaisonnement.',
                        'description_en' => 'Dust with flour, stir for 1 minute. Deglaze with white wine. Pour in the beef broth, add bay leaf and thyme. Simmer for 20 minutes. Adjust seasoning.',
                    ],
                    [
                        'titre_fr'       => 'Gratiner',
                        'titre_en'       => 'Gratinée',
                        'description_fr' => 'Verser la soupe dans des bols allant au four. Déposer une tranche de pain grillé. Couvrir généreusement de gruyère râpé. Passer sous le grill 3 à 5 minutes jusqu\'à gratinage bien doré.',
                        'description_en' => 'Pour the soup into ovenproof bowls. Place a slice of toasted bread on each. Cover generously with grated gruyère. Grill for 3 to 5 minutes until nicely browned.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Ne précipitez pas la caramélisation : les 40 minutes à feu doux sont indispensables pour développer la douceur naturelle des oignons.',
                        'description_en' => 'Don\'t rush the caramelisation: the 40 minutes over low heat are essential to develop the natural sweetness of the onions.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],

            // ── 6. Ratatouille ────────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Ratatouille provençale',
                    'titre_en'          => 'Provençal ratatouille',
                    'description_fr'    => 'Le plat d\'été du Sud par excellence : une compotée de légumes du soleil mijotés à l\'huile d\'olive avec de l\'ail et des herbes de Provence.',
                    'description_en'    => 'The ultimate southern French summer dish: a medley of sun-drenched vegetables stewed in olive oil with garlic and herbes de Provence.',
                    'categorie'         => 'accompagnement',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 50,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Courgette',        'qte' => 2,   'unite' => 'pièce',   'precision' => 'en rondelles'],
                    ['nom' => 'Aubergine',         'qte' => 1,   'unite' => 'pièce',   'precision' => 'en cubes'],
                    ['nom' => 'Poivron',           'qte' => 2,   'unite' => 'pièce',   'precision' => 'en lanières'],
                    ['nom' => 'Tomate',            'qte' => 4,   'unite' => 'pièce',   'precision' => 'en morceaux'],
                    ['nom' => 'Oignon',            'qte' => 2,   'unite' => 'pièce',   'precision' => 'émincé'],
                    ['nom' => 'Ail',               'qte' => 4,   'unite' => 'gousse',  'precision' => null],
                    ['nom' => 'Huile d\'olive',    'qte' => 5,   'unite' => 'c. à s.', 'precision' => null],
                    ['nom' => 'Concentré de tomate','qte' => 1,  'unite' => 'c. à s.', 'precision' => null],
                    ['nom' => 'Herbes de Provence','qte' => 1,   'unite' => 'c. à s.', 'precision' => null],
                    ['nom' => 'Basilic',           'qte' => 4,   'unite' => 'branche', 'precision' => 'frais'],
                    ['nom' => 'Sel',               'qte' => 1,   'unite' => 'pincée',  'precision' => null],
                    ['nom' => 'Poivre',            'qte' => 1,   'unite' => 'pincée',  'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Faire revenir les légumes séparément',
                        'titre_en'       => 'Sauté the vegetables separately',
                        'description_fr' => 'Faire revenir chaque légume séparément dans l\'huile d\'olive : oignons 5 min, aubergines 5 min, courgettes 3 min, poivrons 5 min. Réserver à chaque fois.',
                        'description_en' => 'Sauté each vegetable separately in olive oil: onions 5 min, aubergines 5 min, courgettes 3 min, peppers 5 min. Set aside each time.',
                    ],
                    [
                        'titre_fr'       => 'Assembler et mijoter',
                        'titre_en'       => 'Combine and simmer',
                        'description_fr' => 'Dans la cocotte, faire revenir l\'ail. Ajouter les tomates et le concentré de tomate. Remettre tous les légumes. Ajouter les herbes de Provence. Couvrir et mijoter 30 minutes à feu doux.',
                        'description_en' => 'In the casserole, sauté the garlic. Add the tomatoes and tomato paste. Return all the vegetables. Add herbes de Provence. Cover and simmer for 30 minutes over low heat.',
                    ],
                    [
                        'titre_fr'       => 'Finir et servir',
                        'titre_en'       => 'Finish and serve',
                        'description_fr' => 'Découvrir les 10 dernières minutes pour faire légèrement réduire la sauce. Rectifier l\'assaisonnement, parsemer de basilic frais.',
                        'description_en' => 'Uncover for the last 10 minutes to slightly reduce the sauce. Adjust seasoning, scatter with fresh basil.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Cuire les légumes séparément avant de les assembler est le secret d\'une ratatouille où chaque légume garde son goût et sa texture.',
                        'description_en' => 'Cooking the vegetables separately before combining is the secret to a ratatouille where each vegetable keeps its own flavour and texture.',
                    ],
                ],
                'regimes' => ['Végétarien', 'Vegan', 'Sans gluten'],
            ],

            // ── 7. Gratin dauphinois ──────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Gratin dauphinois',
                    'titre_en'          => 'Dauphinoise gratin',
                    'description_fr'    => 'Le gratin de pommes de terre fondant dans un mélange crème-lait infusé à l\'ail, avec une croûte dorée irrésistible.',
                    'description_en'    => 'Melt-in-the-mouth potato gratin cooked in a garlic-infused cream and milk mixture with an irresistible golden crust.',
                    'categorie'         => 'accompagnement',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 80,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Pomme de terre', 'qte' => 1.2, 'unite' => 'kg',       'precision' => 'type Charlotte, en fines rondelles'],
                    ['nom' => 'Crème',          'qte' => 300, 'unite' => 'ml',       'precision' => 'fraîche liquide'],
                    ['nom' => 'Lait',           'qte' => 200, 'unite' => 'ml',       'precision' => null],
                    ['nom' => 'Ail',            'qte' => 2,   'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Beurre',         'qte' => 20,  'unite' => 'g',        'precision' => 'pour le plat'],
                    ['nom' => 'Gruyère',        'qte' => 80,  'unite' => 'g',        'precision' => 'râpé'],
                    ['nom' => 'Noix de muscade','qte' => 1,   'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Sel',            'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                    ['nom' => 'Poivre',         'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer les pommes de terre',
                        'titre_en'       => 'Prepare the potatoes',
                        'description_fr' => 'Éplucher et trancher les pommes de terre en rondelles de 3 mm sans les rincer — l\'amidon lie le gratin. Frotter le plat avec une gousse d\'ail coupée puis le beurrer.',
                        'description_en' => 'Peel and slice the potatoes 3 mm thick without rinsing — the starch binds the gratin. Rub the dish with a halved garlic clove then butter it.',
                    ],
                    [
                        'titre_fr'       => 'Infuser la crème et précuire',
                        'titre_en'       => 'Infuse the cream and pre-cook',
                        'description_fr' => 'Chauffer la crème et le lait avec l\'ail écrasé, la muscade, sel et poivre. Plonger les rondelles de pommes de terre et cuire 8 minutes à feu moyen en remuant délicatement.',
                        'description_en' => 'Heat the cream and milk with crushed garlic, nutmeg, salt and pepper. Immerse the potato slices and cook for 8 minutes over medium heat, stirring gently.',
                    ],
                    [
                        'titre_fr'       => 'Gratiner au four',
                        'titre_en'       => 'Oven-gratin',
                        'description_fr' => 'Verser le tout dans le plat beurré. Répartir le gruyère sur le dessus. Enfourner à 160 °C pendant 60 à 70 minutes. Le gratin est prêt quand un couteau s\'enfonce sans résistance.',
                        'description_en' => 'Pour everything into the buttered dish. Spread the grated gruyère on top. Bake at 160°C for 60 to 70 minutes. The gratin is ready when a knife slides in without resistance.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Ne rincez jamais les pommes de terre après les avoir tranchées : l\'amidon de surface est indispensable pour lier le gratin.',
                        'description_en' => 'Never rinse the potatoes after slicing: the surface starch is essential to bind the gratin.',
                    ],
                ],
                'regimes' => ['Végétarien', 'Sans gluten'],
            ],

            // ── 8. Tarte tatin ────────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Tarte tatin aux pommes',
                    'titre_en'          => 'Apple tarte tatin',
                    'description_fr'    => 'La tarte renversée des sœurs Tatin : des pommes fondantes caramélisées sous une pâte croustillante, servies tièdes avec une crème fraîche.',
                    'description_en'    => 'The upside-down tart of the Tatin sisters: caramelised melt-in-the-mouth apples under a crisp pastry, served warm with crème fraîche.',
                    'categorie'         => 'dessert',
                    'difficulte'        => 'moyen',
                    'nb_personnes'      => 6,
                    'temps_preparation' => 20,
                    'temps_cuisson'     => 45,
                    'temps_repos'       => 10,
                    'est_publiee'       => true,
                    'est_vedette'       => true,
                ],
                'ingredients' => [
                    ['nom' => 'Pomme',    'qte' => 8,   'unite' => 'pièce',  'precision' => 'Golden ou Reinette, pelées en quartiers'],
                    ['nom' => 'Cassonade','qte' => 150, 'unite' => 'g',      'precision' => null],
                    ['nom' => 'Beurre',   'qte' => 80,  'unite' => 'g',      'precision' => 'demi-sel de préférence'],
                    ['nom' => 'Farine',   'qte' => 200, 'unite' => 'g',      'precision' => 'pour la pâte brisée'],
                    ['nom' => 'Crème',    'qte' => 1,   'unite' => 'pièce',  'precision' => 'fraîche épaisse, pour le service'],
                    ['nom' => 'Sel',      'qte' => 1,   'unite' => 'pincée', 'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Préparer la pâte brisée',
                        'titre_en'       => 'Make the shortcrust pastry',
                        'description_fr' => 'Sabler 200 g de farine avec 100 g de beurre froid coupé en dés. Ajouter une pincée de sel et 3 cuillères à soupe d\'eau froide. Former une boule, filmer et réfrigérer 30 minutes.',
                        'description_en' => 'Rub 200 g flour with 100 g cold diced butter to a sandy texture. Add a pinch of salt and 3 tablespoons of cold water. Form into a ball, wrap and refrigerate for 30 minutes.',
                    ],
                    [
                        'titre_fr'       => 'Caraméliser les pommes',
                        'titre_en'       => 'Caramelise the apples',
                        'description_fr' => 'Dans une poêle allant au four, faire fondre 80 g de beurre avec la cassonade à feu moyen jusqu\'au caramel. Disposer les quartiers de pommes debout, bien serrés. Cuire 10 minutes sur le feu.',
                        'description_en' => 'In an ovenproof pan, melt 80 g butter with the cane sugar over medium heat until caramelised. Stand the apple quarters upright, tightly packed. Cook for 10 minutes on the hob.',
                    ],
                    [
                        'titre_fr'       => 'Couvrir et cuire au four',
                        'titre_en'       => 'Cover and bake',
                        'description_fr' => 'Étaler la pâte sur les pommes en rentrant les bords à l\'intérieur. Enfourner à 200 °C pendant 25 à 30 minutes. Laisser reposer 10 minutes puis retourner d\'un geste vif sur un plat. Servir tiède avec de la crème fraîche.',
                        'description_en' => 'Lay the pastry over the apples, tucking in the edges. Bake at 200°C for 25 to 30 minutes. Rest for 10 minutes then flip confidently onto a plate. Serve warm with crème fraîche.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Ne retournez pas la tarte froide : le caramel fige et les pommes risquent de rester collées dans le moule.',
                        'description_en' => 'Don\'t flip the tart when cold: the caramel sets and the apples may stick in the tin.',
                    ],
                ],
                'regimes' => ['Végétarien'],
            ],

            // ── 9. Crème brûlée ───────────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Crème brûlée à la vanille',
                    'titre_en'          => 'Vanilla crème brûlée',
                    'description_fr'    => 'Le dessert français raffiné par excellence : une crème onctueuse à la vanille sous une fine couche de sucre caramélisé qui craque sous la cuillère.',
                    'description_en'    => 'The ultimate refined French dessert: a smooth vanilla cream under a thin caramelised sugar crust that cracks under the spoon.',
                    'categorie'         => 'dessert',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 15,
                    'temps_cuisson'     => 45,
                    'temps_repos'       => 180,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Crème',     'qte' => 500, 'unite' => 'ml',       'precision' => 'liquide entière'],
                    ['nom' => 'Œuf',       'qte' => 6,   'unite' => 'pièce',    'precision' => 'jaunes seulement'],
                    ['nom' => 'Sucre blanc','qte' => 80,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Cassonade', 'qte' => 4,   'unite' => 'c. à s.',  'precision' => 'pour la caramélisation'],
                    ['nom' => 'Vanille',   'qte' => 1,   'unite' => 'pièce',    'precision' => 'gousse'],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Infuser la crème',
                        'titre_en'       => 'Infuse the cream',
                        'description_fr' => 'Fendre la gousse de vanille, gratter les graines. Chauffer la crème avec la gousse et les graines jusqu\'à frémissement. Laisser infuser 10 minutes hors du feu.',
                        'description_en' => 'Split the vanilla pod and scrape out the seeds. Heat the cream with the pod and seeds until simmering. Infuse for 10 minutes off the heat.',
                    ],
                    [
                        'titre_fr'       => 'Préparer l\'appareil et cuire au bain-marie',
                        'titre_en'       => 'Make the custard and bake bain-marie',
                        'description_fr' => 'Fouetter les jaunes avec le sucre jusqu\'à blanchiment. Verser la crème chaude filtrée en filet en mélangeant. Écumer. Répartir dans des ramequins. Cuire au bain-marie à 100 °C pendant 40 à 45 minutes.',
                        'description_en' => 'Whisk egg yolks with sugar until pale. Pour the strained hot cream in a thin stream while mixing. Skim. Divide into ramekins. Bake in a bain-marie at 100°C for 40 to 45 minutes.',
                    ],
                    [
                        'titre_fr'       => 'Refroidir et caraméliser',
                        'titre_en'       => 'Cool and caramelise',
                        'description_fr' => 'Laisser refroidir puis réfrigérer au moins 3 heures. Saupoudrer de cassonade et brûler au chalumeau jusqu\'à obtenir une fine croûte caramélisée dorée.',
                        'description_en' => 'Allow to cool then refrigerate for at least 3 hours. Sprinkle with cane sugar and torch until a thin golden caramelised crust forms.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'Caramélisez juste avant de servir : la croûte ramollit rapidement et perd son craquant au réfrigérateur.',
                        'description_en' => 'Caramelise just before serving: the crust softens quickly and loses its crunch in the refrigerator.',
                    ],
                ],
                'regimes' => ['Végétarien', 'Sans gluten'],
            ],

            // ── 10. Moules marinières ─────────────────────────────────────────
            [
                'recette' => [
                    'titre_fr'          => 'Moules marinières',
                    'titre_en'          => 'Mussels marinière',
                    'description_fr'    => 'Le plat de bord de mer français : des moules de bouchot ouvertes à la vapeur dans un bouillon de vin blanc, échalotes et beurre parfumé au persil.',
                    'description_en'    => 'Classic French seaside dish: bouchot mussels steamed open in a white wine, shallot and butter broth scented with fresh parsley.',
                    'categorie'         => 'plat_principal',
                    'difficulte'        => 'facile',
                    'nb_personnes'      => 4,
                    'temps_preparation' => 15,
                    'temps_cuisson'     => 10,
                    'temps_repos'       => 0,
                    'est_publiee'       => true,
                    'est_vedette'       => false,
                ],
                'ingredients' => [
                    ['nom' => 'Moule',     'qte' => 2,   'unite' => 'kg',       'precision' => 'bouchot, grattées et rincées'],
                    ['nom' => 'Vin blanc', 'qte' => 20,  'unite' => 'cl',       'precision' => 'sec'],
                    ['nom' => 'Échalote',  'qte' => 4,   'unite' => 'pièce',    'precision' => 'finement ciselée'],
                    ['nom' => 'Beurre',    'qte' => 50,  'unite' => 'g',        'precision' => null],
                    ['nom' => 'Ail',       'qte' => 2,   'unite' => 'gousse',   'precision' => null],
                    ['nom' => 'Persil',    'qte' => 1,   'unite' => 'botte',    'precision' => 'frais, ciselé'],
                    ['nom' => 'Laurier',   'qte' => 2,   'unite' => 'feuille',  'precision' => null],
                    ['nom' => 'Thym',      'qte' => 2,   'unite' => 'branche',  'precision' => null],
                    ['nom' => 'Poivre',    'qte' => 1,   'unite' => 'pincée',   'precision' => null],
                ],
                'etapes' => [
                    [
                        'titre_fr'       => 'Faire revenir les aromates',
                        'titre_en'       => 'Sauté the aromatics',
                        'description_fr' => 'Dans une grande cocotte, faire fondre le beurre. Faire revenir les échalotes et l\'ail à feu moyen 3 minutes sans coloration. Ajouter le vin blanc, le laurier et le thym. Porter à ébullition.',
                        'description_en' => 'In a large pot, melt the butter. Sauté the shallots and garlic over medium heat for 3 minutes without colouring. Add the white wine, bay leaf and thyme. Bring to a boil.',
                    ],
                    [
                        'titre_fr'       => 'Cuire les moules',
                        'titre_en'       => 'Cook the mussels',
                        'description_fr' => 'Ajouter les moules d\'un coup. Couvrir et cuire à feu vif 4 à 5 minutes en secouant la cocotte à mi-cuisson. Jeter les moules restées fermées.',
                        'description_en' => 'Add all the mussels at once. Cover and cook over high heat for 4 to 5 minutes, shaking the pot halfway through. Discard any mussels that remain closed.',
                    ],
                    [
                        'titre_fr'       => 'Servir',
                        'titre_en'       => 'Serve',
                        'description_fr' => 'Parsemer de persil frais ciselé. Servir directement dans la cocotte avec des frites et du pain pour saucer le bouillon.',
                        'description_en' => 'Scatter with freshly chopped parsley. Serve straight from the pot with frites and bread to mop up the broth.',
                    ],
                ],
                'astuces' => [
                    [
                        'description_fr' => 'N\'ajoutez pas de sel : les moules et le jus qu\'elles rendent sont déjà suffisamment salés.',
                        'description_en' => 'Don\'t add any salt: the mussels and the juices they release are already salty enough.',
                    ],
                ],
                'regimes' => ['Sans gluten'],
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
