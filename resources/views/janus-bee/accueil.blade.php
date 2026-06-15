@extends('layouts.janus-bee')

@section('title', 'Accueil - Janus-Bee')

@section('content')

<div class="accueil-hero">
    <div class="accueil-hero-inner">
        <h1>Janus-<span>Bee</span></h1>
        <p>Catalogue personnel de films, séries d'animation, livres et jeux vidéo.</p>
        <div class="accueil-hero-btns">
            <a href="{{ route('fr.janus-bee.catalogue') }}" class="accueil-btn-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                Parcourir le catalogue
            </a>
            @if($oeuvreAleatoire)
            <a href="{{ route('fr.janus-bee.oeuvre', $oeuvreAleatoire) }}" class="accueil-btn-secondary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/><line x1="4" y1="4" x2="9" y2="9"/></svg>
                Œuvre aléatoire
            </a>
            @endif
        </div>
    </div>
</div>

@php
    $typesOrdre = ["Série d'animation", "Film d'animation", "Film live", "Court métrage", "Livre", "Jeu vidéo"];
    $typesOrdonnes = collect($typesOrdre)
        ->map(fn($nom) => $types->firstWhere('nom', $nom))
        ->filter();
@endphp

<div class="accueil-sections-wrap">
    @foreach($typesOrdonnes as $type)
        @if($type->oeuvres->count() > 0)
        <div class="accueil-section">
            <div class="accueil-section-header">
                <h2>{{ $type->nom }}</h2>
                <a href="{{ route('fr.janus-bee.catalogue', ['types[]' => $type->nom]) }}" class="accueil-voir-plus">Voir tout →</a>
            </div>
            <div class="carousel-wrap">
                <button class="carousel-btn carousel-prev" aria-label="Précédent">&#8249;</button>
                <div class="carousel-track-wrap">
                    <div class="carousel-track">
                        @foreach($type->oeuvres as $oeuvre)
                        <a href="{{ route('fr.janus-bee.oeuvre', $oeuvre) }}" class="carousel-card">
                            <div class="carousel-img">
                                <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt="{{ $oeuvre->titre }}" loading="lazy">
                            </div>
                            <div class="carousel-info">
                                <div class="carousel-titre">{{ $oeuvre->titre }}</div>
                                @if(!empty($oeuvre->titres_alternatifs[0]))
                                <div class="carousel-sous-titre">{{ $oeuvre->titres_alternatifs[0] }}</div>
                                @endif
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <button class="carousel-btn carousel-next" aria-label="Suivant">&#8250;</button>
            </div>
        </div>
        @endif
    @endforeach
</div>

<script>
document.querySelectorAll('.carousel-wrap').forEach(wrap => {
    const scroller = wrap.querySelector('.carousel-track-wrap');
    wrap.querySelector('.carousel-prev').addEventListener('click', () => {
        scroller.scrollBy({ left: -scroller.offsetWidth * 0.75, behavior: 'smooth' });
    });
    wrap.querySelector('.carousel-next').addEventListener('click', () => {
        scroller.scrollBy({ left: scroller.offsetWidth * 0.75, behavior: 'smooth' });
    });
});
</script>

@endsection
