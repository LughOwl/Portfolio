@php
    $loc        = $locale ?? 'fr';
    $isEn       = $loc === 'en';
    $otAccueil  = $isEn ? route('en.ouranos-taurus.accueil')       : route('fr.ouranos-taurus.accueil');
    $otPlanetes = $isEn ? route('en.ouranos-taurus.planetes')      : route('fr.ouranos-taurus.planetes');
    $otConst    = $isEn ? route('en.ouranos-taurus.constellations'): route('fr.ouranos-taurus.constellations');
    $otPheno    = $isEn ? route('en.ouranos-taurus.phenomenes')    : route('fr.ouranos-taurus.phenomenes');
    $otMyth     = $isEn ? route('en.ouranos-taurus.mythologie')    : route('fr.ouranos-taurus.mythologie');
    $otObserve  = $isEn ? route('en.ouranos-taurus.observer')      : route('fr.ouranos-taurus.observer');
    $otOrigines = $isEn ? route('en.ouranos-taurus.origines')      : route('fr.ouranos-taurus.origines');
    $otLegal    = $isEn ? route('en.ouranos-taurus.legal')         : route('fr.ouranos-taurus.legal');
    $mainSite   = $isEn ? route('en.websites')                     : route('fr.sites');

    $otherLocale      = $isEn ? 'fr' : 'en';
    $currentRouteName = request()->route()?->getName() ?? '';
    $baseRoute        = preg_replace('/^(fr|en)\./', '', $currentRouteName);
    $routeParams      = request()->route()?->parameters() ?? [];
    try {
        $switchUrl = route($otherLocale . '.' . $baseRoute, $routeParams);
    } catch (\Throwable $e) {
        $switchUrl = $isEn ? route('fr.ouranos-taurus.accueil') : route('en.ouranos-taurus.accueil');
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $loc }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ouranos-Taurus')</title>
    <meta name="description" content="@yield('meta_description', $isEn ? 'Ouranos-Taurus — Planets, constellations, celestial phenomena and mythology.' : 'Ouranos-Taurus — Planètes, constellations, phénomènes célestes et mythologie.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Ouranos-Taurus/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ouranos-Taurus">
    <meta property="og:title" content="@yield('title', 'Ouranos-Taurus')">
    <meta property="og:description" content="@yield('meta_description', $isEn ? 'Ouranos-Taurus — Planets, constellations, celestial phenomena and mythology.' : 'Ouranos-Taurus — Planètes, constellations, phénomènes célestes et mythologie.')">
    <meta property="og:image" content="{{ url('/assets/Ouranos-Taurus/1.logo.png') }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
    @vite(['resources/sass/ouranos-taurus.scss', 'resources/js/ouranos-taurus.js'])
    @yield('head')
</head>
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="ot-admin-bar">
        <div class="ot-admin-left">
            <span class="ot-admin-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="ot-admin-link ot-admin-hide-sm">Tableau de bord</a>
        </div>
        <div class="ot-admin-right">
            <span class="ot-admin-user ot-admin-hide-sm">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="ot-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

    <header class="ot-header">
        <a href="{{ $otAccueil }}" class="ot-brand">
            <img src="/assets/Ouranos-Taurus/1.logo.png" width="36" alt="logo" class="ot-logo"
                 onerror="this.style.display='none'">
            <span class="ot-brand-text">Ouranos-<em>Taurus</em></span>
        </a>

        <nav class="ot-nav">
            <a href="{{ $otPlanetes }}" class="ot-nav-link @yield('nav_planetes')">{{ $isEn ? 'Planets' : 'Planètes' }}</a>
            <a href="{{ $otConst }}"   class="ot-nav-link @yield('nav_constellations')">Constellations</a>
            <a href="{{ $otPheno }}"   class="ot-nav-link @yield('nav_phenomenes')">{{ $isEn ? 'Phenomena' : 'Phénomènes' }}</a>
            <a href="{{ $otMyth }}"    class="ot-nav-link @yield('nav_mythologie')">{{ $isEn ? 'Mythology' : 'Mythologie' }}</a>
            <a href="{{ $otObserve }}" class="ot-nav-link @yield('nav_observer')">{{ $isEn ? 'Observe' : 'Observer' }}</a>
        </nav>

        <div class="ot-nav-right">
            <div class="ot-lang">
                @if($isEn)
                    <a href="{{ $switchUrl }}" class="ot-lang-off">FR</a>
                    <span class="ot-lang-sep">|</span>
                    <span class="ot-lang-active">EN</span>
                @else
                    <span class="ot-lang-active">FR</span>
                    <span class="ot-lang-sep">|</span>
                    <a href="{{ $switchUrl }}" class="ot-lang-off">EN</a>
                @endif
            </div>
        </div>
    </header>

    <main class="ot-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="{{ $isEn ? 'Back to top' : 'Retour en haut' }}">↑</button>

    <footer class="ot-footer">
        <div class="ot-f-identity">
            <img src="/assets/Ouranos-Taurus/1.logo.png" width="56" alt="Logo Ouranos-Taurus"
                 onerror="this.style.display='none'">
            <div class="ot-f-name">Ouranos-<span>Taurus</span></div>
            <div class="ot-f-sep">✦</div>
        </div>
        <nav class="ot-f-links">
            <a href="{{ $otPlanetes }}">{{ $isEn ? 'Planets' : 'Planètes' }}</a>
            <a href="{{ $otConst }}">Constellations</a>
            <a href="{{ $otPheno }}">{{ $isEn ? 'Phenomena' : 'Phénomènes' }}</a>
            <a href="{{ $otMyth }}">{{ $isEn ? 'Mythology' : 'Mythologie' }}</a>
            <a href="{{ $otObserve }}">{{ $isEn ? 'Observe' : 'Observer' }}</a>
            <a href="{{ $otOrigines }}">{{ $isEn ? 'Origins' : 'Origines' }}</a>
            <a href="{{ $otLegal }}">{{ $isEn ? 'Legal notice' : 'Mentions légales' }}</a>
            <a href="{{ $mainSite }}">{{ $isEn ? 'Main website' : 'Site principal' }}</a>
        </nav>
        <div class="ot-f-copy">{{ $isEn ? 'All rights reserved' : 'Tous droits réservés' }} © Ouranos-Taurus &nbsp;·&nbsp; 2024 – 2026</div>
    </footer>

</body>
</html>
