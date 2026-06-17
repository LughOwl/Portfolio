<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — Nicolas BISAGA</title>
    @vite(['resources/sass/admin.scss'])
</head>
<body class="admin-body">

    <header class="admin-topbar">
        <div class="topbar-left">
            <button class="topbar-hamburger" id="sidebarToggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
            <div class="topbar-brand">
                <span class="prefix">//</span>
                <span class="label">Admin Panel</span>
            </div>
        </div>
        <div class="topbar-right">
            @php
            $allSites = App\Http\Controllers\AdminController::SITES;
            $routeSite = request()->route('site');
            if (request()->routeIs('admin.janus-bee.*')) {
                $siteUrl   = route('fr.janus-bee.accueil');
                $siteColor = '#ffdc00';
                $siteLabel = 'Janus-Bee';
            } elseif (request()->routeIs('admin.lugh-owl.*')) {
                $siteUrl   = route('fr.lugh-owl.accueil');
                $siteColor = '#0078ff';
                $siteLabel = 'Lugh-Owl';
            } elseif (request()->routeIs('admin.gaia-deer.*')) {
                $siteUrl   = route('fr.gaia-deer.accueil');
                $siteColor = '#00af00';
                $siteLabel = 'Gaïa-Deer';
            } elseif (request()->routeIs('admin.zeus-bug.*')) {
                $siteUrl   = route('fr.zeus-bug.accueil');
                $siteColor = '#00f0d2';
                $siteLabel = 'Zeus-Bug';
            } elseif (request()->routeIs('admin.bragi-bird.*')) {
                $siteUrl   = route('fr.bragi-bird.accueil');
                $siteColor = '#ff8c00';
                $siteLabel = 'Bragi-Bird';
            } elseif (request()->routeIs('*.inari-fox.*')) {
                $siteUrl   = route('fr.inari-fox.accueil');
                $siteColor = '#c80000';
                $siteLabel = 'Inari-Fox';
            } elseif (request()->is('fr/ouranos-taurus*') || request()->is('en/ouranos-taurus*')) {
                $siteUrl   = route('fr.ouranos-taurus.accueil');
                $siteColor = '#8b5cf6';
                $siteLabel = 'Ouranos-Taurus';
            } else {
                $siteUrl   = route('fr.presentation');
                $siteColor = '#00ff88';
                $siteLabel = 'Portfolio';
            }
            @endphp
            <a href="{{ $siteUrl }}" class="topbar-site" style="color:{{ $siteColor }}; border-color:{{ $siteColor }}1a;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                {{ $siteLabel }}
            </a>
            <span class="topbar-user">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit" class="topbar-logout">Déconnexion</button>
            </form>
        </div>
    </header>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="admin-layout">

        <aside class="admin-sidebar" id="adminSidebar">

            <button class="sidebar-collapse-btn" id="sidebarCollapseBtn" title="Réduire le menu">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><polyline points="15 18 9 12 15 6"/></svg>
            </button>

            <a href="{{ route('admin.dashboard') }}" data-label="Tableau de bord"
               class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="sidebar-dot" style="background:#888;"></span>
                <span class="sidebar-label">Tableau de bord</span>
            </a>

            {{-- Portfolio --}}
            <div class="sidebar-section-title"><span class="sidebar-label">Portfolio</span></div>
            @php
            $pfLinks = [
                ['route' => 'admin.portfolio.presentation', 'label' => 'Présentation'],
                ['route' => 'admin.portfolio.profil',       'label' => 'Profil'],
                ['route' => 'admin.portfolio.objectifs',    'label' => 'Objectifs'],
                ['route' => 'admin.portfolio.formations',   'label' => 'Formations'],
                ['route' => 'admin.portfolio.experiences',  'label' => 'Expériences'],
                ['route' => 'admin.portfolio.competences',  'label' => 'Compétences'],
                ['route' => 'admin.portfolio.sites',        'label' => 'Projets & Sites'],
            ];
            @endphp
            @foreach($pfLinks as $lk)
            <a href="{{ route($lk['route']) }}" data-label="{{ $lk['label'] }}"
               class="sidebar-link {{ request()->routeIs($lk['route'].'*') ? 'active' : '' }}">
                <span class="sidebar-dot" style="background:#00ff88;"></span>
                <span class="sidebar-label">{{ $lk['label'] }}</span>
            </a>
            @endforeach

            {{-- Sites --}}
            <div class="sidebar-section-title"><span class="sidebar-label">Sites</span></div>
            @php
            $activeSites = [
                ['label' => 'Inari-Fox',      'color' => '#c80000', 'route' => 'admin.inari-fox.index',   'routeIs' => 'admin.inari-fox.*'],
                ['label' => 'Bragi-Bird',     'color' => '#ff8c00', 'route' => 'admin.bragi-bird.index',  'routeIs' => 'admin.bragi-bird.*'],
                ['label' => 'Janus-Bee',      'color' => '#ffdc00', 'route' => 'admin.janus-bee.index',   'routeIs' => 'admin.janus-bee.*'],
                ['label' => 'Gaïa-Deer',      'color' => '#00af00', 'route' => 'admin.gaia-deer.index',   'routeIs' => 'admin.gaia-deer.*'],
                ['label' => 'Zeus-Bug',        'color' => '#00f0d2', 'route' => 'admin.zeus-bug.index',    'routeIs' => 'admin.zeus-bug.*'],
                ['label' => 'Lugh-Owl',        'color' => '#0078ff', 'route' => 'admin.lugh-owl.index',   'routeIs' => 'admin.lugh-owl.*'],
                ['label' => 'Ouranos-Taurus',  'color' => '#8b5cf6', 'route' => 'fr.ouranos-taurus.accueil', 'routeIs' => '*.ouranos-taurus.*'],
            ];
            @endphp
            @foreach($activeSites as $info)
            <a href="{{ route($info['route']) }}" data-label="{{ $info['label'] }}"
               class="sidebar-link {{ request()->routeIs($info['routeIs']) ? 'active' : '' }}">
                <span class="sidebar-dot" style="background:{{ $info['color'] }};"></span>
                <span class="sidebar-label">{{ $info['label'] }}</span>
            </a>
            @endforeach

            {{-- Paramètres --}}
            <div class="sidebar-section-title"><span class="sidebar-label">Paramètres</span></div>
            <a href="{{ route('admin.portfolio.parametres') }}" data-label="Paramètres globaux"
               class="sidebar-link {{ request()->routeIs('admin.portfolio.parametres*') ? 'active' : '' }}">
                <span class="sidebar-dot" style="background:#888;"></span>
                <span class="sidebar-label">Paramètres globaux</span>
            </a>

        </aside>

        <main class="admin-main">
            @yield('content')
        </main>

    </div>

    @stack('scripts')

    <script>
    // Restaure la position de scroll après un submit de formulaire
    (function () {
        const key = 'admin_scroll_' + location.pathname;
        const saved = sessionStorage.getItem(key);
        if (saved !== null) {
            requestAnimationFrame(() => window.scrollTo(0, +saved));
            sessionStorage.removeItem(key);
        }
        document.addEventListener('submit', function (e) {
            // Ne sauvegarde pas pour les formulaires qui naviguent vers une autre page (ex: filtres GET)
            const form = e.target;
            if (form.method.toLowerCase() === 'get') return;
            sessionStorage.setItem(key, window.scrollY);
        });
    })();

    const toggle       = document.getElementById('sidebarToggle');
    const sidebar      = document.getElementById('adminSidebar');
    const overlay      = document.getElementById('sidebarOverlay');
    const collapseBtn  = document.getElementById('sidebarCollapseBtn');

    // --- Mobile open/close ---
    function openSidebar()  { sidebar.classList.add('open'); overlay.classList.add('open'); toggle.classList.add('open'); }
    function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('open'); toggle.classList.remove('open'); }

    toggle.addEventListener('click', () => sidebar.classList.contains('open') ? closeSidebar() : openSidebar());
    overlay.addEventListener('click', closeSidebar);
    sidebar.querySelectorAll('.sidebar-link').forEach(l => l.addEventListener('click', closeSidebar));

    // --- Collapse desktop ---
    function setCollapsed(collapsed) {
        document.body.classList.toggle('sidebar-collapsed', collapsed);
        const icon = collapseBtn.querySelector('svg polyline');
        icon.setAttribute('points', collapsed ? '9 18 15 12 9 6' : '15 18 9 12 15 6');
        collapseBtn.title = collapsed ? 'Agrandir le menu' : 'Réduire le menu';
        localStorage.setItem('admin_sidebar_collapsed', collapsed ? '1' : '0');
    }

    // Restaure l'état au chargement
    if (localStorage.getItem('admin_sidebar_collapsed') === '1') setCollapsed(true);

    collapseBtn.addEventListener('click', () => setCollapsed(!document.body.classList.contains('sidebar-collapsed')));
    </script>

</body>
</html>
