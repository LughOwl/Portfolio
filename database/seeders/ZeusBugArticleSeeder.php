<?php

namespace Database\Seeders;

use App\Models\ZeusBugArticle;
use Illuminate\Database\Seeder;

class ZeusBugArticleSeeder extends Seeder
{
    public function run(): void
    {
        ZeusBugArticle::truncate();

        $articles = [
            [
                'titre'      => 'Portfolio Laravel — Site web CV numérique',
                'titre_en'   => 'Laravel Portfolio — Digital CV website',
                'intro'      => 'Développement d\'un portfolio web complet sous Laravel 13, avec 7 sites satellites thématiques, un panel admin CRUD, et une architecture multilingue FR/EN.',
                'intro_en'   => 'Development of a full web portfolio with Laravel 13, featuring 7 thematic sub-sites, a CRUD admin panel, and a bilingual FR/EN architecture.',
                'contenu'    => <<<HTML
                    <h2>Présentation du projet</h2>
                    <p>Ce portfolio est un site web complet servant de CV numérique. Il regroupe plusieurs sites thématiques satellites, chacun avec son propre design, ses propres données et sa propre identité visuelle.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Framework</strong> : Laravel 13 / PHP 8.3</li>
                        <li><strong>Front-end</strong> : Blade, SCSS, Vite</li>
                        <li><strong>Base de données</strong> : MySQL via Laragon</li>
                        <li><strong>Authentification</strong> : Laravel Breeze</li>
                        <li><strong>Déploiement</strong> : Laragon (développement local)</li>
                    </ul>

                    <h2>Fonctionnalités principales</h2>
                    <ul>
                        <li>Panel admin CRUD pour chaque site satellite</li>
                        <li>Système de rubriques et d'articles par site</li>
                        <li>Switch de langue contextuel (FR/EN)</li>
                        <li>Topbar admin sur les sites publics</li>
                        <li>Responsive design sur tous les sites</li>
                    </ul>

                    <h2>Architecture</h2>
                    <p>Chaque site satellite est une entité indépendante avec son propre contrôleur, son propre layout Blade, ses propres routes préfixées et son propre SCSS compilé via Vite.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Project overview</h2>
                    <p>This portfolio is a complete web application serving as a digital CV. It brings together several thematic sub-sites, each with its own design, data and visual identity.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Framework</strong>: Laravel 13 / PHP 8.3</li>
                        <li><strong>Front-end</strong>: Blade, SCSS, Vite</li>
                        <li><strong>Database</strong>: MySQL via Laragon</li>
                        <li><strong>Authentication</strong>: Laravel Breeze</li>
                        <li><strong>Environment</strong>: Laragon (local development)</li>
                    </ul>

                    <h2>Main features</h2>
                    <ul>
                        <li>CRUD admin panel for each sub-site</li>
                        <li>Sections and articles system per site</li>
                        <li>Contextual language switcher (FR/EN)</li>
                        <li>Admin topbar on public-facing sites</li>
                        <li>Responsive design across all sites</li>
                    </ul>

                    <h2>Architecture</h2>
                    <p>Each sub-site is an independent entity with its own controller, Blade layout, prefixed routes, and SCSS compiled via Vite.</p>
                    HTML,
                'categorie'  => 'web',
                'tags'       => 'Laravel, PHP, MySQL, Blade, SCSS, Vite',
                'github_url' => 'https://github.com/lughowl/Portfolio',
                'date_projet'=> '2025-01-01',
                'publie'     => true,
                'ordre'      => 1,
            ],
            [
                'titre'      => 'Application Angular — Films & Séries (TMDB)',
                'titre_en'   => 'Angular App — Films & Series (TMDB)',
                'intro'      => 'Application mobile-first avec Angular et Ionic connectée à l\'API TMDB pour rechercher et suivre des films et séries.',
                'intro_en'   => 'Mobile-first application built with Angular and Ionic, connected to the TMDB API to search and track films and TV series.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Application développée avec Angular et Ionic, connectée à l'API publique de The Movie Database (TMDB). Elle permet de rechercher des films et séries, de consulter leurs détails, et de gérer une liste de favoris.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Framework</strong> : Angular 17</li>
                        <li><strong>UI</strong> : Ionic Framework</li>
                        <li><strong>Langage</strong> : TypeScript</li>
                        <li><strong>API</strong> : TMDB (The Movie Database)</li>
                    </ul>

                    <h2>Fonctionnalités</h2>
                    <ul>
                        <li>Recherche de films et séries via l'API TMDB</li>
                        <li>Page de détail (synopsis, note, casting)</li>
                        <li>Gestion de favoris en local</li>
                        <li>Interface responsive mobile-first</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Application built with Angular and Ionic, connected to The Movie Database (TMDB) public API. It allows searching for films and TV series, viewing details, and managing a personal favourites list.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Framework</strong>: Angular 17</li>
                        <li><strong>UI</strong>: Ionic Framework</li>
                        <li><strong>Language</strong>: TypeScript</li>
                        <li><strong>API</strong>: TMDB (The Movie Database)</li>
                    </ul>

                    <h2>Features</h2>
                    <ul>
                        <li>Film and series search via TMDB API</li>
                        <li>Detail page (synopsis, rating, cast)</li>
                        <li>Local favourites management</li>
                        <li>Responsive mobile-first interface</li>
                    </ul>
                    HTML,
                'categorie'  => 'web',
                'tags'       => 'Angular, Ionic, TypeScript, TMDB API',
                'github_url' => 'https://github.com/lughowl/Projet-Angular-FilmsSeries',
                'date_projet'=> '2026-03-01',
                'publie'     => true,
                'ordre'      => 2,
            ],
            [
                'titre'      => 'Application web dynamique — Recettes de cocktails',
                'titre_en'   => 'Dynamic web app — Cocktail recipes',
                'intro'      => 'Site web PHP dynamique avec recettes de cocktails, authentification utilisateur, système de favoris et recherche avancée.',
                'intro_en'   => 'Dynamic PHP web application featuring cocktail recipes, user authentication, favourites system and advanced search.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Application web dynamique développée en PHP natif, présentant une collection de recettes de cocktails avec un système complet d'authentification utilisateur.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : PHP (natif)</li>
                        <li><strong>Base de données</strong> : MySQL</li>
                        <li><strong>Front-end</strong> : HTML, CSS, JavaScript</li>
                    </ul>

                    <h2>Fonctionnalités</h2>
                    <ul>
                        <li>Affichage et recherche de recettes de cocktails</li>
                        <li>Authentification et gestion de compte utilisateur</li>
                        <li>Système de favoris personnel</li>
                        <li>Recherche avancée par ingrédients ou nom</li>
                        <li>Architecture MVC</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Dynamic web application built in native PHP, presenting a cocktail recipe collection with a full user authentication system.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: PHP (native)</li>
                        <li><strong>Database</strong>: MySQL</li>
                        <li><strong>Front-end</strong>: HTML, CSS, JavaScript</li>
                    </ul>

                    <h2>Features</h2>
                    <ul>
                        <li>Cocktail recipe display and search</li>
                        <li>User authentication and account management</li>
                        <li>Personal favourites system</li>
                        <li>Advanced search by ingredient or name</li>
                        <li>MVC architecture</li>
                    </ul>
                    HTML,
                'categorie'  => 'web',
                'tags'       => 'PHP, MySQL, HTML, CSS, MVC',
                'github_url' => 'https://github.com/lughowl/Projet-CocktailsWebDynamique',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 3,
            ],
            [
                'titre'      => 'Site web — Musculation Hayangeoise',
                'titre_en'   => 'Website — Musculation Hayangeoise gym',
                'intro'      => 'Site web statique pour une salle de musculation locale, développé avec contraintes imposées (HTML/CSS pur).',
                'intro_en'   => 'Static website for a local gym, developed under imposed constraints (pure HTML/CSS).',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Site web développé pour la salle de musculation locale "Musculation Hayangeoise". Projet réalisé sous contraintes pédagogiques : utilisation exclusive de HTML et CSS sans frameworks.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langages</strong> : HTML5, CSS3</li>
                        <li><strong>Contrainte</strong> : aucun framework ni JavaScript</li>
                    </ul>

                    <h2>Contenu</h2>
                    <ul>
                        <li>Page d'accueil avec présentation de la salle</li>
                        <li>Horaires et tarifs</li>
                        <li>Page de contact</li>
                        <li>Design responsive pur CSS</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Website built for the local gym "Musculation Hayangeoise". Project completed under academic constraints: exclusive use of HTML and CSS without any frameworks.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Languages</strong>: HTML5, CSS3</li>
                        <li><strong>Constraint</strong>: no framework or JavaScript</li>
                    </ul>

                    <h2>Content</h2>
                    <ul>
                        <li>Home page with gym presentation</li>
                        <li>Opening hours and pricing</li>
                        <li>Contact page</li>
                        <li>Pure CSS responsive design</li>
                    </ul>
                    HTML,
                'categorie'  => 'web',
                'tags'       => 'HTML5, CSS3',
                'github_url' => 'https://github.com/lughowl/Projet-Web_Musculation_Hayangeoise',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 4,
            ],
            [
                'titre'      => 'Algorithme AES — Chiffrement symétrique en C++',
                'titre_en'   => 'AES Algorithm — Symmetric encryption in C++',
                'intro'      => 'Implémentation de l\'algorithme de chiffrement AES (Advanced Encryption Standard) en C++, avec les étapes SubBytes, ShiftRows, MixColumns et AddRoundKey.',
                'intro_en'   => 'Implementation of the AES (Advanced Encryption Standard) encryption algorithm in C++, covering SubBytes, ShiftRows, MixColumns and AddRoundKey steps.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Implémentation complète de l'algorithme de chiffrement symétrique AES (Advanced Encryption Standard) en C++. AES est l'un des algorithmes de chiffrement les plus utilisés au monde, adopté par le NIST en 2001.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : C++</li>
                        <li><strong>Algorithme</strong> : AES-128 / AES-256</li>
                    </ul>

                    <h2>Étapes implémentées</h2>
                    <ul>
                        <li><strong>SubBytes</strong> : substitution non-linéaire via S-Box</li>
                        <li><strong>ShiftRows</strong> : décalage cyclique des lignes de la matrice d'état</li>
                        <li><strong>MixColumns</strong> : multiplication matricielle en GF(2⁸)</li>
                        <li><strong>AddRoundKey</strong> : XOR avec la clé de tour</li>
                        <li><strong>Key Expansion</strong> : dérivation des clés de tour</li>
                    </ul>

                    <h2>Ce que j'ai appris</h2>
                    <p>Ce projet m'a permis de comprendre en profondeur la cryptographie symétrique et l'arithmétique dans les corps de Galois, notamment les opérations en GF(2⁸) utilisées dans MixColumns.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Full implementation of the AES (Advanced Encryption Standard) symmetric encryption algorithm in C++. AES is one of the most widely used encryption algorithms in the world, adopted by NIST in 2001.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: C++</li>
                        <li><strong>Algorithm</strong>: AES-128 / AES-256</li>
                    </ul>

                    <h2>Implemented steps</h2>
                    <ul>
                        <li><strong>SubBytes</strong>: non-linear substitution via S-Box</li>
                        <li><strong>ShiftRows</strong>: cyclic shift of state matrix rows</li>
                        <li><strong>MixColumns</strong>: matrix multiplication in GF(2⁸)</li>
                        <li><strong>AddRoundKey</strong>: XOR with round key</li>
                        <li><strong>Key Expansion</strong>: round key derivation</li>
                    </ul>

                    <h2>What I learned</h2>
                    <p>This project gave me a deep understanding of symmetric cryptography and Galois field arithmetic, particularly GF(2⁸) operations used in MixColumns.</p>
                    HTML,
                'categorie'  => 'algorithme',
                'tags'       => 'C++, AES, Cryptographie, GF(2⁸)',
                'github_url' => 'https://github.com/lughowl/Projet-AlgorithmeAES-Cryptographie',
                'date_projet'=> '2026-03-01',
                'publie'     => true,
                'ordre'      => 5,
            ],
            [
                'titre'      => 'Analyseur syntaxique — Compilation',
                'titre_en'   => 'Syntactic Analyser — Compilation',
                'intro'      => 'Implémentation d\'un analyseur syntaxique (parser) qui définit et applique la structure d\'entrée d\'un langage formel.',
                'intro_en'   => 'Implementation of a syntactic analyser (parser) that defines and enforces the input structure of a formal language.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Projet de compilation : implémentation d'un analyseur syntaxique (parser) capable de reconnaître et valider la structure grammaticale d'un langage formel.</p>

                    <h2>Concepts abordés</h2>
                    <ul>
                        <li>Grammaires formelles et grammaires hors-contexte (CFG)</li>
                        <li>Arbre syntaxique abstrait (AST)</li>
                        <li>Analyse descendante récursive</li>
                        <li>Gestion des erreurs syntaxiques</li>
                        <li>Tokens et lexèmes</li>
                    </ul>

                    <h2>Ce que j'ai appris</h2>
                    <p>Ce projet m'a permis de comprendre le fonctionnement interne d'un compilateur, notamment la frontière entre l'analyse lexicale (tokenisation) et l'analyse syntaxique (parsing), ainsi que la construction d'un AST.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Compilation project: implementation of a syntactic analyser (parser) capable of recognising and validating the grammatical structure of a formal language.</p>

                    <h2>Concepts covered</h2>
                    <ul>
                        <li>Formal grammars and context-free grammars (CFG)</li>
                        <li>Abstract syntax tree (AST)</li>
                        <li>Recursive descent parsing</li>
                        <li>Syntactic error handling</li>
                        <li>Tokens and lexemes</li>
                    </ul>

                    <h2>What I learned</h2>
                    <p>This project gave me an understanding of the internal workings of a compiler, particularly the boundary between lexical analysis (tokenisation) and syntactic analysis (parsing), as well as AST construction.</p>
                    HTML,
                'categorie'  => 'algorithme',
                'tags'       => 'Compilation, Parser, AST, Grammaire formelle',
                'github_url' => 'https://github.com/lughowl/Projet-AnalyseurSyntaxique-Compilation',
                'date_projet'=> '2026-02-01',
                'publie'     => true,
                'ordre'      => 6,
            ],
            [
                'titre'      => 'Géométrie — Intersection de segments (C)',
                'titre_en'   => 'Geometry — Segment intersection (C)',
                'intro'      => 'Analyse de performance de deux algorithmes pour détecter les intersections entre segments : force brute O(n²) et algorithme de Shamos-Hoey O(n log n).',
                'intro_en'   => 'Performance analysis of two algorithms for detecting segment intersections: brute force O(n²) and Shamos-Hoey sweep line O(n log n).',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Projet d'algorithmique géométrique en C : comparaison de deux approches pour résoudre le problème d'intersection de segments dans le plan.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : C</li>
                    </ul>

                    <h2>Algorithmes comparés</h2>
                    <ul>
                        <li><strong>Force brute</strong> : O(n²) — teste toutes les paires de segments</li>
                        <li><strong>Shamos-Hoey</strong> : O(n log n) — algorithme de balayage (sweep line)</li>
                    </ul>

                    <h2>Résultats</h2>
                    <p>L'analyse de performance montre clairement la différence de complexité : l'algorithme de balayage devient significativement plus rapide à partir de quelques centaines de segments, confirmant les complexités théoriques.</p>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Computational geometry project in C: comparison of two approaches to solve the segment intersection problem in the plane.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: C</li>
                    </ul>

                    <h2>Algorithms compared</h2>
                    <ul>
                        <li><strong>Brute force</strong>: O(n²) — tests all pairs of segments</li>
                        <li><strong>Shamos-Hoey</strong>: O(n log n) — sweep line algorithm</li>
                    </ul>

                    <h2>Results</h2>
                    <p>Performance analysis clearly shows the complexity difference: the sweep line algorithm becomes significantly faster from a few hundred segments, confirming theoretical complexities.</p>
                    HTML,
                'categorie'  => 'algorithme',
                'tags'       => 'C, Géométrie, Algorithmique, Complexité',
                'github_url' => 'https://github.com/lughowl/Projet-Geometrie_Intersections_Segments',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 7,
            ],
            [
                'titre'      => 'Jeu du Pendu — Architecture MVC (Java)',
                'titre_en'   => 'Hangman game — MVC architecture (Java)',
                'intro'      => 'Implémentation du jeu du pendu en Java avec le patron de conception Modèle-Vue-Contrôleur (MVC).',
                'intro_en'   => 'Implementation of the Hangman game in Java using the Model-View-Controller (MVC) design pattern.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Jeu du pendu développé en Java, avec une implémentation rigoureuse du patron de conception MVC (Modèle-Vue-Contrôleur).</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : Java</li>
                        <li><strong>Architecture</strong> : MVC</li>
                        <li><strong>UI</strong> : Java Swing</li>
                    </ul>

                    <h2>Architecture MVC</h2>
                    <ul>
                        <li><strong>Modèle</strong> : état du jeu, mot à deviner, lettres proposées, compteur d'erreurs</li>
                        <li><strong>Vue</strong> : affichage graphique Swing, dessin du pendu, clavier virtuel</li>
                        <li><strong>Contrôleur</strong> : gestion des événements, logique de jeu, liaison modèle-vue</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Hangman game developed in Java, with a rigorous implementation of the MVC (Model-View-Controller) design pattern.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: Java</li>
                        <li><strong>Architecture</strong>: MVC</li>
                        <li><strong>UI</strong>: Java Swing</li>
                    </ul>

                    <h2>MVC Architecture</h2>
                    <ul>
                        <li><strong>Model</strong>: game state, word to guess, proposed letters, error counter</li>
                        <li><strong>View</strong>: Swing graphical display, gallows drawing, virtual keyboard</li>
                        <li><strong>Controller</strong>: event handling, game logic, model-view binding</li>
                    </ul>
                    HTML,
                'categorie'  => 'jeu',
                'tags'       => 'Java, Swing, MVC, Design Pattern',
                'github_url' => 'https://github.com/lughowl/Projet-Pendu_MVC',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 8,
            ],
            [
                'titre'      => 'Jeu Uno en réseau — Java (Client/Serveur)',
                'titre_en'   => 'Networked Uno game — Java (Client/Server)',
                'intro'      => 'Implémentation du jeu de cartes Uno en réseau pour 2 à 4 joueurs, avec architecture client/serveur séparée en Java.',
                'intro_en'   => 'Implementation of the Uno card game over a network for 2 to 4 players, with a separate client/server architecture in Java.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Jeu de cartes Uno multijoueur développé en Java avec une architecture réseau client/serveur. Jusqu'à 4 joueurs peuvent se connecter et jouer en temps réel.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : Java</li>
                        <li><strong>Réseau</strong> : Java Sockets (TCP)</li>
                        <li><strong>Architecture</strong> : Client/Serveur</li>
                    </ul>

                    <h2>Fonctionnalités</h2>
                    <ul>
                        <li>Serveur multithreadé gérant 2 à 4 joueurs simultanément</li>
                        <li>Communication en temps réel via sockets TCP</li>
                        <li>Implémentation complète des règles du Uno</li>
                        <li>Gestion des cartes spéciales (+2, +4, inversement, passe)</li>
                        <li>Interface console pour chaque client</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Multiplayer Uno card game developed in Java with a client/server network architecture. Up to 4 players can connect and play in real time.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: Java</li>
                        <li><strong>Network</strong>: Java Sockets (TCP)</li>
                        <li><strong>Architecture</strong>: Client/Server</li>
                    </ul>

                    <h2>Features</h2>
                    <ul>
                        <li>Multithreaded server handling 2 to 4 simultaneous players</li>
                        <li>Real-time communication via TCP sockets</li>
                        <li>Full implementation of Uno rules</li>
                        <li>Special card handling (+2, +4, reverse, skip)</li>
                        <li>Console interface for each client</li>
                    </ul>
                    HTML,
                'categorie'  => 'jeu',
                'tags'       => 'Java, Sockets TCP, Multithreading, Réseau',
                'github_url' => 'https://github.com/lughowl/Projet-Uno',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 9,
            ],
            [
                'titre'      => 'ChessQuito — Mini jeu d\'échecs avec IA (Python)',
                'titre_en'   => 'ChessQuito — Mini chess game with AI (Python)',
                'intro'      => 'Mini jeu d\'échecs développé en Python avec un adversaire IA utilisant l\'algorithme Minimax avec élagage alpha-bêta.',
                'intro_en'   => 'Mini chess game developed in Python with an AI opponent using the Minimax algorithm with alpha-beta pruning.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Jeu d'échecs simplifié développé en Python, avec une intelligence artificielle basée sur l'algorithme Minimax.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : Python</li>
                        <li><strong>Algorithme IA</strong> : Minimax avec élagage alpha-bêta</li>
                    </ul>

                    <h2>Intelligence artificielle</h2>
                    <ul>
                        <li><strong>Minimax</strong> : exploration de l'arbre de jeu en cherchant le meilleur coup pour l'IA et le pire pour l'adversaire</li>
                        <li><strong>Alpha-bêta</strong> : élagage des branches non prometteuses pour réduire la complexité</li>
                        <li>Fonction d'évaluation basée sur la valeur des pièces et leur position</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Simplified chess game developed in Python, with an artificial intelligence based on the Minimax algorithm.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: Python</li>
                        <li><strong>AI Algorithm</strong>: Minimax with alpha-beta pruning</li>
                    </ul>

                    <h2>Artificial Intelligence</h2>
                    <ul>
                        <li><strong>Minimax</strong>: game tree exploration finding the best move for AI and worst for opponent</li>
                        <li><strong>Alpha-beta</strong>: pruning of unpromising branches to reduce complexity</li>
                        <li>Evaluation function based on piece values and positions</li>
                    </ul>
                    HTML,
                'categorie'  => 'jeu',
                'tags'       => 'Python, Minimax, Alpha-Bêta, IA',
                'github_url' => 'https://github.com/lughowl/Projet-ChessQuito',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 10,
            ],
            [
                'titre'      => 'Base de données — Location de véhicules (PL/SQL)',
                'titre_en'   => 'Database — Vehicle rental (PL/SQL)',
                'intro'      => 'Conception et implémentation d\'une base de données de location de véhicules en PL/SQL Oracle, avec 4 procédures stockées et 2 fonctions.',
                'intro_en'   => 'Design and implementation of a vehicle rental database in Oracle PL/SQL, with 4 stored procedures and 2 functions.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Projet de base de données relationnelle pour un système de location de véhicules, développé avec Oracle PL/SQL.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>SGBD</strong> : Oracle Database</li>
                        <li><strong>Langage</strong> : PL/SQL</li>
                    </ul>

                    <h2>Modèle de données</h2>
                    <ul>
                        <li>Tables : Véhicules, Clients, Contrats, Agences, Catégories</li>
                        <li>Contraintes d'intégrité référentielle</li>
                        <li>Triggers pour l'automatisation des calculs</li>
                    </ul>

                    <h2>Procédures et fonctions</h2>
                    <ul>
                        <li>4 procédures stockées : création de contrat, retour véhicule, calcul de facturation, gestion du parc</li>
                        <li>2 fonctions : calcul du prix de location, vérification de disponibilité</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Relational database project for a vehicle rental system, developed with Oracle PL/SQL.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>DBMS</strong>: Oracle Database</li>
                        <li><strong>Language</strong>: PL/SQL</li>
                    </ul>

                    <h2>Data model</h2>
                    <ul>
                        <li>Tables: Vehicles, Clients, Contracts, Agencies, Categories</li>
                        <li>Referential integrity constraints</li>
                        <li>Triggers for automated calculations</li>
                    </ul>

                    <h2>Procedures and functions</h2>
                    <ul>
                        <li>4 stored procedures: contract creation, vehicle return, billing calculation, fleet management</li>
                        <li>2 functions: rental price calculation, availability check</li>
                    </ul>
                    HTML,
                'categorie'  => 'bdd',
                'tags'       => 'PL/SQL, Oracle, Procédures stockées, Triggers',
                'github_url' => 'https://github.com/lughowl/Projet-BDD_LocationVehicules',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 11,
            ],
            [
                'titre'      => 'Analyse des accidents corporels de la route (Python / Data Science)',
                'titre_en'   => 'Road accident severity analysis (Python / Data Science)',
                'intro'      => 'Analyse de données gouvernementales sur les accidents de la route pour prédire la gravité des blessures à l\'aide d\'algorithmes de machine learning.',
                'intro_en'   => 'Analysis of government road accident data to predict injury severity using machine learning algorithms.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Projet de data science utilisant les données ouvertes du gouvernement français sur les accidents corporels de la route. Objectif : prédire la gravité des blessures (indemne, blessé léger, blessé grave, tué).</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : Python</li>
                        <li><strong>Environnement</strong> : Jupyter Notebook</li>
                        <li><strong>Bibliothèques</strong> : Pandas, NumPy, Scikit-learn, Matplotlib, Seaborn</li>
                    </ul>

                    <h2>Méthodologie</h2>
                    <ul>
                        <li>Nettoyage et prétraitement des données (gestion des valeurs manquantes, encodage)</li>
                        <li>Analyse exploratoire (EDA) avec visualisations</li>
                        <li>Entraînement de modèles : Random Forest, Régression logistique, SVM</li>
                        <li>Évaluation : matrice de confusion, précision, rappel, F1-score</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Data science project using French government open data on road traffic accidents. Goal: predict injury severity (uninjured, slightly injured, seriously injured, killed).</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: Python</li>
                        <li><strong>Environment</strong>: Jupyter Notebook</li>
                        <li><strong>Libraries</strong>: Pandas, NumPy, Scikit-learn, Matplotlib, Seaborn</li>
                    </ul>

                    <h2>Methodology</h2>
                    <ul>
                        <li>Data cleaning and preprocessing (missing values, encoding)</li>
                        <li>Exploratory data analysis (EDA) with visualisations</li>
                        <li>Model training: Random Forest, Logistic Regression, SVM</li>
                        <li>Evaluation: confusion matrix, precision, recall, F1-score</li>
                    </ul>
                    HTML,
                'categorie'  => 'data',
                'tags'       => 'Python, Jupyter, Pandas, Scikit-learn, Machine Learning',
                'github_url' => 'https://github.com/lughowl/Projet-AnalyseAccidentsCorporels',
                'date_projet'=> '2026-01-01',
                'publie'     => true,
                'ordre'      => 12,
            ],
            [
                'titre'      => 'Image de Saturne en C++ — Rendu graphique',
                'titre_en'   => 'Saturn image in C++ — Graphical rendering',
                'intro'      => 'Génération d\'une image de la planète Saturne et de ses anneaux en C++, par tracé de rayons simplifié.',
                'intro_en'   => 'Generation of a Saturn and rings image in C++ using simplified ray tracing.',
                'contenu'    => <<<HTML
                    <h2>Présentation</h2>
                    <p>Projet de rendu graphique en C++ : génération d'une image de la planète Saturne avec ses anneaux caractéristiques, en utilisant des techniques de tracé de rayons simplifié.</p>

                    <h2>Stack technique</h2>
                    <ul>
                        <li><strong>Langage</strong> : C++</li>
                        <li><strong>Technique</strong> : Ray tracing simplifié</li>
                        <li><strong>Format sortie</strong> : PPM (Portable Pixmap)</li>
                    </ul>

                    <h2>Techniques utilisées</h2>
                    <ul>
                        <li>Intersection rayon-sphère pour la planète</li>
                        <li>Intersection rayon-disque pour les anneaux</li>
                        <li>Modèle d'illumination de Phong simplifié</li>
                        <li>Calcul des ombres des anneaux sur la planète</li>
                    </ul>
                    HTML,
                'contenu_en' => <<<HTML
                    <h2>Overview</h2>
                    <p>Graphical rendering project in C++: generation of an image of Saturn with its characteristic rings, using simplified ray tracing techniques.</p>

                    <h2>Tech stack</h2>
                    <ul>
                        <li><strong>Language</strong>: C++</li>
                        <li><strong>Technique</strong>: Simplified ray tracing</li>
                        <li><strong>Output format</strong>: PPM (Portable Pixmap)</li>
                    </ul>

                    <h2>Techniques used</h2>
                    <ul>
                        <li>Ray-sphere intersection for the planet</li>
                        <li>Ray-disc intersection for the rings</li>
                        <li>Simplified Phong illumination model</li>
                        <li>Ring shadow calculation on the planet surface</li>
                    </ul>
                    HTML,
                'categorie'  => 'algorithme',
                'tags'       => 'C++, Ray Tracing, Graphisme, Rendu 3D',
                'github_url' => 'https://github.com/lughowl/Projet-Image_Saturne_CPP',
                'date_projet'=> '2025-12-01',
                'publie'     => true,
                'ordre'      => 13,
            ],
        ];

        foreach ($articles as $data) {
            ZeusBugArticle::create($data);
        }
    }
}
