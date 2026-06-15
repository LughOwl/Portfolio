@extends('layouts.portfolio')

@section('title', 'Objectifs — Nicolas BISAGA')
@section('meta_description', 'Parcours et objectifs de Nicolas BISAGA : Master Cybersécurité admis à l\'UFR MIM Metz (sept. 2026), futur analyste SOC puis architecte cybersécurité.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Parcours & Objectifs</h1>
        <p class="page-subtitle">$ cat career.json — Étapes confirmées et objectifs professionnels</p>
    </div>

    <div style="margin-bottom: 32px;">
        <div class="hero-availability" style="display: inline-flex;">
            Admis en Master Cybersécurité · UFR MIM Metz · Sept. 2026
        </div>
    </div>

    <div class="recherches-grid">
        @foreach($recherches as $r)
        <div class="recherche-card prio-{{ $r['priorite'] }}">
            <div class="recherche-type">{{ $r['label_terme'] }}</div>
            <h2 class="recherche-title">{{ $r['titre'] }}</h2>
            <span class="badge badge-{{ $r['badge_color'] }}" style="margin-bottom: 16px;">{{ $r['type'] }}</span>

            @foreach($r['details'] as $d)
            <div class="recherche-detail">
                <span class="rd-key">{{ $d['cle'] }}</span>
                <span>{{ $d['val'] }}</span>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>

    <div class="cyber-card" style="max-width: 700px; margin-top: 16px;">
        <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78em; color: var(--accent-green); margin-bottom: 14px; text-transform: uppercase; letter-spacing: 0.1em;">
            // Spécialisation visée
        </div>
        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
            <span class="badge badge-green">Cybersécurité</span>
            <span class="badge badge-green">SOC Analyst</span>
            <span class="badge badge-green">TryHackMe</span>
            <span class="badge badge-green">SIEM</span>
            <span class="badge badge-blue">Réseaux TCP/IP</span>
            <span class="badge badge-blue">Wireshark</span>
            <span class="badge badge-blue">Linux</span>
            <span class="badge badge-gray">PHP / Laravel</span>
            <span class="badge badge-gray">Java</span>
            <span class="badge badge-gray">SQL</span>
        </div>
        <div style="margin-top: 20px;">
            <a href="{{ route('fr.contact') }}" class="btn btn-primary" style="font-size: 0.85em;">
                Me contacter
            </a>
        </div>
    </div>
</div>
@endsection
