@extends('layouts.portfolio')

@section('title', 'Profil — Nicolas BISAGA')
@section('meta_description', 'Profil de Nicolas BISAGA : étudiant en informatique, futur SOC Analyst, passionné de cybersécurité.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Profil</h1>
        <p class="page-subtitle">$ whoami — Informations personnelles, objectifs et compétences</p>
    </div>

    <div class="profil-layout">
        <aside class="profil-sidebar">
            <img src="/assets/photo.png" alt="Photo de Nicolas BISAGA">
            <div class="profil-name">Nicolas BISAGA</div>
            <div class="profil-role">Futur SOC Analyst<br>Architecte Cybersécurité</div>
            <div style="margin-bottom: 12px;">
                <span class="badge badge-green">Cybersécurité</span>
            </div>
            <div class="profil-btns">
                <a href="#" class="btn btn-primary" style="justify-content: center; font-size: 0.82em;">Télécharger CV</a>
                <a href="{{ route('fr.contact') }}" class="btn btn-outline" style="justify-content: center; font-size: 0.82em;">Me contacter</a>
                <a href="{{ $settings['github_url'] }}" class="btn btn-outline" style="justify-content: center; font-size: 0.82em;">GitHub</a>
                <a href="{{ $settings['linkedin_url'] }}" class="btn btn-outline" style="justify-content: center; font-size: 0.82em;">LinkedIn</a>
            </div>
        </aside>

        <div>
            <div class="cyber-card" style="margin-bottom: 24px;">
                <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 16px;">
                    // Informations
                </div>
                <table class="info-table">
                    @foreach($profil['infos'] as $row)
                    <tr>
                        <td>{{ strtoupper($row['cle']) }}</td>
                        <td>
                            @if(isset($row['lien']))
                                <a href="{{ $row['lien']['href'] }}">{{ $row['lien']['label'] }}</a>
                            @else
                                {{ $row['val'] }}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="objectif-block" style="margin-bottom: 32px;">
                <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.72em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 10px;">
                    // Objectif professionnel
                </div>
                {{ $profil['objectif'] }}
            </div>

            {{-- Objectifs / Recherches --}}
            <div style="margin-bottom: 12px;">
                <div class="hero-availability" style="display: inline-flex;">
                    Admis en Master Cybersécurité · UFR MIM Metz · Sept. 2026
                </div>
            </div>
            <div class="recherches-grid" style="margin-bottom: 32px;">
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

            {{-- Compétences --}}
            <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 24px;">
                // Compétences
            </div>
            @foreach($competences as $cat)
                @if($cat['type'] === 'two-col')
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; padding-bottom: 40px;">
                    @foreach($cat['cols'] as $col)
                    <div>
                        <div class="skills-section-title">{{ $col['titre'] }}</div>
                        @if($col['type'] === 'tags')
                        <div class="badge-list">
                            @foreach($col['tags'] as $tag)
                                <span class="badge badge-{{ $tag['couleur'] }}">{{ $tag['label'] }}</span>
                            @endforeach
                        </div>
                        @else
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            @foreach($col['items'] as $s)
                                <x-skill-bar :nom="$s['nom']" :niveau="$s['niveau']" :couleur="$s['couleur']" />
                            @endforeach
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>

                @elseif($cat['type'] === 'bars_and_tags')
                <div class="{{ ($cat['highlight'] ?? false) ? 'skills-cyber-block' : '' }}">
                    <div class="skills-section-title">{{ $cat['titre'] }}</div>
                    <div class="skill-grid" style="margin-bottom: 16px;">
                        @foreach($cat['items'] as $s)
                            <x-skill-bar :nom="$s['nom']" :niveau="$s['niveau']" :couleur="$s['couleur']" />
                        @endforeach
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 40px;">
                        @foreach($cat['tags'] as $tag)
                            <span class="badge badge-{{ $tag['couleur'] }}">{{ $tag['label'] }}</span>
                        @endforeach
                    </div>
                </div>

                @else
                <div>
                    <div class="skills-section-title">{{ $cat['titre'] }}</div>
                    <div class="skill-grid" style="margin-bottom: 40px;">
                        @foreach($cat['items'] as $s)
                            <x-skill-bar :nom="$s['nom']" :niveau="$s['niveau']" :couleur="$s['couleur']" />
                        @endforeach
                    </div>
                </div>
                @endif
            @endforeach

        </div>
    </div>
</div>
@endsection
