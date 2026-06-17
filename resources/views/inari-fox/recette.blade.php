@extends('layouts.inari-fox')
@section('title', $recette->titre($locale) . ' — Inari-Fox')
@section('meta_description', $recette->description($locale) ?? $recette->titre($locale))
@section('nav_recettes', 'active')
@php
    $isEn = $locale === 'en';

    // Ingrédients sérialisés pour Alpine.js
    // On distingue les "comptables" (arrondi entier) des "mesurables" (valeur exacte)
    $unitesComptables = ['pièce','tranche','botte','gousse','feuille','pincée','noix','filet','branche'];

    $ingredientsData = $recette->ingredients->map(function ($ri) use ($unitesComptables, $locale) {
        $abrev = $ri->unite->abreviation;
        return [
            'nom'        => $ri->nomIngredient($locale),
            'quantite'   => $ri->quantite,
            'unite'      => $abrev,
            'comptable'  => in_array($abrev, $unitesComptables),
        ];
    })->values()->toJson();
@endphp
@section('content')

<article class="if-recette" x-data="portionsAdjuster({{ $recette->nb_personnes }}, {{ $ingredientsData }})">

    {{-- Fil d'Ariane --}}
    <div class="if-content">
        <nav class="if-breadcrumb">
            <a href="{{ $isEn ? route('en.inari-fox.recettes') : route('fr.inari-fox.recettes') }}">
                ← {{ $isEn ? 'All recipes' : 'Toutes les recettes' }}
            </a>
        </nav>
    </div>

    {{-- Header recette --}}
    <div class="if-content">
        <div class="if-recette-header">

            {{-- Photo --}}
            <div class="if-recette-photo">
                @if($recette->photo)
                    <img src="{{ $recette->photoUrl() }}" alt="{{ $recette->titre($locale) }}">
                @else
                    <div class="if-recette-no-photo">🍽️</div>
                @endif
            </div>

            {{-- Infos --}}
            <div class="if-recette-meta">
                <p class="if-recette-cat">{{ $recette->categorieLabel($locale) }}</p>
                <h1 class="if-recette-title">{{ $recette->titre($locale) }}</h1>

                @if($recette->description($locale))
                    <p class="if-recette-desc">{{ $recette->description($locale) }}</p>
                @endif

                {{-- Régimes --}}
                @if($recette->regimes->isNotEmpty())
                    <div class="if-recette-regimes">
                        @foreach($recette->regimes as $regime)
                            <span class="if-rc-regime">{{ $regime->icone }} {{ $isEn ? $regime->nom_en : $regime->nom_fr }}</span>
                        @endforeach
                    </div>
                @endif

                {{-- Stats --}}
                <div class="if-recette-stats">
                    <div class="if-stat">
                        <span class="if-stat-icon">📊</span>
                        <span class="if-stat-label">{{ $isEn ? 'Difficulty' : 'Difficulté' }}</span>
                        <span class="if-stat-value if-rc-diff--{{ $recette->difficulte }}">{{ $recette->difficulteLabel($locale) }}</span>
                    </div>
                    @if($recette->temps_preparation > 0)
                    <div class="if-stat">
                        <span class="if-stat-icon">🔪</span>
                        <span class="if-stat-label">{{ $isEn ? 'Prep' : 'Préparation' }}</span>
                        <span class="if-stat-value">{{ $recette->temps_preparation }} min</span>
                    </div>
                    @endif
                    @if($recette->temps_cuisson > 0)
                    <div class="if-stat">
                        <span class="if-stat-icon">🔥</span>
                        <span class="if-stat-label">{{ $isEn ? 'Cook' : 'Cuisson' }}</span>
                        <span class="if-stat-value">{{ $recette->temps_cuisson }} min</span>
                    </div>
                    @endif
                    @if($recette->temps_repos > 0)
                    <div class="if-stat">
                        <span class="if-stat-icon">⏳</span>
                        <span class="if-stat-label">{{ $isEn ? 'Rest' : 'Repos' }}</span>
                        <span class="if-stat-value">{{ $recette->temps_repos }} min</span>
                    </div>
                    @endif
                    @if($recette->tempsTotal() > 0)
                    <div class="if-stat if-stat--total">
                        <span class="if-stat-icon">⏱</span>
                        <span class="if-stat-label">{{ $isEn ? 'Total' : 'Total' }}</span>
                        <span class="if-stat-value">{{ $recette->tempsTotalFormate($locale) }}</span>
                    </div>
                    @endif
                </div>

                {{-- Ajustement portions --}}
                <div class="if-portions">
                    <span class="if-portions-label">{{ $isEn ? 'Servings' : 'Portions' }}</span>
                    <div class="if-portions-ctrl">
                        <button type="button" class="if-portions-btn" @click="decrease()" :disabled="portions <= 1">−</button>
                        <span class="if-portions-val" x-text="portions"></span>
                        <button type="button" class="if-portions-btn" @click="increase()">+</button>
                    </div>
                    <span class="if-portions-hint" x-show="portions !== {{ $recette->nb_personnes }}">
                        ({{ $isEn ? 'original:' : 'original :' }} {{ $recette->nb_personnes }})
                    </span>
                </div>

                {{-- Export PDF --}}
                <div class="if-recette-actions">
                    <a href="{{ $isEn ? route('en.inari-fox.recette.pdf', $recette->slug) : route('fr.inari-fox.recette.pdf', $recette->slug) }}"
                       class="if-btn-outline" target="_blank">
                        ↓ {{ $isEn ? 'Download PDF' : 'Télécharger PDF' }}
                    </a>
                </div>
            </div>

        </div>
    </div>

    {{-- Corps recette --}}
    <div class="if-content if-recette-body">

        {{-- Ingrédients --}}
        @if($recette->ingredients->isNotEmpty())
        <section class="if-recette-section">
            <h2 class="if-recette-h2">{{ $isEn ? 'Ingredients' : 'Ingrédients' }}</h2>
            <ul class="if-ingredients-list">
                <template x-for="(item, i) in computedIngredients" :key="i">
                    <li class="if-ingredient-line">
                        <span class="if-ingredient-qty">
                            <span x-text="item.quantiteAffichee"></span>
                            <span x-text="item.unite ? ' ' + item.unite : ''"></span>
                        </span>
                        <span class="if-ingredient-nom" x-text="item.nom"></span>
                    </li>
                </template>
            </ul>
        </section>
        @endif

        {{-- Étapes --}}
        @if($recette->etapes->isNotEmpty())
        <section class="if-recette-section">
            <h2 class="if-recette-h2">{{ $isEn ? 'Instructions' : 'Préparation' }}</h2>
            <ol class="if-etapes-list">
                @foreach($recette->etapes as $etape)
                <li class="if-etape">
                    <div class="if-etape-num">{{ $etape->position }}</div>
                    <div class="if-etape-content">
                        <h3 class="if-etape-titre">{{ $etape->titre($locale) }}</h3>
                        @if($etape->duree)
                            <span class="if-etape-duree">⏱ {{ $etape->duree }} min</span>
                        @endif
                        <p class="if-etape-desc">{{ $etape->description($locale) }}</p>
                    </div>
                </li>
                @endforeach
            </ol>
        </section>
        @endif

        {{-- Astuces --}}
        @if($recette->astuces->isNotEmpty())
        <section class="if-recette-section">
            <h2 class="if-recette-h2">{{ $isEn ? 'Tips' : 'Astuces' }}</h2>
            <div class="if-astuces">
                @foreach($recette->astuces as $astuce)
                    <div class="if-astuce">
                        <span class="if-astuce-icon">💡</span>
                        <p>{{ $astuce->description($locale) }}</p>
                    </div>
                @endforeach
            </div>
        </section>
        @endif

    </div>

</article>

@push('scripts')
<script>
function portionsAdjuster(basePortions, ingredientsRaw) {
    return {
        portions: basePortions,
        base: basePortions,
        ingredients: ingredientsRaw,

        increase() { this.portions++; },
        decrease() { if (this.portions > 1) this.portions--; },

        get computedIngredients() {
            const ratio = this.portions / this.base;
            return this.ingredients.map(item => {
                const raw = item.quantite * ratio;
                let affichee;
                if (item.comptable) {
                    affichee = Math.max(1, Math.round(raw));
                    affichee = affichee.toString();
                } else {
                    // Arrondi à 1 décimale pour les mesures
                    const rounded = Math.round(raw * 10) / 10;
                    affichee = rounded % 1 === 0 ? rounded.toFixed(0) : rounded.toFixed(1);
                }
                return { ...item, quantiteAffichee: affichee };
            });
        }
    };
}
</script>
@endpush

@endsection
