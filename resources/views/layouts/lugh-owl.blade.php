@php
    $loc        = $locale ?? 'fr';
    $isEn       = $loc === 'en';
    $loAccueil  = $isEn ? route('en.lugh-owl.accueil')  : route('fr.lugh-owl.accueil');
    $loCatalogue= $isEn ? route('en.lugh-owl.catalogue') : route('fr.lugh-owl.catalogue');
    $loOrigines = $isEn ? route('en.lugh-owl.origines')  : route('fr.lugh-owl.origines');
    $loLegal    = $isEn ? route('en.lugh-owl.legal')     : route('fr.lugh-owl.legal');
    $loSearch   = $isEn ? route('en.lugh-owl.recherche') : route('fr.lugh-owl.recherche');
    $mainSite   = $isEn ? route('en.websites')           : route('fr.sites');

    // Switcher : même page, autre locale
    $otherLocale      = $isEn ? 'fr' : 'en';
    $currentRouteName = request()->route()?->getName() ?? '';
    $baseRoute        = preg_replace('/^(fr|en)\./', '', $currentRouteName);
    $routeParams      = request()->route()?->parameters() ?? [];
    try {
        $switchUrl = route($otherLocale . '.' . $baseRoute, $routeParams);
    } catch (\Throwable $e) {
        $switchUrl = $isEn ? route('fr.lugh-owl.accueil') : route('en.lugh-owl.accueil');
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $loc }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lugh-Owl')</title>
    <meta name="description" content="@yield('meta_description', $isEn ? 'Lugh-Owl — Philosophical articles on thought models, timeless ideas and life.' : 'Lugh-Owl — Articles philosophiques sur les modèles de pensée, les idées immuables et la vie.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Lugh-Owl/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Lugh-Owl">
    <meta property="og:title" content="@yield('title', 'Lugh-Owl')">
    <meta property="og:description" content="@yield('meta_description', $isEn ? 'Lugh-Owl — Philosophical articles on thought models, timeless ideas and life.' : 'Lugh-Owl — Articles philosophiques sur les modèles de pensée, les idées immuables et la vie.')">
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
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="lo-admin-bar">
        <div class="lo-admin-left">
            <span class="lo-admin-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="lo-admin-link lo-admin-hide-sm">Tableau de bord</a>
            <a href="{{ route('admin.lugh-owl.index') }}" class="lo-admin-link">Gérer Lugh-Owl</a>
        </div>
        <div class="lo-admin-right">
            <span class="lo-admin-user lo-admin-hide-sm">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="lo-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

    <header class="lo-header">
        <a href="{{ $loAccueil }}" class="lo-brand">
            <img src="/assets/Lugh-Owl/1.logo.png" width="36" alt="logo" class="lo-logo">
            <span class="lo-brand-text">Lugh-<em>Owl</em></span>
        </a>

        <form class="lo-search" method="get" action="{{ $loCatalogue }}">
            <input type="search" name="q" placeholder="{{ $isEn ? 'Search…' : 'Rechercher…' }}" value="{{ request('q', '') }}" class="lo-search-input">
            <button type="submit" class="lo-search-btn" aria-label="{{ $isEn ? 'Search' : 'Rechercher' }}">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
        </form>

        <div class="lo-nav-right">
            <a href="{{ $loCatalogue }}" class="lo-catalogue-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
                <span class="lo-catalogue-text">{{ $isEn ? 'Catalogue' : 'Catalogue' }}</span>
            </a>
            <div class="lo-lang">
                @if($isEn)
                    <a href="{{ $switchUrl }}" class="lo-lang-off">FR</a>
                    <span class="lo-lang-sep">|</span>
                    <span class="lo-lang-active">EN</span>
                @else
                    <span class="lo-lang-active">FR</span>
                    <span class="lo-lang-sep">|</span>
                    <a href="{{ $switchUrl }}" class="lo-lang-off">EN</a>
                @endif
            </div>
        </div>
    </header>

    <main class="lo-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="{{ $isEn ? 'Back to top' : 'Retour en haut' }}">↑</button>

    <footer class="lo-footer">
        <div class="lo-f-identity">
            <img src="/assets/Lugh-Owl/1.logo.png" width="64" alt="Logo Lugh-Owl">
            <div class="lo-f-name">Lugh-<span>Owl</span></div>
            <div class="lo-f-sep">✦</div>
        </div>
        <nav class="lo-f-links">
            <a href="{{ $loCatalogue }}">{{ $isEn ? 'Catalogue' : 'Catalogue' }}</a>
            <a href="{{ $loOrigines }}">{{ $isEn ? 'Origins' : 'Origines' }}</a>
            <a href="{{ $loLegal }}">{{ $isEn ? 'Legal Notice' : 'Mentions légales' }}</a>
            <a href="{{ $mainSite }}">{{ $isEn ? 'Main website' : 'Site principal' }}</a>
        </nav>
        <div class="lo-f-copy">{{ $isEn ? 'All rights reserved' : 'Tous droits réservés' }} © Lugh-Owl &nbsp;·&nbsp; 2023 – 2026</div>
    </footer>

</body>
</html>
