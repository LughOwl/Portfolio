@extends('layouts.admin')

@section('title', 'Admin — Lugh-Owl')

@section('content')
<div class="page-header">
    <h1 class="page-title">
        <span style="color:#0078ff">●</span> Lugh-Owl — Articles
    </h1>
    <a href="{{ route('admin.lugh-owl.create') }}" class="btn btn-primary">+ Nouvel article</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

{{-- FILTRES --}}
<form method="GET" action="{{ route('admin.lugh-owl.index') }}" class="filter-form" id="filterForm">
    <input type="text" name="search" value="{{ $search }}" placeholder="Rechercher un article..." class="form-control form-control-sm">
    <select name="categorie" class="form-control form-control-sm" onchange="this.form.submit()">
        <option value="">Toutes les categories</option>
        <option value="modeles" {{ $categorie === 'modeles' ? 'selected' : '' }}>Modeles philosophiques</option>
        <option value="idees" {{ $categorie === 'idees' ? 'selected' : '' }}>Idees immuables</option>
        <option value="vie" {{ $categorie === 'vie' ? 'selected' : '' }}>La Vie est [...]</option>
    </select>
    <button type="submit" class="btn btn-sm btn-secondary">Filtrer</button>
    @if($search || $categorie)
    <a href="{{ route('admin.lugh-owl.index') }}" class="btn btn-sm btn-secondary">Reinitialiser</a>
    @endif
</form>

{{-- TABLEAU --}}
<div class="table-responsive">
<table class="admin-table">
    <thead>
        <tr>
            <th style="width:56px">Image</th>
            <th>Titre</th>
            <th style="width:140px">Categorie</th>
            <th style="width:80px">Ordre</th>
            <th style="width:80px">Statut</th>
            <th style="width:130px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($articles as $article)
        <tr>
            <td>
                @if($article->image)
                <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="" style="width:50px;height:50px;object-fit:cover;border-radius:4px;">
                @else
                <div style="width:50px;height:50px;background:#1a1a2e;border-radius:4px;"></div>
                @endif
            </td>
            <td>
                <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" target="_blank" style="font-weight:600">{{ $article->titre }}</a>
                <div style="font-size:0.8em;color:#888;font-family:monospace">{{ $article->slug }}</div>
            </td>
            <td>
                @php
                $catColors = ['modeles' => '#0078ff', 'idees' => '#9b59b6', 'vie' => '#27ae60'];
                $catLabels = ['modeles' => 'Modele', 'idees' => 'Idee', 'vie' => 'Vie'];
                @endphp
                <span class="badge" style="background:{{ $catColors[$article->categorie] ?? '#888' }}">
                    {{ $catLabels[$article->categorie] ?? $article->categorie }}
                </span>
            </td>
            <td>
                <div style="display:flex;gap:4px;align-items:center">
                    <form method="POST" action="{{ route('admin.lugh-owl.move', $article->id) }}">
                        @csrf
                        <input type="hidden" name="direction" value="up">
                        <button type="submit" class="btn-sm btn-secondary" title="Monter">&#9650;</button>
                    </form>
                    <span style="font-size:0.85em;min-width:20px;text-align:center">{{ $article->ordre }}</span>
                    <form method="POST" action="{{ route('admin.lugh-owl.move', $article->id) }}">
                        @csrf
                        <input type="hidden" name="direction" value="down">
                        <button type="submit" class="btn-sm btn-secondary" title="Descendre">&#9660;</button>
                    </form>
                </div>
            </td>
            <td>
                <form method="POST" action="{{ route('admin.lugh-owl.publie', $article->id) }}">
                    @csrf
                    <button type="submit" class="badge {{ $article->publie ? 'badge-success' : 'badge-warning' }}" style="border:none;cursor:pointer">
                        {{ $article->publie ? 'Publie' : 'Masque' }}
                    </button>
                </form>
            </td>
            <td>
                <div style="display:flex;gap:6px;flex-wrap:wrap">
                    <a href="{{ route('admin.lugh-owl.edit', $article->id) }}" class="btn btn-sm btn-secondary">Modifier</a>
                    <form method="POST" action="{{ route('admin.lugh-owl.destroy', $article->id) }}"
                          onsubmit="return confirm('Supprimer cet article ?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr><td colspan="6" style="text-align:center;color:#888;padding:24px">Aucun article trouve.</td></tr>
        @endforelse
    </tbody>
</table>
</div>

@if($articles->hasPages())
<div style="margin-top:16px">{{ $articles->links() }}</div>
@endif

{{-- ORDRE PAR CATEGORIE --}}
@php $catLabelsOrdre = ['modeles' => 'Modeles philosophiques', 'idees' => 'Idees immuables', 'vie' => 'La Vie est [...]']; @endphp
@foreach($catLabelsOrdre as $cat => $catLabel)
@if($parCategorie->has($cat))
<div class="section-block" style="margin-top:32px">
    <div class="section-label">Ordre — {{ $catLabel }}</div>
    <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:8px">
        @foreach($parCategorie[$cat] as $art)
        <div style="background:var(--bg2);border:1px solid #0078ff22;border-radius:6px;padding:8px 12px;display:flex;align-items:center;gap:8px;min-width:220px">
            <span style="font-size:0.8em;color:#0078ff;min-width:20px;text-align:center">{{ $art->ordre }}</span>
            <span style="font-size:0.85em;flex:1;min-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">{{ $art->titre }}</span>
            <div style="display:flex;gap:4px">
                <form method="POST" action="{{ route('admin.lugh-owl.move', $art->id) }}">
                    @csrf<input type="hidden" name="direction" value="up">
                    <button class="btn-sm btn-secondary">&#9650;</button>
                </form>
                <form method="POST" action="{{ route('admin.lugh-owl.move', $art->id) }}">
                    @csrf<input type="hidden" name="direction" value="down">
                    <button class="btn-sm btn-secondary">&#9660;</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endforeach

@endsection
