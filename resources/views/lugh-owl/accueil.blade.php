@extends('layouts.lugh-owl')

@section('title', 'Accueil — Lugh-Owl')
@section('meta_description', 'Lugh-Owl — Exploration philosophique et métaphysique : modèles de pensée, idées immuables et méditations sur la vie.')

@section('content')

<div class="lo-hero">
    <h1>Exploration Philosophique et Métaphysique</h1>
    <p>
        Un espace dédié à la réflexion profonde sur l'existence, la sagesse et les idées fondamentales qui traversent les civilisations.
        <br><em style="font-size:0.85em; opacity:.7">Textes et images créés en partie avec l'IA (ChatGPT & DALL·E).</em>
    </p>
</div>

{{-- Modèles philosophiques --}}
<div class="lo-section-header">
    <h2>Modèles philosophiques</h2>
    <a href="{{ route('fr.lugh-owl.modeles') }}">Voir tous les articles →</a>
</div>
<div class="lo-grid">
    @foreach($modeles as $article)
    <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" class="lo-card">
        @if($article->image)
        <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $article->titre }}" class="lo-card-img" loading="lazy">
        @endif
        <div class="lo-card-body">
            <div class="lo-card-cat">Modèle philosophique</div>
            <div class="lo-card-title">{{ $article->titre }}</div>
            <div class="lo-card-desc">{{ $article->description }}</div>
        </div>
    </a>
    @endforeach
</div>

{{-- La Vie est [...] --}}
<div class="lo-section-header">
    <h2>La Vie est [...]</h2>
    <a href="{{ route('fr.lugh-owl.vie') }}">Voir tous les articles →</a>
</div>
<div class="lo-grid">
    @foreach($vie as $article)
    <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" class="lo-card">
        @if($article->image)
        <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $article->titre }}" class="lo-card-img" loading="lazy">
        @endif
        <div class="lo-card-body">
            <div class="lo-card-cat">La Vie est [...]</div>
            <div class="lo-card-title">{{ $article->titre }}</div>
            <div class="lo-card-desc">{{ $article->description }}</div>
        </div>
    </a>
    @endforeach
</div>

{{-- Idées immuables --}}
<div class="lo-section-header">
    <h2>Idées immuables</h2>
    <a href="{{ route('fr.lugh-owl.idees') }}">Voir tous les articles →</a>
</div>
<div class="lo-grid">
    @foreach($idees as $article)
    <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" class="lo-card">
        @if($article->image)
        <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $article->titre }}" class="lo-card-img" loading="lazy">
        @endif
        <div class="lo-card-body">
            <div class="lo-card-cat">Idée immuable</div>
            <div class="lo-card-title">{{ $article->titre }}</div>
            <div class="lo-card-desc">{{ $article->description }}</div>
        </div>
    </a>
    @endforeach
</div>

@endsection
