<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
<meta charset="UTF-8">
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        font-family: DejaVu Sans, Arial, sans-serif;
        font-size: 10pt;
        color: #1a1a1a;
        background: #fff;
        line-height: 1.55;
    }

    /* ── Header ── */
    .pdf-header {
        border-bottom: 2px solid #c80000;
        padding-bottom: 12px;
        margin-bottom: 18px;
        display: table;
        width: 100%;
    }
    .pdf-header-left  { display: table-cell; vertical-align: middle; width: 70%; }
    .pdf-header-right { display: table-cell; vertical-align: middle; text-align: right; width: 30%; }
    .pdf-site-name    { font-size: 8pt; color: #c80000; letter-spacing: .08em; text-transform: uppercase; font-weight: bold; }
    .pdf-title        { font-size: 18pt; font-weight: bold; color: #1a1a1a; line-height: 1.2; margin-top: 4px; }
    .pdf-cat          { font-size: 8pt; color: #666; margin-top: 3px; text-transform: uppercase; letter-spacing: .05em; }

    /* ── Photo ── */
    .pdf-photo        { width: 100%; max-height: 200px; object-fit: cover; border-radius: 4px; margin-bottom: 16px; }

    /* ── Description ── */
    .pdf-desc         { font-size: 9pt; color: #444; margin-bottom: 14px; font-style: italic; }

    /* ── Régimes ── */
    .pdf-regimes      { margin-bottom: 12px; }
    .pdf-regime       { display: inline-block; font-size: 7.5pt; background: #f5f0f0; border-radius: 3px; padding: 2px 6px; margin-right: 4px; color: #555; }

    /* ── Stats ── */
    .pdf-stats        { display: table; width: 100%; border: 1px solid #e8e0e0; border-radius: 4px; margin-bottom: 16px; }
    .pdf-stat         { display: table-cell; text-align: center; padding: 8px 6px; border-right: 1px solid #e8e0e0; }
    .pdf-stat:last-child { border-right: none; }
    .pdf-stat-label   { font-size: 7pt; color: #888; text-transform: uppercase; letter-spacing: .04em; display: block; }
    .pdf-stat-value   { font-size: 9.5pt; font-weight: bold; color: #1a1a1a; display: block; margin-top: 2px; }
    .pdf-stat-value--facile    { color: #27ae60; }
    .pdf-stat-value--moyen     { color: #e67e22; }
    .pdf-stat-value--difficile { color: #c0392b; }

    /* ── Portions ── */
    .pdf-portions     { font-size: 9pt; color: #555; margin-bottom: 14px; }
    .pdf-portions strong { color: #1a1a1a; }

    /* ── Sections ── */
    .pdf-section      { margin-bottom: 18px; }
    .pdf-section-title {
        font-size: 11pt; font-weight: bold; color: #c80000;
        border-bottom: 1px solid #e8e0e0; padding-bottom: 5px; margin-bottom: 10px;
    }

    /* ── Ingrédients ── */
    .pdf-ingredients  { list-style: none; }
    .pdf-ingredient   { display: table; width: 100%; padding: 4px 0; border-bottom: 1px solid #f0ecec; }
    .pdf-ingredient:last-child { border-bottom: none; }
    .pdf-ing-qty      { display: table-cell; width: 28%; font-weight: bold; font-size: 9pt; color: #1a1a1a; }
    .pdf-ing-nom      { display: table-cell; font-size: 9pt; color: #333; }

    /* ── Étapes ── */
    .pdf-etapes       { list-style: none; }
    .pdf-etape        { display: table; width: 100%; margin-bottom: 10px; }
    .pdf-etape-num    { display: table-cell; width: 28px; vertical-align: top; padding-top: 1px; }
    .pdf-etape-badge  {
        width: 22px; height: 22px; background: #c80000; color: #fff;
        border-radius: 50%; font-size: 8pt; font-weight: bold;
        text-align: center; line-height: 22px;
    }
    .pdf-etape-body   { display: table-cell; vertical-align: top; padding-left: 8px; }
    .pdf-etape-titre  { font-size: 9.5pt; font-weight: bold; color: #1a1a1a; }
    .pdf-etape-duree  { font-size: 7.5pt; color: #888; display: inline-block; margin-left: 8px; }
    .pdf-etape-desc   { font-size: 9pt; color: #444; margin-top: 3px; }

    /* ── Astuces ── */
    .pdf-astuces      { }
    .pdf-astuce       { background: #fdf9f9; border-left: 3px solid #c80000; padding: 7px 10px; margin-bottom: 7px; font-size: 9pt; color: #333; }

    /* ── Footer ── */
    .pdf-footer       { margin-top: 24px; padding-top: 10px; border-top: 1px solid #e8e0e0; font-size: 7.5pt; color: #aaa; text-align: center; }
</style>
</head>
<body>

{{-- Header --}}
<div class="pdf-header">
    <div class="pdf-header-left">
        <div class="pdf-site-name">Inari-Fox</div>
        <div class="pdf-title">{{ $recette->titre($locale) }}</div>
        <div class="pdf-cat">{{ $recette->categorieLabel($locale) }}</div>
    </div>
    <div class="pdf-header-right">
        @if($recette->tempsTotal() > 0)
            <div style="font-size:9pt; color:#555;">⏱ {{ $recette->tempsTotalFormate($locale) }}</div>
        @endif
        <div style="font-size:8pt; color:#888; margin-top:4px;">
            {{ $locale === 'en' ? 'for' : 'pour' }}
            {{ $recette->nb_personnes }}
            {{ $locale === 'en' ? ($recette->nb_personnes > 1 ? 'servings' : 'serving') : ($recette->nb_personnes > 1 ? 'portions' : 'portion') }}
        </div>
    </div>
</div>

{{-- Photo --}}
@if($recette->photo)
    <img src="{{ public_path('storage/' . $recette->photo) }}" class="pdf-photo" alt="{{ $recette->titre($locale) }}">
@endif

{{-- Description --}}
@if($recette->description($locale))
    <p class="pdf-desc">{{ $recette->description($locale) }}</p>
@endif

{{-- Régimes --}}
@if($recette->regimes->isNotEmpty())
    <div class="pdf-regimes">
        @foreach($recette->regimes as $regime)
            <span class="pdf-regime">{{ $locale === 'en' ? $regime->nom_en : $regime->nom_fr }}</span>
        @endforeach
    </div>
@endif

{{-- Stats --}}
<div class="pdf-stats">
    <div class="pdf-stat">
        <span class="pdf-stat-label">{{ $locale === 'en' ? 'Difficulty' : 'Difficulté' }}</span>
        <span class="pdf-stat-value pdf-stat-value--{{ $recette->difficulte }}">{{ $recette->difficulteLabel($locale) }}</span>
    </div>
    @if($recette->temps_preparation > 0)
    <div class="pdf-stat">
        <span class="pdf-stat-label">{{ $locale === 'en' ? 'Prep' : 'Préparation' }}</span>
        <span class="pdf-stat-value">{{ $recette->temps_preparation }} min</span>
    </div>
    @endif
    @if($recette->temps_cuisson > 0)
    <div class="pdf-stat">
        <span class="pdf-stat-label">{{ $locale === 'en' ? 'Cook' : 'Cuisson' }}</span>
        <span class="pdf-stat-value">{{ $recette->temps_cuisson }} min</span>
    </div>
    @endif
    @if($recette->temps_repos > 0)
    <div class="pdf-stat">
        <span class="pdf-stat-label">{{ $locale === 'en' ? 'Rest' : 'Repos' }}</span>
        <span class="pdf-stat-value">{{ $recette->temps_repos }} min</span>
    </div>
    @endif
    <div class="pdf-stat">
        <span class="pdf-stat-label">{{ $locale === 'en' ? 'Servings' : 'Portions' }}</span>
        <span class="pdf-stat-value">{{ $recette->nb_personnes }}</span>
    </div>
</div>

{{-- Ingrédients --}}
@if($recette->ingredients->isNotEmpty())
<div class="pdf-section">
    <div class="pdf-section-title">{{ $locale === 'en' ? 'Ingredients' : 'Ingrédients' }}</div>
    <ul class="pdf-ingredients">
        @foreach($recette->ingredients as $ri)
        <li class="pdf-ingredient">
            <span class="pdf-ing-qty">{{ $ri->quantite % 1 == 0 ? (int)$ri->quantite : $ri->quantite }} {{ $ri->unite->abreviation }}</span>
            <span class="pdf-ing-nom">{{ $ri->nomIngredient($locale) }}</span>
        </li>
        @endforeach
    </ul>
</div>
@endif

{{-- Étapes --}}
@if($recette->etapes->isNotEmpty())
<div class="pdf-section">
    <div class="pdf-section-title">{{ $locale === 'en' ? 'Instructions' : 'Préparation' }}</div>
    <ol class="pdf-etapes">
        @foreach($recette->etapes as $etape)
        <li class="pdf-etape">
            <div class="pdf-etape-num"><div class="pdf-etape-badge">{{ $etape->position }}</div></div>
            <div class="pdf-etape-body">
                <div>
                    <span class="pdf-etape-titre">{{ $etape->titre($locale) }}</span>
                    @if($etape->duree)
                        <span class="pdf-etape-duree">⏱ {{ $etape->duree }} min</span>
                    @endif
                </div>
                <p class="pdf-etape-desc">{{ $etape->description($locale) }}</p>
            </div>
        </li>
        @endforeach
    </ol>
</div>
@endif

{{-- Astuces --}}
@if($recette->astuces->isNotEmpty())
<div class="pdf-section">
    <div class="pdf-section-title">{{ $locale === 'en' ? 'Tips' : 'Astuces' }}</div>
    <div class="pdf-astuces">
        @foreach($recette->astuces as $astuce)
            <div class="pdf-astuce">{{ $astuce->description($locale) }}</div>
        @endforeach
    </div>
</div>
@endif

{{-- Footer --}}
<div class="pdf-footer">
    inari-fox.fr &nbsp;·&nbsp; {{ $locale === 'en' ? 'All rights reserved' : 'Tous droits réservés' }} © {{ date('Y') }}
</div>

</body>
</html>
