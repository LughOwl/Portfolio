@extends('layouts.portfolio')

@section('title', 'Profil — Nicolas BISAGA')
@section('meta_description', 'Profil de Nicolas BISAGA — étudiant en informatique, futur SOC Analyst, passionné de cybersécurité.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Profil</h1>
        <p class="page-subtitle">$ whoami — Informations personnelles et objectifs</p>
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
                <a href="#" class="btn btn-primary" style="justify-content: center; font-size: 0.82em;">
                    Télécharger CV
                </a>
                <a href="{{ route('fr.contact') }}" class="btn btn-outline" style="justify-content: center; font-size: 0.82em;">
                    Me contacter
                </a>
                <a href="https://github.com/lughowl" target="_blank" rel="noopener" class="btn btn-outline" style="justify-content: center; font-size: 0.82em;">
                    GitHub
                </a>
                <a href="https://www.linkedin.com/in/nicolasbisaga" target="_blank" rel="noopener" class="btn btn-outline" style="justify-content: center; font-size: 0.82em;">
                    LinkedIn
                </a>
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
                                <a href="{{ $row['lien']['href'] }}" target="_blank" rel="noopener">
                                    {{ $row['lien']['label'] }}
                                </a>
                            @else
                                {{ $row['val'] }}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="objectif-block">
                <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.72em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 10px;">
                    // Objectif professionnel
                </div>
                {{ $profil['objectif'] }}
            </div>

            <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-top: 24px;">
                <a href="{{ route('fr.recherches') }}" class="btn btn-primary" style="font-size: 0.85em;">
                    Opportunités recherchées
                </a>
                <a href="{{ route('fr.competences') }}" class="btn btn-outline" style="font-size: 0.85em;">
                    Voir mes compétences
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
