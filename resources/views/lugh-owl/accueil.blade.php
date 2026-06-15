@extends('layouts.lugh-owl')

@section('title', 'Accueil — Lugh-Owl')
@section('meta_description', 'Lugh-Owl — Exploration philosophique et métaphysique : modèles de pensée, idées immuables et méditations sur la vie.')

@section('content')

<div class="lo-hero">
    <h1>Exploration Philosophique et Métaphysique</h1>
    <p>Un espace dédié à la réflexion profonde sur l'existence, la sagesse et les idées fondamentales qui traversent les civilisations.</p>
</div>

@php
$sections = [
    ['titre' => 'Modèles philosophiques', 'route' => 'fr.lugh-owl.modeles', 'cat' => 'Modèle philosophique', 'articles' => $modeles],
    ['titre' => 'La Vie est [...]',        'route' => 'fr.lugh-owl.vie',     'cat' => 'La Vie est [...]',       'articles' => $vie],
    ['titre' => 'Idées immuables',         'route' => 'fr.lugh-owl.idees',   'cat' => 'Idée immuable',          'articles' => $idees],
];
@endphp

@foreach($sections as $section)
@if($section['articles']->isNotEmpty())
<div class="lo-section-header">
    <h2>{{ $section['titre'] }}</h2>
    <a href="{{ route($section['route']) }}">Voir tous les articles →</a>
</div>
<div class="lo-grid">
    @foreach($section['articles'] as $article)
    <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" class="lo-card">
        @if($article->image)
        <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $article->titre }}" class="lo-card-img" loading="lazy">
        @endif
        <div class="lo-card-body">
            <div class="lo-card-cat">{{ $section['cat'] }}</div>
            <div class="lo-card-title">{{ $article->titre }}</div>
            <div class="lo-card-desc">{{ $article->description }}</div>
        </div>
    </a>
    @endforeach
</div>
@endif
@endforeach

@if($modeles->isEmpty() && $idees->isEmpty() && $vie->isEmpty())
<div style="text-align:center; padding:80px 24px; color:#8890b0;">
    <p style="font-size:1.1em;">Aucun article mis en vedette pour l'instant.</p>
    <p style="font-size:0.9em; opacity:.6;">Utilisez l'admin pour sélectionner des articles à afficher ici.</p>
</div>
@endif

@endsection
