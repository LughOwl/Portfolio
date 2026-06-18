@extends('layouts.admin')
@section('title', $recette ? 'Modifier : ' . $recette->titre_fr : 'Nouvelle recette — Inari-Fox')
@section('content')

<style>
/* ── Inari-Fox form — accent rouge ─────────────────────────────────── */
[x-cloak] { display: none !important; }

.if-admin-form input:focus,
.if-admin-form select:focus,
.if-admin-form textarea:focus {
    border-color: rgba(200,0,0,.45) !important;
    box-shadow: 0 0 0 3px rgba(200,0,0,.07) !important;
}

/* Cards */
.if-card { margin-bottom: 20px; }

/* Section header */
.if-section-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 14px;
    border-bottom: 1px solid var(--bd);
    margin-bottom: 20px;
}
.if-section-title {
    font-family: 'JetBrains Mono', monospace;
    font-size: .78em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .1em;
    color: #c80000;
    opacity: .85;
}
.if-section-title::before { content: '// '; opacity: .55; }

/* Add button variant */
.if-btn-add {
    color: #c80000 !important;
    border-color: rgba(200,0,0,.25) !important;
}
.if-btn-add:hover {
    background: rgba(200,0,0,.07) !important;
    border-color: rgba(200,0,0,.45) !important;
}

/* Sort buttons */
.if-sort-btns { display: flex; flex-direction: column; gap: 3px; }
.if-sort-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 14px;
    border: 1px solid var(--bd);
    border-radius: 4px;
    background: transparent;
    color: var(--tx-3);
    cursor: pointer;
    padding: 0;
    transition: color .12s, border-color .12s, background .12s;
}
.if-sort-btn:hover:not(:disabled) { color: var(--tx); border-color: var(--bd-2); background: rgba(255,255,255,.05); }
.if-sort-btn:disabled { opacity: .2; cursor: not-allowed; }

/* Remove icon button */
.if-btn-remove {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border: 1px solid rgba(255,87,87,.2);
    border-radius: 7px;
    background: transparent;
    color: var(--tx-3);
    cursor: pointer;
    flex-shrink: 0;
    transition: color .15s, background .15s, border-color .15s;
}
.if-btn-remove:hover { color: var(--red); background: rgba(255,87,87,.1); border-color: rgba(255,87,87,.35); }

/* ── Ingrédient combobox ─────────────────────────────────────────── */
.if-combobox { position: relative; }
.if-combobox-input {
    width: 100%;
    background: var(--bg);
    border: 1px solid var(--bd);
    border-radius: 8px;
    padding: 9px 12px;
    color: var(--tx);
    font-family: 'Inter', sans-serif;
    font-size: .9em;
    outline: none;
    transition: border-color .15s, box-shadow .15s;
    cursor: pointer;
}
.if-combobox-input:focus {
    border-color: rgba(200,0,0,.45);
    box-shadow: 0 0 0 3px rgba(200,0,0,.07);
    cursor: text;
}
.if-combobox-input::placeholder { color: var(--tx-3); }

.if-combobox-dropdown {
    position: absolute;
    top: calc(100% + 4px);
    left: 0;
    right: 0;
    min-width: 260px;
    background: #131820;
    border: 1px solid rgba(200,0,0,.2);
    border-radius: 9px;
    box-shadow: 0 8px 28px rgba(0,0,0,.5);
    max-height: 280px;
    overflow-y: auto;
    z-index: 200;
    padding: 4px 0;
}
.if-combobox-dropdown::-webkit-scrollbar { width: 4px; }
.if-combobox-dropdown::-webkit-scrollbar-thumb { background: rgba(255,255,255,.1); border-radius: 2px; }

.if-combobox-hint,
.if-combobox-empty {
    padding: 14px 16px;
    font-size: .83em;
    color: var(--tx-3);
    text-align: center;
}
.if-combobox-cat {
    padding: 8px 14px 4px;
    font-size: .68em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .1em;
    color: #c80000;
    opacity: .7;
}
.if-combobox-opt {
    display: block;
    width: 100%;
    padding: 7px 14px;
    text-align: left;
    background: none;
    border: none;
    color: var(--tx);
    font-family: 'Inter', sans-serif;
    font-size: .88em;
    cursor: pointer;
    transition: background .1s, color .1s;
}
.if-combobox-opt:hover { background: rgba(200,0,0,.12); color: #ff7070; }

/* ── Lignes ingrédients ──────────────────────────────────────────── */
.if-ing-header,
.if-ing-row {
    display: grid;
    grid-template-columns: 24px 1fr 72px 140px 1fr 1fr 28px 34px;
    gap: 8px;
    align-items: center;
}
.if-ing-header {
    padding: 0 0 8px;
    border-bottom: 1px solid rgba(255,255,255,.04);
    margin-bottom: 6px;
}
.if-ing-header span {
    font-size: .68em;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .09em;
    color: var(--tx-3);
}
.if-ing-row {
    padding: 8px 0;
    border-bottom: 1px solid rgba(255,255,255,.025);
    align-items: start;
}
.if-ing-row:last-child { border-bottom: none; }
.if-ing-row input[type="number"],
.if-ing-row input[type="text"],
.if-ing-row select {
    padding: 9px 10px;
    font-size: .88em;
}
.if-ing-num {
    font-family: 'JetBrains Mono', monospace;
    font-size: .72em;
    font-weight: 700;
    color: rgba(200,0,0,.5);
    padding-top: 10px;
    text-align: right;
    user-select: none;
}

/* ── Étapes ──────────────────────────────────────────────────────── */
.if-etape-card {
    background: var(--bg);
    border: 1px solid var(--bd);
    border-left: 3px solid rgba(200,0,0,.35);
    border-radius: 9px;
    padding: 16px 18px;
    margin-bottom: 12px;
}
.if-etape-card:last-child { margin-bottom: 0; }
.if-etape-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
}
.if-etape-num {
    font-family: 'JetBrains Mono', monospace;
    font-size: .78em;
    font-weight: 700;
    color: #c80000;
    text-transform: uppercase;
    letter-spacing: .05em;
}

/* ── Astuces ─────────────────────────────────────────────────────── */
.if-astuce-row {
    display: grid;
    grid-template-columns: 24px 1fr 1fr 28px 34px;
    gap: 8px;
    align-items: start;
    padding: 8px 0;
    border-bottom: 1px solid rgba(255,255,255,.025);
}
.if-astuce-row:last-child { border-bottom: none; }

.if-empty-state {
    padding: 24px;
    text-align: center;
    color: var(--tx-3);
    font-size: .85em;
    border: 1px dashed rgba(255,255,255,.06);
    border-radius: 8px;
}

/* ── Toggle switch ───────────────────────────────────────────────── */
.if-toggle-row { display: flex; gap: 24px; flex-wrap: wrap; padding-top: 4px; }
.if-toggle {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    user-select: none;
}
.if-toggle input[type="hidden"],
.if-toggle input[type="checkbox"] { display: none; }
.if-toggle-track {
    position: relative;
    width: 38px;
    height: 22px;
    border-radius: 11px;
    background: var(--bg);
    border: 1px solid var(--bd);
    flex-shrink: 0;
    transition: background .15s, border-color .15s;
}
.if-toggle-track::after {
    content: '';
    position: absolute;
    top: 4px;
    left: 4px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--tx-3);
    transition: transform .15s, background .15s;
}
.if-toggle input[type="checkbox"]:checked ~ .if-toggle-track {
    background: rgba(200,0,0,.15);
    border-color: rgba(200,0,0,.4);
}
.if-toggle input[type="checkbox"]:checked ~ .if-toggle-track::after {
    transform: translateX(16px);
    background: #c80000;
}
.if-toggle-label { font-size: .88em; font-weight: 400; color: var(--tx-2); text-transform: none; }

/* ── Régimes pills ───────────────────────────────────────────────── */
.admin-regimes-grid { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 8px; }
.admin-regime-pill {
    display: flex;
    align-items: center;
    padding: 5px 14px;
    border: 1px solid var(--bd);
    border-radius: 20px;
    cursor: pointer;
    font-size: .83rem;
    font-weight: 400;
    color: var(--tx-2);
    background: var(--bg-2);
    transition: border-color .15s, background .15s, color .15s;
    user-select: none;
}
.admin-regime-pill input[type="checkbox"] { display: none; }
.admin-regime-pill:has(input:checked) { border-color: #c80000; background: #c800001a; color: #c80000; font-weight: 500; }

/* ── Actions bar ─────────────────────────────────────────────────── */
.if-form-actions {
    display: flex;
    gap: 12px;
    align-items: center;
    padding: 20px 0 4px;
}

/* ── Responsive ──────────────────────────────────────────────────── */
@media (max-width: 900px) {
    .if-ing-header { display: none; }
    .if-ing-row {
        grid-template-columns: 24px 1fr 34px;
        grid-template-rows: auto auto auto;
    }
    .if-ing-row .if-combobox { grid-column: 2; }
    .if-ing-row input[type="number"],
    .if-ing-row select,
    .if-ing-row input[type="text"] { grid-column: 2; }
    .if-ing-row .if-btn-remove { grid-column: 3; grid-row: 1; }

    .if-astuce-row { grid-template-columns: 24px 1fr 34px; }
    .if-astuce-row > div:last-of-type { grid-column: 2; }
}
</style>

<div class="admin-page-title">
    <span class="prefix" style="color:#c80000;">//</span>
    {{ $recette ? 'Modifier : ' . $recette->titre_fr : 'Nouvelle recette' }}
</div>
<p class="admin-page-sub">$ manage sites/inari-fox/recettes{{ $recette ? '/' . $recette->id : '/create' }}</p>

<div style="margin-bottom:20px;">
    <a href="{{ route('admin.inari-fox.index') }}" class="btn-admin btn-outline btn-sm">← Retour</a>
</div>

@if($errors->any())
<div class="admin-alert error" style="margin-bottom:24px;">
    @foreach($errors->all() as $error)
    <div>✕ {{ $error }}</div>
    @endforeach
</div>
@endif

<form class="if-admin-form"
      method="POST"
      action="{{ $recette ? route('admin.inari-fox.recette.update', $recette->id) : route('admin.inari-fox.recette.store') }}"
      enctype="multipart/form-data"
      x-data="inariFoxForm()">
    @csrf
    @if($recette) @method('PUT') @endif

    {{-- ── Informations générales ── --}}
    <div class="admin-form-card if-card">
        <div class="if-section-head">
            <span class="if-section-title">Informations générales</span>
        </div>

        <div class="form-grid-2" style="margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Titre (FR) *</label>
                <input type="text" name="titre_fr" required
                       value="{{ old('titre_fr', $recette?->titre_fr) }}"
                       placeholder="ex. Blanquette de veau aux champignons">
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Titre (EN) *</label>
                <input type="text" name="titre_en" required
                       value="{{ old('titre_en', $recette?->titre_en) }}"
                       placeholder="ex. Veal blanquette with mushrooms">
            </div>
        </div>

        <div class="form-grid-2" style="margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Description (FR)</label>
                <textarea name="description_fr" rows="3"
                          placeholder="Courte description…">{{ old('description_fr', $recette?->description_fr) }}</textarea>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Description (EN)</label>
                <textarea name="description_en" rows="3"
                          placeholder="Short description…">{{ old('description_en', $recette?->description_en) }}</textarea>
            </div>
        </div>

        <div class="form-grid-3" style="margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Catégorie *</label>
                <select name="categorie" required>
                    @foreach(['entree'=>'Entrée','plat_principal'=>'Plat principal','dessert'=>'Dessert','accompagnement'=>'Accompagnement','petit_dejeuner'=>'Petit-déjeuner','encas_gouter'=>'Encas / Goûter','aperitif'=>'Apéritif','boisson'=>'Boisson'] as $val => $label)
                    <option value="{{ $val }}" {{ old('categorie', $recette?->categorie) === $val ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Difficulté *</label>
                <select name="difficulte" required>
                    @foreach(['facile'=>'Facile','moyen'=>'Moyen','difficile'=>'Difficile'] as $val => $label)
                    <option value="{{ $val }}" {{ old('difficulte', $recette?->difficulte ?? 'moyen') === $val ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Portions *</label>
                <input type="number" name="nb_personnes" min="1" max="100" required
                       value="{{ old('nb_personnes', $recette?->nb_personnes ?? 4) }}">
            </div>
        </div>

        <div class="form-grid-3" style="margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Préparation (min) *</label>
                <input type="number" name="temps_preparation" min="0" max="9999" required
                       value="{{ old('temps_preparation', $recette?->temps_preparation ?? 0) }}">
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Cuisson (min) *</label>
                <input type="number" name="temps_cuisson" min="0" max="9999" required
                       value="{{ old('temps_cuisson', $recette?->temps_cuisson ?? 0) }}">
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Repos (min)</label>
                <input type="number" name="temps_repos" min="0" max="9999"
                       value="{{ old('temps_repos', $recette?->temps_repos ?? 0) }}">
            </div>
        </div>

        {{-- Photo --}}
        <div class="form-group" style="margin-bottom:16px;">
            <label>Photo (JPG / WebP, max 2 Mo)</label>
            @if($recette?->photo)
            <div style="margin-bottom:8px;">
                <img src="{{ $recette->photoUrl() }}" alt="Photo actuelle"
                     style="height:80px; width:auto; border-radius:6px; border:1px solid var(--bd);">
            </div>
            @endif
            <input type="file" name="photo" accept="image/jpeg,image/webp">
        </div>

        {{-- Régimes --}}
        <div class="form-group" style="margin-bottom:16px;">
            <label>Régimes alimentaires</label>
            <div class="admin-regimes-grid">
                @foreach($regimes as $regime)
                <label class="admin-regime-pill">
                    <input type="checkbox" name="regimes[]" value="{{ $regime->id }}"
                           {{ in_array($regime->id, old('regimes', $recette?->regimes->pluck('id')->toArray() ?? [])) ? 'checked' : '' }}>
                    <span>{{ $regime->nom_fr }}</span>
                </label>
                @endforeach
            </div>
        </div>

        {{-- Publication / Vedette --}}
        <div class="if-toggle-row">
            <label class="if-toggle">
                <input type="hidden" name="est_publiee" value="0">
                <input type="checkbox" name="est_publiee" value="1"
                       {{ old('est_publiee', $recette?->est_publiee) ? 'checked' : '' }}>
                <span class="if-toggle-track"></span>
                <span class="if-toggle-label">Publier la recette</span>
            </label>
            <label class="if-toggle">
                <input type="hidden" name="est_vedette" value="0">
                <input type="checkbox" name="est_vedette" value="1"
                       {{ old('est_vedette', $recette?->est_vedette) ? 'checked' : '' }}>
                <span class="if-toggle-track"></span>
                <span class="if-toggle-label">★ Mettre en vedette</span>
            </label>
        </div>
    </div>

    {{-- ── Ingrédients ── --}}
    <div class="admin-form-card if-card">
        <div class="if-section-head">
            <span class="if-section-title">Ingrédients</span>
            <button type="button" class="btn-admin btn-outline btn-sm if-btn-add" @click="addIngredient()">+ Ajouter</button>
        </div>

        <div class="if-ing-header">
            <span></span>
            <span>Ingrédient</span>
            <span>Qté</span>
            <span>Unité</span>
            <span>Précision FR</span>
            <span>Précision EN</span>
            <span></span>
            <span></span>
        </div>

        <template x-for="(ing, index) in ingredientsRows" :key="index">
            <div class="if-ing-row">
                <span class="if-ing-num" x-text="index + 1"></span>

                {{-- Combobox searchable --}}
                <div class="if-combobox" @click.outside="ing._open = false">
                    <input type="text"
                           class="if-combobox-input"
                           :value="ing._open ? ing._q : ingLabel(ing.ingredient_id)"
                           @focus="ing._open = true; ing._q = ''"
                           @input="ing._q = $event.target.value"
                           :placeholder="ing.ingredient_id ? ingLabel(ing.ingredient_id) : 'Chercher un ingrédient…'"
                           autocomplete="off">
                    <input type="hidden"
                           :name="'ingredients[' + index + '][ingredient_id]'"
                           :value="ing.ingredient_id" required>
                    <div class="if-combobox-dropdown" x-show="ing._open" x-cloak>
                        <template x-if="!ing._q || ing._q.length < 1">
                            <div class="if-combobox-hint">Tapez pour chercher…</div>
                        </template>
                        <template x-if="ing._q && ing._q.length >= 1 && filteredGroups(ing._q).length === 0">
                            <div class="if-combobox-empty">Aucun résultat</div>
                        </template>
                        <template x-for="group in filteredGroups(ing._q)" :key="group.cat">
                            <div>
                                <div class="if-combobox-cat" x-text="group.cat"></div>
                                <template x-for="item in group.items" :key="item.id">
                                    <button type="button" class="if-combobox-opt"
                                            @mousedown.prevent="ing.ingredient_id = item.id; ing._open = false; ing._q = ''"
                                            x-text="item.label">
                                    </button>
                                </template>
                            </div>
                        </template>
                    </div>
                </div>

                <input type="number"
                       :name="'ingredients[' + index + '][quantite]'"
                       x-model="ing.quantite"
                       step="0.1" min="0" required
                       placeholder="0">

                <select :name="'ingredients[' + index + '][unite_id]'" x-model="ing.unite_id" required>
                    @foreach($unites as $unite)
                    <option value="{{ $unite->id }}">{{ $unite->abreviation }} — {{ $unite->nom_fr }}</option>
                    @endforeach
                </select>

                <input type="text"
                       :name="'ingredients[' + index + '][precision_libre]'"
                       x-model="ing.precision_libre"
                       placeholder="ex. émincé, en dés…">

                <input type="text"
                       :name="'ingredients[' + index + '][precision_libre_en]'"
                       x-model="ing.precision_libre_en"
                       placeholder="ex. diced, chopped…">

                <div class="if-sort-btns">
                    <button type="button" class="if-sort-btn" @click="moveUp(ingredientsRows, index)" :disabled="index === 0" title="Monter">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
                    </button>
                    <button type="button" class="if-sort-btn" @click="moveDown(ingredientsRows, index)" :disabled="index === ingredientsRows.length - 1" title="Descendre">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                </div>

                <button type="button" class="if-btn-remove"
                        @click="removeIngredient(index)"
                        x-show="ingredientsRows.length > 1"
                        title="Supprimer">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
                <div x-show="ingredientsRows.length <= 1"></div>
            </div>
        </template>
    </div>

    {{-- ── Étapes ── --}}
    <div class="admin-form-card if-card">
        <div class="if-section-head">
            <span class="if-section-title">Étapes de préparation</span>
            <button type="button" class="btn-admin btn-outline btn-sm if-btn-add" @click="addEtape()">+ Ajouter</button>
        </div>

        <template x-for="(etape, index) in etapesRows" :key="index">
            <div class="if-etape-card">
                <div class="if-etape-head">
                    <span class="if-etape-num">Étape <span x-text="index + 1"></span></span>
                    <div style="display:flex; gap:6px; align-items:center;">
                        <button type="button" class="if-sort-btn" style="height:26px;" @click="moveUp(etapesRows, index)" :disabled="index === 0" title="Monter">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
                        </button>
                        <button type="button" class="if-sort-btn" style="height:26px;" @click="moveDown(etapesRows, index)" :disabled="index === etapesRows.length - 1" title="Descendre">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <button type="button" class="if-btn-remove"
                                @click="removeEtape(index)"
                                x-show="etapesRows.length > 1"
                                title="Supprimer l'étape">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </button>
                    </div>
                </div>
                <div class="form-grid-2" style="margin-bottom:12px;">
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Titre (FR) *</label>
                        <input type="text" :name="'etapes[' + index + '][titre_fr]'"
                               x-model="etape.titre_fr" required placeholder="ex. Préparer le bouillon">
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Titre (EN) *</label>
                        <input type="text" :name="'etapes[' + index + '][titre_en]'"
                               x-model="etape.titre_en" required placeholder="ex. Prepare the broth">
                    </div>
                </div>
                <div class="form-grid-2">
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Description (FR) *</label>
                        <textarea :name="'etapes[' + index + '][description_fr]'"
                                  x-model="etape.description_fr" rows="3" required
                                  placeholder="Décrivez cette étape…"></textarea>
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Description (EN) *</label>
                        <textarea :name="'etapes[' + index + '][description_en]'"
                                  x-model="etape.description_en" rows="3" required
                                  placeholder="Describe this step…"></textarea>
                    </div>
                </div>
            </div>
        </template>
    </div>

    {{-- ── Astuces ── --}}
    <div class="admin-form-card if-card">
        <div class="if-section-head">
            <span class="if-section-title">Astuces <span style="font-weight:400;text-transform:none;letter-spacing:0;opacity:.6;margin-left:4px;">— optionnel</span></span>
            <button type="button" class="btn-admin btn-outline btn-sm if-btn-add" @click="addAstuce()">+ Ajouter</button>
        </div>

        <template x-for="(astuce, index) in astucesRows" :key="index">
            <div class="if-astuce-row">
                <span class="if-ing-num" x-text="index + 1"></span>
                <div class="form-group" style="margin-bottom:0;">
                    <label style="font-size:.72em;" x-show="index === 0">FR</label>
                    <textarea :name="'astuces[' + index + '][description_fr]'"
                              x-model="astuce.description_fr" rows="2"
                              placeholder="Conseil, variante, conservation…"></textarea>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label style="font-size:.72em;" x-show="index === 0">EN</label>
                    <textarea :name="'astuces[' + index + '][description_en]'"
                              x-model="astuce.description_en" rows="2"
                              placeholder="Tip, variation, storage…"></textarea>
                </div>
                <div class="if-sort-btns" style="margin-top:2px;">
                    <button type="button" class="if-sort-btn" @click="moveUp(astucesRows, index)" :disabled="index === 0" title="Monter">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
                    </button>
                    <button type="button" class="if-sort-btn" @click="moveDown(astucesRows, index)" :disabled="index === astucesRows.length - 1" title="Descendre">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                </div>
                <button type="button" class="if-btn-remove" style="margin-top:2px;"
                        @click="removeAstuce(index)" title="Supprimer">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>
        </template>

        <div x-show="astucesRows.length === 0" class="if-empty-state">
            Aucune astuce — cliquez sur « + Ajouter » pour en ajouter une.
        </div>
    </div>

    {{-- Actions --}}
    <div class="if-form-actions">
        <button type="submit" class="btn-admin btn-save">
            {{ $recette ? '✓ Mettre à jour' : '✓ Créer la recette' }}
        </button>
        <a href="{{ route('admin.inari-fox.index') }}" class="btn-admin btn-outline">Annuler</a>
    </div>

</form>

@php
$initIngredients = old('ingredients');
if (!$initIngredients) {
    if ($recette && $recette->ingredients->isNotEmpty()) {
        $initIngredients = $recette->ingredients->map(fn($ri) => [
            'ingredient_id'     => $ri->ingredient_id,
            'quantite'          => $ri->quantite,
            'unite_id'          => $ri->unite_id,
            'precision_libre'   => $ri->precision_libre,
            'precision_libre_en'=> $ri->precision_libre_en,
        ])->values()->toArray();
    } else {
        $initIngredients = [['ingredient_id'=>'','quantite'=>'','unite_id'=>1,'precision_libre'=>'','precision_libre_en'=>'']];
    }
}

$initEtapes = old('etapes');
if (!$initEtapes) {
    if ($recette && $recette->etapes->isNotEmpty()) {
        $initEtapes = $recette->etapes->map(fn($e) => [
            'titre_fr'       => $e->titre_fr,
            'titre_en'       => $e->titre_en,
            'description_fr' => $e->description_fr,
            'description_en' => $e->description_en,
        ])->values()->toArray();
    } else {
        $initEtapes = [['titre_fr'=>'','titre_en'=>'','description_fr'=>'','description_en'=>'']];
    }
}

$initAstuces = old('astuces');
if (!$initAstuces) {
    if ($recette && $recette->astuces->isNotEmpty()) {
        $initAstuces = $recette->astuces->map(fn($a) => [
            'description_fr' => $a->description_fr,
            'description_en' => $a->description_en,
        ])->values()->toArray();
    } else {
        $initAstuces = [];
    }
}

$allIngredientsJson = $ingredients->map(fn($i) => [
    'id'    => $i->id,
    'label' => $i->nomComplet('fr'),
    'cat'   => $i->categorie->nom_fr,
])->values();
@endphp

@push('scripts')
<script>
function inariFoxForm() {
    return {
        allIngredients: @json($allIngredientsJson),

        ingredientsRows: @json($initIngredients).map(r => ({...r, _q: '', _open: false})),
        etapesRows:      @json($initEtapes),
        astucesRows:     @json($initAstuces),

        ingLabel(id) {
            const f = this.allIngredients.find(i => i.id == id);
            return f ? f.label : '';
        },

        filteredGroups(q) {
            if (!q || q.trim().length < 1) return [];
            const norm = s => s.toLowerCase()
                .replace(/œ/g, 'oe').replace(/Œ/g, 'oe')
                .replace(/æ/g, 'ae').replace(/Æ/g, 'ae')
                .normalize('NFD').replace(/[̀-ͯ]/g, '');
            const s = norm(q.trim());
            const matches = this.allIngredients.filter(i => norm(i.label + ' ' + i.cat).includes(s));
            const groups = {};
            for (const item of matches) {
                if (!groups[item.cat]) groups[item.cat] = [];
                groups[item.cat].push(item);
            }
            return Object.entries(groups).map(([cat, items]) => ({ cat, items }));
        },

        moveUp(arr, i)   { if (i > 0) arr.splice(i - 1, 0, arr.splice(i, 1)[0]); },
        moveDown(arr, i) { if (i < arr.length - 1) arr.splice(i + 1, 0, arr.splice(i, 1)[0]); },

        addIngredient() {
            this.ingredientsRows.push({ ingredient_id: '', quantite: '', unite_id: 1, precision_libre: '', precision_libre_en: '', _q: '', _open: false });
        },
        removeIngredient(i) { this.ingredientsRows.splice(i, 1); },

        addEtape() {
            this.etapesRows.push({ titre_fr: '', titre_en: '', description_fr: '', description_en: '' });
        },
        removeEtape(i) { if (this.etapesRows.length > 1) this.etapesRows.splice(i, 1); },

        addAstuce() {
            this.astucesRows.push({ description_fr: '', description_en: '' });
        },
        removeAstuce(i) { this.astucesRows.splice(i, 1); },
    };
}
</script>
@vite(['resources/js/inari-fox-admin.js'])
@endpush

@endsection
