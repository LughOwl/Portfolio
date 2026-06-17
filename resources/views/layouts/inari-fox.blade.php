@php
    $loc       = $locale ?? 'fr';
    $isEn      = $loc === 'en';
    $ifAccueil  = $isEn ? route('en.inari-fox.accueil')  : route('fr.inari-fox.accueil');
    $ifRecettes = $isEn ? route('en.inari-fox.recettes') : route('fr.inari-fox.recettes');
    $ifLegal    = $isEn ? route('en.inari-fox.legal')    : route('fr.inari-fox.legal');
    $ifPlan     = $isEn ? route('en.inari-fox.plan')     : route('fr.inari-fox.plan');
    $ifOrigines = $isEn ? route('en.inari-fox.origines') : route('fr.inari-fox.origines');
    $mainSite  = $isEn ? route('en.websites')           : route('fr.sites');

    $otherLocale      = $isEn ? 'fr' : 'en';
    $currentRouteName = request()->route()?->getName() ?? '';
    $baseRoute        = preg_replace('/^(fr|en)\./', '', $currentRouteName);
    $routeParams      = request()->route()?->parameters() ?? [];
    try {
        $switchUrl = route($otherLocale . '.' . $baseRoute, $routeParams);
    } catch (\Throwable $e) {
        $switchUrl = $isEn ? route('fr.inari-fox.accueil') : route('en.inari-fox.accueil');
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $loc }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inari-Fox')</title>
    <meta name="description" content="@yield('meta_description', $isEn ? 'Inari-Fox - by Nicolas Bisaga.' : 'Inari-Fox, par Nicolas Bisaga.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Inari-Fox/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Inari-Fox">
    <meta property="og:title" content="@yield('title', 'Inari-Fox')">
    <meta property="og:description" content="@yield('meta_description', $isEn ? 'Inari-Fox.' : 'Inari-Fox.')">
    <meta property="og:image" content="{{ url('/assets/Inari-Fox/1.logo.png') }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary">
    @vite(['resources/sass/inari-fox.scss', 'resources/js/inari-fox.js'])
    @yield('head')
</head>
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="if-admin-bar">
        <div class="if-admin-left">
            <span class="if-admin-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="if-admin-link if-admin-hide-sm">Tableau de bord</a>
            <a href="{{ route('admin.inari-fox.index') }}" class="if-admin-link">Gérer Inari-Fox</a>
        </div>
        <div class="if-admin-right">
            <span class="if-admin-user if-admin-hide-sm">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="if-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

    <header class="if-header">
        <a href="{{ $ifAccueil }}" class="if-brand">
            <img src="/assets/Inari-Fox/1.logo.png" width="36" alt="logo" class="if-logo"
                 onerror="this.style.display='none'">
            <span class="if-brand-text">Inari-<em>Fox</em></span>
        </a>

        <nav class="if-nav">
            <a href="{{ $ifAccueil }}" class="if-nav-link @yield('nav_accueil')">
                {{ $isEn ? 'Home' : 'Accueil' }}
            </a>
            <a href="{{ $ifRecettes }}" class="if-nav-link @yield('nav_recettes')">
                {{ $isEn ? 'Recipes' : 'Recettes' }}
            </a>
        </nav>

        <div class="if-nav-right">
            <div class="if-lang">
                @if($isEn)
                    <a href="{{ $switchUrl }}" class="if-lang-off">FR</a>
                    <span class="if-lang-sep">|</span>
                    <span class="if-lang-active">EN</span>
                @else
                    <span class="if-lang-active">FR</span>
                    <span class="if-lang-sep">|</span>
                    <a href="{{ $switchUrl }}" class="if-lang-off">EN</a>
                @endif
            </div>
        </div>
    </header>

    <main class="if-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="{{ $isEn ? 'Back to top' : 'Retour en haut' }}">↑</button>

    <footer class="if-footer">
        <div class="if-f-identity">
            <img src="/assets/Inari-Fox/1.logo.png" width="56" alt="Logo Inari-Fox"
                 onerror="this.style.display='none'">
            <div class="if-f-name">Inari-<span>Fox</span></div>
            <div class="if-f-sep">✦</div>
        </div>
        <nav class="if-f-links">
            <a href="{{ $ifAccueil }}">{{ $isEn ? 'Home' : 'Accueil' }}</a>
            <a href="{{ $ifRecettes }}">{{ $isEn ? 'Recipes' : 'Recettes' }}</a>
            <a href="{{ $ifOrigines }}">{{ $isEn ? 'Origins' : 'Origines' }}</a>
            <a href="{{ $ifLegal }}">{{ $isEn ? 'Legal notice' : 'Mentions légales' }}</a>
            <a href="{{ $ifPlan }}">{{ $isEn ? 'Sitemap' : 'Plan du site' }}</a>
            <a href="{{ $mainSite }}">{{ $isEn ? 'Main website' : 'Site principal' }}</a>
        </nav>
        <div class="if-f-copy">{{ $isEn ? 'All rights reserved' : 'Tous droits réservés' }} © Inari-Fox &nbsp;·&nbsp; 2026</div>
    </footer>

    @stack('scripts')
</body>
</html>
