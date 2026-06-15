@extends('layouts.admin')
@section('title', 'Objectifs')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Objectifs & Parcours</div>
<p class="admin-page-sub">$ edit portfolio/objectifs</p>

@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

@foreach($objectifs as $obj)
<div class="admin-form-card" style="margin-top:24px; border-top:3px solid {{ $obj->badge_color === 'green' ? '#00ff88' : '#4d96ff' }};">
    <div class="section-label" style="margin-bottom:18px;">Priorité {{ $obj->priorite }} — {{ $obj->label_terme }}</div>

    <form method="POST" action="{{ route('admin.portfolio.objectif.save', $obj->id) }}">
        @csrf
        <div class="form-grid-2">
            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="titre" value="{{ $obj->titre }}" required>
            </div>
            <div class="form-group">
                <label>Terme affiché</label>
                <input type="text" name="label_terme" value="{{ $obj->label_terme }}" required>
            </div>
        </div>
        <div class="form-grid-2">
            <div class="form-group">
                <label>Texte du badge</label>
                <input type="text" name="type" value="{{ $obj->type }}" required>
            </div>
            <div class="form-group">
                <label>Couleur badge</label>
                <select name="badge_color">
                    @foreach(['green','blue','cyan','purple','orange','gray'] as $c)
                    <option value="{{ $c }}" {{ $obj->badge_color === $c ? 'selected' : '' }}>{{ ucfirst($c) }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="section-label" style="margin:18px 0 12px;">Détails</div>
        <div id="det-{{ $obj->id }}">
            @foreach($obj->details as $d => $detail)
            <div class="det-row">
                <input type="text" name="details[{{ $d }}][cle]" value="{{ $detail['cle'] }}" placeholder="Clé">
                <input type="text" name="details[{{ $d }}][val]" value="{{ $detail['val'] }}" placeholder="Valeur">
                <button type="button" class="btn-admin btn-delete btn-icon" onclick="this.closest('.det-row').remove()">✕</button>
            </div>
            @endforeach
        </div>
        <button type="button" class="btn-admin btn-outline btn-sm" style="margin-bottom:20px;"
            onclick="addDet('{{ $obj->id }}')">+ Ajouter un détail</button>

        <div class="form-actions">
            <button type="submit" class="btn-admin btn-save">Enregistrer</button>
        </div>
    </form>
</div>
@endforeach

<script>
const dc = { @foreach($objectifs as $obj)'{{ $obj->id }}': {{ count($obj->details) }},@endforeach };
function addDet(id) {
    const i = dc[id]++;
    document.getElementById('det-'+id).insertAdjacentHTML('beforeend',
    `<div class="det-row">
        <input type="text" name="details[${i}][cle]" placeholder="Clé">
        <input type="text" name="details[${i}][val]" placeholder="Valeur">
        <button type="button" class="btn-admin btn-delete btn-icon" onclick="this.closest('.det-row').remove()">✕</button>
    </div>`);
}
</script>
@endsection
