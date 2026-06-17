@php
    $loc       = $locale ?? 'fr';
    $isEn      = $loc === 'en';
    $gdAccueil = $isEn ? route('en.gaia-deer.accueil')       : route('fr.gaia-deer.accueil');
    $gdSante   = $isEn ? route('en.gaia-deer.sante')         : route('fr.gaia-deer.sante');
    $gdNutr    = $isEn ? route('en.gaia-deer.nutrition')     : route('fr.gaia-deer.nutrition');
    $gdInvest  = $isEn ? route('en.gaia-deer.investissement'): route('fr.gaia-deer.investissement');
    $gdOrigines= $isEn ? route('en.gaia-deer.origines')      : route('fr.gaia-deer.origines');
    $gdLegal   = $isEn ? route('en.gaia-deer.legal')         : route('fr.gaia-deer.legal');
    $mainSite  = $isEn ? route('en.websites')                : route('fr.sites');

    // Switcher : même page, autre locale
    $otherLocale      = $isEn ? 'fr' : 'en';
    $currentRouteName = request()->route()?->getName() ?? '';
    $baseRoute        = preg_replace('/^(fr|en)\./', '', $currentRouteName);
    $routeParams      = request()->route()?->parameters() ?? [];
    try {
        $switchUrl = route($otherLocale . '.' . $baseRoute, $routeParams);
    } catch (\Throwable $e) {
        $switchUrl = $isEn ? route('fr.gaia-deer.accueil') : route('en.gaia-deer.accueil');
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $loc }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gaïa-Deer')</title>
    <meta name="description" content="@yield('meta_description', $isEn ? 'Gaïa-Deer — Personal views on physical health, nutrition and investing.' : 'Gaïa-Deer — Réflexions personnelles sur la santé physique, la nutrition et l\'investissement.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Gaia-Deer/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Gaïa-Deer">
    <meta property="og:title" content="@yield('title', 'Gaïa-Deer')">
    <meta property="og:description" content="@yield('meta_description', $isEn ? 'Gaïa-Deer — Personal views on physical health, nutrition and investing.' : 'Gaïa-Deer — Réflexions personnelles sur la santé physique, la nutrition et l\'investissement.')">
    <meta property="og:image" content="{{ url('/assets/Gaia-Deer/1.logo.png') }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
    @vite(['resources/sass/gaia-deer.scss', 'resources/js/gaia-deer.js'])
    @yield('head')
</head>
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="gd-admin-bar">
        <div class="gd-admin-left">
            <span class="gd-admin-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="gd-admin-link gd-admin-hide-sm">Tableau de bord</a>
            <a href="{{ route('admin.gaia-deer.index') }}" class="gd-admin-link">Gérer Gaïa-Deer</a>
        </div>
        <div class="gd-admin-right">
            <span class="gd-admin-user gd-admin-hide-sm">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="gd-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

    <header class="gd-header">
        <a href="{{ $gdAccueil }}" class="gd-brand">
            <img src="/assets/Gaia-Deer/1.logo.png" width="36" alt="logo" class="gd-logo"
                 onerror="this.style.display='none'">
            <span class="gd-brand-text">Gaïa-<em>Deer</em></span>
        </a>

        <nav class="gd-nav">
            <a href="{{ $gdSante }}"  class="gd-nav-link @yield('nav_sante')">{{ $isEn ? 'Health' : 'Santé' }}</a>
            <a href="{{ $gdNutr }}"   class="gd-nav-link @yield('nav_nutrition')">{{ $isEn ? 'Nutrition' : 'Nutrition' }}</a>
            <a href="{{ $gdInvest }}" class="gd-nav-link @yield('nav_invest')">{{ $isEn ? 'Investing' : 'Investissement' }}</a>
        </nav>

        <div class="gd-nav-right">
            <div class="gd-lang">
                @if($isEn)
                    <a href="{{ $switchUrl }}" class="gd-lang-off">FR</a>
                    <span class="gd-lang-sep">|</span>
                    <span class="gd-lang-active">EN</span>
                @else
                    <span class="gd-lang-active">FR</span>
                    <span class="gd-lang-sep">|</span>
                    <a href="{{ $switchUrl }}" class="gd-lang-off">EN</a>
                @endif
            </div>
        </div>
    </header>

    <main class="gd-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="{{ $isEn ? 'Back to top' : 'Retour en haut' }}">↑</button>

    <footer class="gd-footer">
        <div class="gd-f-identity">
            <img src="/assets/Gaia-Deer/1.logo.png" width="56" alt="Logo Gaïa-Deer"
                 onerror="this.style.display='none'">
            <div class="gd-f-name">Gaïa-<span>Deer</span></div>
        </div>
        <nav class="gd-f-links">
            <a href="{{ $gdSante }}">{{ $isEn ? 'Health' : 'Santé physique' }}</a>
            <a href="{{ $gdNutr }}">{{ $isEn ? 'Nutrition' : 'Nutrition' }}</a>
            <a href="{{ $gdInvest }}">{{ $isEn ? 'Investing' : 'Investissement' }}</a>
            <a href="{{ $gdOrigines }}">{{ $isEn ? 'Origins' : 'Origines' }}</a>
            <a href="{{ $gdLegal }}">{{ $isEn ? 'Legal Notice' : 'Mentions légales' }}</a>
            <a href="{{ $mainSite }}">{{ $isEn ? 'Main website' : 'Site principal' }}</a>
        </nav>
        <div class="gd-f-disclaimer">
            {{ $isEn
                ? 'The content on this site reflects my personal experience and opinions only. Nothing here constitutes professional medical or financial advice.'
                : 'Le contenu de ce site reflète uniquement mon expérience et mes opinions personnelles. Rien ici ne constitue un conseil médical ou financier professionnel.' }}
        </div>
        <div class="gd-f-copy">© Gaïa-Deer · 2024 – 2026</div>
    </footer>

</body>
</html>
