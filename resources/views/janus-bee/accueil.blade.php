@extends('layouts.janus-bee')

@section('title', $locale === 'en' ? 'Home - Janus-Bee' : 'Accueil - Janus-Bee')

@section('content')

<div class="accueil-hero">
    <div class="accueil-hero-inner">
        <h1>Janus-<span>Bee</span></h1>
        <p>{{ $locale === 'en' ? 'Personal catalogue of animated series, films, books and video games.' : "Catalogue personnel de films, séries d'animation, livres et jeux vidéo." }}</p>
        <div class="accueil-hero-btns">
            <a href="{{ route($locale === 'en' ? 'en.janus-bee.catalogue' : 'fr.janus-bee.catalogue') }}" class="accueil-btn-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                {{ $locale === 'en' ? 'Browse the catalogue' : 'Parcourir le catalogue' }}
            </a>
            @if($oeuvreAleatoire)
            <a href="{{ route($locale === 'en' ? 'en.janus-bee.oeuvre' : 'fr.janus-bee.oeuvre', $oeuvreAleatoire) }}" class="accueil-btn-secondary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/><line x1="4" y1="4" x2="9" y2="9"/></svg>
                {{ $locale === 'en' ? 'Random work' : 'Œuvre aléatoire' }}
            </a>
            @endif
        </div>
    </div>
</div>

@php
    $typesOrdre    = ["Série d'animation", "Film d'animation", "Film live", "Court métrage", "Livre", "Jeu vidéo"];
    $typesOrdonnes = collect($typesOrdre)
        ->map(fn($nom) => $types->firstWhere('nom', $nom))
        ->filter();
    $oeuvreRoute   = $locale === 'en' ? 'en.janus-bee.oeuvre'    : 'fr.janus-bee.oeuvre';
    $catRoute      = $locale === 'en' ? 'en.janus-bee.catalogue'  : 'fr.janus-bee.catalogue';
    $voirTout      = $locale === 'en' ? 'See all →' : 'Voir tout →';
@endphp

<div class="accueil-sections-wrap">
    @foreach($typesOrdonnes as $type)
        @if($type->oeuvres->count() > 0)
        <div class="accueil-section">
            <div class="accueil-section-header">
                <h2>{{ ($locale === 'en' && $type->nom_en) ? $type->nom_en : $type->nom }}</h2>
                <a href="{{ route($catRoute, ['types[]' => $type->nom]) }}" class="accueil-voir-plus">{{ $voirTout }}</a>
            </div>
            <div class="carousel-track-wrap">
                <div class="carousel-track">
                    @foreach($type->oeuvres as $oeuvre)
                    <a href="{{ route($oeuvreRoute, $oeuvre) }}" class="carousel-card">
                        <div class="carousel-img">
                            <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt="{{ $oeuvre->titre }}" loading="lazy">
                        </div>
                        <div class="carousel-info">
                            <div class="carousel-titre">{{ ($locale === 'en' && $oeuvre->titre_en) ? $oeuvre->titre_en : $oeuvre->titre }}</div>
                            @if(!empty($oeuvre->titres_alternatifs[0]))
                            <div class="carousel-sous-titre">{{ $oeuvre->titres_alternatifs[0] }}</div>
                            @endif
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    @endforeach
</div>

@endsection
