@extends('layouts.bragi-bird')
@php
    $titre = ($locale === 'en' && $morceau->titre_en) ? $morceau->titre_en : $morceau->titre;
    $compositeur = ($locale === 'en' && $morceau->compositeur_en) ? $morceau->compositeur_en : $morceau->compositeur;
    $description = ($locale === 'en' && $morceau->description_en) ? $morceau->description_en : $morceau->description;
    $ytId = $morceau->youtube_url ? preg_replace('/.*(?:v=|youtu\.be\/)([^&\s]+).*/', '$1', $morceau->youtube_url) : null;
    $pre = $locale === 'en' ? 'en' : 'fr';
@endphp
@section('title', $titre.' - '.$compositeur.' - Bragi Bird')
@section('meta_description', $description ? Str::limit(strip_tags($description), 160) : $titre.' par '.$compositeur)

@section('content')

<div class="bb-morceau-wrap">

    <div class="bb-morceau-header">
        <div class="bb-morceau-meta">
            <span class="bb-morceau-cat">♪ {{ $locale === 'en' ? 'Piano' : 'Piano' }}</span>
        </div>
        <h1 class="bb-morceau-titre">{{ $titre }}</h1>
        <div class="bb-morceau-compositeur">{{ $compositeur }}</div>
    </div>

    {{-- Vidéo YouTube --}}
    @if($ytId)
    <div class="bb-video-wrap">
        <div class="bb-video-container">
            <iframe
                src="https://www.youtube.com/embed/{{ $ytId }}?rel=0&modestbranding=1"
                title="{{ $titre }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy">
            </iframe>
        </div>
    </div>
    @endif

    {{-- Lecteur audio MP3 --}}
    @if($morceau->mp3_path)
    <div class="bb-audio-wrap">
        <div class="bb-audio-label">{{ $locale === 'en' ? '🎵 Audio recording' : '🎵 Enregistrement audio' }}</div>
        <div class="bb-player" id="bb-player" data-src="{{ asset('storage/'.$morceau->mp3_path) }}">
            <button class="bb-play-btn" id="bb-play-btn" aria-label="{{ $locale === 'en' ? 'Play' : 'Lecture' }}">
                <svg class="bb-icon-play" viewBox="0 0 24 24" fill="currentColor"><polygon points="5,3 19,12 5,21"/></svg>
                <svg class="bb-icon-pause" viewBox="0 0 24 24" fill="currentColor" style="display:none"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>
            </button>
            <div class="bb-progress-wrap">
                <div class="bb-progress-bar" id="bb-progress-bar">
                    <div class="bb-progress-fill" id="bb-progress-fill"></div>
                </div>
                <div class="bb-time-row">
                    <span class="bb-time-current" id="bb-time-current">0:00</span>
                    <span class="bb-time-total" id="bb-time-total">--:--</span>
                </div>
            </div>
        </div>
        <audio id="bb-audio" preload="metadata">
            <source src="{{ asset('storage/'.$morceau->mp3_path) }}" type="audio/mpeg">
        </audio>
    </div>
    @endif

    {{-- Description --}}
    @if($description)
    <div class="bb-morceau-desc">
        {!! nl2br(e($description)) !!}
    </div>
    @endif

    {{-- Navigation prev/next --}}
    <nav class="bb-morceau-nav">
        @if($prev)
        @php
            $prevTitre = ($locale === 'en' && $prev->titre_en) ? $prev->titre_en : $prev->titre;
            $prevComp  = ($locale === 'en' && $prev->compositeur_en) ? $prev->compositeur_en : $prev->compositeur;
        @endphp
        <a href="{{ route($pre.'.bragi-bird.morceau', $prev->id) }}" class="bb-nav-prev">
            <span class="bb-nav-arrow">←</span>
            <span class="bb-nav-info">
                <span class="bb-nav-label">{{ $locale === 'en' ? 'Previous' : 'Précédent' }}</span>
                <span class="bb-nav-title">{{ $prevTitre }}</span>
            </span>
        </a>
        @else
        <div></div>
        @endif

        <a href="{{ route($pre.'.bragi-bird.accueil') }}" class="bb-nav-all">
            {{ $locale === 'en' ? '≡ All pieces' : '≡ Tous les morceaux' }}
        </a>

        @if($next)
        @php
            $nextTitre = ($locale === 'en' && $next->titre_en) ? $next->titre_en : $next->titre;
            $nextComp  = ($locale === 'en' && $next->compositeur_en) ? $next->compositeur_en : $next->compositeur;
        @endphp
        <a href="{{ route($pre.'.bragi-bird.morceau', $next->id) }}" class="bb-nav-next">
            <span class="bb-nav-info">
                <span class="bb-nav-label">{{ $locale === 'en' ? 'Next' : 'Suivant' }}</span>
                <span class="bb-nav-title">{{ $nextTitre }}</span>
            </span>
            <span class="bb-nav-arrow">→</span>
        </a>
        @else
        <div></div>
        @endif
    </nav>

</div>
@endsection
