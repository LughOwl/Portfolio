@extends('layouts.admin')
@section('title', 'Inari-Fox — Référentiel')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#c80000;">//</span> Inari-Fox — Référentiel
</div>
<p class="admin-page-sub">$ manage sites/inari-fox/referentiel — ingrédients, unités, régimes</p>

<div style="margin-bottom:20px;">
    <a href="{{ route('admin.inari-fox.index') }}" class="btn-admin btn-outline btn-sm">← Retour aux recettes</a>
</div>

@if(session('success'))
<div class="admin-alert success">✓ {{ session('success') }}</div>
@endif
@if(session('error'))
<div class="admin-alert error">✕ {{ session('error') }}</div>
@endif

{{-- ── Ingrédients par catégorie ── --}}
<div class="admin-form-card" style="margin-bottom:24px;">
    <div class="section-label" style="margin-bottom:16px;">// Ingrédients</div>

    {{-- Ajouter un ingrédient --}}
    <form method="POST" action="{{ route('admin.inari-fox.ingredient.store') }}"
          style="display:grid; grid-template-columns:1fr 1fr 1fr 1fr 140px 80px; gap:8px; align-items:end; margin-bottom:20px;">
        @csrf
        <div class="form-group" style="margin-bottom:0;">
            <label>Nom FR *</label>
            <input type="text" name="nom_fr" required placeholder="ex. Carotte" value="{{ old('nom_fr') }}">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Nom EN *</label>
            <input type="text" name="nom_en" required placeholder="ex. Carrot" value="{{ old('nom_en') }}">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Précision FR</label>
            <input type="text" name="precision_fr" placeholder="ex. Fumé" value="{{ old('precision_fr') }}">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Précision EN</label>
            <input type="text" name="precision_en" placeholder="ex. Smoked" value="{{ old('precision_en') }}">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Catégorie *</label>
            <select name="categorie_id" required>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ old('categorie_id') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->icone }} {{ $cat->nom_fr }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn-admin btn-save" style="width:100%;">Ajouter</button>
        </div>
    </form>

    {{-- Liste par catégorie --}}
    @foreach($categories as $cat)
    @if($cat->ingredients->isNotEmpty())
    <div style="margin-bottom:20px;">
        <div style="font-size:.78em; font-weight:700; color:#c80000; font-family:'JetBrains Mono',monospace; text-transform:uppercase; letter-spacing:.06em; margin-bottom:8px;">
            {{ $cat->icone }} {{ $cat->nom_fr }} ({{ $cat->ingredients->count() }})
        </div>
        <div style="overflow-x:auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nom FR</th>
                        <th>Nom EN</th>
                        <th>Précision FR</th>
                        <th>Précision EN</th>
                        <th style="width:120px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cat->ingredients->sortBy('nom_fr') as $ing)
                    <tr>
                        <td>{{ $ing->nom_fr }}</td>
                        <td>{{ $ing->nom_en }}</td>
                        <td style="color:var(--tx-3);">{{ $ing->precision_fr ?? '—' }}</td>
                        <td style="color:var(--tx-3);">{{ $ing->precision_en ?? '—' }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.inari-fox.ingredient.destroy', $ing->id) }}"
                                  onsubmit="return confirm('Supprimer « {{ addslashes($ing->nom_fr) }} » ?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn-admin btn-danger btn-sm">Suppr.</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    @endforeach
</div>

{{-- ── Unités ── --}}
<div class="admin-form-card" style="margin-bottom:24px;">
    <div class="section-label" style="margin-bottom:16px;">// Unités de mesure</div>

    <form method="POST" action="{{ route('admin.inari-fox.unite.store') }}"
          style="display:grid; grid-template-columns:1fr 1fr 100px auto 80px; gap:8px; align-items:end; margin-bottom:16px;">
        @csrf
        <div class="form-group" style="margin-bottom:0;">
            <label>Nom FR *</label>
            <input type="text" name="nom_fr" required placeholder="ex. Gramme">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Nom EN *</label>
            <input type="text" name="nom_en" required placeholder="ex. Gram">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Abréviation *</label>
            <input type="text" name="abreviation" required placeholder="g">
        </div>
        <label style="display:flex; align-items:center; gap:6px; font-weight:400; text-transform:none; color:var(--tx-2); white-space:nowrap;">
            <input type="checkbox" name="disponible_en" value="1" checked>
            <span>Dispo EN</span>
        </label>
        <div>
            <button type="submit" class="btn-admin btn-save" style="width:100%;">Ajouter</button>
        </div>
    </form>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nom FR</th>
                <th>Nom EN</th>
                <th>Abrév.</th>
                <th style="width:80px;">EN</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unites as $unite)
            <tr>
                <td>{{ $unite->nom_fr }}</td>
                <td>{{ $unite->nom_en }}</td>
                <td style="font-family:'JetBrains Mono',monospace; color:#c80000;">{{ $unite->abreviation }}</td>
                <td style="text-align:center;">{{ $unite->disponible_en ? '✓' : '—' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- ── Régimes ── --}}
<div class="admin-form-card" style="margin-bottom:24px;">
    <div class="section-label" style="margin-bottom:16px;">// Régimes alimentaires</div>

    <form method="POST" action="{{ route('admin.inari-fox.regime.store') }}"
          style="display:grid; grid-template-columns:1fr 1fr 60px 80px; gap:8px; align-items:end; margin-bottom:16px;">
        @csrf
        <div class="form-group" style="margin-bottom:0;">
            <label>Nom FR *</label>
            <input type="text" name="nom_fr" required placeholder="ex. Vegan">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Nom EN *</label>
            <input type="text" name="nom_en" required placeholder="ex. Vegan">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Icône</label>
            <input type="text" name="icone" placeholder="🌱" maxlength="10">
        </div>
        <div>
            <button type="submit" class="btn-admin btn-save" style="width:100%;">Ajouter</button>
        </div>
    </form>

    <table class="admin-table">
        <thead>
            <tr>
                <th style="width:50px;">Icône</th>
                <th>Nom FR</th>
                <th>Nom EN</th>
            </tr>
        </thead>
        <tbody>
            @foreach($regimes as $regime)
            <tr>
                <td style="text-align:center;">{{ $regime->icone }}</td>
                <td>{{ $regime->nom_fr }}</td>
                <td>{{ $regime->nom_en }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
