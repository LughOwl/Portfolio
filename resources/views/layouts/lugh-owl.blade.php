<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lugh-Owl')</title>
    <meta name="description" content="@yield('meta_description', 'Lugh-Owl — Articles philosophiques sur les modèles de pensée, les idées immuables et la vie.')">
    <meta name="author" content="Nicolas BISAGA">
    <link rel="icon" href="/assets/Lugh-Owl/1.logo.png" type="image/png">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Lugh-Owl">
    <meta property="og:title" content="@yield('title', 'Lugh-Owl')">
    <meta property="og:description" content="@yield('meta_description', 'Lugh-Owl — Articles philosophiques sur les modèles de pensée, les idées immuables et la vie.')">
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
            <a href="{{ route('admin.dashboard') }}" class="lo-admin-link">Tableau de bord</a>
            <a href="{{ route('admin.lugh-owl.index') }}" class="lo-admin-link">Gérer Lugh-Owl</a>
        </div>
        <div class="lo-admin-right">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="lo-admin-logout">Déconnexion</button>
            </form>
        </div>
    </div>
    @endauth

    <header class="lo-header">
        <a href="{{ route('fr.lugh-owl.accueil') }}" class="lo-brand">
            <img src="/assets/Lugh-Owl/1.logo.png" width="36" alt="logo" class="lo-logo">
            <span>Lugh-<em>Owl</em></span>
        </a>

        <nav class="lo-nav" id="loNav">
            <a href="{{ route('fr.lugh-owl.modeles') }}" class="{{ request()->routeIs('fr.lugh-owl.modeles') ? 'active' : '' }}">
                Modèles philosophiques
            </a>
            <a href="{{ route('fr.lugh-owl.idees') }}" class="{{ request()->routeIs('fr.lugh-owl.idees') ? 'active' : '' }}">
                Idées immuables
            </a>
            <a href="{{ route('fr.lugh-owl.vie') }}" class="{{ request()->routeIs('fr.lugh-owl.vie') ? 'active' : '' }}">
                La Vie est [...]
            </a>
            <a href="{{ route('fr.lugh-owl.origines') }}" class="{{ request()->routeIs('fr.lugh-owl.origines') ? 'active' : '' }}">
                Origines
            </a>
        </nav>

        <form class="lo-search" method="get" action="{{ route('fr.lugh-owl.recherche') }}">
            <input type="search" name="q" placeholder="Rechercher…" value="{{ request('q', '') }}" class="lo-search-input">
            <button type="submit" class="lo-search-btn" aria-label="Rechercher">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
        </form>

        <button class="lo-hamburger" id="loHamburger" aria-label="Menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </header>

    <main class="lo-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="Retour en haut">↑</button>

    <footer class="lo-footer">
        <div class="lo-f-nav">
            <div class="lo-f-nav-title">Articles :</div>
            <ul>
                <li><a href="{{ route('fr.lugh-owl.modeles') }}">Modèles philosophiques</a></li>
                <li><a href="{{ route('fr.lugh-owl.idees') }}">Idées immuables</a></li>
                <li><a href="{{ route('fr.lugh-owl.vie') }}">La Vie est [...]</a></li>
            </ul>
        </div>
        <div class="lo-f-brand">
            <img src="/assets/Lugh-Owl/1.logo.png" width="80" alt="Logo Lugh-Owl">
            <div class="lo-f-brand-name">Lugh-<span>Owl</span></div>
        </div>
        <div class="lo-f-info">
            <div class="lo-f-info-title">Informations :</div>
            <ul>
                <li><a href="{{ route('fr.lugh-owl.origines') }}">Origines et Objectifs</a></li>
                <li><a href="{{ route('fr.lugh-owl.legal') }}">Mentions légales</a></li>
                <li><a href="{{ route('fr.lugh-owl.plan') }}">Plan du site</a></li>
                <li><a href="{{ route('fr.sites') }}">Site web principal</a></li>
            </ul>
        </div>
        <div class="lo-f-copy">
            Tous droits réservés © Lugh-Owl | 2023 / 2026<br>
            <small>Textes et images créés en partie avec l'IA (ChatGPT & DALL·E)</small>
        </div>
    </footer>

</body>
</html>
