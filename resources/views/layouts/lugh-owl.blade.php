<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lugh-Owl')</title>
    <meta name="description" content="@yield('meta_description', 'Lugh-Owl — Articles philosophiques sur les modèles de pensée, les idées immuables et la vie.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Lugh-Owl/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Lugh-Owl">
    <meta property="og:title" content="@yield('title', 'Lugh-Owl')">
    <meta property="og:description" content="@yield('meta_description', 'Lugh-Owl — Articles philosophiques sur les modèles de pensée, les idées immuables et la vie.')">
    @hasSection('meta_image')
    <meta property="og:image" content="@yield('meta_image')">
    @else
    <meta property="og:image" content="{{ url('/assets/Lugh-Owl/1.logo.png') }}">
    @endif
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
    @vite(['resources/sass/lugh-owl.scss', 'resources/js/lugh-owl.js'])
    @yield('head')
</head>
<body>
    <header class="site-header">
        <div class="logo-container">
            <a href="{{ route('fr.lugh-owl.accueil') }}">
                <div class="logo-container-size">
                    <img src="/assets/Lugh-Owl/1.logo.png" width="50" alt="logo-LO">
                    <div>Lugh-<span>Owl</span></div>
                </div>
            </a>
        </div>
        <div class="menu-hamburger">
            <span></span>
        </div>
    </header>

    <nav class="nav-menu">
        <ul>
            <li><a href="{{ route('fr.lugh-owl.modeles') }}">Modèles philosophiques</a></li>
            <li><a href="{{ route('fr.lugh-owl.vie') }}">La vie est [...]</a></li>
            <li><a href="{{ route('fr.lugh-owl.idees') }}">Idées immuables</a></li>
        </ul>
        <div>
            <form role="search" method="get" class="search-form" action="{{ route('fr.lugh-owl.recherche') }}">
                <label for="Recherche"><p>Trouver un article&nbsp;:</p></label>
                <div>
                    <input type="search" class="search-field" name="q"
                        placeholder="Rechercher..." id="Recherche" value="{{ request('q', '') }}">
                    <button type="submit" aria-label="Rechercher">
                        <img src="/assets/loupe.png" width="40" alt="loupe">
                    </button>
                </div>
            </form>
        </div>
        <div class="nav-switch-container">
            <p>Mode clair/sombre :</p>
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox"/>
                    <div class="slider round"></div>
                </label>
            </div>
        </div>
        <div class="nav-lang-container">
            <p>Autre langue :</p>
            <div class="nav-lang">
                <a href="#">
                    <img src="/assets/flag-gb.png" width="40" alt="drapeau anglais">
                    <p>EN</p>
                </a>
            </div>
        </div>
    </nav>

    <main class="site-content">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="Retour en haut">↑</button>

    <footer class="site-footer">
        <div class="f-contact">
            <div>Présentation et Contact :</div>
            <ul>
                <li><a href="{{ route('fr.lugh-owl.origines') }}">Origines et Objectifs</a></li>
                <li><a href="{{ route('fr.sites') }}">Site web principal</a></li>
            </ul>
        </div>
        <div class="f-img">
            <img src="/assets/Lugh-Owl/1.logo.png" width="100" alt="Logo">
        </div>
        <div class="f-info">
            <div>Informations utiles :</div>
            <ul>
                <li><a href="{{ route('fr.lugh-owl.legal') }}">Mentions Légales</a></li>
                <li><a href="{{ route('fr.lugh-owl.plan') }}">Plan du site</a></li>
            </ul>
        </div>
        <div class="f-copyr">
            Tous Droits Réservés © Lugh-Owl | 2023 / 2026
        </div>
    </footer>
</body>
</html>
