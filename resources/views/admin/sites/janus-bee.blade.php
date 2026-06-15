@extends('layouts.admin')
@section('title', 'Janus-Bee — Catalogue')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#ffdc00;">//</span> Janus-Bee — Catalogue
</div>
<p class="admin-page-sub">$ manage sites/janus-bee — {{ $oeuvres->total() }} œuvre{{ $oeuvres->total() > 1 ? 's' : '' }}</p>

@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

{{-- FILTRES --}}
<form method="GET" action="{{ route('admin.janus-bee.index') }}" class="admin-form-card" style="margin-top:20px; display:flex; flex-wrap:wrap; gap:12px; align-items:flex-end;">
    <div class="form-group" style="flex:2; min-width:200px; margin:0;">
        <label>Recherche</label>
        <input type="text" name="q" value="{{ $search }}" placeholder="Titre, titre alternatif…">
    </div>
    <div class="form-group" style="flex:1; min-width:160px; margin:0;">
        <label>Type</label>
        <select name="type">
            <option value="">Tous les types</option>
            @foreach($types as $t)
            <option value="{{ $t->nom }}" {{ $typeF === $t->nom ? 'selected' : '' }}>{{ $t->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group" style="flex:1; min-width:160px; margin:0;">
        <label>Genre</label>
        <select name="genre">
            <option value="">Tous les genres</option>
            @foreach($genres as $g)
            <option value="{{ $g->nom }}" {{ $genreF === $g->nom ? 'selected' : '' }}>{{ $g->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group" style="flex:1; min-width:140px; margin:0;">
        <label>Statut</label>
        <select name="status">
            <option value="">Tous</option>
            @foreach($statuts as $s)
            <option value="{{ $s }}" {{ $statusF === $s ? 'selected' : '' }}>{{ $s }}</option>
            @endforeach
        </select>
    </div>
    <div style="display:flex; gap:8px; padding-bottom:1px;">
        <button type="submit" class="btn-admin btn-save">Filtrer</button>
        @if($search || $typeF || $genreF || $statusF)
        <a href="{{ route('admin.janus-bee.index') }}" class="btn-admin btn-outline">Réinitialiser</a>
        @endif
    </div>
</form>

{{-- BOUTON AJOUTER --}}
<div style="display:flex; justify-content:flex-end; margin:16px 0 8px;">
    <a href="{{ route('admin.janus-bee.create') }}" class="btn-admin btn-save">+ Ajouter une œuvre</a>
</div>

{{-- TABLEAU --}}
<div class="admin-form-card" style="max-width:none; padding:0; overflow:hidden;">
    <div style="overflow-x:auto;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:60px;">Image</th>
                    <th>Titre</th>
                    <th>Types</th>
                    <th>Genres</th>
                    <th>Sortie</th>
                    <th>Statut</th>
                    <th style="width:130px;">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($oeuvres as $o)
            <tr>
                <td style="padding:6px 10px;">
                    @if($o->image)
                    <img src="/assets/Janus-Bee/{{ $o->image }}" alt=""
                        style="width:44px; height:60px; object-fit:cover; border-radius:4px; display:block;">
                    @else
                    <div style="width:44px; height:60px; background:var(--bg); border:1px solid var(--bd); border-radius:4px;"></div>
                    @endif
                </td>
                <td>
                    <span style="font-weight:600; font-size:.9em;">{{ $o->titre }}</span>
                    @if($o->titres_alternatifs)
                    <span style="display:block; font-size:.72em; color:var(--tx-3); margin-top:2px;">
                        {{ implode(' · ', $o->titres_alternatifs) }}
                    </span>
                    @endif
                </td>
                <td class="td-muted" style="font-size:.78em;">{{ $o->types->pluck('nom')->implode(', ') ?: '—' }}</td>
                <td class="td-muted" style="font-size:.78em;">{{ $o->genres->pluck('nom')->implode(', ') ?: '—' }}</td>
                <td class="td-code" style="font-size:.8em; white-space:nowrap;">{{ $o->sortie ?? '—' }}</td>
                <td>
                    @php $sc = match($o->status) { 'Terminé' => 'blue', 'En cours' => 'green', default => null }; @endphp
                    @if($sc)
                        <span class="badge-mini {{ $sc }}">{{ $o->status }}</span>
                    @else
                        <span class="badge-mini" style="color:var(--tx-3); border-color:rgba(255,255,255,.1);">{{ $o->status ?? '—' }}</span>
                    @endif
                </td>
                <td>
                    <div class="td-actions">
                        <a href="{{ route('admin.janus-bee.edit', $o->id) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                        <form method="POST" action="{{ route('admin.janus-bee.destroy', $o->id) }}"
                            onsubmit="return confirm('Supprimer « {{ addslashes($o->titre) }} » ?')">
                            @csrf @method('DELETE')
                            <button class="btn-admin btn-delete btn-sm">Suppr.</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align:center; padding:40px; color:var(--tx-3);">Aucune œuvre trouvée.</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- PAGINATION --}}
@if($oeuvres->hasPages())
<div style="margin-top:20px; display:flex; justify-content:center; gap:6px; flex-wrap:wrap;">
    @if($oeuvres->onFirstPage())
        <span class="btn-admin btn-outline btn-sm" style="opacity:.35;">← Préc.</span>
    @else
        <a href="{{ $oeuvres->previousPageUrl() }}" class="btn-admin btn-outline btn-sm">← Préc.</a>
    @endif
    @foreach($oeuvres->getUrlRange(max(1, $oeuvres->currentPage()-3), min($oeuvres->lastPage(), $oeuvres->currentPage()+3)) as $page => $url)
        @if($page === $oeuvres->currentPage())
            <span class="btn-admin btn-save btn-sm" style="pointer-events:none;">{{ $page }}</span>
        @else
            <a href="{{ $url }}" class="btn-admin btn-outline btn-sm">{{ $page }}</a>
        @endif
    @endforeach
    @if($oeuvres->hasMorePages())
        <a href="{{ $oeuvres->nextPageUrl() }}" class="btn-admin btn-outline btn-sm">Suiv. →</a>
    @else
        <span class="btn-admin btn-outline btn-sm" style="opacity:.35;">Suiv. →</span>
    @endif
</div>
@endif

{{-- TYPES & GENRES --}}
<div style="display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:32px;">
    <div class="admin-form-card">
        <div class="section-label" style="margin-bottom:14px;">// Types</div>
        <div style="display:flex; flex-wrap:wrap; gap:8px; margin-bottom:16px;">
            @foreach($types as $t)
            <span style="display:inline-flex; align-items:center; gap:6px; background:rgba(255,220,0,.1); border:1px solid rgba(255,220,0,.3); border-radius:6px; padding:4px 10px; font-size:.8em; color:#ffdc00;">
                {{ $t->nom }}
                <form method="POST" action="{{ route('admin.janus-bee.type.destroy', $t->id) }}" onsubmit="return confirm('Supprimer ce type ?')" style="display:inline;">
                    @csrf @method('DELETE')
                    <button style="background:none; border:none; color:#ff5757; cursor:pointer; padding:0; font-size:.85em;">✕</button>
                </form>
            </span>
            @endforeach
        </div>
        <form method="POST" action="{{ route('admin.janus-bee.type.store') }}" style="display:flex; gap:8px;">
            @csrf
            <input type="text" name="nom" placeholder="Nouveau type…" style="flex:1;">
            <button class="btn-admin btn-save btn-sm">Ajouter</button>
        </form>
    </div>
    <div class="admin-form-card">
        <div class="section-label" style="margin-bottom:14px;">// Genres</div>
        <div style="display:flex; flex-wrap:wrap; gap:8px; margin-bottom:16px;">
            @foreach($genres as $g)
            <span style="display:inline-flex; align-items:center; gap:6px; background:rgba(77,150,255,.1); border:1px solid rgba(77,150,255,.3); border-radius:6px; padding:4px 10px; font-size:.8em; color:#4d96ff;">
                {{ $g->nom }}
                <form method="POST" action="{{ route('admin.janus-bee.genre.destroy', $g->id) }}" onsubmit="return confirm('Supprimer ce genre ?')" style="display:inline;">
                    @csrf @method('DELETE')
                    <button style="background:none; border:none; color:#ff5757; cursor:pointer; padding:0; font-size:.85em;">✕</button>
                </form>
            </span>
            @endforeach
        </div>
        <form method="POST" action="{{ route('admin.janus-bee.genre.store') }}" style="display:flex; gap:8px;">
            @csrf
            <input type="text" name="nom" placeholder="Nouveau genre…" style="flex:1;">
            <button class="btn-admin btn-save btn-sm">Ajouter</button>
        </form>
    </div>
</div>

@endsection
