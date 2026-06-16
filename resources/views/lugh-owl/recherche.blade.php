@extends('layouts.lugh-owl')

@section('title', ($locale === 'en') ? 'Search — Lugh-Owl' : 'Recherche — Lugh-Owl')

@section('content')
@php
$isEn     = ($locale ?? 'fr') === 'en';
$routePfx = $isEn ? 'en' : 'fr';
@endphp
<div class="lo-search-wrap">
    <h1 style="font-size:1.6rem; margin-bottom:8px;">{{ $isEn ? 'Search' : 'Recherche' }}</h1>

    @if(mb_strlen($q) > 0 && mb_strlen($q) < 2)
        <p class="lo-search-info">{{ $isEn ? 'Enter at least 2 characters to search.' : 'Saisissez au moins 2 caractères pour lancer une recherche.' }}</p>

    @elseif(mb_strlen($q) >= 2)
        @if($resultats->isEmpty())
            <p class="lo-search-info">{{ $isEn ? 'No results for' : 'Aucun résultat pour' }} <strong>{{ $q }}</strong>.</p>
        @else
            <p class="lo-search-info">{{ $resultats->count() }} {{ $isEn ? 'result' : 'résultat' }}{{ $resultats->count() > 1 ? 's' : '' }} {{ $isEn ? 'for' : 'pour' }} <strong>{{ $q }}</strong></p>

            @foreach($resultats->groupBy('categorie') as $cat => $group)
            <div class="lo-result-group">
                <div class="lo-result-group-label">
                    @if($cat === 'modeles') {{ $isEn ? 'Philosophical Models' : 'Modèles philosophiques' }}
                    @elseif($cat === 'idees') {{ $isEn ? 'Timeless Ideas' : 'Idées immuables' }}
                    @else {{ $isEn ? 'Life is [...]' : 'La Vie est [...]' }}
                    @endif
                </div>
                @foreach($group as $article)
                @php
                $titre = ($isEn && $article->titre_en) ? $article->titre_en : $article->titre;
                $desc  = ($isEn && $article->description_en) ? $article->description_en : $article->description;
                @endphp
                <a href="{{ route($routePfx . '.lugh-owl.article', $article->slug) }}" class="lo-result-item">
                    <div class="lo-result-title">{{ $titre }}</div>
                    <div class="lo-result-desc">{{ $desc }}</div>
                </a>
                @endforeach
            </div>
            @endforeach
        @endif

    @else
        <p class="lo-search-info">{{ $isEn ? 'Use the search bar at the top of the page to find an article.' : 'Utilisez la barre de recherche en haut de page pour trouver un article.' }}</p>
    @endif
</div>
@endsection
