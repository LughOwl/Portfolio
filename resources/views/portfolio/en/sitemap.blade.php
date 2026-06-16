@extends('layouts.portfolio')

@section('title', 'Sitemap — Nicolas BISAGA')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Sitemap</h1>
        <p class="page-subtitle">$ tree . — Site structure</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 800px; padding-bottom: 60px;">
        <div class="cyber-card">
            <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 16px;">
                // Portfolio (EN)
            </div>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; font-size: 0.88em;">
                <li><a href="{{ route('en.presentation') }}" style="color: var(--accent-green);">→ Home</a></li>
                <li><a href="{{ route('en.profil') }}" style="color: var(--accent-green);">→ Profile</a></li>
                <li><a href="{{ route('en.parcours') }}" style="color: var(--accent-green);">→ Career</a></li>
                <li><a href="{{ route('en.websites') }}" style="color: var(--accent-green);">→ Projects & Websites</a></li>
                <li><a href="{{ route('en.contact') }}" style="color: var(--accent-green);">→ Contact</a></li>
                <li><a href="{{ route('en.termsofuse') }}" style="color: var(--text-muted);">→ Terms of use</a></li>
            </ul>
        </div>

        <div class="cyber-card">
            <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78em; color: var(--accent-cyan); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 16px;">
                // Leisure websites
            </div>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; font-size: 0.88em;">
                <li><a href="{{ route('fr.janus-bee.accueil') }}" style="color: #f0a500;">→ Janus-Bee <span class="badge badge-green" style="font-size:.7em; margin-left:4px; vertical-align:middle;">Online</span></a></li>
                <li><a href="{{ route('fr.lugh-owl.accueil') }}" style="color: #0078ff;">→ Lugh-Owl <span class="badge badge-green" style="font-size:.7em; margin-left:4px; vertical-align:middle;">Online</span></a></li>
                <li style="color: var(--text-muted); font-size:.88em;">○ Inari-Fox — Under construction</li>
                <li style="color: var(--text-muted); font-size:.88em;">○ Bragi-Bird — Under construction</li>
                <li style="color: var(--text-muted); font-size:.88em;">○ Gaïa-Deer — Under construction</li>
                <li style="color: var(--text-muted); font-size:.88em;">○ Zeus-Bug — Under construction</li>
                <li style="color: var(--text-muted); font-size:.88em;">○ Ouranos-Taurus — Under construction</li>
            </ul>
        </div>
    </div>
</div>
@endsection
