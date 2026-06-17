<!DOCTYPE html>
<html lang="{{ $locale ?? 'fr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Janus-Bee')</title>
    <meta name="description" content="@yield('meta_description', ($locale ?? 'fr') === 'en' ? 'Janus-Bee — Personal catalogue of animated films, series, books and video games.' : 'Janus-Bee — Catalogue de films, séries d\'animation, livres et jeux vidéo.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Janus-Bee/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Janus-Bee">
    <meta property="og:title" content="@yield('title', 'Janus-Bee')">
    <meta property="og:description" content="@yield('meta_description', 'Janus-Bee')">
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

    @php
    $loc      = $locale ?? 'fr';
    $jbRoutes = [
        'accueil'  => ['fr' => 'fr.janus-bee.accueil',  'en' => 'en.janus-bee.accueil'],
        'catalogue'=> ['fr' => 'fr.janus-bee.catalogue', 'en' => 'en.janus-bee.catalogue'],
        'origines' => ['fr' => 'fr.janus-bee.origines',  'en' => 'en.janus-bee.origines'],
        'plan'     => ['fr' => 'fr.janus-bee.plan',      'en' => 'en.janus-bee.plan'],
        'legal'    => ['fr' => 'fr.janus-bee.legal',     'en' => 'en.janus-bee.legal'],
    ];
    $langMap = [
        'fr.janus-bee.accueil'   => 'en.janus-bee.accueil',
        'fr.janus-bee.catalogue' => 'en.janus-bee.catalogue',
        'fr.janus-bee.origines'  => 'en.janus-bee.origines',
        'fr.janus-bee.plan'      => 'en.janus-bee.plan',
        'fr.janus-bee.legal'     => 'en.janus-bee.legal',
        'fr.janus-bee.oeuvre'    => 'en.janus-bee.oeuvre',
        'en.janus-bee.accueil'   => 'fr.janus-bee.accueil',
        'en.janus-bee.catalogue' => 'fr.janus-bee.catalogue',
        'en.janus-bee.origines'  => 'fr.janus-bee.origines',
        'en.janus-bee.plan'      => 'fr.janus-bee.plan',
        'en.janus-bee.legal'     => 'fr.janus-bee.legal',
        'en.janus-bee.oeuvre'    => 'fr.janus-bee.oeuvre',
    ];
    $currentRoute = request()->route()->getName() ?? '';
    $altRouteName = $langMap[$currentRoute] ?? ($loc === 'fr' ? 'en.janus-bee.accueil' : 'fr.janus-bee.accueil');
    // For oeuvre pages, keep the same oeuvre slug
    if (str_ends_with($currentRoute, '.oeuvre') && isset($oeuvre)) {
        $altUrl = route($altRouteName, $oeuvre);
    } else {
        $altUrl = route($altRouteName);
    }
    @endphp

    <nav class="nav-menu">
        <div class="logo-container">
            <a href="{{ route($jbRoutes['accueil'][$loc]) }}">
                <div class="logo-container-size">
                    <img src="/assets/Janus-Bee/1.logo.png" width="36" alt="logo-JB">
                    <div class="logo-text-part">Janus-<span>Bee</span></div>
                </div>
            </a>
        </div>
        <div class="zone-recherche">
            <form action="{{ route($jbRoutes['catalogue'][$loc]) }}" method="GET">
                <input type="search" name="q" placeholder="{{ $loc === 'en' ? 'Search...' : 'Rechercher...' }}" class="recherche-input"
                    value="{{ request('q', '') }}">
                <button type="submit" class="recherche-bouton">
                    <img src="/assets/loupe.png" alt="{{ $loc === 'en' ? 'Search' : 'Rechercher' }}">
                </button>
            </form>
        </div>
        <div class="nav-right">
            <div class="catalogue-container">
                <a href="{{ route($jbRoutes['catalogue'][$loc]) }}">
                    <div class="catalogue-texte">{{ $loc === 'en' ? 'Catalogue' : 'Catalogue' }}</div>
                    <div class="catalogue-icone">
                        <img src="/assets/catalogue.png" alt="{{ $loc === 'en' ? 'Catalogue icon' : 'icone catalogue' }}">
                    </div>
                </a>
            </div>
            <div class="jb-lang">
                @if($loc === 'fr')
                <span class="jb-lang-active">FR</span>
                <span class="jb-lang-sep">|</span>
                <a href="{{ $altUrl }}" class="jb-lang-link">EN</a>
                @else
                <a href="{{ $altUrl }}" class="jb-lang-link">FR</a>
                <span class="jb-lang-sep">|</span>
                <span class="jb-lang-active">EN</span>
                @endif
            </div>
        </div>
    </nav>

    <main class="site-content">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="{{ $loc === 'en' ? 'Back to top' : 'Retour en haut' }}">↑</button>

    <footer class="site-footer">
        <div class="jb-f-identity">
            <img src="/assets/Janus-Bee/1.logo.png" width="60" alt="Logo Janus-Bee">
            <div class="jb-f-name">Janus-<span>Bee</span></div>
            <div class="jb-f-sep">✦</div>
        </div>
        <nav class="jb-f-links">
            <a href="{{ route($jbRoutes['catalogue'][$loc]) }}">{{ $loc === 'en' ? 'Catalogue' : 'Catalogue' }}</a>
            <a href="{{ route($jbRoutes['origines'][$loc]) }}">{{ $loc === 'en' ? 'Origins' : 'Origines' }}</a>
            <a href="{{ route($jbRoutes['legal'][$loc]) }}">{{ $loc === 'en' ? 'Legal notice' : 'Mentions légales' }}</a>
            <a href="{{ route($jbRoutes['plan'][$loc]) }}">{{ $loc === 'en' ? 'Sitemap' : 'Plan du site' }}</a>
            <a href="{{ $loc === 'en' ? route('en.websites') : route('fr.sites') }}">{{ $loc === 'en' ? 'Main website' : 'Site principal' }}</a>
        </nav>
        <div class="jb-f-copy">{{ $loc === 'en' ? 'All rights reserved' : 'Tous droits réservés' }} © Janus-Bee &nbsp;·&nbsp; 2026</div>
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
