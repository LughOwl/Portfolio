<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Janus-Bee')</title>
    <meta name="description" content="@yield('meta_description', 'Janus-Bee — Catalogue de films, séries d\'animation, livres et jeux vidéo.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Janus-Bee/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Janus-Bee">
    <meta property="og:title" content="@yield('title', 'Janus-Bee')">
    <meta property="og:description" content="@yield('meta_description', 'Janus-Bee — Catalogue de films, séries d\'animation, livres et jeux vidéo.')">
    @hasSection('meta_image')
    <meta property="og:image" content="@yield('meta_image')">
    @else
    <meta property="og:image" content="{{ url('/assets/Janus-Bee/1.logo.png') }}">
    @endif
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
    @vite(['resources/sass/janus-bee.scss'])
    @yield('head')
</head>
<body>
    <nav class="nav-menu">
        <div class="logo-container">
            <a href="{{ route('fr.janus-bee.accueil') }}">
                <div class="logo-container-size">
                    <img src="/assets/Janus-Bee/1.logo.png" width="50" alt="logo-JB">
                    <div class="logo-text-part">Janus-<span>Bee</span></div>
                </div>
            </a>
        </div>
        <div class="zone-recherche">
            <form action="{{ route('fr.janus-bee.catalogue') }}" method="GET">
                <input type="search" name="q" placeholder="Rechercher..." class="recherche-input"
                    value="{{ request('q', '') }}">
                <button type="submit" class="recherche-bouton">
                    <img src="/assets/loupe.png" alt="image loupe">
                </button>
            </form>
        </div>
        <div class="catalogue-container">
            <a href="{{ route('fr.janus-bee.catalogue') }}">
                <div class="catalogue-texte">Catalogue</div>
                <div class="catalogue-icone">
                    <img src="/assets/catalogue.png" alt="icone catalogue">
                </div>
            </a>
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
                <li><a href="{{ route('fr.janus-bee.origines') }}">Origines et Objectifs</a></li>
                <li><a href="{{ route('fr.sites') }}">Site web principal</a></li>
            </ul>
        </div>
        <div class="f-img">
            <img src="/assets/Janus-Bee/1.logo.png" width="100" alt="Logo">
        </div>
        <div class="f-info">
            <div>Informations utiles :</div>
            <ul>
                <li><a href="{{ route('fr.janus-bee.legal') }}">Mentions Légales</a></li>
                <li><a href="{{ route('fr.janus-bee.plan') }}">Plan du site</a></li>
            </ul>
        </div>
        <div class="f-copyr">
            Tous Droits Réservés © Janus-Bee | 2026 / 2026
        </div>
    </footer>
    <script>
    (function () {
        var btn = document.getElementById('back-to-top');
        if (!btn) return;
        window.addEventListener('scroll', function () {
            btn.classList.toggle('visible', window.scrollY > 300);
        });
        btn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    })();
    </script>
</body>
</html>
