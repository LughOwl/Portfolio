@extends('layouts.bragi-bird')
@section('title', $locale === 'en' ? 'Bragi Bird - Piano pieces' : 'Bragi Bird, morceaux de piano')
@section('nav_accueil', 'active')

@section('content')

<div class="bb-page-hero">
    <div class="bb-page-cat">{{ $locale === 'en' ? '♪ Piano' : '♪ Piano' }}</div>
    <h1 class="bb-page-title">Bragi-<em>Bird</em></h1>
    <p class="bb-page-intro">
        {{ $locale === 'en'
            ? 'A personal collection of piano pieces I appreciate, with recordings from YouTube and other sources.'
            : 'Une collection personnelle de morceaux de piano que j\'apprécie, avec des enregistrements issus de YouTube et d\'autres sources.' }}
    </p>
</div>

<div class="bb-content">

    @if($morceaux->isEmpty())
    <div class="bb-empty">
        {{ $locale === 'en' ? '// No pieces published yet.' : '// Aucun morceau publié pour le moment.' }}
    </div>
    @else
    <div class="bb-morceaux-grid">
        @foreach($morceaux as $m)
        @php
            $titre = ($locale === 'en' && $m->titre_en) ? $m->titre_en : $m->titre;
            $compositeur = ($locale === 'en' && $m->compositeur_en) ? $m->compositeur_en : $m->compositeur;
            $url = route(($locale === 'en' ? 'en' : 'fr').'.bragi-bird.morceau', $m->id);
            $ytId = $m->youtube_url ? preg_replace('/.*(?:v=|youtu\.be\/)([^&\s]+).*/', '$1', $m->youtube_url) : null;
        @endphp
        <a href="{{ $url }}" class="bb-card">
            @if($ytId)
            <div class="bb-card-thumb">
                <img src="https://img.youtube.com/vi/{{ $ytId }}/mqdefault.jpg" alt="{{ $titre }}" loading="lazy">
                <div class="bb-card-play">▶</div>
            </div>
            @else
            <div class="bb-card-thumb bb-card-thumb-empty">
                <span class="bb-card-note">♪</span>
            </div>
            @endif
            <div class="bb-card-info">
                <div class="bb-card-titre">{{ $titre }}</div>
                <div class="bb-card-compositeur">{{ $compositeur }}</div>
                @if($m->mp3_path)
                <div class="bb-card-has-audio">{{ $locale === 'en' ? '🎵 Audio available' : '🎵 Audio disponible' }}</div>
                @endif
            </div>
        </a>
        @endforeach
    </div>
    @endif

</div>
@endsection
