@extends('layouts.janus-bee')

@section('title', 'Catalogue - Janus-Bee')

@section('content')
<div class="catalogue-container-main">
    <h1>Catalogue des Œuvres</h1>

    <div class="catalogue-content">
        <div class="filtres-section">
            <form method="GET" action="{{ route('fr.janus-bee.catalogue') }}" class="filtres-form" id="filtresForm">
                <div class="filtre-groupe">
                    <div class="filtre-titre" onclick="toggleFiltre('types-filtre')">
                        <span>TYPES</span>
                        <span class="filtre-fleche">▲</span>
                    </div>
                    <div class="filtre-options" id="types-filtre">
                        @foreach($typesDisponibles as $type)
                        <div class="checkbox-option">
                            <input type="checkbox"
                                id="type_{{ str_replace(' ', '_', $type->nom) }}"
                                name="types[]"
                                value="{{ $type->nom }}"
                                {{ in_array($type->nom, $typesSelectionnes) ? 'checked' : '' }}
                                onchange="document.getElementById('filtresForm').submit()">
                            <label for="type_{{ str_replace(' ', '_', $type->nom) }}">{{ $type->nom }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="filtre-groupe">
                    <div class="filtre-titre" onclick="toggleFiltre('genres-filtre')">
                        <span>GENRES</span>
                        <span class="filtre-fleche">▲</span>
                    </div>
                    <div class="filtre-options" id="genres-filtre">
                        @foreach($genresDisponibles as $genre)
                        <div class="checkbox-option">
                            <input type="checkbox"
                                id="genre_{{ str_replace(' ', '_', $genre->nom) }}"
                                name="genres[]"
                                value="{{ $genre->nom }}"
                                {{ in_array($genre->nom, $genresSelectionnes) ? 'checked' : '' }}
                                onchange="document.getElementById('filtresForm').submit()">
                            <label for="genre_{{ str_replace(' ', '_', $genre->nom) }}">{{ $genre->nom }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('fr.janus-bee.catalogue') }}" class="filtre-reset">Réinitialiser tous les filtres</a>
            </form>
        </div>

        <div class="resultats-section">
            <div class="recherche-validation">
                <form method="GET" action="{{ route('fr.janus-bee.catalogue') }}" class="recherche-form">
                    @foreach($typesSelectionnes as $type)
                        <input type="hidden" name="types[]" value="{{ $type }}">
                    @endforeach
                    @foreach($genresSelectionnes as $genre)
                        <input type="hidden" name="genres[]" value="{{ $genre }}">
                    @endforeach

                    <div class="recherche-input-container">
                        <input type="text" name="q" class="recherche-input-catalogue"
                            placeholder="Rechercher par titre ou titre alternatif..."
                            value="{{ $recherche }}">
                        <button type="submit" class="recherche-btn-catalogue">Valider la recherche</button>
                    </div>
                </form>
            </div>

            <div class="nombre-resultats">
                <strong>{{ $oeuvres->total() }} œuvre(s) trouvée(s)</strong>
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
                <div class="aucun-resultat">
                    <p>Aucune œuvre ne correspond à vos critères de recherche.</p>
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
    </div>
</div>

<script>
function toggleFiltre(id) {
    const filtre = document.getElementById(id);
    const fleche = filtre.previousElementSibling.querySelector('.filtre-fleche');
    if (filtre.style.display === 'none' || filtre.style.display === '') {
        filtre.style.display = 'block';
        fleche.textContent = '▲';
    } else {
        filtre.style.display = 'none';
        fleche.textContent = '▼';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('types-filtre').style.display = 'block';
    document.getElementById('genres-filtre').style.display = 'block';
});
</script>
@endsection
