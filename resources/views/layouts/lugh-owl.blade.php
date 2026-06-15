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
        </nav>

        <form class="lo-search" method="get" action="{{ route('fr.lugh-owl.recherche') }}">
            <input type="search" name="q" placeholder="Rechercher…" value="{{ request('q', '') }}" class="lo-search-input">
            <button type="submit" class="lo-search-btn" aria-label="Rechercher">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
        </form>

        <div class="lo-lang" title="Version anglaise à venir">
            <span class="lo-lang-active">FR</span>
            <span class="lo-lang-sep">|</span>
            <span class="lo-lang-off">EN</span>
        </div>

        <button class="lo-hamburger" id="loHamburger" aria-label="Menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </header>

    <main class="lo-main">
        @yield('content')
    </main>

    <button id="back-to-top" aria-label="Retour en haut">↑</button>

    <footer class="lo-footer">
        <div class="lo-f-identity">
            <img src="/assets/Lugh-Owl/1.logo.png" width="64" alt="Logo Lugh-Owl">
            <div class="lo-f-name">Lugh-<span>Owl</span></div>
            <div class="lo-f-sep">✦</div>
        </div>
        <nav class="lo-f-links">
            <a href="{{ route('fr.lugh-owl.modeles') }}">Modèles philosophiques</a>
            <a href="{{ route('fr.lugh-owl.idees') }}">Idées immuables</a>
            <a href="{{ route('fr.lugh-owl.vie') }}">La Vie est [...]</a>
            <a href="{{ route('fr.lugh-owl.origines') }}">Origines</a>
            <a href="{{ route('fr.lugh-owl.legal') }}">Mentions légales</a>
            <a href="{{ route('fr.sites') }}">Site principal</a>
        </nav>
        <div class="lo-f-copy">Tous droits réservés © Lugh-Owl &nbsp;·&nbsp; 2023 – 2026</div>
    </footer>

</body>
</html>
