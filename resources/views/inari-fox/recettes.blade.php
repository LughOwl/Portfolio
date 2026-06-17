@extends('layouts.inari-fox')
@section('title', $locale === 'en' ? 'Recipes — Inari-Fox' : 'Recettes — Inari-Fox')
@section('nav_recettes', 'active')
@php
    $isEn = $locale === 'en';

    $categories = [
        'entree'         => $isEn ? 'Starter'      : 'Entrée',
        'plat_principal' => $isEn ? 'Main course'  : 'Plat principal',
        'dessert'        => $isEn ? 'Dessert'       : 'Dessert',
        'accompagnement' => $isEn ? 'Side dish'    : 'Accompagnement',
        'petit_dejeuner' => $isEn ? 'Breakfast'    : 'Petit-déjeuner',
        'encas_gouter'   => $isEn ? 'Snack'        : 'Encas / Goûter',
        'aperitif'       => $isEn ? 'Appetizer'    : 'Apéritif',
        'boisson'        => $isEn ? 'Beverage'     : 'Boisson',
    ];

    $difficultes = [
        'facile'    => $isEn ? 'Easy'   : 'Facile',
        'moyen'     => $isEn ? 'Medium' : 'Moyen',
        'difficile' => $isEn ? 'Hard'   : 'Difficile',
    ];

    $durees = [
        15  => $isEn ? '< 15 min'  : '< 15 min',
        30  => $isEn ? '< 30 min'  : '< 30 min',
        60  => $isEn ? '< 1 hour'  : '< 1 heure',
        120 => $isEn ? '< 2 hours' : '< 2 heures',
    ];
@endphp
@section('content')

<div class="if-content">

    {{-- En-tête page --}}
    <div class="if-page-header">
        <h1 class="if-page-title">{{ $isEn ? 'Recipes' : 'Recettes' }}</h1>
        <p class="if-page-count">
            {{ $recettes->total() }}
            {{ $isEn ? ($recettes->total() > 1 ? 'recipes' : 'recipe') : ($recettes->total() > 1 ? 'recettes' : 'recette') }}
        </p>
    </div>

    {{-- Filtres --}}
    <form method="GET" action="{{ $isEn ? route('en.inari-fox.recettes') : route('fr.inari-fox.recettes') }}"
          class="if-filters" id="if-filters">

        {{-- Catégorie --}}
        <div class="if-filter-group">
            <label class="if-filter-label">{{ $isEn ? 'Category' : 'Catégorie' }}</label>
            <select name="categorie" class="if-filter-select" onchange="this.form.submit()">
                <option value="">{{ $isEn ? 'All' : 'Toutes' }}</option>
                @foreach($categories as $val => $label)
                    <option value="{{ $val }}" {{ request('categorie') === $val ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Difficulté --}}
        <div class="if-filter-group">
            <label class="if-filter-label">{{ $isEn ? 'Difficulty' : 'Difficulté' }}</label>
            <select name="difficulte" class="if-filter-select" onchange="this.form.submit()">
                <option value="">{{ $isEn ? 'All' : 'Tous' }}</option>
                @foreach($difficultes as $val => $label)
                    <option value="{{ $val }}" {{ request('difficulte') === $val ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Durée --}}
        <div class="if-filter-group">
            <label class="if-filter-label">{{ $isEn ? 'Duration' : 'Durée totale' }}</label>
            <select name="duree" class="if-filter-select" onchange="this.form.submit()">
                <option value="">{{ $isEn ? 'All' : 'Toutes' }}</option>
                @foreach($durees as $val => $label)
                    <option value="{{ $val }}" {{ request('duree') == $val ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Régime --}}
        <div class="if-filter-group">
            <label class="if-filter-label">{{ $isEn ? 'Diet' : 'Régime' }}</label>
            <select name="regime" class="if-filter-select" onchange="this.form.submit()">
                <option value="">{{ $isEn ? 'All' : 'Tous' }}</option>
                @foreach($regimes as $regime)
                    <option value="{{ $regime->id }}" {{ request('regime') == $regime->id ? 'selected' : '' }}>
                        {{ $isEn ? $regime->nom_en : $regime->nom_fr }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Ingrédient (texte libre) --}}
        <div class="if-filter-group if-filter-group--search">
            <label class="if-filter-label">{{ $isEn ? 'Ingredient' : 'Ingrédient' }}</label>
            <div class="if-filter-search">
                <input type="text" name="ingredient"
                       value="{{ request('ingredient') }}"
                       placeholder="{{ $isEn ? 'e.g. chicken' : 'ex. poulet' }}"
                       class="if-filter-input">
                <button type="submit" class="if-filter-btn">→</button>
            </div>
        </div>

        {{-- Réinitialiser (si filtres actifs) --}}
        @if(request()->hasAny(['categorie','difficulte','duree','regime','ingredient']))
            <div class="if-filter-group if-filter-group--reset">
                <a href="{{ $isEn ? route('en.inari-fox.recettes') : route('fr.inari-fox.recettes') }}"
                   class="if-filter-reset">
                    {{ $isEn ? '× Clear filters' : '× Effacer les filtres' }}
                </a>
            </div>
        @endif

    </form>

    {{-- Grille recettes --}}
    @if($recettes->isEmpty())
        <div class="if-empty-state">
            <p>{{ $isEn ? 'No recipes match your filters.' : 'Aucune recette ne correspond à vos filtres.' }}</p>
            <a href="{{ $isEn ? route('en.inari-fox.recettes') : route('fr.inari-fox.recettes') }}" class="if-btn-outline">
                {{ $isEn ? 'Show all' : 'Voir toutes' }}
            </a>
        </div>
    @else
        <div class="if-recipe-grid">
            @foreach($recettes as $r)
                <a href="{{ $isEn ? route('en.inari-fox.recette', $r->slug) : route('fr.inari-fox.recette', $r->slug) }}"
                   class="if-recipe-card">
                    <div class="if-rc-photo">
                        @if($r->photo)
                            <img src="{{ $r->photoUrl() }}" alt="{{ $r->titre($locale) }}" loading="lazy">
                        @else
                            <div class="if-rc-no-photo">🍽️</div>
                        @endif
                        @if($r->est_vedette)
                            <span class="if-rc-badge if-rc-badge--vedette">★</span>
                        @endif
                    </div>
                    <div class="if-rc-body">
                        <p class="if-rc-cat">{{ $r->categorieLabel($locale) }}</p>
                        <h3 class="if-rc-title">{{ $r->titre($locale) }}</h3>
                        <div class="if-rc-meta">
                            <span class="if-rc-diff if-rc-diff--{{ $r->difficulte }}">{{ $r->difficulteLabel($locale) }}</span>
                            @if($r->tempsTotal() > 0)
                                <span class="if-rc-time">⏱ {{ $r->tempsTotalFormate($locale) }}</span>
                            @endif
                        </div>
                        @if($r->regimes->isNotEmpty())
                            <div class="if-rc-regimes">
                                @foreach($r->regimes->take(3) as $regime)
                                    <span class="if-rc-regime">{{ $isEn ? $regime->nom_en : $regime->nom_fr }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($recettes->hasPages())
            <div class="if-pagination">
                {{-- Page précédente --}}
                @if($recettes->onFirstPage())
                    <span class="if-page-btn if-page-btn--disabled">←</span>
                @else
                    <a href="{{ $recettes->previousPageUrl() }}" class="if-page-btn">←</a>
                @endif

                {{-- Pages numérotées --}}
                @foreach($recettes->getUrlRange(1, $recettes->lastPage()) as $page => $url)
                    @if($page == $recettes->currentPage())
                        <span class="if-page-btn if-page-btn--active">{{ $page }}</span>
                    @elseif(abs($page - $recettes->currentPage()) <= 2 || $page == 1 || $page == $recettes->lastPage())
                        <a href="{{ $url }}" class="if-page-btn">{{ $page }}</a>
                    @elseif(abs($page - $recettes->currentPage()) == 3)
                        <span class="if-page-ellipsis">…</span>
                    @endif
                @endforeach

                {{-- Page suivante --}}
                @if($recettes->hasMorePages())
                    <a href="{{ $recettes->nextPageUrl() }}" class="if-page-btn">→</a>
                @else
                    <span class="if-page-btn if-page-btn--disabled">→</span>
                @endif
            </div>
        @endif
    @endif

</div>
@endsection
