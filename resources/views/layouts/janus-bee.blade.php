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
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="jb-admin-bar">
        <div class="jb-admin-left">
            <span class="jb-admin-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="jb-admin-link jb-admin-hide-sm">Tableau de bord</a>
            <a href="{{ route('admin.janus-bee.index') }}" class="jb-admin-link">Gérer Janus-Bee</a>
        </div>
        <div class="jb-admin-right">
            <span class="jb-admin-user jb-admin-hide-sm">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit" class="jb-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

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
        <div class="nav-right">
            <div class="catalogue-container">
                <a href="{{ route('fr.janus-bee.catalogue') }}">
                    <div class="catalogue-texte">Catalogue</div>
                    <div class="catalogue-icone">
                        <img src="/assets/catalogue.png" alt="icone catalogue">
                    </div>
                </a>
            </div>
            <div class="jb-lang" title="Version anglaise à venir">
                <span class="jb-lang-active">FR</span>
                <span class="jb-lang-sep">|</span>
                <span class="jb-lang-off">EN</span>
            </div>
        </div>
    </nav>

    <main class="site-content">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="Retour en haut">↑</button>

    <footer class="site-footer">
        <div class="jb-f-identity">
            <img src="/assets/Janus-Bee/1.logo.png" width="60" alt="Logo Janus-Bee">
            <div class="jb-f-name">Janus-<span>Bee</span></div>
            <div class="jb-f-sep">✦</div>
        </div>
        <nav class="jb-f-links">
            <a href="{{ route('fr.janus-bee.catalogue') }}">Catalogue</a>
            <a href="{{ route('fr.janus-bee.origines') }}">Origines</a>
            <a href="{{ route('fr.janus-bee.legal') }}">Mentions légales</a>
            <a href="{{ route('fr.janus-bee.plan') }}">Plan du site</a>
            <a href="{{ route('fr.sites') }}">Site principal</a>
        </nav>
        <div class="jb-f-copy">Tous droits réservés © Janus-Bee &nbsp;·&nbsp; 2026</div>
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
