<?php

namespace Database\Seeders;

use App\Models\Certification;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Objectif;
use App\Models\Presentation;
use App\Models\Profil;
use App\Models\Projet;
use Illuminate\Database\Seeder;

class PortfolioEnSeeder extends Seeder
{
    public function run(): void
    {
        // ── Formations ────────────────────────────────────────────────
        $formations = [
            [
                'periode' => '2026 → 2028',
                'titre'   => "Master's in Cybersecurity",
                'org'     => 'Université de Lorraine — UFR MIM, Metz',
                'desc'    => "Specialisation in cybersecurity at the same institution as the bachelor's degree. Goal: become a SOC Analyst then Cybersecurity Architect.",
                'dot'     => 'future',
                'tags'    => [
                    ['label' => 'Admitted',      'couleur' => 'green'],
                    ['label' => 'Sept. 2026',    'couleur' => 'blue'],
                    ['label' => 'Cybersecurity', 'couleur' => 'cyan'],
                ],
            ],
            [
                'periode' => '2023 → 2026',
                'titre'   => "Bachelor's Degree in Computer Science",
                'org'     => 'Université de Lorraine — UFR MIM, Metz',
                'desc'    => "Training in software development (C, C++, Java, PHP, Python, SQL), algorithms, operating systems (Linux/Windows), networking (TCP/IP, Cisco), databases, cybersecurity, data analysis (R, Python).",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Validated',  'couleur' => 'blue'],
                    ['label' => 'Metz (57)',  'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => '2020 → 2023',
                'titre'   => "Bachelor's Degree in Law, Economics & Management",
                'org'     => 'IAE Nancy — Université de Lorraine',
                'desc'    => "Validated degree. Multidisciplinary training in law, economics, management and business administration. Development of analytical, writing and organisational skills.",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Validated',  'couleur' => 'blue'],
                    ['label' => 'Nancy (54)', 'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => '2020',
                'titre'   => 'Scientific Baccalaureate',
                'org'     => 'Lycée La Providence — Thionville (57)',
                'desc'    => 'Obtained with Highest Honours. Mathematics and Science specialisations.',
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Highest Honours',  'couleur' => 'green'],
                    ['label' => 'Thionville (57)',   'couleur' => 'gray'],
                ],
            ],
        ];

        foreach ($formations as $i => $f) {
            Formation::create(array_merge($f, ['locale' => 'en', 'ordre' => $i]));
        }

        // ── Certifications ────────────────────────────────────────────
        $certifications = [
            ['nom' => 'CompTIA Security+', 'couleur' => 'badge-green',  'desc' => 'Network security fundamentals, threats, cryptography'],
            ['nom' => 'CEH',               'couleur' => 'badge-blue',   'desc' => 'Certified Ethical Hacker — offensive techniques'],
            ['nom' => 'CISSP',             'couleur' => 'badge-purple', 'desc' => 'Expert certification in security architecture'],
        ];

        foreach ($certifications as $i => $c) {
            Certification::create(array_merge($c, ['locale' => 'en', 'ordre' => $i]));
        }

        // ── Experiences ───────────────────────────────────────────────
        $experiences = [
            [
                'periode' => 'July 2025',
                'titre'   => 'General Operative',
                'org'     => 'Onet — Court of Justice of the European Union, Luxembourg',
                'desc'    => "One-month student job. Versatile missions within the Court of Justice of the EU services, multilingual and international environment.",
                'dot'     => '',
                'tags'    => [
                    ['label' => 'Student job', 'couleur' => 'green'],
                    ['label' => 'Luxembourg',  'couleur' => 'gray'],
                    ['label' => '1 month',     'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => 'July – August 2023',
                'titre'   => 'Administrative Assistant',
                'org'     => 'Hayange Town Hall — Technical Services Department',
                'desc'    => '2-month fixed-term contract. Administrative management, drafting official documents, file follow-up and internal communication.',
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Fixed-term',  'couleur' => 'blue'],
                    ['label' => 'Hayange (57)','couleur' => 'gray'],
                    ['label' => '2 months',    'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => 'April – May 2023',
                'titre'   => 'Administrative Trainee',
                'org'     => 'Hayange Town Hall',
                'desc'    => "6-week internship. Introduction to the administrative processes of a local authority, document management and team support.",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Internship',  'couleur' => 'cyan'],
                    ['label' => 'Hayange (57)','couleur' => 'gray'],
                    ['label' => '6 weeks',     'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => '2022 – 2023',
                'titre'   => 'Volunteer',
                'org'     => 'Association Emmaüs 54 — Vandœuvre-lès-Nancy',
                'desc'    => 'Sorting, collecting and redistributing goods, welcoming people in precarious situations, teamwork in solidarity.',
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Volunteering', 'couleur' => 'purple'],
                    ['label' => 'Nancy (54)',    'couleur' => 'gray'],
                    ['label' => '8 months',     'couleur' => 'gray'],
                ],
            ],
            [
                'periode' => 'August 2022',
                'titre'   => 'General Operative — Building Management',
                'org'     => 'Court of Justice of the European Union, Luxembourg',
                'desc'    => "One-month student job in the Building Management unit. European institutional environment, logistics and technical missions.",
                'dot'     => 'blue',
                'tags'    => [
                    ['label' => 'Student job', 'couleur' => 'green'],
                    ['label' => 'Luxembourg',  'couleur' => 'gray'],
                    ['label' => '1 month',     'couleur' => 'gray'],
                ],
            ],
        ];

        foreach ($experiences as $i => $e) {
            Experience::create(array_merge($e, ['locale' => 'en', 'ordre' => $i]));
        }

        // ── Projets ───────────────────────────────────────────────────
        $projets = [
            ['nom' => 'Inari-Fox',      'sujet' => 'Cooking Recipes',                    'desc' => "Recipe website organised by ingredients, categories and filters. A user-friendly interface for food lovers.",                                                                'logo' => '/assets/Inari-Fox/1.logo.png',      'color' => '#c80000', 'route' => 'fr.inari-fox',           'etat' => 'construction'],
            ['nom' => 'Bragi-Bird',     'sujet' => 'Piano & Music',                      'desc' => "Catalogue of inspiring piano pieces, sheet music, musical resources and composer discovery.",                                                                              'logo' => '/assets/Bragi-Bird/1.logo.png',     'color' => '#ff8c00', 'route' => 'fr.bragi-bird',          'etat' => 'construction'],
            ['nom' => 'Janus-Bee',      'sujet' => 'Audiovisual Works & Books',          'desc' => "Catalogue of films, animated series, books and video games with filters by type, genre and text search.",                                                                  'logo' => '/assets/Janus-Bee/1.logo.png',      'color' => '#ffdc00', 'route' => 'fr.janus-bee.accueil',   'etat' => 'ligne'],
            ['nom' => 'Gaïa-Deer',      'sujet' => 'Hiking & Health',                   'desc' => "Resources on hiking, healthy life strategies and physical and mental well-being.",                                                                                          'logo' => '/assets/Gaia-Deer/1.logo.png',      'color' => '#00af00', 'route' => 'fr.gaia-deer',           'etat' => 'construction'],
            ['nom' => 'Zeus-Bug',       'sujet' => 'IT & Cybersecurity',                 'desc' => "Technical blog on IT, cybersecurity, digital projects and learning resources.",                                                                                            'logo' => '/assets/Zeus-Bug/1.logo.png',       'color' => '#00f0d2', 'route' => 'fr.zeus-bug',            'etat' => 'construction'],
            ['nom' => 'Lugh-Owl',       'sujet' => 'Philosophy & Psychology',            'desc' => "Philosophical articles on thinking models, immutable ideas and the metaphysics of everyday life.",                                                                         'logo' => '/assets/Lugh-Owl/1.logo.png',       'color' => '#0078ff', 'route' => 'fr.lugh-owl.accueil',    'etat' => 'ligne'],
            ['nom' => 'Ouranos-Taurus', 'sujet' => 'Astronomy & Physics',               'desc' => "Exploration of astronomy, fundamental physics and mythology related to stars and constellations.",                                                                         'logo' => '/assets/Ouranos-Taurus/1.logo.png', 'color' => '#7d00b4', 'route' => 'fr.ouranos-taurus',      'etat' => 'construction'],
        ];

        foreach ($projets as $i => $p) {
            Projet::create(array_merge($p, ['locale' => 'en', 'ordre' => $i]));
        }

        // ── Compétences ───────────────────────────────────────────────
        Competence::create([
            'locale' => 'en',
            'data'   => [
                [
                    'id' => 'cyber', 'titre' => 'Cybersecurity', 'highlight' => true, 'type' => 'bars_and_tags',
                    'items' => [
                        ['nom' => 'TryHackMe (labs, SIEM, Wireshark)', 'niveau' => 65, 'couleur' => 'g'],
                        ['nom' => 'Network Analysis — Wireshark',       'niveau' => 65, 'couleur' => 'g'],
                        ['nom' => 'SIEM / Log Analysis',                'niveau' => 50, 'couleur' => 'g'],
                        ['nom' => 'OSINT & Reconnaissance',             'niveau' => 45, 'couleur' => 'g'],
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
                    'id' => 'reseaux', 'titre' => 'Networks', 'type' => 'bars',
                    'items' => [
                        ['nom' => 'TCP/IP & OSI Model',                        'niveau' => 74, 'couleur' => 'b'],
                        ['nom' => 'Protocols (TCP, UDP, DNS, HTTP, ARP…)',      'niveau' => 72, 'couleur' => 'b'],
                        ['nom' => 'Cisco Packet Tracer',                        'niveau' => 62, 'couleur' => 'b'],
                        ['nom' => 'IPv4/IPv6, VLAN, VPN',                       'niveau' => 68, 'couleur' => 'b'],
                    ],
                ],
                [
                    'id' => 'langages', 'titre' => 'Programming Languages', 'type' => 'bars',
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
                    'id' => 'systemes', 'titre' => 'Operating Systems', 'type' => 'bars',
                    'items' => [
                        ['nom' => 'Linux (Debian/Ubuntu) — users, threads, semaphores, awk', 'niveau' => 72, 'couleur' => 'p'],
                        ['nom' => 'Windows — Active Directory, PowerShell, Computer Management', 'niveau' => 68, 'couleur' => 'p'],
                    ],
                ],
                [
                    'id' => 'dev', 'titre' => 'Development & Databases', 'type' => 'bars',
                    'items' => [
                        ['nom' => 'Web Development — Laravel / PHP',    'niveau' => 78, 'couleur' => 'b'],
                        ['nom' => 'MVC Architecture — Java/JavaFX',     'niveau' => 72, 'couleur' => 'b'],
                        ['nom' => 'PL/SQL — Procedures & Functions',    'niveau' => 75, 'couleur' => 'b'],
                        ['nom' => 'DB Modelling (CDM, 4NF)',            'niveau' => 70, 'couleur' => 'b'],
                        ['nom' => 'GitHub',                             'niveau' => 75, 'couleur' => 'b'],
                    ],
                ],
                [
                    'id' => 'divers', 'type' => 'two-col',
                    'cols' => [
                        [
                            'titre' => 'Soft skills', 'type' => 'tags',
                            'tags'  => [
                                ['label' => 'Discernment',   'couleur' => 'green'],
                                ['label' => 'Curiosity',     'couleur' => 'blue'],
                                ['label' => 'Temperance',    'couleur' => 'purple'],
                                ['label' => 'Organisation',  'couleur' => 'cyan'],
                                ['label' => 'Adaptability',  'couleur' => 'orange'],
                            ],
                        ],
                        [
                            'titre' => 'Languages', 'type' => 'bars',
                            'items' => [
                                ['nom' => 'French (native)', 'niveau' => 100, 'couleur' => 'g'],
                                ['nom' => 'English (B1)',    'niveau' => 60,  'couleur' => 'b'],
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        // ── Profil ────────────────────────────────────────────────────
        Profil::create([
            'locale'   => 'en',
            'objectif' => "Specialise in cybersecurity through a Master's at UFR MIM Metz, with the goal of becoming a SOC Analyst then Cybersecurity Architect.",
            'infos'    => [
                ['cle' => 'First & Last Name',  'val' => 'Nicolas BISAGA'],
                ['cle' => 'Date of birth',      'val' => '20 May 2002'],
                ['cle' => 'Place of birth',     'val' => 'Thionville, Moselle (57), France'],
                ['cle' => 'Nationality',        'val' => 'French 🇫🇷 & Luxembourgish 🇱🇺'],
                ['cle' => 'Transport',          'val' => 'Driving licence B + personal vehicle'],
                ['cle' => "Bachelor's",         'val' => 'Computer Science — Université de Lorraine, Metz (validated 2026)'],
                ['cle' => "Master's",           'val' => 'Cybersecurity — UFR MIM, Metz (Sept. 2026)'],
                ['cle' => 'TryHackMe',          'lien' => ['href' => 'https://tryhackme.com/p/NewGateFR', 'label' => 'tryhackme.com/p/NewGateFR']],
                ['cle' => 'GitHub',             'lien' => ['href' => 'https://github.com/lughowl',        'label' => 'github.com/lughowl']],
                ['cle' => 'LinkedIn',           'lien' => ['href' => 'https://www.linkedin.com/in/nicolasbisaga', 'label' => 'linkedin.com/in/nicolasbisaga']],
            ],
        ]);

        // ── Objectifs ─────────────────────────────────────────────────
        Objectif::create([
            'locale'      => 'en',
            'priorite'    => 1,
            'label_terme' => 'Confirmed step',
            'type'        => "Master's",
            'titre'       => "Master's in Cybersecurity — UFR MIM Metz",
            'badge_color' => 'green',
            'details'     => [
                ['cle' => 'INSTITUTION', 'val' => 'Université de Lorraine — UFR MIM, Metz'],
                ['cle' => 'START',       'val' => 'September 2026'],
                ['cle' => 'DURATION',    'val' => '2 years (2026 – 2028)'],
                ['cle' => 'STATUS',      'val' => 'Admitted'],
            ],
        ]);

        Objectif::create([
            'locale'      => 'en',
            'priorite'    => 2,
            'label_terme' => 'Career goal',
            'type'        => 'Career',
            'titre'       => 'SOC Analyst → Cybersecurity Architect',
            'badge_color' => 'blue',
            'details'     => [
                ['cle' => 'STEP 1',  'val' => 'SOC Analyst — detection, monitoring, incident response'],
                ['cle' => 'STEP 2',  'val' => 'Cybersecurity Architect — designing secure systems'],
                ['cle' => 'DOMAINS', 'val' => 'SIEM, EDR, forensics, governance, zero-trust architecture'],
            ],
        ]);

        // ── Présentation ──────────────────────────────────────────────
        Presentation::create([
            'locale'             => 'en',
            'subtitle'           => "Master's in Cybersecurity — UFR MIM, Metz | French & Luxembourgish nationalities",
            'availability'       => "Admitted to Master's in Cybersecurity · UFR MIM Metz · Sept. 2026",
            'typewriter_phrases' => [
                "Admitted to Master's in Cybersecurity",
                'Future SOC Analyst',
                'Future Cybersecurity Architect',
            ],
        ]);

        $this->command->info('Portfolio EN seeded!');
    }
}
