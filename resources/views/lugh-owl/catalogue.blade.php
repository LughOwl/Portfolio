@extends('layouts.lugh-owl')

@section('title', ($locale === 'en' ? 'Catalogue — Lugh-Owl' : 'Catalogue — Lugh-Owl'))

@section('content')

@php
$isEn     = ($locale ?? 'fr') === 'en';
$routePfx = $isEn ? 'en' : 'fr';
@endphp

<div class="lo-cat-wrap">

    <div class="lo-cat-top">
        <h1 class="lo-cat-title">{{ $isEn ? 'All articles' : 'Tous les articles' }}</h1>

        <form method="GET" action="{{ route($routePfx . '.lugh-owl.catalogue') }}" class="lo-cat-search-form">
            @if($cat)<input type="hidden" name="cat" value="{{ $cat }}">@endif
            <div class="lo-cat-search-wrap">
                <input type="text" name="q" class="lo-cat-search-input"
                    placeholder="{{ $isEn ? 'Search by title or description…' : 'Rechercher par titre ou description…' }}"
                    value="{{ $q }}">
                <button type="submit" class="lo-cat-search-btn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </button>
            </div>
        </form>

        <div class="lo-cat-filters">
            <a href="{{ route($routePfx . '.lugh-owl.catalogue', $q ? ['q' => $q] : []) }}"
               class="lo-cat-chip {{ !$cat ? 'active' : '' }}">{{ $isEn ? 'All' : 'Tous' }}</a>
            @foreach($categories as $key => $label)
            <a href="{{ route($routePfx . '.lugh-owl.catalogue', array_filter(['cat' => $key, 'q' => $q])) }}"
               class="lo-cat-chip {{ $cat === $key ? 'active' : '' }}">{{ $label }}</a>
            @endforeach
        </div>
    </div>

    <div class="lo-cat-results-bar">
        <span>{{ $articles->total() }} article{{ $articles->total() > 1 ? 's' : '' }}</span>
        @if($q || $cat)
        <a href="{{ route($routePfx . '.lugh-owl.catalogue') }}" class="lo-cat-reset">{{ $isEn ? 'Clear all ✕' : 'Tout effacer ✕' }}</a>
        @endif
    </div>

    @if($articles->isNotEmpty())
    <div class="lo-grid lo-grid-full">
        @foreach($articles as $article)
        @php
        $titre = ($isEn && $article->titre_en) ? $article->titre_en : $article->titre;
        $desc  = ($isEn && $article->description_en) ? $article->description_en : $article->description;
        @endphp
        <a href="{{ route($routePfx . '.lugh-owl.article', $article->slug) }}" class="lo-card">
            @if($article->image)
            <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $titre }}" class="lo-card-img" loading="lazy">
            @endif
            <div class="lo-card-body">
                <div class="lo-card-cat">{{ $categories[$article->categorie] ?? $article->categorie }}</div>
                <div class="lo-card-title">{{ $titre }}</div>
                <div class="lo-card-desc">{{ $desc }}</div>
            </div>
        </a>
        @endforeach
    </div>
    @else
    <div class="lo-cat-empty">
        <p>{{ $isEn ? 'No articles match your search.' : 'Aucun article ne correspond à votre recherche.' }}</p>
        <a href="{{ route($routePfx . '.lugh-owl.catalogue') }}" class="lo-btn-primary">{{ $isEn ? 'See all articles' : 'Voir tous les articles' }}</a>
    </div>
    @endif

    @if($articles->hasPages())
    <div class="lo-pagination">
        @if($articles->onFirstPage())
        <span class="lo-page-btn lo-page-disabled">{{ $isEn ? '← Previous' : '← Précédent' }}</span>
        @else
        <a href="{{ $articles->previousPageUrl() }}" class="lo-page-btn">{{ $isEn ? '← Previous' : '← Précédent' }}</a>
        @endif

        @foreach($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
        @if($page == $articles->currentPage())
        <span class="lo-page-btn lo-page-active">{{ $page }}</span>
        @else
        <a href="{{ $url }}" class="lo-page-btn">{{ $page }}</a>
        @endif
        @endforeach

        @if($articles->hasMorePages())
        <a href="{{ $articles->nextPageUrl() }}" class="lo-page-btn">{{ $isEn ? 'Next →' : 'Suivant →' }}</a>
        @else
        <span class="lo-page-btn lo-page-disabled">{{ $isEn ? 'Next →' : 'Suivant →' }}</span>
        @endif
    </div>
    @endif

</div>

@endsection
