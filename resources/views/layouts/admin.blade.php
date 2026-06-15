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
            <span class="topbar-user">{{ auth()->user()->name }}</span>
            <a href="{{ route('fr.presentation') }}" class="topbar-site" target="_blank">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                Voir le site
            </a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit" class="topbar-logout">Déconnexion</button>
            </form>
        </div>
    </header>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="admin-layout">

        <aside class="admin-sidebar" id="adminSidebar">
            @php
            $portfolioRoutes = [
                'presentation' => 'admin.portfolio.presentation',
                'profil'       => 'admin.portfolio.profil',
                'objectifs'    => 'admin.portfolio.objectifs',
                'formations'   => 'admin.portfolio.formations',
                'experiences'  => 'admin.portfolio.experiences',
                'competences'  => 'admin.portfolio.competences',
                'sites'        => 'admin.portfolio.sites',
            ];
            @endphp

            <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="sidebar-dot" style="background:#888;"></span>
                Tableau de bord
            </a>

            <div class="sidebar-section-title">Portfolio</div>
            @foreach($portfolioSections as $key => $label)
            @php $rn = $portfolioRoutes[$key] ?? 'admin.dashboard'; @endphp
            <a href="{{ route($rn) }}" class="sidebar-link {{ request()->routeIs($rn.'*') ? 'active' : '' }}">
                <span class="sidebar-dot" style="background:#00ff88;"></span>
                {{ $label }}
            </a>
            @endforeach

            <div class="sidebar-section-title">Sites web</div>
            @foreach($sites as $key => $info)
            <a href="{{ route('admin.site', $key) }}"
               class="sidebar-link {{ request()->route('site') === $key ? 'active' : '' }}">
                <span class="sidebar-dot" style="background:{{ $info['color'] }};"></span>
                {{ $info['label'] }}
            </a>
            @endforeach
        </aside>

        <main class="admin-main">
            @yield('content')
        </main>

    </div>

    <script>
    const toggle  = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('adminSidebar');
    const overlay = document.getElementById('sidebarOverlay');

    function openSidebar()  { sidebar.classList.add('open'); overlay.classList.add('open'); toggle.classList.add('open'); }
    function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('open'); toggle.classList.remove('open'); }

    toggle.addEventListener('click', () => sidebar.classList.contains('open') ? closeSidebar() : openSidebar());
    overlay.addEventListener('click', closeSidebar);

    // Fermer sur clic lien (mobile)
    sidebar.querySelectorAll('.sidebar-link').forEach(l => l.addEventListener('click', closeSidebar));
    </script>

</body>
</html>
