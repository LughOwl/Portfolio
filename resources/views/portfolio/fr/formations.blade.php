@extends('layouts.portfolio')

@section('title', 'Formations — Nicolas BISAGA')
@section('meta_description', 'Parcours académique de Nicolas BISAGA : licence informatique, TryHackMe, certifications cybersécurité visées.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Formations</h1>
        <p class="page-subtitle">$ cat education.log — Parcours académique du plus récent au plus ancien</p>
    </div>

    <div class="timeline" style="margin-bottom: 56px;">
        @foreach($formations as $f)
            <x-timeline-item
                :periode="$f['periode']"
                :titre="$f['titre']"
                :org="$f['org']"
                :desc="$f['desc']"
                :dot="$f['dot']"
                :tags="$f['tags']"
            />
        @endforeach
    </div>

    <div class="skills-section-title">TryHackMe</div>
    <div class="cyber-card" style="margin-bottom: 40px; max-width: 700px;">
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 14px;">
            <div style="font-family: 'JetBrains Mono', monospace; font-size: 1.1em; color: var(--accent-green);">
                🔐 TryHackMe
            </div>
            <span class="badge badge-green">Actif</span>
        </div>
        <p style="color: var(--text-secondary); font-size: 0.9em; line-height: 1.7; margin-bottom: 16px;">
            Plateforme d'apprentissage pratique en cybersécurité : labs guidés, rooms SIEM,
            analyse Wireshark, CTF, cryptographie, exploitation web, etc.
        </p>
        <a href="https://tryhackme.com/p/NewGateFR" target="_blank" rel="noopener"
           class="btn btn-outline" style="font-size: 0.85em;">
            Voir le profil TryHackMe →
        </a>
    </div>

    <div class="skills-section-title">Certifications visées</div>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 16px; padding-bottom: 60px;">
        @foreach($certifications as $cert)
        <div class="cyber-card" style="padding: 20px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                <span style="font-family: 'JetBrains Mono', monospace; font-weight: 700; color: var(--text-primary);">
                    {{ $cert['nom'] }}
                </span>
                <span class="badge {{ $cert['couleur'] }}" style="font-size: 0.7em;">Objectif</span>
            </div>
            <p style="color: var(--text-secondary); font-size: 0.84em;">{{ $cert['desc'] }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
