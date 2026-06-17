<?php

namespace App\Data;

class PortfolioData
{
    public static function profil(): array
    {
        return [
            'infos' => [
                ['cle' => 'Prénom Nom',        'val' => 'Nicolas BISAGA'],
                ['cle' => 'Date de naissance', 'val' => '20 mai 2002'],
                ['cle' => 'Lieu de naissance', 'val' => 'Thionville, Moselle (57), France'],
                ['cle' => 'Nationalité',       'val' => 'Française 🇫🇷 et Luxembourgeoise 🇱🇺'],
                ['cle' => 'Transport',         'val' => 'Permis B + véhicule personnel'],
                ['cle' => 'Licence',           'val' => 'Informatique — Université de Lorraine, Metz (validée 2026)'],
                ['cle' => 'Master',            'val' => 'Cybersécurité — UFR MIM, Metz (sept. 2026)'],
                ['cle' => 'TryHackMe', 'lien' => ['href' => 'https://tryhackme.com/p/NewGateFR',             'label' => 'tryhackme.com/p/NewGateFR']],
                ['cle' => 'GitHub',   'lien' => ['href' => 'https://github.com/lughowl',                 'label' => 'github.com/lughowl']],
                ['cle' => 'LinkedIn', 'lien' => ['href' => 'https://www.linkedin.com/in/nicolasbisaga',  'label' => 'linkedin.com/in/nicolasbisaga']],
            ],
            'objectif' => "Me spécialiser en cybersécurité à travers un Master à l'UFR MIM Metz, avec pour objectif de devenir analyste SOC puis architecte cybersécurité.",
        ];
    }

    public static function recherches(): array
    {
        return [
            [
                'priorite'    => 1,
                'label_terme' => 'Étape confirmée',
                'type'        => 'Master',
                'titre'       => 'Master Cybersécurité — UFR MIM Metz',
                'badge_color' => 'green',
                'details'     => [
                    ['cle' => 'ÉTABLISSEMENT', 'val' => 'Université de Lorraine — UFR MIM, Metz'],
                    ['cle' => 'DÉBUT',         'val' => 'Septembre 2026'],
                    ['cle' => 'DURÉE',         'val' => '2 ans (2026 – 2028)'],
                    ['cle' => 'STATUT',        'val' => 'Admis'],
                ],
            ],
            [
                'priorite'    => 2,
                'label_terme' => 'Objectif professionnel',
                'type'        => 'Carrière',
                'titre'       => 'SOC Analyst → Architecte Cybersécurité',
                'badge_color' => 'blue',
                'details'     => [
                    ['cle' => 'ÉTAPE 1',  'val' => 'Analyste SOC — détection, monitoring, réponse aux incidents'],
                    ['cle' => 'ÉTAPE 2',  'val' => 'Architecte Cybersécurité — conception de systèmes sécurisés'],
                    ['cle' => 'DOMAINES', 'val' => 'SIEM, EDR, forensique, gouvernance, architecture zero-trust'],
                ],
            ],
        ];
    }

    public static function formations(): array
    {
        return [
            [
                'periode' => '2026 → 2028',
                'titre'   => 'Master Cybersécurité',
                'org'     => 'Université de Lorraine — UFR MIM, Metz',
                'desc'    => "Spécialisation en cybersécurité dans le même établissement que la licence. Objectif : devenir analyste SOC puis architecte cybersécurité.",
                'dot'     => 'future',
                'tags'    => [
                    ['label' => 'Admis',         'couleur' => 'green'],
                    ['label' => 'Sept. 2026',    'couleur' => 'blue'],
                    ['label' => 'Cybersécurité', 'couleur' => 'cyan'],
                ],
            ],
            [
                'periode' => '2023 → 2026',
                'titre'   => 'Licence Informatique',
                'org'     => 'Université de Lorraine — UFR MIM, Metz',
                'desc'    => "Formation en développement logiciel (C, C++, Java, PHP, Python, SQL), algorithmique, systèmes d'exploitation (Linux/Windows), réseaux (TCP/IP, Cisco), bases de données, cybersécurité, analyse de données (R, Python).",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Validée',    'couleur' => 'blue'],
                    ['label' => 'Metz (57)',  'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => '2020 → 2023',
                'titre'   => 'Licence Droit Économie Gestion (BAC+3)',
                'org'     => 'IAE Nancy — Université de Lorraine',
                'desc'    => "Licence validée. Formation pluridisciplinaire en droit, économie, gestion et management. Développement de compétences analytiques, rédactionnelles et d'organisation.",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Validé',     'couleur' => 'blue'],
                    ['label' => 'Nancy (54)', 'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => '2020',
                'titre'   => 'Baccalauréat Scientifique',
                'org'     => 'Lycée La Providence — Thionville (57)',
                'desc'    => 'Obtenu avec mention Très Bien. Spécialités Mathématiques et Sciences.',
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Mention Très Bien', 'couleur' => 'green'],
                    ['label' => 'Thionville (57)',   'couleur' => 'gray'],
                ],
            ],
        ];
    }

    public static function certifications(): array
    {
        return [
            ['nom' => 'CompTIA Security+', 'couleur' => 'badge-green',  'desc' => 'Fondamentaux sécurité réseau, threats, cryptographie'],
            ['nom' => 'CEH',               'couleur' => 'badge-blue',   'desc' => 'Certified Ethical Hacker — techniques offensives'],
            ['nom' => 'CISSP',             'couleur' => 'badge-purple', 'desc' => 'Certification experte en architecture de sécurité'],
        ];
    }

    public static function experiences(): array
    {
        return [
            [
                'periode' => 'Juillet 2025',
                'titre'   => 'Agent polyvalent',
                'org'     => 'Onet — Cour de justice de l\'Union européenne, Luxembourg',
                'desc'    => "Emploi étudiant d'une durée d'un mois. Missions polyvalentes au sein des services de la Cour de justice de l'UE, environnement multilingue et international.",
                'dot'     => '',
                'tags'    => [
                    ['label' => 'Emploi étudiant', 'couleur' => 'green'],
                    ['label' => 'Luxembourg',      'couleur' => 'gray'],
                    ['label' => '1 mois',          'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => 'Juillet – Août 2023',
                'titre'   => 'Adjoint administratif',
                'org'     => 'Mairie de Hayange — Direction des services techniques',
                'desc'    => 'CDD de 2 mois. Gestion administrative, rédaction de documents officiels, suivi de dossiers et communication interne.',
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'CDD',            'couleur' => 'blue'],
                    ['label' => 'Hayange (57)',    'couleur' => 'gray'],
                    ['label' => '2 mois',         'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => 'Avril – Mai 2023',
                'titre'   => 'Stagiaire administratif',
                'org'     => 'Mairie de Hayange',
                'desc'    => "Stage de 6 semaines. Découverte des processus administratifs d'une collectivité territoriale, gestion documentaire et appui aux équipes.",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Stage',          'couleur' => 'cyan'],
                    ['label' => 'Hayange (57)',    'couleur' => 'gray'],
                    ['label' => '6 semaines',     'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => '2022 – 2023',
                'titre'   => 'Bénévole',
                'org'     => 'Association Emmaüs 54 — Vandœuvre-lès-Nancy',
                'desc'    => 'Tri, collecte et redistribution de biens, accueil des personnes en situation de précarité, travail en équipe solidaire.',
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Bénévolat',   'couleur' => 'purple'],
                    ['label' => 'Nancy (54)',   'couleur' => 'gray'],
                    ['label' => '8 mois',      'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => 'Août 2022',
                'titre'   => 'Agent polyvalent — Gestion du Bâtiment',
                'org'     => 'Cour de justice de l\'Union européenne, Luxembourg',
                'desc'    => "Emploi étudiant d'un mois au sein de l'unité Gestion du Bâtiment. Environnement institutionnel européen, missions logistiques et techniques.",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Emploi étudiant', 'couleur' => 'green'],
                    ['label' => 'Luxembourg',      'couleur' => 'gray'],
                    ['label' => '1 mois',          'couleur' => 'gray'],
                ],
            ],
        ];
    }

    public static function competences(): array
    {
        return [
            [
                'id'        => 'cyber',
                'titre'     => 'Cybersécurité',
                'highlight' => true,
                'type'      => 'bars_and_tags',
                'items'     => [
                    ['nom' => 'TryHackMe (labs, SIEM, Wireshark)', 'niveau' => 65, 'couleur' => 'g'],
                    ['nom' => 'Analyse réseau — Wireshark',         'niveau' => 65, 'couleur' => 'g'],
                    ['nom' => 'SIEM / Analyse de logs',             'niveau' => 50, 'couleur' => 'g'],
                    ['nom' => 'OSINT & reconnaissance',             'niveau' => 45, 'couleur' => 'g'],
                ],
                'tags' => [
                    ['label' => 'ANSSI',     'couleur' => 'green'],
                    ['label' => 'TryHackMe', 'couleur' => 'green'],
                    ['label' => 'Wireshark', 'couleur' => 'blue'],
                    ['label' => 'SIEM',      'couleur' => 'cyan'],
                    ['label' => 'CTF',       'couleur' => 'orange'],
                ],
            ],
            [
                'id'    => 'reseaux',
                'titre' => 'Réseaux',
                'type'  => 'bars',
                'items' => [
                    ['nom' => 'TCP/IP & modèle OSI',                   'niveau' => 74, 'couleur' => 'b'],
                    ['nom' => 'Protocoles (TCP, UDP, DNS, HTTP, ARP…)', 'niveau' => 72, 'couleur' => 'b'],
                    ['nom' => 'Cisco Packet Tracer',                   'niveau' => 62, 'couleur' => 'b'],
                    ['nom' => 'IPv4/IPv6, VLAN, VPN',                  'niveau' => 68, 'couleur' => 'b'],
                ],
            ],
            [
                'id'    => 'langages',
                'titre' => 'Langages informatiques',
                'type'  => 'bars',
                'items' => [
                    ['nom' => 'HTML5 / CSS',  'niveau' => 88, 'couleur' => 'g'],
                    ['nom' => 'PHP',          'niveau' => 75, 'couleur' => 'g'],
                    ['nom' => 'SQL',          'niveau' => 78, 'couleur' => 'g'],
                    ['nom' => 'Java',         'niveau' => 72, 'couleur' => 'g'],
                    ['nom' => 'C',            'niveau' => 70, 'couleur' => 'g'],
                    ['nom' => 'JavaScript',   'niveau' => 65, 'couleur' => 'g'],
                    ['nom' => 'C++ (OOP)',    'niveau' => 65, 'couleur' => 'g'],
                    ['nom' => 'Python',       'niveau' => 40, 'couleur' => 'o'],
                ],
            ],
            [
                'id'    => 'systemes',
                'titre' => "Systèmes d'exploitation",
                'type'  => 'bars',
                'items' => [
                    ['nom' => 'Linux (Debian/Ubuntu) — Users, threads, sémaphores, awk', 'niveau' => 72, 'couleur' => 'p'],
                    ['nom' => 'Windows — Active Directory, PowerShell, Computer Management', 'niveau' => 68, 'couleur' => 'p'],
                ],
            ],
            [
                'id'    => 'dev',
                'titre' => 'Développement & Bases de données',
                'type'  => 'bars',
                'items' => [
                    ['nom' => 'Sites web — Laravel / PHP',       'niveau' => 78, 'couleur' => 'b'],
                    ['nom' => 'Architecture MVC — Java/JavaFX',  'niveau' => 72, 'couleur' => 'b'],
                    ['nom' => 'PL/SQL — Procédures & fonctions', 'niveau' => 75, 'couleur' => 'b'],
                    ['nom' => 'Modélisation BDD (MCD, 4FN)',     'niveau' => 70, 'couleur' => 'b'],
                    ['nom' => 'GitHub',                          'niveau' => 75, 'couleur' => 'b'],
                ],
            ],
            [
                'id'   => 'divers',
                'type' => 'two-col',
                'cols' => [
                    [
                        'titre' => 'Soft skills',
                        'type'  => 'tags',
                        'tags'  => [
                            ['label' => 'Discernement', 'couleur' => 'green'],
                            ['label' => 'Curiosité',    'couleur' => 'blue'],
                            ['label' => 'Tempérance',   'couleur' => 'purple'],
                            ['label' => 'Organisation', 'couleur' => 'cyan'],
                            ['label' => 'Adaptabilité', 'couleur' => 'orange'],
                        ],
                    ],
                    [
                        'titre' => 'Langues',
                        'type'  => 'bars',
                        'items' => [
                            ['nom' => 'Français (natif)', 'niveau' => 100, 'couleur' => 'g'],
                            ['nom' => 'Anglais (B1)',      'niveau' => 60,  'couleur' => 'b'],
                        ],
                    ],
                ],
            ],
        ];
    }

    public static function projets(): array
    {
        return [
            [
                'nom'   => 'Inari-Fox',
                'sujet' => 'Recettes de Cuisine',
                'desc'  => "Site de recettes culinaires : organisation par ingrédients, catégories et filtres. Interface conviviale pour les amateurs de gastronomie.",
                'logo'  => '/assets/Inari-Fox/1.logo.png',
                'color' => '#c80000',
                'route' => 'fr.inari-fox.accueil',
                'etat'  => 'ligne',
            ],
            [
                'nom'   => 'Bragi-Bird',
                'sujet' => 'Piano & Musique',
                'desc'  => 'Collection personnelle de morceaux de piano appréciés, avec des enregistrements issus de YouTube et d\'autres sources.',
                'logo'  => '/assets/Bragi-Bird/1.logo.png',
                'color' => '#ff8c00',
                'route' => 'fr.bragi-bird.accueil',
                'etat'  => 'ligne',
            ],
            [
                'nom'   => 'Janus-Bee',
                'sujet' => 'Œuvres audiovisuelles & Livres',
                'desc'  => "Catalogue de films, séries d'animation, livres et jeux vidéo avec filtres par type, genre et recherche textuelle.",
                'logo'  => '/assets/Janus-Bee/1.logo.png',
                'color' => '#ffdc00',
                'route' => 'fr.janus-bee.accueil',
                'etat'  => 'ligne',
            ],
            [
                'nom'   => 'Gaïa-Deer',
                'sujet' => 'Randonnée & Santé',
                'desc'  => 'Réflexions personnelles sur la santé physique, la nutrition et l\'investissement à long terme.',
                'logo'  => '/assets/Gaia-Deer/1.logo.png',
                'color' => '#00af00',
                'route' => 'fr.gaia-deer.accueil',
                'etat'  => 'ligne',
            ],
            [
                'nom'   => 'Zeus-Bug',
                'sujet' => 'Informatique & Cybersécurité',
                'desc'  => "Blog technique sur l'informatique, la cybersécurité, les projets numériques et les ressources pour apprendre.",
                'logo'  => '/assets/Zeus-Bug/1.logo.png',
                'color' => '#00f0d2',
                'route' => 'fr.zeus-bug.accueil',
                'etat'  => 'ligne',
            ],
            [
                'nom'   => 'Lugh-Owl',
                'sujet' => 'Philosophie & Psychologie',
                'desc'  => 'Articles philosophiques sur les modèles de pensée, les idées immuables et la métaphysique de la vie quotidienne.',
                'logo'  => '/assets/Lugh-Owl/1.logo.png',
                'color' => '#0078ff',
                'route' => 'fr.lugh-owl.accueil',
                'etat'  => 'ligne',
            ],
            [
                'nom'   => 'Ouranos-Taurus',
                'sujet' => 'Astronomie & Physique',
                'desc'  => "Exploration de l'astronomie, de la physique fondamentale et de la mythologie liée aux astres et aux constellations.",
                'logo'  => '/assets/Ouranos-Taurus/1.logo.png',
                'color' => '#7d00b4',
                'route' => 'fr.ouranos-taurus.accueil',
                'etat'  => 'ligne',
            ],
        ];
    }
}
