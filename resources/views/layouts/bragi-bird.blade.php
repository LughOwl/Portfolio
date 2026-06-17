@php
    $loc       = $locale ?? 'fr';
    $isEn      = $loc === 'en';
    $bbAccueil  = $isEn ? route('en.bragi-bird.accueil')  : route('fr.bragi-bird.accueil');
    $bbOrigines = $isEn ? route('en.bragi-bird.origines') : route('fr.bragi-bird.origines');
    $bbLegal    = $isEn ? route('en.bragi-bird.legal')    : route('fr.bragi-bird.legal');
    $bbPlan     = $isEn ? route('en.bragi-bird.plan')     : route('fr.bragi-bird.plan');
    $mainSite   = $isEn ? route('en.websites')            : route('fr.sites');

    $otherLocale      = $isEn ? 'fr' : 'en';
    $currentRouteName = request()->route()?->getName() ?? '';
    $baseRoute        = preg_replace('/^(fr|en)\./', '', $currentRouteName);
    $routeParams      = request()->route()?->parameters() ?? [];
    try {
        $switchUrl = route($otherLocale . '.' . $baseRoute, $routeParams);
    } catch (\Throwable $e) {
        $switchUrl = $isEn ? route('fr.bragi-bird.accueil') : route('en.bragi-bird.accueil');
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $loc }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bragi Bird')</title>
    <meta name="description" content="@yield('meta_description', $isEn ? 'Bragi Bird - A personal collection of piano pieces.' : 'Bragi Bird, une collection personnelle de morceaux de piano.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Bragi-Bird/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bragi Bird">
    <meta property="og:title" content="@yield('title', 'Bragi Bird')">
    <meta property="og:description" content="@yield('meta_description', $isEn ? 'Bragi Bird - Piano pieces.' : 'Bragi Bird, morceaux de piano.')">
    <meta property="og:image" content="{{ url('/assets/Bragi-Bird/1.logo.png') }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary">
    @vite(['resources/sass/bragi-bird.scss', 'resources/js/bragi-bird.js'])
    @yield('head')
</head>
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="bb-admin-bar">
        <div class="bb-admin-left">
            <span class="bb-admin-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="bb-admin-link bb-admin-hide-sm">Tableau de bord</a>
            <a href="{{ route('admin.bragi-bird.index') }}" class="bb-admin-link">Gérer Bragi Bird</a>
        </div>
        <div class="bb-admin-right">
            <span class="bb-admin-user bb-admin-hide-sm">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bb-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth


    <header class="bb-header">
        <a href="{{ $bbAccueil }}" class="bb-brand">
            <img src="/assets/Bragi-Bird/1.logo.png" width="36" alt="logo" class="bb-logo"
                 onerror="this.style.display='none'">
            <span class="bb-brand-text">Bragi-<em>Bird</em></span>
        </a>

        <nav class="bb-nav">
            <a href="{{ $bbAccueil }}" class="bb-nav-link @yield('nav_accueil')">
                {{ $isEn ? 'Pieces' : 'Morceaux' }}
            </a>
        </nav>

        <div class="bb-nav-right">
            <div class="bb-lang">
                @if($isEn)
                    <a href="{{ $switchUrl }}" class="bb-lang-off">FR</a>
                    <span class="bb-lang-sep">|</span>
                    <span class="bb-lang-active">EN</span>
                @else
                    <span class="bb-lang-active">FR</span>
                    <span class="bb-lang-sep">|</span>
                    <a href="{{ $switchUrl }}" class="bb-lang-off">EN</a>
                @endif
            </div>
        </div>
    </header>

    <main class="bb-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="{{ $isEn ? 'Back to top' : 'Retour en haut' }}">↑</button>

    <footer class="bb-footer">
        <div class="bb-f-identity">
            <img src="/assets/Bragi-Bird/1.logo.png" width="56" alt="Logo Bragi Bird"
                 onerror="this.style.display='none'">
            <div class="bb-f-name">Bragi-<span>Bird</span></div>
            <div class="bb-f-sep">✦</div>
        </div>
        <nav class="bb-f-links">
            <a href="{{ $bbAccueil }}">{{ $isEn ? 'Pieces' : 'Morceaux' }}</a>
            <a href="{{ $bbOrigines }}">{{ $isEn ? 'Origins' : 'Origines' }}</a>
            <a href="{{ $bbLegal }}">{{ $isEn ? 'Legal notice' : 'Mentions légales' }}</a>
            <a href="{{ $bbPlan }}">{{ $isEn ? 'Sitemap' : 'Plan du site' }}</a>
            <a href="{{ $mainSite }}">{{ $isEn ? 'Main website' : 'Site principal' }}</a>
        </nav>
        <div class="bb-f-copy">{{ $isEn ? 'All rights reserved' : 'Tous droits réservés' }} © Bragi-Bird &nbsp;·&nbsp; 2026</div>
    </footer>

</body>
</html>
