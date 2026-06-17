@extends('layouts.lugh-owl')

@section('title', $locale === 'en' ? 'Home — Lugh-Owl' : 'Accueil — Lugh-Owl')
@section('meta_description', $locale === 'en'
    ? 'Lugh-Owl — Philosophical and metaphysical exploration: thought models, timeless ideas and meditations on life.'
    : 'Lugh-Owl — Exploration philosophique et métaphysique : modèles de pensée, idées immuables et méditations sur la vie.')

@section('content')

@php
$isEn       = $locale === 'en';
$routePfx   = $isEn ? 'en' : 'fr';
$sections = $isEn
    ? [
        ['titre' => 'Philosophical Models', 'catKey' => 'modeles', 'cat' => 'Philosophical Model', 'articles' => $modeles],
        ['titre' => 'Life is [...]',         'catKey' => 'vie',     'cat' => 'Life is [...]',        'articles' => $vie],
        ['titre' => 'Timeless Ideas',        'catKey' => 'idees',   'cat' => 'Timeless Idea',        'articles' => $idees],
      ]
    : [
        ['titre' => 'Modèles philosophiques', 'catKey' => 'modeles', 'cat' => 'Modèle philosophique', 'articles' => $modeles],
        ['titre' => 'La Vie est [...]',        'catKey' => 'vie',     'cat' => 'La Vie est [...]',      'articles' => $vie],
        ['titre' => 'Idées immuables',         'catKey' => 'idees',   'cat' => 'Idée immuable',         'articles' => $idees],
      ];
@endphp

<div class="lo-hero">
    <div class="lo-hero-inner">
        <h1>Lugh-<span>Owl</span></h1>
        <p>{{ $isEn ? 'Philosophical and metaphysical exploration : thought models, meditations on life and timeless ideas.' : 'Exploration philosophique et métaphysique : modèles de pensée, méditations sur la vie et idées immuables.' }}</p>
        <div class="lo-hero-btns">
            <a href="{{ route($routePfx . '.lugh-owl.catalogue') }}" class="lo-btn-primary">{{ $isEn ? 'Browse articles' : 'Parcourir les articles' }}</a>
            @if($articleAleatoire)
            <a href="{{ route($routePfx . '.lugh-owl.article', $articleAleatoire->slug) }}" class="lo-btn-secondary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/><line x1="4" y1="4" x2="9" y2="9"/></svg>
                {{ $isEn ? 'Random article' : 'Article aléatoire' }}
            </a>
            @endif
        </div>
    </div>
</div>

@foreach($sections as $section)
@if($section['articles']->isNotEmpty())
<div class="lo-section-header">
    <h2>{{ $section['titre'] }}</h2>
    <a href="{{ route($routePfx . '.lugh-owl.catalogue', ['cat' => $section['catKey']]) }}">{{ $isEn ? 'See all articles →' : 'Voir tous les articles →' }}</a>
</div>
<div class="lo-grid">
    @foreach($section['articles'] as $article)
    <a href="{{ route($routePfx . '.lugh-owl.article', $article->slug) }}" class="lo-card">
        @if($article->image)
        <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ ($isEn && $article->titre_en) ? $article->titre_en : $article->titre }}" class="lo-card-img" loading="lazy">
        @endif
        <div class="lo-card-body">
            <div class="lo-card-cat">{{ $section['cat'] }}</div>
            <div class="lo-card-title">{{ ($isEn && $article->titre_en) ? $article->titre_en : $article->titre }}</div>
            <div class="lo-card-desc">{{ ($isEn && $article->description_en) ? $article->description_en : $article->description }}</div>
        </div>
    </a>
    @endforeach
</div>
@endif
@endforeach

@if($modeles->isEmpty() && $idees->isEmpty() && $vie->isEmpty())
<div style="text-align:center; padding:80px 24px; color:#8890b0;">
    <p style="font-size:1.1em;">{{ $isEn ? 'No featured articles yet.' : 'Aucun article mis en vedette pour l\'instant.' }}</p>
    <p style="font-size:0.9em; opacity:.6;">{{ $isEn ? 'Use the admin panel to select articles to display here.' : 'Utilisez l\'admin pour sélectionner des articles à afficher ici.' }}</p>
</div>
@endif

@endsection
