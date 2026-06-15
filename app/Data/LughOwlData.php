<?php

namespace App\Data;

class LughOwlData
{
    public const MODELES = [
        'balance', 'boussole', 'lanterne', 'lunettes', 'pendule', 'pont', 'reservoir',
    ];

    public const IDEES = [
        'acteur-spectateur', 'bouc-emissaire', 'capitalisme', 'consommation',
        'creation-destruction', 'danger-fiction', 'divertissement-peur',
        'entraide', 'etres-vivants-information', 'fragile-puissant',
        'lachete-courage', 'haine-indifference-amour', 'humanite-amour-mort',
        'inevitable-servitude', 'logique-sacrifice', 'normalite',
        'fierte-puissance-argent', 'puissance-soumission-liberte',
        'tripartition-etre', 'verite-raison', 'vitalite-emotions',
        'optimisme', 'volonte-puissance-desharmonie',
    ];

    public const VIE = [
        'champ-de-bataille', 'dialogue-chaos', 'enfer-necessaire',
        'jeu-video-realiste', 'orchestre-symphonique', 'paradis-precaire',
        'piece-theatre',
    ];

    public static function articles(): array
    {
        return [
            ['slug' => 'balance',       'categorie' => 'Modèles philosophiques', 'titre' => 'La Balance de Lugh',       'description' => 'La Balance de Lugh illustre l\'équilibre entre le bien et le mal dans nos actions. Elle met en lumière le poids de chaque geste et son impact.'],
            ['slug' => 'boussole',      'categorie' => 'Modèles philosophiques', 'titre' => 'La Boussole de Lugh',      'description' => 'Un concept métaphysique qui guide l\'être humain vers la sagesse et l\'unité divine, en distinguant les vertus et les vices.'],
            ['slug' => 'lanterne',      'categorie' => 'Modèles philosophiques', 'titre' => 'La Lanterne de Lugh',      'description' => 'Une métaphore lumineuse pour explorer la sagesse, l\'équilibre intérieur et les défis liés à notre rayonnement personnel.'],
            ['slug' => 'lunettes',      'categorie' => 'Modèles philosophiques', 'titre' => 'Les Lunettes de Lugh',     'description' => 'Une métaphore pour comprendre l\'importance d\'observer le passé, d\'analyser le présent et de se préparer à l\'avenir avec sagesse.'],
            ['slug' => 'pendule',       'categorie' => 'Modèles philosophiques', 'titre' => 'Le Pendule de Lugh',       'description' => 'Une métaphore pour comprendre les oscillations naturelles de la vie entre force et faiblesse.'],
            ['slug' => 'pont',          'categorie' => 'Modèles philosophiques', 'titre' => 'Le Pont de Lugh',          'description' => 'Une allégorie pour illustrer le cheminement entre ignorance et sagesse, un équilibre entre connaissance intérieure et extérieure.'],
            ['slug' => 'reservoir',     'categorie' => 'Modèles philosophiques', 'titre' => 'Le Réservoir de Lugh',     'description' => 'Une métaphore du processus de transformation du savoir en sagesse, où l\'eau représente la connaissance et le feu l\'assimilation.'],

            ['slug' => 'acteur-spectateur',           'categorie' => 'Idées immuables', 'titre' => 'Acteur et Spectateur',                   'description' => 'La vie nous place dans les rôles d\'acteur et de spectateur. Apprendre à jongler entre l\'action réfléchie et l\'observation tempérée.'],
            ['slug' => 'bouc-emissaire',              'categorie' => 'Idées immuables', 'titre' => 'Bouc Émissaire',                         'description' => 'Le concept du bouc émissaire montre comment une société désigne quelqu\'un pour porter la haine et les maux collectifs.'],
            ['slug' => 'capitalisme',                 'categorie' => 'Idées immuables', 'titre' => 'Capitalisme, Progressisme et Idéalisme',  'description' => 'Le capitalisme, le progressisme et l\'idéalisme façonnent notre société contemporaine. Entre dérives économiques et impacts psychologiques.'],
            ['slug' => 'consommation',                'categorie' => 'Idées immuables', 'titre' => 'Consommation, Capitalisme et Éducation',  'description' => 'La société de consommation, alimentée par les médias, détourne l\'éducation en favorisant une culture de l\'achat et du paraître.'],
            ['slug' => 'creation-destruction',        'categorie' => 'Idées immuables', 'titre' => 'Création, Transformation et Destruction', 'description' => 'La création, la transformation et la destruction sont trois forces qui façonnent le monde et l\'évolution des individus.'],
            ['slug' => 'danger-fiction',              'categorie' => 'Idées immuables', 'titre' => 'Danger, Fiction et Imagination',          'description' => 'La fiction peut être un puissant moyen d\'évasion, mais rester spectateur sans confrontation à la réalité peut mener à l\'inaction.'],
            ['slug' => 'divertissement-peur',         'categorie' => 'Idées immuables', 'titre' => 'Divertissement et Peur de l\'Absence',    'description' => 'Le divertissement moderne cache une peur profonde : celle de l\'absence de sens et de la solitude.'],
            ['slug' => 'entraide',                    'categorie' => 'Idées immuables', 'titre' => 'Entraide et Harmonie',                    'description' => 'L\'entraide est la clé de l\'harmonie sociale. Elle renforce les liens et favorise la coopération face aux défis du quotidien.'],
            ['slug' => 'etres-vivants-information',   'categorie' => 'Idées immuables', 'titre' => 'Êtres Vivants : Émetteurs et Récepteurs',  'description' => 'Les êtres vivants communiquent en permanence avec leur environnement, formant un réseau complexe d\'échanges d\'informations.'],
            ['slug' => 'fierte-puissance-argent',     'categorie' => 'Idées immuables', 'titre' => 'Orgueil, Pouvoir et Argent',              'description' => 'L\'orgueil, le pouvoir et l\'argent sont des forces puissantes qui façonnent les sociétés et peuvent se détruire mutuellement.'],
            ['slug' => 'fragile-puissant',            'categorie' => 'Idées immuables', 'titre' => 'Puissance et Fragilité',                  'description' => 'Les êtres vivants incarnent un équilibre fascinant entre force et vulnérabilité, reflétant leur capacité à s\'adapter et évoluer.'],
            ['slug' => 'haine-indifference-amour',    'categorie' => 'Idées immuables', 'titre' => 'Haine, Indifférence et Amour',            'description' => 'Ces trois états émotionnels sont indissociables de notre existence et de nos relations humaines.'],
            ['slug' => 'humanite-amour-mort',         'categorie' => 'Idées immuables', 'titre' => 'Humanité, Amour et Mort',                 'description' => 'L\'humanité cherche un sens, l\'amour apporte des réponses, et la mort nous rappelle notre fragilité.'],
            ['slug' => 'inevitable-servitude',        'categorie' => 'Idées immuables', 'titre' => 'Inévitable Servitude',                    'description' => 'La servitude, choisie ou imposée, fait partie de la condition humaine et interroge notre liberté et nos dépendances.'],
            ['slug' => 'lachete-courage',             'categorie' => 'Idées immuables', 'titre' => 'Fuite, Lâcheté et Courage',               'description' => 'Ces trois notions définissent nos réactions face à l\'adversité, entre peur et bravoure.'],
            ['slug' => 'logique-sacrifice',           'categorie' => 'Idées immuables', 'titre' => 'Logique du Sacrifice',                    'description' => 'Le sacrifice, souvent perçu comme une perte, est un mécanisme universel pour créer, préserver ou transformer.'],
            ['slug' => 'normalite',                   'categorie' => 'Idées immuables', 'titre' => 'Normalité Immuable à Influençable',        'description' => 'La normalité, longtemps stable, évolue constamment et peut être source de progrès mais aussi de dérives sociales.'],
            ['slug' => 'optimisme',                   'categorie' => 'Idées immuables', 'titre' => 'Voir le Verre à Moitié Plein',             'description' => 'Une attitude optimiste face aux difficultés, percevant les opportunités dans les défis plutôt que les manques.'],
            ['slug' => 'puissance-soumission-liberte','categorie' => 'Idées immuables', 'titre' => 'Pouvoir, Soumission et Liberté',          'description' => 'Le pouvoir peut créer un désir de soumission. La peur de la liberté bloque parfois l\'autonomie et enferme dans un contrôle.'],
            ['slug' => 'tripartition-etre',           'categorie' => 'Idées immuables', 'titre' => 'Tripartition de l\'Être',                  'description' => 'L\'être humain est composé du Corps, de l\'Âme et de l\'Esprit, chacun jouant un rôle vital dans notre équilibre intérieur.'],
            ['slug' => 'verite-raison',               'categorie' => 'Idées immuables', 'titre' => 'Vérité et Raison',                         'description' => 'La quête de la vérité est liée à la raison humaine, menant à une compréhension plus profonde de soi et du monde.'],
            ['slug' => 'vitalite-emotions',           'categorie' => 'Idées immuables', 'titre' => 'Vitalité et Émotions',                     'description' => 'La vitalité est intrinsèquement liée aux émotions, qui façonnent notre bien-être et influencent nos actions.'],
            ['slug' => 'volonte-puissance-desharmonie','categorie' => 'Idées immuables','titre' => 'Volonté de Puissance et Désharmonie',     'description' => 'La volonté de puissance, quête de domination, peut créer une disharmonie profonde et des conflits internes et sociaux.'],

            ['slug' => 'champ-de-bataille',     'categorie' => 'La Vie est [...]', 'titre' => 'La Vie est un Champ de Bataille',      'description' => 'Une métaphore qui illustre les luttes et les victoires de l\'existence. Chaque jour, nous combattons pour avancer et évoluer.'],
            ['slug' => 'dialogue-chaos',        'categorie' => 'La Vie est [...]', 'titre' => 'La Vie est un Dialogue avec le Chaos', 'description' => 'L\'être humain navigue dans l\'imprévu pour trouver un équilibre et construire un sens à son existence.'],
            ['slug' => 'enfer-necessaire',      'categorie' => 'La Vie est [...]', 'titre' => 'La Vie est un Enfer Nécessaire',       'description' => 'Malgré ses épreuves, la vie est une forge essentielle où l\'âme se renforce et atteint la sagesse.'],
            ['slug' => 'jeu-video-realiste',    'categorie' => 'La Vie est [...]', 'titre' => 'La Vie est un Jeu Vidéo Réaliste',     'description' => 'La vie peut être perçue comme un immense jeu vidéo, confronté à des défis, des choix, et des quêtes multiples.'],
            ['slug' => 'orchestre-symphonique', 'categorie' => 'La Vie est [...]', 'titre' => 'La Vie est un Orchestre Symphonique',  'description' => 'La vie ressemble à un orchestre où chaque élément joue un rôle unique pour créer une harmonie collective.'],
            ['slug' => 'paradis-precaire',      'categorie' => 'La Vie est [...]', 'titre' => 'La Vie est un Paradis Précaire',       'description' => 'La vie est un équilibre fragile entre bonheur et incertitude, exigeant vigilance et gratitude.'],
            ['slug' => 'piece-theatre',         'categorie' => 'La Vie est [...]', 'titre' => 'La Vie est une Pièce de Théâtre',      'description' => 'La vie est une mise en scène où chacun joue un rôle, naviguant entre masques et improvisations.'],
        ];
    }
}
