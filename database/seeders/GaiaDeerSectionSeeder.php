<?php

namespace Database\Seeders;

use App\Models\GaiaDeerSection;
use Illuminate\Database\Seeder;

class GaiaDeerSectionSeeder extends Seeder
{
    public function run(): void
    {
        GaiaDeerSection::truncate();

        $sections = [

            // ── SANTÉ ────────────────────────────────────────────────

            [
                'rubrique'   => 'sante',
                'ordre'      => 1,
                'titre'      => 'Corps et esprit : un seul système',
                'titre_en'   => 'Body and mind: one system',
                'contenu'    => <<<HTML
                    <p>La santé physique et la santé mentale ne sont pas deux choses séparées.
                    L'exercice régulier réduit le cortisol, améliore la qualité du sommeil, stabilise l'humeur
                    et affûte les fonctions cognitives. Quand je m'entraîne régulièrement, je pense plus clairement,
                    je suis plus résistant au stress, et je dors mieux.</p>
                    <p>L'inverse est tout aussi vrai : négliger son corps crée une dette physique qui s'accumule
                    silencieusement, jusqu'à se faire sentir par la fatigue, l'irritabilité ou des problèmes plus
                    sérieux. Investir dans son corps, c'est investir dans son esprit.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>Physical and mental health are not two separate things. Regular exercise reduces cortisol,
                    improves sleep quality, stabilises mood and sharpens cognitive function. When I train consistently,
                    I think more clearly, I'm more resilient to stress, and I sleep better.</p>
                    <p>The reverse is equally true: neglecting your body creates a physical debt that accumulates
                    silently, until it makes itself felt through fatigue, irritability, or more serious problems.
                    Investing in your body is investing in your mind.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'sante',
                'ordre'      => 2,
                'titre'      => "Le poids : l'IMC comme référence",
                'titre_en'   => 'Weight: the BMI as a reference',
                'contenu'    => <<<HTML
                    <p>L'IMC (Indice de Masse Corporelle) est un rapport simple entre le poids et le carré de la
                    taille. Il est imparfait — il ne distingue pas la masse musculaire de la masse grasse — mais il
                    reste un indicateur utile pour évaluer l'état pondéral global. Un IMC dans la norme (18,5–24,9)
                    correspond généralement à de meilleures perspectives de santé à long terme.</p>
                    <p>Je l'utilise comme boussole, pas comme verdict. Combiné à la façon dont on se sent, au niveau
                    d'énergie et à la qualité du sommeil, il donne un bon aperçu de l'état physique général.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>BMI (Body Mass Index) is a simple ratio of weight to height squared. It is imperfect —
                    it does not distinguish muscle from fat — but it remains a useful indicator for assessing overall
                    weight status. A healthy BMI (18.5–24.9) generally correlates with better long-term physical
                    health outcomes.</p>
                    <p>I use it as a compass, not a verdict. Combined with how you feel, your energy levels and your
                    sleep quality, it gives a good overall picture of your physical state.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'sante',
                'ordre'      => 3,
                'titre'      => 'Mon programme de musculation',
                'titre_en'   => 'My strength training program',
                'contenu'    => <<<HTML
                    <div class="gd-stats">
                        <div class="gd-stat">
                            <div class="gd-stat-value">4</div>
                            <div class="gd-stat-label">jours / semaine</div>
                        </div>
                        <div class="gd-stat">
                            <div class="gd-stat-value">~1h</div>
                            <div class="gd-stat-label">par séance</div>
                        </div>
                        <div class="gd-stat">
                            <div class="gd-stat-value">10–15</div>
                            <div class="gd-stat-label">séries par séance</div>
                        </div>
                        <div class="gd-stat">
                            <div class="gd-stat-value">8–12</div>
                            <div class="gd-stat-label">répétitions par série</div>
                        </div>
                    </div>
                    <div class="gd-program">
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Lundi</span>
                                <span class="gd-day-focus">Pectoraux + Triceps</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Pectoraux</div>
                                    <ul class="gd-exo-list">
                                        <li>Développé couché <span>3 séries</span></li>
                                        <li>Développé incliné <span>3 séries</span></li>
                                        <li>Fly câble bras tendus <span>3 séries</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Triceps</div>
                                    <ul class="gd-exo-list">
                                        <li>Tirage poulie corde <span>3 séries</span></li>
                                        <li>Tirage poulie barre droite <span>3 séries</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Mardi</span>
                                <span class="gd-day-focus">Jambes</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Cuisses + Mollets</div>
                                    <ul class="gd-exo-list">
                                        <li>Presse à cuisses <span>4 séries</span></li>
                                        <li>Leg extension <span>4 séries</span></li>
                                        <li>Leg curl <span>4 séries</span></li>
                                        <li>Flexions mollets avec poids <span>3 séries</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Jeudi</span>
                                <span class="gd-day-focus">Dos + Biceps</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Dos</div>
                                    <ul class="gd-exo-list">
                                        <li>Tirage poulie haute <span>3 séries</span></li>
                                        <li>Tirage poulie horizontale <span>3 séries</span></li>
                                        <li>Extensions lombaires machine <span>3 séries</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Biceps</div>
                                    <ul class="gd-exo-list">
                                        <li>Curl marteau haltère <span>3 séries</span></li>
                                        <li>Curl poulie corde <span>3 séries</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Vendredi</span>
                                <span class="gd-day-focus">Épaules + Avant-bras + Abdos</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Épaules</div>
                                    <ul class="gd-exo-list">
                                        <li>Développé militaire <span>3 séries</span></li>
                                        <li>Élévations latérales <span>2 séries</span></li>
                                        <li>Élévations frontales <span>2 séries</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Avant-bras &amp; poignets</div>
                                    <ul class="gd-exo-list">
                                        <li>Ouverture/fermeture des doigts <span>3 séries</span></li>
                                        <li>Curl poignets vers l'intérieur <span>2 séries</span></li>
                                        <li>Curl poignets vers l'extérieur <span>2 séries</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Abdos</div>
                                    <ul class="gd-exo-list">
                                        <li>Abdominaux <span>3 séries</span></li>
                                        <li>Obliques avec haltère (chaque côté) <span>3 × 2 séries</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    HTML,
                'contenu_en' => <<<HTML
                    <div class="gd-stats">
                        <div class="gd-stat">
                            <div class="gd-stat-value">4</div>
                            <div class="gd-stat-label">days / week</div>
                        </div>
                        <div class="gd-stat">
                            <div class="gd-stat-value">~1h</div>
                            <div class="gd-stat-label">per session</div>
                        </div>
                        <div class="gd-stat">
                            <div class="gd-stat-value">10–15</div>
                            <div class="gd-stat-label">sets per session</div>
                        </div>
                        <div class="gd-stat">
                            <div class="gd-stat-value">8–12</div>
                            <div class="gd-stat-label">reps per set</div>
                        </div>
                    </div>
                    <div class="gd-program">
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Monday</span>
                                <span class="gd-day-focus">Chest + Triceps</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Chest</div>
                                    <ul class="gd-exo-list">
                                        <li>Flat bench press <span>3 sets</span></li>
                                        <li>Incline bench press <span>3 sets</span></li>
                                        <li>Cable fly (arms extended) <span>3 sets</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Triceps</div>
                                    <ul class="gd-exo-list">
                                        <li>Rope cable pushdown <span>3 sets</span></li>
                                        <li>Straight bar cable pushdown <span>3 sets</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Tuesday</span>
                                <span class="gd-day-focus">Legs</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Legs</div>
                                    <ul class="gd-exo-list">
                                        <li>Leg press <span>4 sets</span></li>
                                        <li>Leg extension <span>4 sets</span></li>
                                        <li>Leg curl <span>4 sets</span></li>
                                        <li>Calf raises with weight <span>3 sets</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Thursday</span>
                                <span class="gd-day-focus">Back + Biceps</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Back</div>
                                    <ul class="gd-exo-list">
                                        <li>Lat pulldown <span>3 sets</span></li>
                                        <li>Seated cable row <span>3 sets</span></li>
                                        <li>Back extension machine <span>3 sets</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Biceps</div>
                                    <ul class="gd-exo-list">
                                        <li>Hammer curl <span>3 sets</span></li>
                                        <li>Rope cable curl <span>3 sets</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gd-day">
                            <div class="gd-day-header">
                                <span class="gd-day-name">Friday</span>
                                <span class="gd-day-focus">Shoulders + Forearms + Core</span>
                            </div>
                            <div class="gd-day-body">
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Shoulders</div>
                                    <ul class="gd-exo-list">
                                        <li>Military press <span>3 sets</span></li>
                                        <li>Lateral raises <span>2 sets</span></li>
                                        <li>Front raises <span>2 sets</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Forearms &amp; wrists</div>
                                    <ul class="gd-exo-list">
                                        <li>Finger open/close with dumbbell <span>3 sets</span></li>
                                        <li>Wrist curl (pronation) <span>2 sets</span></li>
                                        <li>Reverse wrist curl (supination) <span>2 sets</span></li>
                                    </ul>
                                </div>
                                <div class="gd-exo-group">
                                    <div class="gd-exo-muscle">Core</div>
                                    <ul class="gd-exo-list">
                                        <li>Crunches <span>3 sets</span></li>
                                        <li>Side crunches with dumbbell <span>3 × 2 sets</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    HTML,
            ],

            [
                'rubrique'   => 'sante',
                'ordre'      => 4,
                'titre'      => 'Cardio — en dehors des séances de salle',
                'titre_en'   => 'Cardio — outside the gym days',
                'contenu'    => <<<HTML
                    <p>Le cardio n'est pas l'ennemi de la masse musculaire quand il est pratiqué avec modération
                    et au bon moment. Je le planifie les jours où je ne soulève pas, pour ne pas interférer avec
                    la récupération.</p>
                    <div class="gd-cardio-grid">
                        <div class="gd-cardio-item">
                            <div class="gd-cardio-day">Mercredi ou Samedi</div>
                            <div class="gd-cardio-detail">Vélo d'appartement — intensité modérée, 30–45 min</div>
                        </div>
                        <div class="gd-cardio-item">
                            <div class="gd-cardio-day">Dimanche (+ parfois Mer/Sam)</div>
                            <div class="gd-cardio-detail">Marche de 10 km — faible intensité, rythme confortable</div>
                        </div>
                    </div>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>Cardio is not the enemy of muscle mass when done in moderation and at the right times.
                    I schedule it on the days I don't lift, so there's no interference with recovery.</p>
                    <div class="gd-cardio-grid">
                        <div class="gd-cardio-item">
                            <div class="gd-cardio-day">Wednesday or Saturday</div>
                            <div class="gd-cardio-detail">Stationary bike — moderate intensity, 30–45 min</div>
                        </div>
                        <div class="gd-cardio-item">
                            <div class="gd-cardio-day">Sunday (+ sometimes Wed/Sat)</div>
                            <div class="gd-cardio-detail">10 km walk — low intensity, easy pace</div>
                        </div>
                    </div>
                    HTML,
            ],

            [
                'rubrique'   => 'sante',
                'ordre'      => 5,
                'titre'      => "La récupération : la moitié oubliée de l'entraînement",
                'titre_en'   => 'Recovery: the forgotten half of training',
                'contenu'    => <<<HTML
                    <p>On ne grandit pas pendant l'entraînement — on grandit pendant la récupération. La plupart
                    des gens comprennent le côté effort de l'équation et négligent le côté repos. Je considère
                    la récupération aussi importante que les séances elles-mêmes.</p>
                    <p><strong>Intensité des séances :</strong> Toutes les séances n'ont pas besoin d'être un effort
                    maximal. Une intensité modérée la plupart du temps, avec des séances plus intenses occasionnelles,
                    est plus durable et moins propice aux blessures qu'un entraînement constamment à fond.</p>
                    <p><strong>Le sommeil :</strong> Je dors de 23h à 7h — 8 heures. Le sommeil est le moment où
                    le corps répare le muscle, consolide la mémoire et régule les hormones. Aucun supplément ne
                    remplace une bonne nuit de sommeil. Je coupe les écrans à 22h30 pour laisser la mélatonine agir
                    naturellement : la lumière bleue des écrans retarde l'endormissement et réduit la qualité
                    du sommeil.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>You don't grow during training — you grow during recovery. Most people understand the effort
                    side of the equation and neglect the rest side. I consider recovery as important as the sessions
                    themselves.</p>
                    <p><strong>Session intensity:</strong> Not every session needs to be a maximum effort. Moderate
                    intensity most of the time, with occasional harder sessions, is more sustainable and less
                    injury-prone than constant all-out training.</p>
                    <p><strong>Sleep:</strong> I sleep from 11 pm to 7 am — 8 hours. Sleep is when the body repairs
                    muscle, consolidates memory and regulates hormones. No supplement replaces a good night's sleep.
                    I stop screens at 10:30 pm to allow melatonin to kick in naturally: the blue light from screens
                    delays sleep onset and reduces sleep quality.</p>
                    HTML,
            ],

            // ── NUTRITION ────────────────────────────────────────────

            [
                'rubrique'   => 'nutrition',
                'ordre'      => 1,
                'titre'      => 'Le jeûne intermittent : pourquoi deux repas suffisent',
                'titre_en'   => 'Intermittent fasting: why two meals is enough',
                'contenu'    => <<<HTML
                    <p>Je mange deux fois par jour — le matin et le midi — et rien le soir. C'est essentiellement
                    un jeûne intermittent 16:8 : 16 heures sans manger, une fenêtre alimentaire de 8 heures.</p>
                    <p>Les bénéfices que j'observe : meilleur contrôle de la faim (le grignotage crée des pics de
                    faim constants), énergie stable au cours de la journée, confort digestif amélioré, et
                    simplification de l'organisation des repas. Quand on mange trois ou quatre fois par jour,
                    la nourriture devient une préoccupation mentale permanente.</p>
                    <p>Le jeûne du soir s'aligne aussi avec les rythmes circadiens naturels : le système digestif
                    est moins efficace le soir, la sensibilité à l'insuline baisse, et la qualité du sommeil
                    s'améliore quand le dernier repas est pris plusieurs heures avant de dormir.</p>
                    <p>Ce n'est pas un régime — c'est une structure de repas. L'essentiel est de ne pas compenser
                    aux deux repas en mangeant excessivement. Deux repas équilibrés suffisent pour la plupart
                    des gens.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>I eat twice a day — breakfast and lunch — and nothing in the evening. This is essentially
                    a 16:8 intermittent fasting pattern: 16 hours without eating, an 8-hour eating window.</p>
                    <p>The benefits I observe: better hunger control (grazing creates constant hunger spikes),
                    stable energy throughout the day, improved digestive comfort, and simpler meal planning. When
                    you eat three or four times a day, food becomes a constant mental occupation.</p>
                    <p>The evening fast also aligns with natural circadian rhythms: the digestive system is less
                    efficient in the evening, insulin sensitivity drops, and sleep quality improves when the last
                    meal is several hours before bed.</p>
                    <p>This is not a diet — it's a meal structure. The key is not to compensate at the two meals
                    by eating excessively. Two balanced meals is enough for most people.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'nutrition',
                'ordre'      => 2,
                'titre'      => 'La structure des repas',
                'titre_en'   => 'Meal structure',
                'contenu'    => <<<HTML
                    <p>Chaque déjeuner suit une règle simple des tiers : un tiers de protéines, un tiers de féculents,
                    un tiers de légumes. Ce rapport apporte naturellement les macronutriments nécessaires à la journée
                    sans avoir besoin de compter les calories.</p>
                    <div class="gd-plate">
                        <div class="gd-plate-part">
                            <div class="gd-plate-pct">1/3</div>
                            <div class="gd-plate-name">Protéines</div>
                            <div class="gd-plate-ex">Viande, poisson, œufs, légumineuses</div>
                        </div>
                        <div class="gd-plate-part">
                            <div class="gd-plate-pct">1/3</div>
                            <div class="gd-plate-name">Féculents</div>
                            <div class="gd-plate-ex">Riz, pâtes, pommes de terre, pain</div>
                        </div>
                        <div class="gd-plate-part">
                            <div class="gd-plate-pct">1/3</div>
                            <div class="gd-plate-name">Légumes</div>
                            <div class="gd-plate-ex">Crus, cuits ou mixtes</div>
                        </div>
                    </div>
                    <p><strong>Le petit-déjeuner :</strong> Je le garde simple — des fruits et des œufs. Les fruits
                    apportent de l'énergie rapide et des micronutriments. Les œufs fournissent des protéines complètes
                    et des graisses qui tiennent jusqu'au déjeuner. Pas de céréales transformées, pas de jus de fruits
                    industriels, pas de sucre ajouté.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>Each lunch follows a simple rule of thirds: one third proteins, one third starchy foods,
                    one third vegetables. This ratio naturally provides the macronutrients needed for the day without
                    requiring calorie counting.</p>
                    <div class="gd-plate">
                        <div class="gd-plate-part">
                            <div class="gd-plate-pct">1/3</div>
                            <div class="gd-plate-name">Proteins</div>
                            <div class="gd-plate-ex">Meat, fish, eggs, legumes</div>
                        </div>
                        <div class="gd-plate-part">
                            <div class="gd-plate-pct">1/3</div>
                            <div class="gd-plate-name">Starchy foods</div>
                            <div class="gd-plate-ex">Rice, pasta, potatoes, bread</div>
                        </div>
                        <div class="gd-plate-part">
                            <div class="gd-plate-pct">1/3</div>
                            <div class="gd-plate-name">Vegetables</div>
                            <div class="gd-plate-ex">Raw, cooked or mixed</div>
                        </div>
                    </div>
                    <p><strong>Breakfast:</strong> I keep it simple — fruit and eggs. Fruit provides quick energy
                    and micronutrients. Eggs provide complete proteins and fat that sustain you until lunch. No
                    processed cereals, no industrial fruit juices, no added sugar.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'nutrition',
                'ordre'      => 3,
                'titre'      => "Hydratation : seulement de l'eau",
                'titre_en'   => 'Hydration: water only',
                'contenu'    => <<<HTML
                    <p>Je ne bois que de l'eau. Pas de sodas, pas de jus de fruits, pas de boissons énergisantes.
                    C'est l'un des changements les plus simples et les plus impactants que l'on puisse faire
                    à son alimentation.</p>
                    <p>Les calories liquides sont particulièrement insidieuses : elles ne déclenchent pas les mêmes
                    signaux de satiété que les aliments solides, et les boissons industrielles sont chargées en
                    sucre, additifs et calories vides. Une simple canette de soda peut contenir l'équivalent de
                    7 à 10 morceaux de sucre. Un verre de jus de fruit "pur" en contient autant qu'un soda.</p>
                    <p>L'eau n'a pas de calories, hydrate parfaitement et ne coûte presque rien. Il n'y a pas de
                    meilleure boisson pour le corps.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>I drink only water. No sodas, no fruit juices, no energy drinks. This is one of the simplest
                    and most impactful changes you can make to your diet.</p>
                    <p>Liquid calories are particularly insidious: they don't trigger the same satiety signals as
                    solid food, and industrial drinks are loaded with sugar, additives and empty calories. A single
                    can of soda can contain the equivalent of 7–10 sugar cubes. A glass of "pure" fruit juice
                    contains as much sugar as a soft drink.</p>
                    <p>Water has no calories, hydrates perfectly and costs almost nothing. There is no better drink
                    for the body.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'nutrition',
                'ordre'      => 4,
                'titre'      => 'La qualité des aliments : le naturel avant le transformé',
                'titre_en'   => 'Food quality: whole over processed',
                'contenu'    => <<<HTML
                    <p>La règle pratique la plus utile pour choisir sa nourriture : préférer les ingrédients aux
                    produits. Un œuf est un ingrédient. Un croissant industriel est un produit. Une pomme de terre
                    est un ingrédient. Un sachet de chips est un produit.</p>
                    <p>Les aliments ultra-transformés sont conçus pour être mangés au-delà du seuil de satiété —
                    leur texture, leurs combinaisons de saveurs et leur cocktail d'additifs sont spécifiquement
                    pensés pour court-circuiter vos signaux de faim. En manger occasionnellement n'est pas un
                    problème. En faire la base de son alimentation en est un.</p>
                    <p>Je ne compte pas les calories de façon obsessionnelle. Avec deux repas équilibrés, des
                    ingrédients de qualité et l'eau comme seule boisson, le corps se régule naturellement sans
                    tracking mathématique.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>The single most useful heuristic for choosing food: prefer ingredients over products. An egg
                    is an ingredient. An industrial croissant is a product. A potato is an ingredient. A bag of
                    crisps is a product.</p>
                    <p>Ultra-processed foods are engineered to be eaten past the point of satiety — their texture,
                    flavour combinations and additive cocktails are specifically designed to override your hunger
                    signals. Eating them occasionally is not a problem. Making them the base of your diet is.</p>
                    <p>I don't count calories obsessively. With two balanced meals, quality ingredients and water
                    as the only drink, the body naturally regulates itself without mathematical tracking.</p>
                    HTML,
            ],

            // ── INVESTISSEMENT ───────────────────────────────────────

            [
                'rubrique'   => 'investissement',
                'ordre'      => 1,
                'titre'      => "Les fondamentaux d'abord",
                'titre_en'   => 'Fundamentals first',
                'contenu'    => <<<HTML
                    <p>Avant d'investir un seul euro, il faut une base financière solide : un fonds de précaution
                    couvrant 3 à 6 mois de dépenses, gardé liquide sur un compte courant. Cet argent n'est pas à
                    investir — c'est une assurance. Sans lui, vous serez forcé de vendre vos investissements au pire
                    moment (une crise financière personnelle) plutôt qu'au meilleur moment de marché.</p>
                    <p><strong>La psychologie de l'investisseur</strong> est plus importante que le choix des actifs.
                    Le principal ennemi des investisseurs particuliers, c'est eux-mêmes : vendre par panique lors
                    des baisses, acheter l'euphorie au pic des marchés, vérifier son portefeuille chaque jour.
                    L'investissement long terme demande la capacité à ne rien faire — ce qui est plus rare
                    qu'il n'y paraît.</p>
                    <p><strong>L'allocation d'actifs</strong> — la répartition entre différents types de placements
                    — détermine la plus grande partie du rendement à long terme. Pas le timing, pas le stock picking.
                    Décidez d'une allocation qui correspond à votre tolérance au risque et à votre horizon temporel,
                    et tenez-y-vous.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>Before investing a single euro, you need a solid financial base: an emergency fund covering
                    3 to 6 months of expenses, kept liquid in a regular account. This money is not for investing —
                    it is insurance. Without it, you will be forced to sell your investments at the worst moment
                    (a personal financial crisis) rather than at the best market moment.</p>
                    <p><strong>The psychology of the investor</strong> is more important than the choice of assets.
                    The main enemy of individual investors is themselves: panic-selling during downturns, buying
                    euphoria at market peaks, checking their portfolio every day. Long-term investing requires the
                    ability to do nothing — which is rarer than it sounds.</p>
                    <p><strong>Asset allocation</strong> — the distribution between different types of investments
                    — determines most of the long-term return. Not the timing, not the stock picking. Decide on an
                    allocation that matches your risk tolerance and time horizon, and stick to it.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'investissement',
                'ordre'      => 2,
                'titre'      => "Bourse : le PEA et l'ETF MSCI World",
                'titre_en'   => 'Stock market: PEA and the MSCI World ETF',
                'contenu'    => <<<HTML
                    <p>J'investis en bourse via un <strong>PEA (Plan d'Épargne en Actions)</strong>, ouvert chez
                    Boursorama. Le PEA est une enveloppe fiscale avantageuse : après 5 ans, les plus-values et
                    dividendes sont exonérés d'impôt sur le revenu (seules les cotisations sociales restent à 17,2%).
                    Pour un résident français, c'est le véhicule le plus fiscalement efficace pour l'investissement
                    en actions.</p>
                    <p>Mon seul placement : l'<strong>ETF Amundi MSCI World</strong>. Le MSCI World suit environ
                    1 500 entreprises dans 23 pays développés, représentant environ 85% de la capitalisation
                    boursière mondiale. Un seul ETF = diversification mondiale instantanée.</p>
                    <p>Ma stratégie est simple : du DCA (Dollar Cost Averaging) régulier, c'est-à-dire investir
                    un montant fixe à intervalle régulier quelles que soient les conditions de marché. Je n'essaie
                    pas de timer le marché. Je ne choisis pas d'actions individuelles. J'achète et je conserve.</p>
                    <p>Cette approche est soutenue par des décennies de données : la grande majorité des fonds gérés
                    activement sous-performent leur indice de référence sur le long terme, frais déduits. Un fonds
                    indiciel passif, à bas coût et détenu sur le long terme, bat systématiquement la plupart des
                    stratégies professionnelles.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>I invest in the stock market through a <strong>PEA (Plan d'Épargne en Actions)</strong>,
                    opened at Boursorama. The PEA is a French tax-advantaged account: after 5 years, capital gains
                    and dividends are exempt from income tax (only social contributions remain at 17.2%). For a
                    French resident, it is the most fiscally efficient vehicle for equity investment.</p>
                    <p>My only holding: the <strong>Amundi MSCI World ETF</strong>. The MSCI World tracks around
                    1,500 companies in 23 developed countries, representing approximately 85% of the global equity
                    market capitalisation. One ETF = instant global diversification.</p>
                    <p>My strategy is simple: regular DCA (Dollar Cost Averaging), meaning I invest a fixed amount
                    at regular intervals regardless of market conditions. I don't try to time the market. I don't
                    pick individual stocks. I buy and hold.</p>
                    <p>This approach is backed by decades of data: the vast majority of actively managed funds
                    underperform their benchmark index over the long term, after fees. A passive index fund, low
                    cost and held for the long term, systematically beats most professional strategies.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'investissement',
                'ordre'      => 3,
                'titre'      => 'Immobilier locatif : les risques sous-estimés',
                'titre_en'   => 'Real estate: the underrated risks',
                'contenu'    => <<<HTML
                    <p>L'investissement immobilier est souvent présenté comme sûr, tangible et fiable. En réalité,
                    <strong>l'investissement locatif concentre des risques majeurs systématiquement
                    sous-estimés</strong>.</p>
                    <p>Le problème central : on est dépendant d'un tiers — le locataire — dont on ne peut pas
                    contrôler le comportement. Un locataire impayeur, un locataire dégradant les lieux, un locataire
                    qui refuse de partir à la fin de son bail : ce ne sont pas des scénarios rares. Ce sont des
                    réalités statistiques. Le droit français de protection des locataires, bien que socialement
                    justifié, rend les procédures d'expulsion longues, coûteuses et incertaines. Une situation
                    d'impayés peut durer 12 à 24 mois pendant lesquels le bien ne génère aucun revenu et accumule
                    des frais judiciaires.</p>
                    <p>À cela s'ajoutent : la gestion locative (trouver des locataires, relancer les loyers, gérer
                    les réparations, l'administratif), les frais de financement, la taxe foncière, les charges de
                    copropriété, les travaux de mise aux normes obligatoires, et les périodes de vacance. Le
                    rendement net réel, une fois tous les coûts déduits, est souvent bien en-dessous du rendement
                    brut annoncé dans les annonces.</p>
                    <p><strong>Ma position :</strong> j'ai un PEL (Plan d'Épargne Logement) pour préparer mon
                    premier et unique achat immobilier — ma résidence principale. Être propriétaire de son logement
                    est légitime : cela élimine le risque de hausse de loyer, apporte une sécurité, et constitue
                    une épargne forcée à long terme. Mais comme véhicule d'investissement, l'immobilier locatif
                    demande une gestion bien plus active et concentre bien plus de risques qu'un portefeuille
                    d'actions diversifié.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>Real estate investment is often presented as safe, tangible and reliable. In reality,
                    <strong>rental property investment concentrates major risks that are systematically
                    underestimated</strong>.</p>
                    <p>The central problem: you are dependent on a third party — the tenant — whose behaviour you
                    cannot control. An unpaying tenant, a damaging tenant, a tenant who refuses to leave after their
                    lease ends: these are not rare scenarios. They are statistical realities. French tenant protection
                    law, although socially justified, makes eviction procedures long, costly and uncertain. An unpaid
                    rent situation can drag on for 12 to 24 months while the property generates no income and racks
                    up legal fees.</p>
                    <p>On top of this: property management (finding tenants, chasing rent, repairs, administrative
                    management), financing costs, property taxes, co-ownership charges, mandatory renovation work,
                    and periods of vacancy. The actual net yield, once all costs are deducted, is often far below
                    the gross yield advertised in ads.</p>
                    <p><strong>My position:</strong> I have a PEL (Plan d'Épargne Logement) to prepare for my first
                    and only real estate purchase — my principal residence. Owning one's home is legitimate: it
                    eliminates the risk of rent increases, provides security, and constitutes long-term forced
                    savings. But as an investment vehicle, rental property requires much more active management and
                    carries much more concentrated risk than a diversified equity portfolio.</p>
                    HTML,
            ],

            [
                'rubrique'   => 'investissement',
                'ordre'      => 4,
                'titre'      => 'Crypto : une idéologie déguisée en investissement',
                'titre_en'   => 'Crypto: ideology dressed as investment',
                'contenu'    => <<<HTML
                    <p>J'avais des crypto sur Binance. Je m'en détourne, et voici pourquoi.</p>
                    <p>La crypto, notamment le Bitcoin, n'est pas fondamentalement un investissement — c'est une
                    idéologie. La prémisse sous-jacente est la croyance en une monnaie indépendante du pouvoir
                    étatique, décentralisée et non contrôlée par les banques centrales. C'est une position politique,
                    pas une thèse économique. La narrativité de "réserve de valeur" est une justification a posteriori
                    construite après les hausses de prix, pas une propriété fondamentale démontrée par des décennies
                    de stabilité.</p>
                    <p>Concrètement : <strong>la crypto, c'est de la spéculation</strong>. Son prix est déterminé
                    non pas par des bénéfices, des dividendes ou une activité économique réelle, mais par le
                    sentiment, les cycles narratifs, les manipulations des gros acteurs et les annonces
                    réglementaires. La volatilité est extrême — des drawdowns de 70 à 80% ne sont pas exceptionnels,
                    ils sont structurels. Un actif qui peut perdre 80% de sa valeur en quelques mois n'est pas un
                    véhicule d'investissement, c'est un instrument de jeu.</p>
                    <p>L'argument technologique (blockchain, décentralisation) est légitime, mais il ne justifie
                    pas le prix. Des technologies peuvent être révolutionnaires et leurs premiers investisseurs
                    peuvent quand même perdre de l'argent si la valorisation est déconnectée du réel. Et la majorité
                    des "altcoins" sont de simples schémas financiers, où les premiers entrants s'enrichissent au
                    détriment des suivants.</p>
                    <p>Je préfère un ETF ennuyeux qui suit 1 500 vraies entreprises avec des actifs tangibles, des
                    revenus et des bénéfices. C'est là que vit la vraie création de valeur.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <p>I had some crypto on Binance. I'm moving away from it, and here is why.</p>
                    <p>Crypto, especially Bitcoin, is not fundamentally an investment — it is an ideology. The
                    underlying premise is a belief in a currency independent of state power, decentralised and not
                    controlled by central banks. This is a political position, not an economic thesis. The "store of
                    value" narrative is a post-hoc justification constructed after the price rises, not a fundamental
                    property demonstrated by decades of stability.</p>
                    <p>Concretely: <strong>crypto is speculation</strong>. Its price is driven not by earnings,
                    dividends or real economic activity, but by sentiment, narrative cycles, whale manipulation and
                    regulatory announcements. The volatility is extreme — 70-80% drawdowns are not exceptional, they
                    are structural. An asset that can lose 80% of its value in a few months is not an investment
                    vehicle, it is a gambling instrument.</p>
                    <p>The technological argument (blockchain, decentralisation) is legitimate, but it does not
                    justify the price. Technologies can be revolutionary and their early investors can still lose
                    money if the valuation is disconnected from reality. And the majority of "altcoins" are simply
                    financial schemes, where early holders enrich themselves at the expense of latecomers.</p>
                    <p>I prefer a boring ETF tracking 1,500 real companies with tangible assets, revenue and
                    earnings. That's where real wealth creation lives.</p>
                    HTML,
            ],

        ];

        foreach ($sections as $s) {
            GaiaDeerSection::create($s);
        }
    }
}
