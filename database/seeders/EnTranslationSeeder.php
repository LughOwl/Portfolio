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

class EnTranslationSeeder extends Seeder
{
    public function run(): void
    {
        // -------------------------------------------------------
        // PRESENTATION
        // -------------------------------------------------------
        Presentation::updateOrCreate(['locale' => 'en'], [
            'subtitle'           => 'Master\'s in Cybersecurity — UFR MIM, Metz | French & Luxembourgish citizen',
            'availability'       => 'Admitted to Master\'s in Cybersecurity · UFR MIM Metz · Sept. 2026',
            'typewriter_phrases' => [
                'Admitted to Master\'s in Cybersecurity',
                'Future SOC Analyst',
                'Future Cybersecurity Architect',
            ],
        ]);

        // -------------------------------------------------------
        // PROFIL
        // -------------------------------------------------------
        Profil::updateOrCreate(['locale' => 'en'], [
            'objectif' => 'Specialising in cybersecurity through a Master\'s degree at UFR MIM Metz, with the goal of becoming a SOC analyst and then a cybersecurity architect.',
            'infos'    => [
                ['cle' => 'Full name',      'val' => 'Nicolas BISAGA'],
                ['cle' => 'Date of birth',  'val' => 'May 20, 2002'],
                ['cle' => 'Place of birth', 'val' => 'Thionville, Moselle (57), France'],
                ['cle' => 'Nationality',    'val' => 'French 🇫🇷 and Luxembourgish 🇱🇺'],
                ['cle' => 'Transport',      'val' => 'Driving licence + personal vehicle'],
                ['cle' => 'Bachelor\'s',    'val' => 'Computer Science — University of Lorraine, Metz (2026)'],
                ['cle' => 'Master\'s',      'val' => 'Cybersecurity — UFR MIM, Metz (Sept. 2026)'],
                ['cle' => 'TryHackMe', 'lien' => ['href' => 'https://tryhackme.com/p/NewGateFR', 'label' => 'tryhackme.com/p/NewGateFR']],
                ['cle' => 'GitHub',    'lien' => ['href' => 'https://github.com/lughowl',          'label' => 'github.com/lughowl']],
                ['cle' => 'LinkedIn',  'lien' => ['href' => 'https://www.linkedin.com/in/nicolasbisaga', 'label' => 'linkedin.com/in/nicolasbisaga']],
            ],
        ]);

        // -------------------------------------------------------
        // OBJECTIFS
        // -------------------------------------------------------
        Objectif::where('locale', 'en')->delete();

        Objectif::create([
            'locale'      => 'en',
            'priorite'    => 1,
            'label_terme' => 'Confirmed step',
            'type'        => 'Master\'s',
            'titre'       => 'Master\'s in Cybersecurity — UFR MIM Metz',
            'badge_color' => 'green',
            'details'     => [
                ['cle' => 'INSTITUTION', 'val' => 'University of Lorraine — UFR MIM, Metz'],
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
                ['cle' => 'STEP 1',   'val' => 'SOC Analyst — detection, monitoring, incident response'],
                ['cle' => 'STEP 2',   'val' => 'Cybersecurity Architect — designing secure systems'],
                ['cle' => 'DOMAINS',  'val' => 'SIEM, EDR, forensics, governance, zero-trust architecture'],
            ],
        ]);

        // -------------------------------------------------------
        // FORMATIONS
        // -------------------------------------------------------
        Formation::where('locale', 'en')->delete();

        $formations = [
            [
                'ordre'  => 0,
                'periode' => '2026 – 2028',
                'titre'  => 'Master\'s in Cybersecurity',
                'org'    => 'University of Lorraine — UFR MIM, Metz',
                'desc'   => 'Specialisation in cybersecurity at the same institution as the Bachelor\'s. Goal: become a SOC analyst then a cybersecurity architect.',
                'dot'    => 'future',
                'tags'   => [
                    ['label' => 'Admitted',      'couleur' => 'green'],
                    ['label' => 'Sept. 2026',    'couleur' => 'blue'],
                    ['label' => 'Cybersecurity', 'couleur' => 'cyan'],
                ],
            ],
            [
                'ordre'  => 1,
                'periode' => '2023 – 2026',
                'titre'  => 'Bachelor\'s in Computer Science',
                'org'    => 'University of Lorraine — UFR MIM, Metz',
                'desc'   => 'Training in software development (C, C++, Java, PHP, Python, SQL), algorithms, operating systems (Linux/Windows), networking (TCP/IP, Cisco), databases, cybersecurity, and data analysis (R, Python).',
                'dot'    => 'blue',
                'tags'   => [
                    ['label' => 'Completed', 'couleur' => 'blue'],
                    ['label' => 'Metz (57)', 'couleur' => 'gray'],
                ],
            ],
            [
                'ordre'  => 2,
                'periode' => '2020 – 2023',
                'titre'  => 'Bachelor\'s in Law, Economics & Management',
                'org'    => 'IAE Nancy — University of Lorraine',
                'desc'   => 'Completed degree. Multidisciplinary training in law, economics, management and business. Development of analytical, writing and organisational skills.',
                'dot'    => 'blue',
                'tags'   => [
                    ['label' => 'Completed',  'couleur' => 'blue'],
                    ['label' => 'Nancy (54)', 'couleur' => 'gray'],
                ],
            ],
            [
                'ordre'  => 3,
                'periode' => '2020',
                'titre'  => 'Scientific Baccalaureate (French A-Levels)',
                'org'    => 'Lycée La Providence — Thionville (57)',
                'desc'   => 'Graduated with Highest Distinction. Specialisations in Mathematics and Sciences.',
                'dot'    => 'blue',
                'tags'   => [
                    ['label' => 'Highest Distinction',    'couleur' => 'green'],
                    ['label' => 'Thionville (57)', 'couleur' => 'gray'],
                ],
            ],
        ];

        foreach ($formations as $f) {
            Formation::create(array_merge($f, ['locale' => 'en']));
        }

        // -------------------------------------------------------
        // CERTIFICATIONS
        // -------------------------------------------------------
        Certification::where('locale', 'en')->delete();

        $certifications = [
            ['ordre' => 0, 'nom' => 'CompTIA Security+', 'couleur' => 'badge-green',  'desc' => 'Network security fundamentals, threats, cryptography'],
            ['ordre' => 1, 'nom' => 'CEH',               'couleur' => 'badge-blue',   'desc' => 'Certified Ethical Hacker — offensive techniques'],
            ['ordre' => 2, 'nom' => 'CISSP',             'couleur' => 'badge-purple', 'desc' => 'Expert certification in security architecture'],
        ];

        foreach ($certifications as $c) {
            Certification::create(array_merge($c, ['locale' => 'en']));
        }

        // -------------------------------------------------------
        // EXPÉRIENCES
        // -------------------------------------------------------
        Experience::where('locale', 'en')->delete();

        $experiences = [
            [
                'ordre'  => 0,
                'periode' => 'July 2025',
                'titre'  => 'General-Purpose Agent',
                'org'    => 'Onet — Court of Justice of the European Union, Luxembourg',
                'desc'   => 'One-month student job. General duties within the services of the Court of Justice of the EU, in a multilingual and international environment.',
                'dot'    => '',
                'tags'   => [
                    ['label' => 'Student job', 'couleur' => 'green'],
                    ['label' => 'Luxembourg',  'couleur' => 'gray'],
                    ['label' => '1 month',     'couleur' => 'gray'],
                ],
            ],
            [
                'ordre'  => 1,
                'periode' => 'July – August 2023',
                'titre'  => 'Administrative Assistant',
                'org'    => 'Town Hall of Hayange — Technical Services Directorate',
                'desc'   => '2-month fixed-term contract. Administrative management, drafting of official documents, file tracking and internal communications.',
                'dot'    => 'blue',
                'tags'   => [
                    ['label' => 'Fixed-term',  'couleur' => 'blue'],
                    ['label' => 'Hayange (57)', 'couleur' => 'gray'],
                    ['label' => '2 months',    'couleur' => 'gray'],
                ],
            ],
            [
                'ordre'  => 2,
                'periode' => 'April – May 2023',
                'titre'  => 'Administrative Intern',
                'org'    => 'Town Hall of Hayange',
                'desc'   => '6-week internship. Introduction to the administrative processes of a local authority, document management and team support.',
                'dot'    => 'blue',
                'tags'   => [
                    ['label' => 'Internship',  'couleur' => 'cyan'],
                    ['label' => 'Hayange (57)', 'couleur' => 'gray'],
                    ['label' => '6 weeks',     'couleur' => 'gray'],
                ],
            ],
            [
                'ordre'  => 3,
                'periode' => '2022 – 2023',
                'titre'  => 'Volunteer',
                'org'    => 'Emmaüs Association 54 — Vandœuvre-lès-Nancy',
                'desc'   => 'Sorting, collecting and redistributing goods, welcoming people in precarious situations, teamwork in a solidarity-driven setting.',
                'dot'    => 'blue',
                'tags'   => [
                    ['label' => 'Volunteering', 'couleur' => 'purple'],
                    ['label' => 'Nancy (54)',   'couleur' => 'gray'],
                    ['label' => '8 months',     'couleur' => 'gray'],
                ],
            ],
            [
                'ordre'  => 4,
                'periode' => 'August 2022',
                'titre'  => 'General-Purpose Agent — Building Management',
                'org'    => 'Court of Justice of the European Union, Luxembourg',
                'desc'   => 'One-month student job within the Building Management unit. European institutional environment, logistical and technical assignments.',
                'dot'    => 'blue',
                'tags'   => [
                    ['label' => 'Student job', 'couleur' => 'green'],
                    ['label' => 'Luxembourg',  'couleur' => 'gray'],
                    ['label' => '1 month',     'couleur' => 'gray'],
                ],
            ],
        ];

        foreach ($experiences as $e) {
            Experience::create(array_merge($e, ['locale' => 'en']));
        }

        // -------------------------------------------------------
        // COMPÉTENCES
        // -------------------------------------------------------
        Competence::updateOrCreate(['locale' => 'en'], [
            'data' => [
                [
                    'id'        => 'cyber',
                    'titre'     => 'Cybersecurity',
                    'type'      => 'bars_and_tags',
                    'highlight' => true,
                    'items'     => [
                        ['nom' => 'TryHackMe (labs, SIEM, Wireshark)', 'niveau' => 65, 'couleur' => 'g'],
                        ['nom' => 'Network analysis — Wireshark',       'niveau' => 65, 'couleur' => 'g'],
                        ['nom' => 'SIEM / Log analysis',                'niveau' => 50, 'couleur' => 'g'],
                        ['nom' => 'OSINT & reconnaissance',             'niveau' => 45, 'couleur' => 'g'],
                    ],
                    'tags' => [
                        ['label' => 'ANSSI',      'couleur' => 'green'],
                        ['label' => 'TryHackMe',  'couleur' => 'green'],
                        ['label' => 'Wireshark',  'couleur' => 'blue'],
                        ['label' => 'SIEM',       'couleur' => 'cyan'],
                        ['label' => 'CTF',        'couleur' => 'orange'],
                    ],
                ],
                [
                    'id'    => 'reseaux',
                    'titre' => 'Networking',
                    'type'  => 'bars',
                    'items' => [
                        ['nom' => 'TCP/IP & OSI model',                    'niveau' => 74, 'couleur' => 'b'],
                        ['nom' => 'Protocols (TCP, UDP, DNS, HTTP, ARP…)', 'niveau' => 72, 'couleur' => 'b'],
                        ['nom' => 'Cisco Packet Tracer',                   'niveau' => 62, 'couleur' => 'b'],
                        ['nom' => 'IPv4/IPv6, VLAN, VPN',                  'niveau' => 68, 'couleur' => 'b'],
                    ],
                ],
                [
                    'id'    => 'langages',
                    'titre' => 'Programming Languages',
                    'type'  => 'bars',
                    'items' => [
                        ['nom' => 'HTML5 / CSS',   'niveau' => 88, 'couleur' => 'g'],
                        ['nom' => 'PHP',            'niveau' => 75, 'couleur' => 'g'],
                        ['nom' => 'SQL',            'niveau' => 78, 'couleur' => 'g'],
                        ['nom' => 'Java',           'niveau' => 72, 'couleur' => 'g'],
                        ['nom' => 'C',              'niveau' => 70, 'couleur' => 'g'],
                        ['nom' => 'JavaScript',     'niveau' => 65, 'couleur' => 'g'],
                        ['nom' => 'C++ (OOP)',      'niveau' => 65, 'couleur' => 'g'],
                        ['nom' => 'Python',         'niveau' => 40, 'couleur' => 'o'],
                    ],
                ],
                [
                    'id'    => 'systemes',
                    'titre' => 'Operating Systems',
                    'type'  => 'bars',
                    'items' => [
                        ['nom' => 'Linux (Debian/Ubuntu) — Users, threads, semaphores, awk', 'niveau' => 72, 'couleur' => 'p'],
                        ['nom' => 'Windows — Active Directory, PowerShell, Computer Management', 'niveau' => 68, 'couleur' => 'p'],
                    ],
                ],
                [
                    'id'    => 'dev',
                    'titre' => 'Development & Databases',
                    'type'  => 'bars',
                    'items' => [
                        ['nom' => 'Web development — Laravel / PHP',       'niveau' => 78, 'couleur' => 'b'],
                        ['nom' => 'MVC architecture — Java/JavaFX',        'niveau' => 72, 'couleur' => 'b'],
                        ['nom' => 'PL/SQL — Procedures & functions',       'niveau' => 75, 'couleur' => 'b'],
                        ['nom' => 'Database modelling (ERD, 4NF)',         'niveau' => 70, 'couleur' => 'b'],
                        ['nom' => 'GitHub',                                 'niveau' => 75, 'couleur' => 'b'],
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
                                ['label' => 'Discernment',    'couleur' => 'green'],
                                ['label' => 'Curiosity',      'couleur' => 'blue'],
                                ['label' => 'Temperance',     'couleur' => 'purple'],
                                ['label' => 'Organisation',   'couleur' => 'cyan'],
                                ['label' => 'Adaptability',   'couleur' => 'orange'],
                            ],
                        ],
                        [
                            'titre' => 'Languages',
                            'type'  => 'bars',
                            'items' => [
                                ['nom' => 'French (native)',  'niveau' => 100, 'couleur' => 'g'],
                                ['nom' => 'English (B1)',     'niveau' => 60,  'couleur' => 'b'],
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        // -------------------------------------------------------
        // PROJETS
        // -------------------------------------------------------
        Projet::where('locale', 'en')->delete();

        $projets = [
            [
                'ordre' => 0,
                'nom'   => 'Inari-Fox',
                'sujet' => 'Cooking Recipes',
                'desc'  => 'Culinary recipe website: organised by ingredients, categories and filters. User-friendly interface for food enthusiasts.',
                'logo'  => '/assets/Inari-Fox/1.logo.png',
                'color' => '#c80000',
                'route' => 'fr.inari-fox',
                'etat'  => 'construction',
            ],
            [
                'ordre' => 1,
                'nom'   => 'Bragi-Bird',
                'sujet' => 'Piano & Music',
                'desc'  => 'Catalogue of inspiring piano pieces, sheet music, musical resources and composer discovery.',
                'logo'  => '/assets/Bragi-Bird/1.logo.png',
                'color' => '#ff8c00',
                'route' => 'fr.bragi-bird',
                'etat'  => 'construction',
            ],
            [
                'ordre' => 2,
                'nom'   => 'Janus-Bee',
                'sujet' => 'Films, Animation & Books',
                'desc'  => 'Catalogue of films, animated series, books and video games with filters by type, genre and text search.',
                'logo'  => '/assets/Janus-Bee/1.logo.png',
                'color' => '#ffdc00',
                'route' => 'fr.janus-bee.accueil',
                'etat'  => 'ligne',
            ],
            [
                'ordre' => 3,
                'nom'   => 'Gaïa-Deer',
                'sujet' => 'Hiking & Health',
                'desc'  => 'Resources on hiking, healthy lifestyle strategies and physical and mental wellbeing.',
                'logo'  => '/assets/Gaia-Deer/1.logo.png',
                'color' => '#00af00',
                'route' => 'fr.gaia-deer',
                'etat'  => 'construction',
            ],
            [
                'ordre' => 4,
                'nom'   => 'Zeus-Bug',
                'sujet' => 'IT & Cybersecurity',
                'desc'  => 'Technical blog on IT, cybersecurity, digital projects and learning resources.',
                'logo'  => '/assets/Zeus-Bug/1.logo.png',
                'color' => '#00f0d2',
                'route' => 'fr.zeus-bug',
                'etat'  => 'construction',
            ],
            [
                'ordre' => 5,
                'nom'   => 'Lugh-Owl',
                'sujet' => 'Philosophy & Psychology',
                'desc'  => 'Philosophical articles on models of thought, immutable ideas and the metaphysics of everyday life.',
                'logo'  => '/assets/Lugh-Owl/1.logo.png',
                'color' => '#0078ff',
                'route' => 'fr.lugh-owl.accueil',
                'etat'  => 'ligne',
            ],
            [
                'ordre' => 6,
                'nom'   => 'Ouranos-Taurus',
                'sujet' => 'Astronomy & Physics',
                'desc'  => 'Exploration of astronomy, fundamental physics and mythology related to stars and constellations.',
                'logo'  => '/assets/Ouranos-Taurus/1.logo.png',
                'color' => '#7d00b4',
                'route' => 'fr.ouranos-taurus',
                'etat'  => 'construction',
            ],
        ];

        foreach ($projets as $p) {
            Projet::create(array_merge($p, ['locale' => 'en']));
        }
    }
}
