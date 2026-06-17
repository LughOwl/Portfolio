<!DOCTYPE html>
<html lang="{{ $locale ?? 'fr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nicolas BISAGA — Portfolio Cybersécurité')</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio de Nicolas BISAGA — étudiant en licence informatique spécialisé en cybersécurité. Parcours, compétences et projets.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/assets/photo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Portfolio Nicolas BISAGA">
    <meta property="og:title" content="@yield('title', 'Nicolas BISAGA — Portfolio Cybersécurité')">
    <meta property="og:description" content="@yield('meta_description', 'Portfolio de Nicolas BISAGA — étudiant en licence informatique spécialisé en cybersécurité.')">
    @hasSection('meta_image')
    <meta property="og:image" content="@yield('meta_image')">
    @else
    <meta property="og:image" content="{{ url('/assets/photo.png') }}">
    @endif
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
    @vite(['resources/sass/portfolio.scss', 'resources/js/app.js'])
    @yield('head')
</head>
<body class="{{ auth()->check() ? 'has-admin-bar' : '' }}">

    @auth
    <div class="admin-bar" id="adminBar">
        <div class="admin-bar-left">
            <span class="admin-bar-label">// Admin</span>
            <a href="{{ route('admin.dashboard') }}" class="admin-bar-link">Tableau de bord</a>
            @php
            $adminRouteMap = [
                'fr.presentation' => 'admin.portfolio.presentation',
                'fr.profil'       => 'admin.portfolio.profil',
                'fr.parcours'     => 'admin.portfolio.formations',
                'fr.sites'        => 'admin.portfolio.sites',
            ];
            $currentName   = request()->route()->getName() ?? '';
            $adminRoute    = $adminRouteMap[$currentName] ?? null;
            @endphp
            @if($adminRoute)
            <a href="{{ route($adminRoute) }}" class="admin-bar-link">Modifier cette page</a>
            @endif
        </div>
        <div class="admin-bar-right">
            <span class="admin-bar-user">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit" class="admin-bar-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ ($locale ?? 'fr') === 'fr' ? route('fr.presentation') : route('en.presentation') }}" class="nav-logo" aria-label="Nicolas BISAGA — Accueil">
                <span class="logo-box">
                    <span class="logo-n">N</span><span class="logo-b">B</span>
                    <span class="logo-dot"></span>
                </span>
            </a>

            @php
            $langMap = [
                'fr.presentation' => 'en.presentation',
                'fr.home'         => 'en.presentation',
                'fr.profil'       => 'en.profil',
                'fr.parcours'     => 'en.parcours',
                'fr.sites'        => 'en.websites',
                'fr.contact'      => 'en.contact',
                'fr.plan'         => 'en.sitemap',
                'fr.legal'        => 'en.termsofuse',
                'en.presentation' => 'fr.presentation',
                'en.home'         => 'fr.presentation',
                'en.profil'       => 'fr.profil',
                'en.parcours'     => 'fr.parcours',
                'en.websites'     => 'fr.sites',
                'en.contact'      => 'fr.contact',
                'en.sitemap'      => 'fr.plan',
                'en.termsofuse'   => 'fr.legal',
            ];
            $currentRoute = request()->route()?->getName() ?? '';
            $altRoute     = $langMap[$currentRoute] ?? (($locale ?? 'fr') === 'fr' ? 'en.presentation' : 'fr.presentation');
            $altUrl       = route($altRoute);
            @endphp
            <div class="nav-links" id="navLinks">
                @if(($locale ?? 'fr') === 'fr')
                <a href="{{ route('fr.presentation') }}" class="{{ request()->routeIs('fr.presentation', 'fr.home') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('fr.profil') }}"       class="{{ request()->routeIs('fr.profil') ? 'active' : '' }}">Profil</a>
                <a href="{{ route('fr.parcours') }}"     class="{{ request()->routeIs('fr.parcours') ? 'active' : '' }}">Parcours</a>
                <a href="{{ route('fr.sites') }}"        class="{{ request()->routeIs('fr.sites') ? 'active' : '' }}">Projets</a>
                <a href="{{ route('fr.contact') }}"      class="{{ request()->routeIs('fr.contact') ? 'active' : '' }}">Contact</a>
                <a href="{{ $altUrl }}" class="nav-lang-btn">EN 🇬🇧</a>
                @else
                <a href="{{ route('en.presentation') }}" class="{{ request()->routeIs('en.presentation', 'en.home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('en.profil') }}"       class="{{ request()->routeIs('en.profil') ? 'active' : '' }}">Profile</a>
                <a href="{{ route('en.parcours') }}"     class="{{ request()->routeIs('en.parcours') ? 'active' : '' }}">Career</a>
                <a href="{{ route('en.websites') }}"     class="{{ request()->routeIs('en.websites') ? 'active' : '' }}">Projects</a>
                <a href="{{ route('en.contact') }}"      class="{{ request()->routeIs('en.contact') ? 'active' : '' }}">Contact</a>
                <a href="{{ $altUrl }}" class="nav-lang-btn">FR 🇫🇷</a>
                @endif
            </div>

            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-brand">
                <span>Nicolas BISAGA</span> — Portfolio Cybersécurité © 2026
            </div>
            <div class="footer-links">
                @if(($locale ?? 'fr') === 'fr')
                <a href="{{ route('fr.plan') }}">Plan du site</a>
                <a href="{{ route('fr.legal') }}">Mentions légales</a>
                <a href="{{ $settings['github_url'] }}">GitHub</a>
                <a href="{{ $settings['linkedin_url'] }}">LinkedIn</a>
                <a href="{{ $settings['tryhackme_url'] }}">TryHackMe</a>
                @else
                <a href="{{ route('en.sitemap') }}">Sitemap</a>
                <a href="{{ route('en.termsofuse') }}">Terms of use</a>
                <a href="{{ $settings['github_url'] }}">GitHub</a>
                <a href="{{ $settings['linkedin_url'] }}">LinkedIn</a>
                <a href="{{ $settings['tryhackme_url'] }}">TryHackMe</a>
                @endif
            </div>
        </div>
    </footer>
</body>
</html>
