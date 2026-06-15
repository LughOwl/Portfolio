@extends('layouts.janus-bee')

@section('title', 'Catalogue - Janus-Bee')

@section('content')
<div class="catalogue-container-main">

    {{-- BARRE RECHERCHE + TOGGLE FILTRES --}}
    <div class="cat-topbar">
        <form method="GET" action="{{ route('fr.janus-bee.catalogue') }}" class="cat-search-form" id="searchForm">
            @foreach($typesSelectionnes as $t)
                <input type="hidden" name="types[]" value="{{ $t }}">
            @endforeach
            @foreach($genresSelectionnes as $g)
                <input type="hidden" name="genres[]" value="{{ $g }}">
            @endforeach
            <div class="cat-search-wrap">
                <input type="text" name="q" class="cat-search-input"
                    placeholder="Rechercher par titre…"
                    value="{{ $recherche }}">
                <button type="submit" class="cat-search-btn">
                    <img src="/assets/loupe.png" alt="Rechercher" style="width:16px; filter:invert(.7);">
                </button>
            </div>
        </form>

        <button class="cat-filter-toggle" id="filterToggle">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="11" y1="18" x2="13" y2="18"/></svg>
            Filtres
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
        <a href="{{ route('fr.janus-bee.catalogue', array_merge(request()->except('q'), ['types' => $typesSelectionnes, 'genres' => $genresSelectionnes])) }}" class="cat-chip cat-chip-remove">
            "{{ $recherche }}" ✕
        </a>
        @endif
        @foreach($typesSelectionnes as $t)
        @php $params = array_merge(request()->except('types'), ['types' => array_filter($typesSelectionnes, fn($x) => $x !== $t), 'genres' => $genresSelectionnes, 'q' => $recherche]); @endphp
        <a href="{{ route('fr.janus-bee.catalogue', $params) }}" class="cat-chip cat-chip-remove">{{ $t }} ✕</a>
        @endforeach
        @foreach($genresSelectionnes as $g)
        @php $params = array_merge(request()->except('genres'), ['genres' => array_filter($genresSelectionnes, fn($x) => $x !== $g), 'types' => $typesSelectionnes, 'q' => $recherche]); @endphp
        <a href="{{ route('fr.janus-bee.catalogue', $params) }}" class="cat-chip cat-chip-remove">{{ $g }} ✕</a>
        @endforeach
        <a href="{{ route('fr.janus-bee.catalogue') }}" class="cat-chip cat-chip-reset">Tout effacer</a>
    </div>
    @endif

    {{-- PANNEAU FILTRES COLLAPSIBLE --}}
    <div class="cat-filter-panel" id="filterPanel">
        <form method="GET" action="{{ route('fr.janus-bee.catalogue') }}" id="filtresForm">
            @if($recherche)<input type="hidden" name="q" value="{{ $recherche }}">@endif

            <div class="cat-filter-section">
                <div class="cat-filter-label">Types</div>
                <div class="cat-filter-chips">
                    @foreach($typesDisponibles as $type)
                    @php $checked = in_array($type->nom, $typesSelectionnes); @endphp
                    <label class="cat-fchip {{ $checked ? 'active' : '' }}">
                        <input type="checkbox" name="types[]" value="{{ $type->nom }}"
                            {{ $checked ? 'checked' : '' }}
                            onchange="document.getElementById('filtresForm').submit()">
                        {{ $type->nom }}
                    </label>
                    @endforeach
                </div>
            </div>

            @foreach($genresSelectionnes as $g)
                <input type="hidden" name="genres_pass[]" value="{{ $g }}">
            @endforeach

            <div class="cat-filter-divider"></div>

            <div class="cat-filter-section">
                <div class="cat-filter-label">Genres</div>
                <div class="cat-filter-chips">
                    @foreach($genresDisponibles as $genre)
                    @php $checked = in_array($genre->nom, $genresSelectionnes); @endphp
                    <label class="cat-fchip {{ $checked ? 'active' : '' }}">
                        <input type="checkbox" name="genres[]" value="{{ $genre->nom }}"
                            {{ $checked ? 'checked' : '' }}
                            onchange="document.getElementById('filtresForm').submit()">
                        {{ $genre->nom }}
                    </label>
                    @endforeach
                </div>
            </div>

            {{-- Preserve types when changing genres --}}
            @foreach($typesSelectionnes as $t)
                <input type="hidden" name="types[]" value="{{ $t }}">
            @endforeach
        </form>
    </div>

    {{-- RÉSULTATS --}}
    <div class="cat-results-bar">
        <span class="cat-results-count">{{ $oeuvres->total() }} œuvre{{ $oeuvres->total() > 1 ? 's' : '' }}</span>
    </div>

    <div class="oeuvres-liste">
        @forelse($oeuvres as $oeuvre)
        <a href="{{ route('fr.janus-bee.oeuvre', $oeuvre) }}" class="catalogue-lien-oeuvre">
            <div class="catalogue-carte-oeuvre">
                <div class="catalogue-image">
                    <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt="{{ $oeuvre->titre }}" loading="lazy">
                </div>
                <div class="catalogue-info">
                    <h3 class="catalogue-titre">{{ mb_strtoupper(mb_strlen($oeuvre->titre) > 23 ? mb_substr($oeuvre->titre, 0, 20) . '...' : $oeuvre->titre) }}</h3>
                    @if(!empty($oeuvre->titres_alternatifs[0]))
                    <p class="catalogue-titre-secondaire">
                        {{ mb_strlen($oeuvre->titres_alternatifs[0]) > 30 ? mb_substr($oeuvre->titres_alternatifs[0], 0, 27) . '...' : $oeuvre->titres_alternatifs[0] }}
                    </p>
                    @endif
                    <div class="catalogue-details">
                        <div class="catalogue-detail-section">
                            <div class="catalogue-detail-titre">GENRES</div>
                            <div class="catalogue-detail-contenu">
                                @php $genresText = $oeuvre->genres->pluck('nom')->implode(', '); @endphp
                                {{ mb_strlen($genresText) > 60 ? mb_substr($genresText, 0, 57) . '...' : $genresText }}
                            </div>
                        </div>
                        <div class="catalogue-detail-section">
                            <div class="catalogue-detail-titre">TYPES</div>
                            <div class="catalogue-detail-contenu">
                                @php $typesText = $oeuvre->types->pluck('nom')->implode(', '); @endphp
                                {{ mb_strlen($typesText) > 40 ? mb_substr($typesText, 0, 37) . '...' : $typesText }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @empty
        <div class="aucun-resultat" style="grid-column:1/-1;">
            <p>Aucune œuvre ne correspond à vos critères.</p>
            <a href="{{ route('fr.janus-bee.catalogue') }}" class="retour-catalogue">Voir toutes les œuvres</a>
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
    const OPEN   = sessionStorage.getItem('jb_filters_open');

    function setOpen(open) {
        panel.classList.toggle('open', open);
        arrow.textContent = open ? '▲' : '▼';
        sessionStorage.setItem('jb_filters_open', open ? '1' : '0');
    }

    // Ouvrir par défaut si filtres actifs ou si état sauvegardé
    const hasActive = {{ $nbActifs > 0 || $recherche ? 'true' : 'false' }};
    setOpen(hasActive || OPEN === '1');

    btn.addEventListener('click', () => setOpen(!panel.classList.contains('open')));
})();
</script>
@endsection
