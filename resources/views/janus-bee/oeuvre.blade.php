@extends('layouts.janus-bee')

@php
$titre    = ($locale === 'en' && $oeuvre->titre_en)    ? $oeuvre->titre_en    : $oeuvre->titre;
$synopsis = ($locale === 'en' && $oeuvre->synopsis_en) ? $oeuvre->synopsis_en : $oeuvre->synopsis;
$displaySortie = ($locale === 'en' && $oeuvre->sortie_en) ? $oeuvre->sortie_en : $oeuvre->sortie;
$displayStatus = ($locale === 'en' && $oeuvre->status_en) ? $oeuvre->status_en : $oeuvre->status;
$displayDuree  = ($locale === 'en' && $oeuvre->duree_en)  ? $oeuvre->duree_en  : $oeuvre->duree;
$catRoute = $locale === 'en' ? 'en.janus-bee.catalogue' : 'fr.janus-bee.catalogue';
$ouvRoute = $locale === 'en' ? 'en.janus-bee.oeuvre'   : 'fr.janus-bee.oeuvre';
@endphp

@section('title', $titre . ' - Janus-Bee')
@section('meta_description', $metaDescription)
@section('meta_image', url('/assets/Janus-Bee/' . $oeuvre->image))

@section('content')
<div class="oeuvre-detail-container">
    @php $firstType = $oeuvre->types->first(); @endphp
    <a href="{{ route($catRoute, ['types[]' => $firstType?->nom]) }}" class="bouton-accueil">
        <img src="/assets/fleche_gauche.png" alt="{{ $locale === 'en' ? 'back' : 'retour' }}" class="accueil-icones">
        @if($locale === 'en')
            See other {{ ($firstType?->nom_en ?: $firstType?->nom) }} works
        @else
            Voir d'autres œuvres du type {{ $firstType?->nom }}
        @endif
    </a>
    @if($oeuvreAleatoire)
    <a href="{{ route($ouvRoute, $oeuvreAleatoire) }}" class="bouton-accueil">
        <img src="/assets/random.png" alt="{{ $locale === 'en' ? 'random' : 'aléatoire' }}" class="accueil-icones">
        {{ $locale === 'en' ? 'See another work' : 'Voir une autre œuvre' }}
    </a>
    @endif

    <div class="oeuvre-main-content">
        <div class="oeuvre-detail-image">
            <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt="{{ $titre }}">
        </div>

        <div class="oeuvre-detail-info">
            <h1>{{ $titre }}</h1>

            @if(!empty($oeuvre->titres_alternatifs))
            <div class="titres-alternatifs">
                <strong>{{ $locale === 'en' ? 'Alternative titles:' : 'Titres alternatifs :' }}</strong>
                <span>{{ implode(', ', $oeuvre->titres_alternatifs) }}</span>
            </div>
            @endif

            <div class="info-item-vertical">
                <strong>{{ $locale === 'en' ? 'Types:' : 'Types :' }}</strong>
                <span>{{ $oeuvre->types->map(fn($t) => ($locale === 'en' && $t->nom_en) ? $t->nom_en : $t->nom)->implode(', ') }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>{{ $locale === 'en' ? 'Genres:' : 'Genres :' }}</strong>
                <span>{{ $oeuvre->genres->map(fn($g) => ($locale === 'en' && $g->nom_en) ? $g->nom_en : $g->nom)->implode(', ') }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>{{ $locale === 'en' ? 'Release:' : 'Sortie :' }}</strong>
                <span>{{ $displaySortie }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>{{ $locale === 'en' ? 'Status:' : 'Statut :' }}</strong>
                <span>{{ $displayStatus }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>{{ $locale === 'en' ? 'Duration:' : 'Durée :' }}</strong>
                <span>{{ $displayDuree }}</span>
            </div>
        </div>
    </div>

    @if($synopsis)
    <div class="synopsis-full-width">
        <strong>{{ $locale === 'en' ? 'Synopsis:' : 'Synopsis :' }}</strong>
        <p>{{ $synopsis }}</p>
    </div>
    @endif

    @if($oeuvre->types->contains('nom', 'Court métrage') && !empty($oeuvre->video))
        @php
            preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $oeuvre->video, $matches);
            $videoId = $matches[1] ?? '';
        @endphp
        @if($videoId)
        <div class="oeuvre-video-section">
            <h2>{{ $locale === 'en' ? 'Video' : 'Vidéo' }}</h2>
            <iframe width="100%" height="600"
                src="https://www.youtube.com/embed/{{ $videoId }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                style="border-radius: 8px;"></iframe>
        </div>
        @endif
    @endif
</div>
@endsection
