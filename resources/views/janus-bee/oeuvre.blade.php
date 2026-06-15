@extends('layouts.janus-bee')

@section('title', $oeuvre->titre . ' - Janus-Bee')

@section('meta_description', $metaDescription)

@section('meta_image', url('/assets/Janus-Bee/' . $oeuvre->image))

@section('content')
<div class="oeuvre-detail-container">
    <a href="{{ route('fr.janus-bee.catalogue', ['types[]' => $oeuvre->types->first()?->nom]) }}" class="bouton-accueil">
        <img src="/assets/fleche_gauche.png" alt="retour" class="accueil-icones">
        Voir d'autres œuvres du type {{ $oeuvre->types->first()?->nom }}
    </a>
    @if($oeuvreAleatoire)
    <a href="{{ route('fr.janus-bee.oeuvre', $oeuvreAleatoire) }}" class="bouton-accueil">
        <img src="/assets/random.png" alt="image aléatoire" class="accueil-icones">
        Voir une autre œuvre
    </a>
    @endif

    <div class="oeuvre-main-content">
        <div class="oeuvre-detail-image">
            <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt="{{ $oeuvre->titre }}">
        </div>

        <div class="oeuvre-detail-info">
            <h1>{{ $oeuvre->titre }}</h1>

            @if(!empty($oeuvre->titres_alternatifs))
            <div class="titres-alternatifs">
                <strong>Titres alternatifs :</strong>
                <span>{{ implode(', ', $oeuvre->titres_alternatifs) }}</span>
            </div>
            @endif

            <div class="info-item-vertical">
                <strong>Types :</strong>
                <span>{{ $oeuvre->types->pluck('nom')->implode(', ') }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>Genres :</strong>
                <span>{{ $oeuvre->genres->pluck('nom')->implode(', ') }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>Sortie :</strong>
                <span>{{ $oeuvre->sortie }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>Statut :</strong>
                <span>{{ $oeuvre->status }}</span>
            </div>

            <div class="info-item-vertical">
                <strong>Durée :</strong>
                <span>{{ $oeuvre->duree }}</span>
            </div>
        </div>
    </div>

    <div class="synopsis-full-width">
        <strong>Synopsis :</strong>
        <p>{{ $oeuvre->synopsis }}</p>
    </div>

    @if($oeuvre->types->contains('nom', 'Court métrage') && !empty($oeuvre->video))
        @php
            preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $oeuvre->video, $matches);
            $videoId = $matches[1] ?? '';
        @endphp
        @if($videoId)
        <div class="oeuvre-video-section">
            <h2>Vidéo</h2>
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
