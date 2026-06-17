@extends('layouts.admin')
@section('title', $recette ? 'Modifier : ' . $recette->titre_fr : 'Nouvelle recette — Inari-Fox')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#c80000;">//</span>
    {{ $recette ? 'Modifier : ' . $recette->titre_fr : 'Nouvelle recette' }}
</div>
<p class="admin-page-sub">$ manage sites/inari-fox/recettes{{ $recette ? '/' . $recette->id : '/create' }}</p>

<div style="margin-bottom:16px;">
    <a href="{{ route('admin.inari-fox.index') }}" class="btn-admin btn-outline btn-sm">← Retour aux recettes</a>
</div>

@if($errors->any())
<div class="admin-alert error" style="margin-bottom:24px;">
    @foreach($errors->all() as $error)
    <div>✕ {{ $error }}</div>
    @endforeach
</div>
@endif

<form method="POST"
      action="{{ $recette ? route('admin.inari-fox.recette.update', $recette->id) : route('admin.inari-fox.recette.store') }}"
      enctype="multipart/form-data"
      x-data="inariFoxForm()">
    @csrf
    @if($recette) @method('PUT') @endif

    {{-- ── Informations générales ── --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div class="section-label" style="margin-bottom:16px;">// Informations générales</div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Titre (FR) *</label>
                <input type="text" name="titre_fr" required
                       value="{{ old('titre_fr', $recette?->titre_fr) }}"
                       placeholder="ex. Ramen de canard confit">
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Titre (EN) *</label>
                <input type="text" name="titre_en" required
                       value="{{ old('titre_en', $recette?->titre_en) }}"
                       placeholder="ex. Duck confit ramen">
            </div>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Description (FR)</label>
                <textarea name="description_fr" rows="3"
                          placeholder="Courte description...">{{ old('description_fr', $recette?->description_fr) }}</textarea>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Description (EN)</label>
                <textarea name="description_en" rows="3"
                          placeholder="Short description...">{{ old('description_en', $recette?->description_en) }}</textarea>
            </div>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:16px; margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Catégorie *</label>
                <select name="categorie" required>
                    @foreach(['entree'=>'Entrée','plat_principal'=>'Plat principal','dessert'=>'Dessert','accompagnement'=>'Accompagnement','petit_dejeuner'=>'Petit-déjeuner','encas_gouter'=>'Encas / Goûter','aperitif'=>'Apéritif','boisson'=>'Boisson'] as $val => $label)
                    <option value="{{ $val }}" {{ old('categorie', $recette?->categorie) === $val ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Difficulté *</label>
                <select name="difficulte" required>
                    @foreach(['facile'=>'Facile','moyen'=>'Moyen','difficile'=>'Difficile'] as $val => $label)
                    <option value="{{ $val }}" {{ old('difficulte', $recette?->difficulte ?? 'moyen') === $val ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Nombre de portions *</label>
                <input type="number" name="nb_personnes" min="1" max="100" required
                       value="{{ old('nb_personnes', $recette?->nb_personnes ?? 4) }}">
            </div>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:16px; margin-bottom:16px;">
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
                <label>Repos (min) *</label>
                <input type="number" name="temps_repos" min="0" max="9999" required
                       value="{{ old('temps_repos', $recette?->temps_repos ?? 0) }}">
            </div>
        </div>

        {{-- Photo --}}
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Photo (JPG/WebP, max 2 Mo)</label>
                @if($recette?->photo)
                    <div style="margin-bottom:8px;">
                        <img src="{{ $recette->photoUrl() }}" alt="Photo actuelle"
                             style="height:80px; width:auto; border-radius:4px; border:1px solid var(--bd);">
                    </div>
                @endif
                <input type="file" name="photo" accept="image/jpeg,image/webp">
            </div>
        </div>

        {{-- Régimes --}}
        <div class="form-group" style="margin-bottom:0;">
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

        <style>
        .admin-regimes-grid { display:flex; flex-wrap:wrap; gap:8px; margin-top:8px; }
        .admin-regime-pill { display:flex; align-items:center; padding:5px 14px; border:1px solid var(--bd); border-radius:20px; cursor:pointer; font-size:.83rem; font-weight:400; color:var(--tx-2); text-transform:none; background:var(--bg-2); transition:border-color .15s, background .15s, color .15s; user-select:none; }
        .admin-regime-pill input[type="checkbox"] { display:none; }
        .admin-regime-pill:has(input:checked) { border-color:#c80000; background:#c800001a; color:#c80000; font-weight:500; }
        </style>

        {{-- Publication / Vedette --}}
        <div style="display:flex; gap:24px; margin-top:16px;">
            <label style="display:flex; align-items:center; gap:8px; font-weight:400; text-transform:none; cursor:pointer; color:var(--tx-2);">
                <input type="hidden" name="est_publiee" value="0">
                <input type="checkbox" name="est_publiee" value="1"
                       {{ old('est_publiee', $recette?->est_publiee) ? 'checked' : '' }}>
                <span>Publier la recette</span>
            </label>
            <label style="display:flex; align-items:center; gap:8px; font-weight:400; text-transform:none; cursor:pointer; color:var(--tx-2);">
                <input type="hidden" name="est_vedette" value="0">
                <input type="checkbox" name="est_vedette" value="1"
                       {{ old('est_vedette', $recette?->est_vedette) ? 'checked' : '' }}>
                <span>★ Mettre en vedette</span>
            </label>
        </div>
    </div>

    {{-- ── Ingrédients ── --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;">
            <div class="section-label">// Ingrédients</div>
            <button type="button" class="btn-admin btn-outline btn-sm" @click="addIngredient()">+ Ajouter</button>
        </div>

        <div id="ingredients-list">
            <template x-for="(ing, index) in ingredientsRows" :key="index">
                <div class="if-admin-row" style="display:grid; grid-template-columns:2fr 80px 1fr 1fr 36px; gap:8px; align-items:start; margin-bottom:10px;">
                    <div class="form-group" style="margin-bottom:0;">
                        <label style="font-size:.75em;" x-show="index === 0">Ingrédient *</label>
                        <select :name="'ingredients[' + index + '][ingredient_id]'" x-model="ing.ingredient_id" required>
                            <option value="">— Choisir —</option>
                            @foreach($ingredients->groupBy(fn($i) => $i->categorie->nom_fr) as $catNom => $group)
                            <optgroup label="{{ $catNom }}">
                                @foreach($group as $ing)
                                <option value="{{ $ing->id }}">{{ $ing->nomComplet('fr') }}</option>
                                @endforeach
                            </optgroup>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label style="font-size:.75em;" x-show="index === 0">Quantité *</label>
                        <input type="number" :name="'ingredients[' + index + '][quantite]'"
                               x-model="ing.quantite" step="0.1" min="0" required>
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label style="font-size:.75em;" x-show="index === 0">Unité *</label>
                        <select :name="'ingredients[' + index + '][unite_id]'" x-model="ing.unite_id" required>
                            @foreach($unites as $unite)
                            <option value="{{ $unite->id }}">{{ $unite->abreviation }} ({{ $unite->nom_fr }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label style="font-size:.75em;" x-show="index === 0">Précision libre</label>
                        <input type="text" :name="'ingredients[' + index + '][precision_libre]'"
                               x-model="ing.precision_libre" placeholder="ex. émincé finement">
                    </div>
                    <div style="padding-top:22px;" x-show="index > 0 || ingredientsRows.length > 1">
                        <button type="button" class="btn-admin btn-danger btn-sm"
                                @click="removeIngredient(index)" title="Supprimer">×</button>
                    </div>
                </div>
            </template>
        </div>
    </div>

    {{-- ── Étapes ── --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;">
            <div class="section-label">// Étapes de préparation</div>
            <button type="button" class="btn-admin btn-outline btn-sm" @click="addEtape()">+ Ajouter</button>
        </div>

        <template x-for="(etape, index) in etapesRows" :key="index">
            <div class="admin-form-card" style="background:var(--bg-2); margin-bottom:14px; padding:14px;">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:10px;">
                    <span style="font-size:.8em; font-weight:700; color:#c80000; font-family:'JetBrains Mono',monospace;">
                        Étape <span x-text="index + 1"></span>
                    </span>
                    <button type="button" class="btn-admin btn-danger btn-sm"
                            @click="removeEtape(index)" x-show="etapesRows.length > 1">Supprimer</button>
                </div>
                <div style="display:grid; grid-template-columns:1fr 1fr 80px; gap:10px; margin-bottom:10px;">
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
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Durée (min)</label>
                        <input type="number" :name="'etapes[' + index + '][duree]'"
                               x-model="etape.duree" min="0" placeholder="—">
                    </div>
                </div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px;">
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Description (FR) *</label>
                        <textarea :name="'etapes[' + index + '][description_fr]'"
                                  x-model="etape.description_fr" rows="3" required
                                  placeholder="Décrivez cette étape..."></textarea>
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Description (EN) *</label>
                        <textarea :name="'etapes[' + index + '][description_en]'"
                                  x-model="etape.description_en" rows="3" required
                                  placeholder="Describe this step..."></textarea>
                    </div>
                </div>
            </div>
        </template>
    </div>

    {{-- ── Astuces ── --}}
    <div class="admin-form-card" style="margin-bottom:24px;">
        <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;">
            <div class="section-label">// Astuces <span style="font-weight:400; text-transform:none; font-size:.85em; color:var(--tx-3);">(optionnel)</span></div>
            <button type="button" class="btn-admin btn-outline btn-sm" @click="addAstuce()">+ Ajouter</button>
        </div>

        <template x-for="(astuce, index) in astucesRows" :key="index">
            <div style="display:grid; grid-template-columns:1fr 1fr 36px; gap:10px; margin-bottom:10px; align-items:start;">
                <div class="form-group" style="margin-bottom:0;">
                    <label style="font-size:.75em;" x-show="index === 0">Astuce (FR)</label>
                    <textarea :name="'astuces[' + index + '][description_fr]'"
                              x-model="astuce.description_fr" rows="2"
                              placeholder="Conseil, variante, conservation..."></textarea>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label style="font-size:.75em;" x-show="index === 0">Astuce (EN)</label>
                    <textarea :name="'astuces[' + index + '][description_en]'"
                              x-model="astuce.description_en" rows="2"
                              placeholder="Tip, variation, storage..."></textarea>
                </div>
                <div style="padding-top:22px;">
                    <button type="button" class="btn-admin btn-danger btn-sm"
                            @click="removeAstuce(index)">×</button>
                </div>
            </div>
        </template>
    </div>

    {{-- Actions --}}
    <div style="display:flex; gap:12px; align-items:center;">
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
            'ingredient_id'   => $ri->ingredient_id,
            'quantite'        => $ri->quantite,
            'unite_id'        => $ri->unite_id,
            'precision_libre' => $ri->precision_libre,
        ])->values()->toArray();
    } else {
        $initIngredients = [['ingredient_id'=>'','quantite'=>'','unite_id'=>1,'precision_libre'=>'']];
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
            'duree'          => $e->duree,
        ])->values()->toArray();
    } else {
        $initEtapes = [['titre_fr'=>'','titre_en'=>'','description_fr'=>'','description_en'=>'','duree'=>'']];
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
@endphp

@push('scripts')
<script>
function inariFoxForm() {
    return {
        ingredientsRows: @json($initIngredients),
        etapesRows:      @json($initEtapes),
        astucesRows:     @json($initAstuces),

        addIngredient() {
            this.ingredientsRows.push({ingredient_id:'', quantite:'', unite_id:1, precision_libre:''});
        },
        removeIngredient(i) { this.ingredientsRows.splice(i, 1); },

        addEtape() {
            this.etapesRows.push({titre_fr:'', titre_en:'', description_fr:'', description_en:'', duree:''});
        },
        removeEtape(i) { if (this.etapesRows.length > 1) this.etapesRows.splice(i, 1); },

        addAstuce() {
            this.astucesRows.push({description_fr:'', description_en:''});
        },
        removeAstuce(i) { this.astucesRows.splice(i, 1); },
    };
}
</script>
@vite(['resources/js/inari-fox-admin.js'])
@endpush

@endsection
