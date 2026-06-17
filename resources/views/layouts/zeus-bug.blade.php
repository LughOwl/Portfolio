@php
    $loc        = $locale ?? 'fr';
    $isEn       = $loc === 'en';
    $zbAccueil  = $isEn ? route('en.zeus-bug.accueil') : route('fr.zeus-bug.accueil');
    $zbOrigines = $isEn ? route('en.zeus-bug.origines') : route('fr.zeus-bug.origines');
    $zbLegal    = $isEn ? route('en.zeus-bug.legal')   : route('fr.zeus-bug.legal');
    $mainSite   = $isEn ? route('en.websites')         : route('fr.sites');

    $otherLocale      = $isEn ? 'fr' : 'en';
    $currentRouteName = request()->route()?->getName() ?? '';
    $baseRoute        = preg_replace('/^(fr|en)\./', '', $currentRouteName);
    $routeParams      = request()->route()?->parameters() ?? [];
    try {
        $switchUrl = route($otherLocale . '.' . $baseRoute, $routeParams);
    } catch (\Throwable $e) {
        $switchUrl = $isEn ? route('fr.zeus-bug.accueil') : route('en.zeus-bug.accueil');
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $loc }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zeus-Bug')</title>
    <meta name="description" content="@yield('meta_description', $isEn ? 'Zeus-Bug — Tech articles and project write-ups by Nicolas Bisaga.' : 'Zeus-Bug — Articles tech et projets informatiques par Nicolas Bisaga.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Zeus-Bug/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Zeus-Bug">
    <meta property="og:title" content="@yield('title', 'Zeus-Bug')">
    <meta property="og:description" content="@yield('meta_description', $isEn ? 'Zeus-Bug — Tech articles and project write-ups.' : 'Zeus-Bug — Articles tech et projets informatiques.')">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary">
    @vite(['resources/sass/zeus-bug.scss', 'resources/js/zeus-bug.js'])
    @yield('head')
</head>
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="zb-admin-bar">
        <div class="zb-admin-left">
            <span class="zb-admin-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="zb-admin-link zb-admin-hide-sm">Tableau de bord</a>
            <a href="{{ route('admin.zeus-bug.index') }}" class="zb-admin-link">Gérer Zeus-Bug</a>
        </div>
        <div class="zb-admin-right">
            <span class="zb-admin-user zb-admin-hide-sm">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="zb-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

    <header class="zb-header">
        <a href="{{ $zbAccueil }}" class="zb-brand">
            <img src="/assets/Zeus-Bug/1.logo.png" width="36" alt="logo" class="zb-logo"
                 onerror="this.style.display='none'">
            <span class="zb-brand-text">Zeus-<em>Bug</em></span>
        </a>

        <div class="zb-nav-right">
            <div class="zb-lang">
                @if($isEn)
                    <a href="{{ $switchUrl }}" class="zb-lang-off">FR</a>
                    <span class="zb-lang-sep">|</span>
                    <span class="zb-lang-active">EN</span>
                @else
                    <span class="zb-lang-active">FR</span>
                    <span class="zb-lang-sep">|</span>
                    <a href="{{ $switchUrl }}" class="zb-lang-off">EN</a>
                @endif
            </div>
        </div>
    </header>

    <main class="zb-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="{{ $isEn ? 'Back to top' : 'Retour en haut' }}">↑</button>

    <footer class="zb-footer">
        <div class="zb-f-identity">
            <img src="/assets/Zeus-Bug/1.logo.png" width="56" alt="Logo Zeus-Bug"
                 onerror="this.style.display='none'">
            <div class="zb-f-name">Zeus-<span>Bug</span></div>
            <div class="zb-f-sep">✦</div>
        </div>
        <nav class="zb-f-links">
            <a href="{{ $zbAccueil }}">Articles</a>
            <a href="{{ $zbOrigines }}">{{ $isEn ? 'Origins' : 'Origines' }}</a>
            <a href="{{ $zbLegal }}">{{ $isEn ? 'Legal notice' : 'Mentions légales' }}</a>
            <a href="{{ route($isEn ? 'en.zeus-bug.plan' : 'fr.zeus-bug.plan') }}">{{ $isEn ? 'Sitemap' : 'Plan du site' }}</a>
            <a href="{{ $mainSite }}">{{ $isEn ? 'Main website' : 'Site principal' }}</a>
        </nav>
        <div class="zb-f-copy">{{ $isEn ? 'All rights reserved' : 'Tous droits réservés' }} © Zeus-Bug &nbsp;·&nbsp; 2025 – 2026</div>
    </footer>

</body>
</html>
