@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Tableau de bord</div>
<p class="admin-page-sub">$ whoami — Bienvenue, {{ auth()->user()->name }}</p>

<div class="admin-stat-grid">
    <div class="admin-stat-card">
        <div class="stat-value">{{ $stats['pages_portfolio'] }}</div>
        <div class="stat-label">Pages portfolio</div>
    </div>
    <div class="admin-stat-card">
        <div class="stat-value">{{ $stats['projets_total'] }}</div>
        <div class="stat-label">Projets & Sites</div>
    </div>
    <div class="admin-stat-card">
        <div class="stat-value">{{ $stats['projets_enligne'] }}</div>
        <div class="stat-label">En ligne</div>
    </div>
    <div class="admin-stat-card">
        <div class="stat-value">{{ $stats['projets_constr'] }}</div>
        <div class="stat-label">En construction</div>
    </div>
    <div class="admin-stat-card">
        <div class="stat-value">{{ $stats['formations_fr'] }}</div>
        <div class="stat-label">Formations (FR)</div>
    </div>
    <div class="admin-stat-card">
        <div class="stat-value">{{ $stats['experiences_fr'] }}</div>
        <div class="stat-label">Expériences (FR)</div>
    </div>
</div>

{{-- Portfolio sections --}}
<div style="font-size: 0.72em; text-transform: uppercase; letter-spacing: 0.1em; color: #555; margin-bottom: 14px;">
    // Pages portfolio
</div>
<div class="admin-cards-grid" style="margin-bottom: 36px;">
    @foreach($portfolioSections as $key => $label)
    <a href="{{ route('admin.portfolio.' . $key) }}" class="admin-section-card">
        <span class="asc-dot" style="background: #00ff88;"></span>
        <span class="asc-label">{{ $label }}</span>
        <span class="asc-arrow">→</span>
    </a>
    @endforeach
</div>

{{-- Sites web --}}
<div style="font-size: 0.72em; text-transform: uppercase; letter-spacing: 0.1em; color: #555; margin-bottom: 14px;">
    // Sites web
</div>
<div class="admin-cards-grid">
    @foreach($sites as $key => $info)
    <a href="{{ route('admin.site', $key) }}" class="admin-section-card">
        <span class="asc-dot" style="background: {{ $info['color'] }};"></span>
        <span class="asc-label">{{ $info['label'] }}</span>
        <span class="asc-arrow">→</span>
    </a>
    @endforeach
</div>

@endsection
