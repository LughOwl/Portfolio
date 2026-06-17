<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InariFoxReferentielSeeder extends Seeder
{
    public function run(): void
    {
        // Wipe all referential data before re-seeding (safe to re-run)
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('if_recette_regime')->truncate();
        DB::table('if_recette_ingredient')->truncate();
        DB::table('if_etapes')->truncate();
        DB::table('if_astuces')->truncate();
        DB::table('if_recettes')->truncate();
        DB::table('if_ingredients')->truncate();
        DB::table('if_regimes')->truncate();
        DB::table('if_unites')->truncate();
        DB::table('if_categories_ingredient')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // ── Catégories d'ingrédients (ordre marché) ───────────────────────────

        $categories = [
            ['ordre' => 1,  'icone' => '🍎', 'nom_fr' => 'Fruits',                        'nom_en' => 'Fruits'],
            ['ordre' => 2,  'icone' => '🥦', 'nom_fr' => 'Légumes',                       'nom_en' => 'Vegetables'],
            ['ordre' => 3,  'icone' => '🍄', 'nom_fr' => 'Champignons',                   'nom_en' => 'Mushrooms'],
            ['ordre' => 4,  'icone' => '🌿', 'nom_fr' => 'Algues & Plantes aquatiques',   'nom_en' => 'Seaweed & Aquatic plants'],
            ['ordre' => 5,  'icone' => '🌸', 'nom_fr' => 'Fleurs comestibles',            'nom_en' => 'Edible flowers'],
            ['ordre' => 6,  'icone' => '🫘', 'nom_fr' => 'Légumineuses & Soja',           'nom_en' => 'Legumes & Soy'],
            ['ordre' => 7,  'icone' => '🌾', 'nom_fr' => 'Féculents & Céréales',          'nom_en' => 'Starches & Grains'],
            ['ordre' => 8,  'icone' => '🥜', 'nom_fr' => 'Noix & Graines',               'nom_en' => 'Nuts & Seeds'],
            ['ordre' => 9,  'icone' => '🥩', 'nom_fr' => 'Viandes & Charcuterie',        'nom_en' => 'Meat & Charcuterie'],
            ['ordre' => 10, 'icone' => '🐟', 'nom_fr' => 'Poissons & Fruits de mer',     'nom_en' => 'Fish & Seafood'],
            ['ordre' => 11, 'icone' => '🧀', 'nom_fr' => 'Produits laitiers & Œufs',     'nom_en' => 'Dairy & Eggs'],
            ['ordre' => 12, 'icone' => '🧈', 'nom_fr' => 'Matières grasses',             'nom_en' => 'Fats & Oils'],
            ['ordre' => 13, 'icone' => '🌶', 'nom_fr' => 'Épices & Herbes',              'nom_en' => 'Spices & Herbs'],
            ['ordre' => 14, 'icone' => '🫙', 'nom_fr' => 'Condiments & Sauces',          'nom_en' => 'Condiments & Sauces'],
            ['ordre' => 15, 'icone' => '⚗️', 'nom_fr' => 'Texturants',                   'nom_en' => 'Thickeners & Texturants'],
            ['ordre' => 16, 'icone' => '🍯', 'nom_fr' => 'Sucres & Douceurs',            'nom_en' => 'Sugars & Sweets'],
            ['ordre' => 17, 'icone' => '🍶', 'nom_fr' => 'Boissons & Liquides',          'nom_en' => 'Beverages & Liquids'],
        ];

        DB::table('if_categories_ingredient')->insert(
            array_map(fn ($c) => array_merge($c, ['created_at' => now(), 'updated_at' => now()]), $categories)
        );

        $cat = DB::table('if_categories_ingredient')->pluck('id', 'nom_fr');

        // ── Unités de mesure ──────────────────────────────────────────────────

        $unites = [
            ['nom_fr' => 'Gramme',          'nom_en' => 'Gram',        'abreviation' => 'g',         'disponible_en' => true],
            ['nom_fr' => 'Kilogramme',      'nom_en' => 'Kilogram',    'abreviation' => 'kg',        'disponible_en' => true],
            ['nom_fr' => 'Millilitre',      'nom_en' => 'Millilitre',  'abreviation' => 'ml',        'disponible_en' => true],
            ['nom_fr' => 'Centilitre',      'nom_en' => 'Centilitre',  'abreviation' => 'cl',        'disponible_en' => true],
            ['nom_fr' => 'Litre',           'nom_en' => 'Litre',       'abreviation' => 'l',         'disponible_en' => true],
            ['nom_fr' => 'Cuillère à café', 'nom_en' => 'Teaspoon',    'abreviation' => 'c. à c.',   'disponible_en' => true],
            ['nom_fr' => 'Cuillère à soupe','nom_en' => 'Tablespoon',  'abreviation' => 'c. à s.',   'disponible_en' => true],
            ['nom_fr' => 'Tasse',           'nom_en' => 'Cup',         'abreviation' => 'tasse',     'disponible_en' => true],
            ['nom_fr' => 'Pièce',           'nom_en' => 'Piece',       'abreviation' => 'pièce',     'disponible_en' => true],
            ['nom_fr' => 'Tranche',         'nom_en' => 'Slice',       'abreviation' => 'tranche',   'disponible_en' => true],
            ['nom_fr' => 'Botte',           'nom_en' => 'Bunch',       'abreviation' => 'botte',     'disponible_en' => true],
            ['nom_fr' => 'Gousse',          'nom_en' => 'Clove',       'abreviation' => 'gousse',    'disponible_en' => true],
            ['nom_fr' => 'Feuille',         'nom_en' => 'Leaf',        'abreviation' => 'feuille',   'disponible_en' => true],
            ['nom_fr' => 'Pincée',          'nom_en' => 'Pinch',       'abreviation' => 'pincée',    'disponible_en' => true],
            ['nom_fr' => 'Noix',            'nom_en' => 'Knob',        'abreviation' => 'noix',      'disponible_en' => true],
            ['nom_fr' => 'Filet',           'nom_en' => 'Drizzle',     'abreviation' => 'filet',     'disponible_en' => true],
            ['nom_fr' => 'Branche',         'nom_en' => 'Sprig',       'abreviation' => 'branche',   'disponible_en' => true],
        ];

        DB::table('if_unites')->insert(
            array_map(fn ($u) => array_merge($u, ['created_at' => now(), 'updated_at' => now()]), $unites)
        );

        // ── Régimes alimentaires ──────────────────────────────────────────────

        $regimes = [
            ['nom_fr' => 'Standard',         'nom_en' => 'Standard',       'icone' => '🍽️'],
            ['nom_fr' => 'Végétarien',        'nom_en' => 'Vegetarian',     'icone' => '🥗'],
            ['nom_fr' => 'Vegan',             'nom_en' => 'Vegan',          'icone' => '🌱'],
            ['nom_fr' => 'Sans gluten',       'nom_en' => 'Gluten-free',    'icone' => '🌾'],
            ['nom_fr' => 'Sans lactose',      'nom_en' => 'Lactose-free',   'icone' => '🥛'],
            ['nom_fr' => 'Sans alcool',       'nom_en' => 'Alcohol-free',   'icone' => '🚫'],
            ['nom_fr' => 'Halal',             'nom_en' => 'Halal',          'icone' => '☪️'],
            ['nom_fr' => 'Casher',            'nom_en' => 'Kosher',         'icone' => '✡️'],
            ['nom_fr' => 'Cétogène',          'nom_en' => 'Ketogenic',      'icone' => '🥑'],
            ['nom_fr' => 'Paléo',             'nom_en' => 'Paleo',          'icone' => '🦴'],
            ['nom_fr' => 'Sans sucre ajouté', 'nom_en' => 'No added sugar', 'icone' => '🍬'],
        ];

        DB::table('if_regimes')->insert(
            array_map(fn ($r) => array_merge($r, ['created_at' => now(), 'updated_at' => now()]), $regimes)
        );

        // ── Ingrédients ───────────────────────────────────────────────────────
        // Philosophie : nom_fr = ingrédient brut dans sa forme la plus générale.
        // Tout ce qui est coupe, préparation ou forme dérivée (haché, émincé,
        // cuisse, jus, zeste, lait, crème…) va dans le champ precision_libre
        // de l'ingrédient de recette, pas ici.

        $n = null;

        $ingredients = [

            // ── 1. Fruits ──────────────────────────────────────────────────────
            // La tomate et l'avocat sont botaniquement et culinairement des fruits.
            // Jus, zeste, etc. = precision_libre dans la recette.
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Pomme',       'nom_en' => 'Apple',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Poire',       'nom_en' => 'Pear',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Banane',      'nom_en' => 'Banana',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Orange',      'nom_en' => 'Orange',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Citron',      'nom_en' => 'Lemon',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Citron vert', 'nom_en' => 'Lime',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Yuzu',        'nom_en' => 'Yuzu',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Fraise',      'nom_en' => 'Strawberry',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Framboise',   'nom_en' => 'Raspberry',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Myrtille',    'nom_en' => 'Blueberry',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Mûre',        'nom_en' => 'Blackberry',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Cerise',      'nom_en' => 'Cherry',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Pêche',       'nom_en' => 'Peach',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Abricot',     'nom_en' => 'Apricot',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Prune',       'nom_en' => 'Plum',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Raisin',      'nom_en' => 'Grapes',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Mangue',      'nom_en' => 'Mango',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Ananas',      'nom_en' => 'Pineapple',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Kiwi',        'nom_en' => 'Kiwi',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Melon',       'nom_en' => 'Melon',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Pastèque',    'nom_en' => 'Watermelon',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Grenade',     'nom_en' => 'Pomegranate', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Figue',       'nom_en' => 'Fig',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Datte',       'nom_en' => 'Date',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Litchi',      'nom_en' => 'Lychee',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Tomate',      'nom_en' => 'Tomato',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fruits'], 'nom_fr' => 'Avocat',      'nom_en' => 'Avocado',     'precision_fr' => $n, 'precision_en' => $n],

            // ── 2. Légumes ────────────────────────────────────────────────────
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Carotte',          'nom_en' => 'Carrot',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Oignon',           'nom_en' => 'Onion',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Oignon rouge',     'nom_en' => 'Red onion',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Échalote',         'nom_en' => 'Shallot',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Ail',              'nom_en' => 'Garlic',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Pomme de terre',   'nom_en' => 'Potato',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Patate douce',     'nom_en' => 'Sweet potato',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Courgette',        'nom_en' => 'Zucchini',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Aubergine',        'nom_en' => 'Eggplant',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Poivron rouge',    'nom_en' => 'Red bell pepper',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Poivron vert',     'nom_en' => 'Green bell pepper', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Poivron jaune',    'nom_en' => 'Yellow bell pepper','precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Brocoli',          'nom_en' => 'Broccoli',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Chou-fleur',       'nom_en' => 'Cauliflower',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Chou',             'nom_en' => 'Cabbage',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Chou de Bruxelles','nom_en' => 'Brussels sprouts',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Pak-choï',         'nom_en' => 'Bok choy',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Chou chinois',     'nom_en' => 'Napa cabbage',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Épinard',          'nom_en' => 'Spinach',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Salade',           'nom_en' => 'Lettuce',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Roquette',         'nom_en' => 'Arugula',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Concombre',        'nom_en' => 'Cucumber',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Céleri',           'nom_en' => 'Celery',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Poireau',          'nom_en' => 'Leek',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Fenouil',          'nom_en' => 'Fennel',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Betterave',        'nom_en' => 'Beetroot',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Radis',            'nom_en' => 'Radish',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Daïkon',           'nom_en' => 'Daikon',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Navet',            'nom_en' => 'Turnip',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Panais',           'nom_en' => 'Parsnip',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Asperge',          'nom_en' => 'Asparagus',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Haricot vert',     'nom_en' => 'Green bean',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Petit pois',       'nom_en' => 'Green pea',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Maïs',             'nom_en' => 'Corn',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Artichaut',        'nom_en' => 'Artichoke',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Bette',            'nom_en' => 'Swiss chard',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Gingembre',        'nom_en' => 'Ginger',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Piment',           'nom_en' => 'Chili pepper',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumes'], 'nom_fr' => 'Citronnelle',      'nom_en' => 'Lemongrass',        'precision_fr' => $n, 'precision_en' => $n],

            // ── 3. Champignons ────────────────────────────────────────────────
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Champignon de Paris', 'nom_en' => 'Button mushroom',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Shiitaké',            'nom_en' => 'Shiitake',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Pleurote',            'nom_en' => 'Oyster mushroom',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Cèpe',                'nom_en' => 'Porcini mushroom', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Girolles',            'nom_en' => 'Chanterelle',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Morilles',            'nom_en' => 'Morel mushroom',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Truffe',              'nom_en' => 'Truffle',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Champignons'], 'nom_fr' => 'Enoki',               'nom_en' => 'Enoki mushroom',   'precision_fr' => $n, 'precision_en' => $n],

            // ── 4. Algues & Plantes aquatiques ────────────────────────────────
            ['categorie_id' => $cat['Algues & Plantes aquatiques'], 'nom_fr' => 'Nori',   'nom_en' => 'Nori',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Algues & Plantes aquatiques'], 'nom_fr' => 'Wakamé', 'nom_en' => 'Wakame', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Algues & Plantes aquatiques'], 'nom_fr' => 'Kombu',  'nom_en' => 'Kombu',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Algues & Plantes aquatiques'], 'nom_fr' => 'Dulse',  'nom_en' => 'Dulse',  'precision_fr' => $n, 'precision_en' => $n],

            // ── 5. Fleurs comestibles ─────────────────────────────────────────
            ['categorie_id' => $cat['Fleurs comestibles'], 'nom_fr' => 'Fleur de sureau',    'nom_en' => 'Elderflower',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fleurs comestibles'], 'nom_fr' => 'Capucine',           'nom_en' => 'Nasturtium',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fleurs comestibles'], 'nom_fr' => 'Fleur de courgette', 'nom_en' => 'Zucchini flower', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Fleurs comestibles'], 'nom_fr' => 'Violette',           'nom_en' => 'Violet',          'precision_fr' => $n, 'precision_en' => $n],

            // ── 6. Légumineuses & Soja ────────────────────────────────────────
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Lentilles vertes', 'nom_en' => 'Green lentils', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Lentilles corail', 'nom_en' => 'Red lentils',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Pois chiches',     'nom_en' => 'Chickpeas',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Haricots blancs',  'nom_en' => 'White beans',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Haricots rouges',  'nom_en' => 'Kidney beans',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Haricots noirs',   'nom_en' => 'Black beans',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Edamame',          'nom_en' => 'Edamame',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Pois cassés',      'nom_en' => 'Split peas',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Fève',             'nom_en' => 'Broad bean',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Tofu',             'nom_en' => 'Tofu',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Légumineuses & Soja'], 'nom_fr' => 'Tempeh',           'nom_en' => 'Tempeh',        'precision_fr' => $n, 'precision_en' => $n],

            // ── 7. Féculents & Céréales ───────────────────────────────────────
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Riz',                    'nom_en' => 'Rice',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Riz basmati',            'nom_en' => 'Basmati rice',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Riz pour sushi',         'nom_en' => 'Sushi rice',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Pâtes',                  'nom_en' => 'Pasta',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Spaghetti',              'nom_en' => 'Spaghetti',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Tagliatelle',            'nom_en' => 'Tagliatelle',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Penne',                  'nom_en' => 'Penne',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Lasagne',                'nom_en' => 'Lasagna sheets',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Nouilles de riz',        'nom_en' => 'Rice noodles',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Vermicelles de riz',     'nom_en' => 'Rice vermicelli',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Nouilles soba',          'nom_en' => 'Soba noodles',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Nouilles ramen',         'nom_en' => 'Ramen noodles',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Nouilles udon',          'nom_en' => 'Udon noodles',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Farine',                 'nom_en' => 'Flour',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Farine de riz',          'nom_en' => 'Rice flour',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Fécule de pomme de terre','nom_en' => 'Potato starch',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Flocons d\'avoine',      'nom_en' => 'Rolled oats',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Quinoa',                 'nom_en' => 'Quinoa',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Boulgour',               'nom_en' => 'Bulgur',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Semoule',                'nom_en' => 'Semolina',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Pain',                   'nom_en' => 'Bread',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Chapelure',              'nom_en' => 'Breadcrumbs',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Levure de boulanger',    'nom_en' => "Baker's yeast",     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Féculents & Céréales'], 'nom_fr' => 'Polenta',                'nom_en' => 'Polenta',           'precision_fr' => $n, 'precision_en' => $n],

            // ── 8. Noix & Graines ─────────────────────────────────────────────
            // Noix de coco : utiliser precision_libre pour les formes dérivées
            // (râpée, lait, crème, huile, eau de coco…)
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Noix',               'nom_en' => 'Walnut',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Noix de cajou',      'nom_en' => 'Cashew',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Amande',             'nom_en' => 'Almond',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Noisette',           'nom_en' => 'Hazelnut',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Pistache',           'nom_en' => 'Pistachio',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Noix de macadamia',  'nom_en' => 'Macadamia nut',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Noix de coco',       'nom_en' => 'Coconut',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Graines de sésame',  'nom_en' => 'Sesame seeds',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Graines de chia',    'nom_en' => 'Chia seeds',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Graines de lin',     'nom_en' => 'Flax seeds',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Graines de courge',  'nom_en' => 'Pumpkin seeds',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Graines de tournesol','nom_en' => 'Sunflower seeds', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Pignons de pin',     'nom_en' => 'Pine nuts',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Cacahuète',          'nom_en' => 'Peanut',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Noix & Graines'], 'nom_fr' => 'Noix du Brésil',     'nom_en' => 'Brazil nut',      'precision_fr' => $n, 'precision_en' => $n],

            // ── 9. Viandes & Charcuterie ──────────────────────────────────────
            // Viandes : ingrédient générique uniquement. La coupe, la partie ou la
            // préparation (cuisse, blanc, escalope, haché, émincé…) se renseignent
            // dans le champ precision_libre de la recette.
            // Charcuterie : produits commerciaux distincts conservés tels quels.
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Poulet',     'nom_en' => 'Chicken',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Bœuf',       'nom_en' => 'Beef',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Porc',       'nom_en' => 'Pork',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Agneau',     'nom_en' => 'Lamb',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Veau',       'nom_en' => 'Veal',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Canard',     'nom_en' => 'Duck',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Dinde',      'nom_en' => 'Turkey',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Lardons',    'nom_en' => 'Bacon bits', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Jambon',     'nom_en' => 'Ham',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Saucisse',   'nom_en' => 'Sausage',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Chorizo',    'nom_en' => 'Chorizo',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Bacon',      'nom_en' => 'Bacon',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Viandes & Charcuterie'], 'nom_fr' => 'Pancetta',   'nom_en' => 'Pancetta',   'precision_fr' => $n, 'precision_en' => $n],

            // ── 10. Poissons & Fruits de mer ──────────────────────────────────
            // Espèces uniquement. La forme (fumé, en conserve, séché…) va dans
            // precision_libre.
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Saumon',             'nom_en' => 'Salmon',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Thon',               'nom_en' => 'Tuna',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Cabillaud',          'nom_en' => 'Cod',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Truite',             'nom_en' => 'Trout',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Maquereau',          'nom_en' => 'Mackerel',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Sardine',            'nom_en' => 'Sardine',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Bar',                'nom_en' => 'Sea bass',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Dorade',             'nom_en' => 'Sea bream',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Anguille',           'nom_en' => 'Eel',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Crevette',           'nom_en' => 'Shrimp',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Langoustine',        'nom_en' => 'Langoustine', 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Moule',              'nom_en' => 'Mussel',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Coquille Saint-Jacques','nom_en' => 'Scallop',  'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Homard',             'nom_en' => 'Lobster',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Crabe',              'nom_en' => 'Crab',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Poulpe',             'nom_en' => 'Octopus',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Calmar',             'nom_en' => 'Squid',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Poissons & Fruits de mer'], 'nom_fr' => 'Huître',             'nom_en' => 'Oyster',      'precision_fr' => $n, 'precision_en' => $n],

            // ── 11. Produits laitiers & Œufs ──────────────────────────────────
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Œuf',                   'nom_en' => 'Egg',               'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Lait',                  'nom_en' => 'Milk',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Crème',                 'nom_en' => 'Cream',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Fromage blanc',         'nom_en' => 'Fromage blanc',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Yaourt',               'nom_en' => 'Yogurt',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Beurre',               'nom_en' => 'Butter',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Parmesan',             'nom_en' => 'Parmesan',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Gruyère',              'nom_en' => 'Gruyère',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Emmental',             'nom_en' => 'Emmental',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Mozzarella',           'nom_en' => 'Mozzarella',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Ricotta',              'nom_en' => 'Ricotta',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Comté',                'nom_en' => 'Comté',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Cheddar',              'nom_en' => 'Cheddar',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Roquefort',            'nom_en' => 'Roquefort',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Fromage de chèvre',    'nom_en' => "Goat's cheese",     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Produits laitiers & Œufs'], 'nom_fr' => 'Mascarpone',           'nom_en' => 'Mascarpone',        'precision_fr' => $n, 'precision_en' => $n],

            // ── 12. Matières grasses ──────────────────────────────────────────
            // Huile de coco supprimée : utiliser "Noix de coco" (cat. 8) avec
            // precision_libre "huile" dans la recette.
            ['categorie_id' => $cat['Matières grasses'], 'nom_fr' => 'Huile d\'olive',   'nom_en' => 'Olive oil',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Matières grasses'], 'nom_fr' => 'Huile de tournesol','nom_en' => 'Sunflower oil','precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Matières grasses'], 'nom_fr' => 'Huile de sésame',  'nom_en' => 'Sesame oil',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Matières grasses'], 'nom_fr' => 'Huile de colza',   'nom_en' => 'Canola oil',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Matières grasses'], 'nom_fr' => 'Huile de noix',    'nom_en' => 'Walnut oil',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Matières grasses'], 'nom_fr' => 'Graisse de canard','nom_en' => 'Duck fat',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Matières grasses'], 'nom_fr' => 'Margarine',        'nom_en' => 'Margarine',    'precision_fr' => $n, 'precision_en' => $n],

            // ── 13. Épices & Herbes ───────────────────────────────────────────
            // Gingembre frais = Légumes (cat. 2). Ici : formes séchées/moulues uniquement.
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Sel',                 'nom_en' => 'Salt',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Poivre',              'nom_en' => 'Pepper',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Paprika',             'nom_en' => 'Paprika',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Cumin',               'nom_en' => 'Cumin',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Curcuma',             'nom_en' => 'Turmeric',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Coriandre',           'nom_en' => 'Coriander',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Cannelle',            'nom_en' => 'Cinnamon',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Noix de muscade',     'nom_en' => 'Nutmeg',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Gingembre en poudre', 'nom_en' => 'Ground ginger',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Cardamome',           'nom_en' => 'Cardamom',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Clou de girofle',     'nom_en' => 'Clove',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Anis étoilé',         'nom_en' => 'Star anise',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Curry',               'nom_en' => 'Curry powder',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Ras el-hanout',       'nom_en' => 'Ras el-hanout',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Herbes de Provence',  'nom_en' => 'Herbes de Provence','precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Thym',                'nom_en' => 'Thyme',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Romarin',             'nom_en' => 'Rosemary',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Basilic',             'nom_en' => 'Basil',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Persil',              'nom_en' => 'Parsley',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Estragon',            'nom_en' => 'Tarragon',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Origan',              'nom_en' => 'Oregano',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Laurier',             'nom_en' => 'Bay leaf',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Ciboulette',          'nom_en' => 'Chives',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Menthe',              'nom_en' => 'Mint',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Aneth',               'nom_en' => 'Dill',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Sauge',               'nom_en' => 'Sage',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Piment de Cayenne',   'nom_en' => 'Cayenne pepper',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Safran',              'nom_en' => 'Saffron',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Vanille',             'nom_en' => 'Vanilla',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Furikake',            'nom_en' => 'Furikake',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Épices & Herbes'], 'nom_fr' => 'Shichimi togarashi',  'nom_en' => 'Shichimi togarashi','precision_fr' => $n, 'precision_en' => $n],

            // ── 14. Condiments & Sauces ───────────────────────────────────────
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce soja',            'nom_en' => 'Soy sauce',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce soja sucrée',     'nom_en' => 'Sweet soy sauce',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce tamari',          'nom_en' => 'Tamari sauce',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce teriyaki',        'nom_en' => 'Teriyaki sauce',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce hoisin',          'nom_en' => 'Hoisin sauce',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce sriracha',        'nom_en' => 'Sriracha sauce',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce piment doux',     'nom_en' => 'Sweet chili sauce',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce worcestershire',  'nom_en' => 'Worcestershire sauce','precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Sauce ponzu',           'nom_en' => 'Ponzu sauce',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Moutarde',              'nom_en' => 'Mustard',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Ketchup',               'nom_en' => 'Ketchup',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Mayonnaise',            'nom_en' => 'Mayonnaise',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Vinaigre',              'nom_en' => 'Vinegar',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Vinaigre de riz',       'nom_en' => 'Rice vinegar',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Vinaigre balsamique',   'nom_en' => 'Balsamic vinegar',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Huile de truffe',       'nom_en' => 'Truffle oil',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Câpres',                'nom_en' => 'Capers',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Olive',                 'nom_en' => 'Olive',               'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Concentré de tomate',   'nom_en' => 'Tomato paste',        'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Miso',                  'nom_en' => 'Miso',                'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Tahini',                'nom_en' => 'Tahini',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Beurre de cacahuète',   'nom_en' => 'Peanut butter',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Condiments & Sauces'], 'nom_fr' => 'Pâte de curry',         'nom_en' => 'Curry paste',         'precision_fr' => $n, 'precision_en' => $n],

            // ── 15. Texturants ────────────────────────────────────────────────
            ['categorie_id' => $cat['Texturants'], 'nom_fr' => 'Maïzena',              'nom_en' => 'Cornstarch',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Texturants'], 'nom_fr' => 'Agar-agar',            'nom_en' => 'Agar-agar',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Texturants'], 'nom_fr' => 'Gélatine',             'nom_en' => 'Gelatin',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Texturants'], 'nom_fr' => 'Levure chimique',      'nom_en' => 'Baking powder',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Texturants'], 'nom_fr' => 'Bicarbonate de soude', 'nom_en' => 'Baking soda',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Texturants'], 'nom_fr' => 'Pectine',              'nom_en' => 'Pectin',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Texturants'], 'nom_fr' => 'Crème de tartre',      'nom_en' => 'Cream of tartar', 'precision_fr' => $n, 'precision_en' => $n],

            // ── 16. Sucres & Douceurs ─────────────────────────────────────────
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Sucre blanc',       'nom_en' => 'White sugar',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Sucre roux',        'nom_en' => 'Brown sugar',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Sucre glace',       'nom_en' => 'Icing sugar',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Cassonade',         'nom_en' => 'Cane sugar',      'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Sirop d\'érable',   'nom_en' => 'Maple syrup',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Miel',              'nom_en' => 'Honey',           'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Confiture',         'nom_en' => 'Jam',             'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Chocolat',          'nom_en' => 'Chocolate',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Cacao en poudre',   'nom_en' => 'Cocoa powder',    'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Sucre de coco',     'nom_en' => 'Coconut sugar',   'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Sirop d\'agave',    'nom_en' => 'Agave syrup',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Sucres & Douceurs'], 'nom_fr' => 'Extrait de vanille','nom_en' => 'Vanilla extract', 'precision_fr' => $n, 'precision_en' => $n],

            // ── 17. Boissons & Liquides ───────────────────────────────────────
            // Lait de coco supprimé : utiliser "Noix de coco" (cat. 8) avec
            // precision_libre "lait" ou "crème" dans la recette.
            // Jus de citron/orange supprimés : utiliser le fruit avec precision_libre "jus".
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Eau',                     'nom_en' => 'Water',               'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Bouillon de poulet',      'nom_en' => 'Chicken broth',       'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Bouillon de bœuf',        'nom_en' => 'Beef broth',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Bouillon de légumes',     'nom_en' => 'Vegetable broth',     'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Dashi',                   'nom_en' => 'Dashi',               'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Lait de soja',            'nom_en' => 'Soy milk',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Lait d\'amande',          'nom_en' => 'Almond milk',         'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Lait d\'avoine',          'nom_en' => 'Oat milk',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Vin blanc',               'nom_en' => 'White wine',          'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Vin rouge',               'nom_en' => 'Red wine',            'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Sake',                    'nom_en' => 'Sake',                'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Mirin',                   'nom_en' => 'Mirin',               'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Cognac',                  'nom_en' => 'Cognac',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Rhum',                    'nom_en' => 'Rum',                 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Café',                    'nom_en' => 'Coffee',              'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Thé',                     'nom_en' => 'Tea',                 'precision_fr' => $n, 'precision_en' => $n],
            ['categorie_id' => $cat['Boissons & Liquides'], 'nom_fr' => 'Eau de fleur d\'oranger', 'nom_en' => 'Orange blossom water','precision_fr' => $n, 'precision_en' => $n],
        ];

        DB::table('if_ingredients')->insert(
            array_map(fn ($i) => array_merge($i, ['created_at' => now(), 'updated_at' => now()]), $ingredients)
        );
    }
}
