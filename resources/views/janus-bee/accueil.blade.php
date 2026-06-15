@extends('layouts.janus-bee')

@section('title', 'Accueil - Janus-Bee')

@section('content')
<h1>Accueil</h1>

@php
    $typesOrdre = ["Série d'animation", "Film d'animation", "Film live", "Court métrage", "Livre", "Jeu vidéo"];
    $typesOrdonnes = collect($typesOrdre)
        ->map(fn($nom) => $types->firstWhere('nom', $nom))
        ->filter();
@endphp

@foreach($typesOrdonnes as $type)
    @if($type->oeuvres->count() > 0)
    <h2>{{ $type->nom }}</h2>
    <div class="slider-wrapper">
        <button class="slider-btn slider-prev" onclick="slideCarousel(this, -1)">❮</button>
        <div class="slider-container">
            <div class="slider-track">
                @foreach($type->oeuvres->take(10) as $oeuvre)
                <a href="{{ route('fr.janus-bee.oeuvre', $oeuvre) }}" style="text-decoration: none; color: inherit;">
                    <div class="slider-item">
                        <div class="oeuvre-card">
                            <div class="oeuvre-image">
                                <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt="{{ $oeuvre->titre }}" loading="lazy">
                            </div>
                            <div class="oeuvre-info">
                                <h3>{{ mb_strtoupper(mb_strlen($oeuvre->titre) > 23 ? mb_substr($oeuvre->titre, 0, 20) . '...' : $oeuvre->titre) }}</h3>
                                @if(!empty($oeuvre->titres_alternatifs[0]))
                                    <p class="titre-secondaire">{{ mb_strlen($oeuvre->titres_alternatifs[0]) > 30 ? mb_substr($oeuvre->titres_alternatifs[0], 0, 27) . '...' : $oeuvre->titres_alternatifs[0] }}</p>
                                @endif
                                <div class="oeuvre-details">
                                    <div class="detail-section">
                                        <div class="detail-titre">GENRES</div>
                                        <div class="detail-contenu">
                                            @php $genresText = $oeuvre->genres->pluck('nom')->implode(', '); @endphp
                                            {{ mb_strlen($genresText) > 60 ? mb_substr($genresText, 0, 57) . '...' : $genresText }}
                                        </div>
                                    </div>
                                    <div class="detail-section">
                                        <div class="detail-titre">TYPES</div>
                                        <div class="detail-contenu">
                                            @php $typesText = $oeuvre->types->pluck('nom')->implode(', '); @endphp
                                            {{ mb_strlen($typesText) > 40 ? mb_substr($typesText, 0, 37) . '...' : $typesText }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <button class="slider-btn slider-next" onclick="slideCarousel(this, 1)">❯</button>
    </div>
    @endif
@endforeach

<div>
    <a href="{{ route('fr.janus-bee.catalogue') }}" class="bouton-accueil">
        <img src="/assets/catalogue.png" alt="image catalogue" class="accueil-icones">
        Accéder à l'ensemble des œuvres
    </a>
    @if($oeuvreAleatoire)
    <a href="{{ route('fr.janus-bee.oeuvre', $oeuvreAleatoire) }}" class="bouton-accueil">
        <img src="/assets/random.png" alt="image aléatoire" class="accueil-icones">
        Accéder à une œuvre au hasard
    </a>
    @endif
</div>

<script>
function slideCarousel(button, direction) {
    const wrapper = button.closest('.slider-wrapper');
    const track = wrapper.querySelector('.slider-track');
    const itemWidth = wrapper.querySelector('.slider-item').offsetWidth;
    const containerWidth = wrapper.querySelector('.slider-container').offsetWidth;
    const visibleItems = Math.floor(containerWidth / itemWidth);

    track.scrollBy({
        left: direction * (itemWidth * visibleItems + 15 * visibleItems),
        behavior: 'smooth'
    });
}
</script>
@endsection
