@extends('layouts.janus-bee')

@section('title', $locale === 'en' ? 'Catalogue - Janus-Bee' : 'Catalogue - Janus-Bee')

@section('content')

@php
$catRoute  = $locale === 'en' ? 'en.janus-bee.catalogue' : 'fr.janus-bee.catalogue';
$ouvRoute  = $locale === 'en' ? 'en.janus-bee.oeuvre'    : 'fr.janus-bee.oeuvre';
@endphp

<div class="catalogue-container-main">

    {{-- BARRE RECHERCHE + TOGGLE FILTRES --}}
    <div class="cat-topbar">
        <form method="GET" action="{{ route($catRoute) }}" class="cat-search-form" id="searchForm">
            @foreach($typesSelectionnes as $t)
                <input type="hidden" name="types[]" value="{{ $t }}">
            @endforeach
            @foreach($genresSelectionnes as $g)
                <input type="hidden" name="genres[]" value="{{ $g }}">
            @endforeach
            <div class="cat-search-wrap">
                <input type="text" name="q" class="cat-search-input"
                    placeholder="{{ $locale === 'en' ? 'Search by title…' : 'Rechercher par titre…' }}"
                    value="{{ $recherche }}">
                <button type="submit" class="cat-search-btn">
                    <img src="/assets/loupe.png" alt="{{ $locale === 'en' ? 'Search' : 'Rechercher' }}" style="width:16px; filter:invert(.7);">
                </button>
            </div>
        </form>

        <button class="cat-filter-toggle" id="filterToggle">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="11" y1="18" x2="13" y2="18"/></svg>
            {{ $locale === 'en' ? 'Filters' : 'Filtres' }}
            @php $nbActifs = count($typesSelectionnes) + count($genresSelectionnes); @endphp
            @if($nbActifs > 0)
            <span class="cat-filter-badge">{{ $nbActifs }}</span>
            @endif
            <span class="cat-filter-arrow" id="filterArrow">▼</span>
        </button>
    </div>

    {{-- CHIPS FILTRES ACTIFS --}}
    @if($nbActifs > 0 || $recherche)
    <div class="cat-active-filters">
        @if($recherche)
        <a href="{{ route($catRoute, array_merge(request()->except('q'), ['types' => $typesSelectionnes, 'genres' => $genresSelectionnes])) }}" class="cat-chip cat-chip-remove">
            "{{ $recherche }}" ✕
        </a>
        @endif
        @foreach($typesSelectionnes as $t)
        @php
            $params   = array_merge(request()->except('types'), ['types' => array_filter($typesSelectionnes, fn($x) => $x !== $t), 'genres' => $genresSelectionnes, 'q' => $recherche]);
            $typeObj  = $typesDisponibles->firstWhere('nom', $t);
            $typeLabel = ($locale === 'en' && $typeObj?->nom_en) ? $typeObj->nom_en : $t;
        @endphp
        <a href="{{ route($catRoute, $params) }}" class="cat-chip cat-chip-remove">{{ $typeLabel }} ✕</a>
        @endforeach
        @foreach($genresSelectionnes as $g)
        @php
            $params     = array_merge(request()->except('genres'), ['genres' => array_filter($genresSelectionnes, fn($x) => $x !== $g), 'types' => $typesSelectionnes, 'q' => $recherche]);
            $genreObj   = $genresDisponibles->firstWhere('nom', $g);
            $genreLabel = ($locale === 'en' && $genreObj?->nom_en) ? $genreObj->nom_en : $g;
        @endphp
        <a href="{{ route($catRoute, $params) }}" class="cat-chip cat-chip-remove">{{ $genreLabel }} ✕</a>
        @endforeach
        <a href="{{ route($catRoute) }}" class="cat-chip cat-chip-reset">{{ $locale === 'en' ? 'Clear all' : 'Tout effacer' }}</a>
    </div>
    @endif

    {{-- PANNEAU FILTRES COLLAPSIBLE --}}
    <div class="cat-filter-panel" id="filterPanel">
        <form method="GET" action="{{ route($catRoute) }}" id="filtresForm">
            @if($recherche)<input type="hidden" name="q" value="{{ $recherche }}">@endif

            <div class="cat-filter-section">
                <div class="cat-filter-label">{{ $locale === 'en' ? 'Types' : 'Types' }}</div>
                <div class="cat-filter-chips">
                    @foreach($typesDisponibles as $type)
                    @php $checked = in_array($type->nom, $typesSelectionnes); @endphp
                    <label class="cat-fchip {{ $checked ? 'active' : '' }}">
                        <input type="checkbox" name="types[]" value="{{ $type->nom }}"
                            {{ $checked ? 'checked' : '' }}
                            onchange="document.getElementById('filtresForm').submit()">
                        {{ ($locale === 'en' && $type->nom_en) ? $type->nom_en : $type->nom }}
                    </label>
                    @endforeach
                </div>
            </div>

            <div class="cat-filter-divider"></div>

            <div class="cat-filter-section">
                <div class="cat-filter-label">{{ $locale === 'en' ? 'Genres' : 'Genres' }}</div>
                <div class="cat-filter-chips">
                    @foreach($genresDisponibles as $genre)
                    @php $checked = in_array($genre->nom, $genresSelectionnes); @endphp
                    <label class="cat-fchip {{ $checked ? 'active' : '' }}">
                        <input type="checkbox" name="genres[]" value="{{ $genre->nom }}"
                            {{ $checked ? 'checked' : '' }}
                            onchange="document.getElementById('filtresForm').submit()">
                        {{ ($locale === 'en' && $genre->nom_en) ? $genre->nom_en : $genre->nom }}
                    </label>
                    @endforeach
                </div>
            </div>
        </form>
    </div>

    {{-- RÉSULTATS --}}
    <div class="cat-results-bar">
        @if($locale === 'en')
        <span class="cat-results-count">{{ $oeuvres->total() }} work{{ $oeuvres->total() > 1 ? 's' : '' }}</span>
        @else
        <span class="cat-results-count">{{ $oeuvres->total() }} œuvre{{ $oeuvres->total() > 1 ? 's' : '' }}</span>
        @endif
    </div>

    <div class="oeuvres-liste">
        @forelse($oeuvres as $oeuvre)
        <a href="{{ route($ouvRoute, $oeuvre) }}" class="catalogue-lien-oeuvre">
            <div class="catalogue-carte-oeuvre">
                <div class="catalogue-image">
                    <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt="{{ $oeuvre->titre }}" loading="lazy">
                    @if($oeuvre->types->isNotEmpty())
                    @php $typeObj = $oeuvre->types->first(); @endphp
                    <span class="cat-type-badge">{{ ($locale === 'en' && $typeObj->nom_en) ? $typeObj->nom_en : $typeObj->nom }}</span>
                    @endif
                </div>
                <div class="catalogue-info">
                    <h3 class="catalogue-titre">{{ ($locale === 'en' && $oeuvre->titre_en) ? $oeuvre->titre_en : $oeuvre->titre }}</h3>
                    @if(!empty($oeuvre->titres_alternatifs[0]))
                    <p class="catalogue-titre-secondaire">{{ $oeuvre->titres_alternatifs[0] }}</p>
                    @endif
                </div>
            </div>
        </a>
        @empty
        <div class="aucun-resultat" style="grid-column:1/-1;">
            <p>{{ $locale === 'en' ? 'No works match your criteria.' : 'Aucune œuvre ne correspond à vos critères.' }}</p>
            <a href="{{ route($catRoute) }}" class="retour-catalogue">{{ $locale === 'en' ? 'View all works' : 'Voir toutes les œuvres' }}</a>
        </div>
        @endforelse
    </div>

    @if($oeuvres->hasPages())
    <div class="pagination-container">
        {{ $oeuvres->links('vendor.pagination.janus-bee') }}
    </div>
    @endif

</div>

<script>
(function () {
    const panel  = document.getElementById('filterPanel');
    const btn    = document.getElementById('filterToggle');
    const arrow  = document.getElementById('filterArrow');

    function setOpen(open) {
        panel.classList.toggle('open', open);
        arrow.textContent = open ? '▲' : '▼';
        sessionStorage.setItem('jb_filters_open', open ? '1' : '0');
    }

    setOpen(false);

    btn.addEventListener('click', () => setOpen(!panel.classList.contains('open')));
})();
</script>
@endsection
