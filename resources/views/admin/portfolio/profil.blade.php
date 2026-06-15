@extends('layouts.admin')
@section('title', 'Profil')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Profil</div>
<p class="admin-page-sub">$ edit portfolio/profil</p>

@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

<form method="POST" action="{{ route('admin.portfolio.profil.save') }}" id="profilForm">
    @csrf

    <div class="admin-form-card" style="margin-top:24px; margin-bottom:20px;">
        <div class="section-label">// Objectif professionnel</div>
        <div class="form-group" style="margin-bottom:0;">
            <textarea name="objectif" rows="3" required>{{ old('objectif', $profil->objectif) }}</textarea>
        </div>
    </div>

    <div class="admin-form-card" style="margin-bottom:20px;">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;">
            <div class="section-label">// Lignes d'information</div>
            <button type="button" class="btn-admin btn-outline" id="addInfoRow">+ Ajouter une ligne</button>
        </div>
        <div id="infoRows">
            @foreach(($profil->infos ?? []) as $i => $row)
            <div class="info-row" style="display:grid; grid-template-columns:160px 100px 1fr 40px; gap:8px; margin-bottom:8px; align-items:start;">
                <input type="text" name="infos[{{ $i }}][cle]" value="{{ $row['cle'] }}" placeholder="Clé" required>
                <select name="infos[{{ $i }}][type]" class="type-select" onchange="toggleType(this)">
                    <option value="val"  {{ !isset($row['lien']) ? 'selected' : '' }}>Texte</option>
                    <option value="lien" {{ isset($row['lien'])  ? 'selected' : '' }}>Lien</option>
                </select>
                <div class="val-group" style="{{ isset($row['lien']) ? 'display:none;' : '' }}">
                    <input type="text" name="infos[{{ $i }}][val]" value="{{ $row['val'] ?? '' }}" placeholder="Valeur" style="width:100%;">
                </div>
                <div class="lien-group" style="{{ isset($row['lien']) ? 'display:grid; grid-template-columns:1fr 1fr; gap:6px;' : 'display:none;' }}">
                    <input type="url"  name="infos[{{ $i }}][href]"  value="{{ $row['lien']['href']  ?? '' }}" placeholder="https://...">
                    <input type="text" name="infos[{{ $i }}][label]" value="{{ $row['lien']['label'] ?? '' }}" placeholder="Label">
                </div>
                <button type="button" class="btn-admin btn-delete" onclick="this.closest('.info-row').remove()" style="padding:8px 10px; margin-top:0;">✕</button>
            </div>
            @endforeach
        </div>
    </div>

    <button type="submit" class="btn-admin btn-save">Enregistrer</button>
</form>

<template id="tplRow">
<div class="info-row" style="display:grid; grid-template-columns:160px 100px 1fr 40px; gap:8px; margin-bottom:8px; align-items:start;">
    <input type="text" name="infos[IDX][cle]" placeholder="Clé" required>
    <select name="infos[IDX][type]" class="type-select" onchange="toggleType(this)">
        <option value="val">Texte</option><option value="lien">Lien</option>
    </select>
    <div class="val-group"><input type="text" name="infos[IDX][val]" placeholder="Valeur"></div>
    <div class="lien-group" style="display:none; grid-template-columns:1fr 1fr; gap:6px;">
        <input type="url"  name="infos[IDX][href]"  placeholder="https://...">
        <input type="text" name="infos[IDX][label]" placeholder="Label">
    </div>
    <button type="button" class="btn-admin btn-delete" onclick="this.closest('.info-row').remove()" style="padding:8px 10px;">✕</button>
</div>
</template>

<script>
let idx = {{ count($profil->infos ?? []) }};
document.getElementById('addInfoRow').onclick = () => {
    document.getElementById('infoRows').insertAdjacentHTML('beforeend',
        document.getElementById('tplRow').innerHTML.replaceAll('IDX', idx++));
};
function toggleType(sel) {
    const row = sel.closest('.info-row');
    const isLien = sel.value === 'lien';
    row.querySelector('.val-group').style.display  = isLien ? 'none'  : '';
    row.querySelector('.lien-group').style.display = isLien ? 'grid' : 'none';
}
</script>
@endsection
