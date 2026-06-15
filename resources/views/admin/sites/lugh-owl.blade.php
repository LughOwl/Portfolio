@extends('layouts.admin')
@section('title', 'Lugh-Owl — Articles')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#0078ff;">//</span> Lugh-Owl — Articles
</div>
<p class="admin-page-sub">$ manage sites/lugh-owl — {{ $articles->total() }} article{{ $articles->total() > 1 ? 's' : '' }}</p>

@if(session('success'))
<div class="admin-alert success">&#10003; {{ session('success') }}</div>
@endif

{{-- FILTRES --}}
<form method="GET" action="{{ route('admin.lugh-owl.index') }}" class="admin-form-card" style="margin-top:20px; display:flex; flex-wrap:wrap; gap:12px; align-items:flex-end;">
    <div class="form-group" style="flex:2; min-width:200px; margin:0;">
        <label>Recherche</label>
        <input type="text" name="search" value="{{ $search }}" placeholder="Titre, slug...">
    </div>
    <div class="form-group" style="flex:1; min-width:180px; margin:0;">
        <label>Categorie</label>
        <select name="categorie" onchange="this.form.submit()">
            <option value="">Toutes les categories</option>
            <option value="modeles" {{ $categorie === 'modeles' ? 'selected' : '' }}>Modeles philosophiques</option>
            <option value="idees"   {{ $categorie === 'idees'   ? 'selected' : '' }}>Idees immuables</option>
            <option value="vie"     {{ $categorie === 'vie'     ? 'selected' : '' }}>La Vie est [...]</option>
        </select>
    </div>
    <div style="display:flex; gap:8px; padding-bottom:1px;">
        <button type="submit" class="btn-admin btn-save btn-sm">Filtrer</button>
        @if($search || $categorie)
        <a href="{{ route('admin.lugh-owl.index') }}" class="btn-admin btn-outline btn-sm">Reinitialiser</a>
        @endif
    </div>
</form>

<div style="display:flex; justify-content:flex-end; margin:16px 0 8px;">
    <a href="{{ route('admin.lugh-owl.create') }}" class="btn-admin btn-save">+ Nouvel article</a>
</div>

{{-- TABLEAU --}}
<div class="admin-form-card" style="max-width:none; padding:0; overflow:hidden;">
    <div style="overflow-x:auto;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:56px;">Image</th>
                    <th>Titre</th>
                    <th style="width:150px;">Categorie</th>
                    <th style="width:90px;">Ordre</th>
                    <th style="width:90px;">Statut</th>
                    <th style="width:140px;">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($articles as $article)
            @php
                $catColors  = ['modeles' => 'blue', 'idees' => 'future', 'vie' => 'green'];
                $catLabels  = ['modeles' => 'Modele', 'idees' => 'Idee', 'vie' => 'Vie'];
            @endphp
            <tr>
                <td style="padding:6px 10px;">
                    @if($article->image)
                    <img src="/assets/Lugh-Owl/{{ $article->image }}" alt=""
                         style="width:44px; height:44px; object-fit:cover; border-radius:6px; display:block;">
                    @else
                    <div style="width:44px; height:44px; background:var(--bg-3); border-radius:6px; border:1px solid var(--bd);"></div>
                    @endif
                </td>
                <td>
                    <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" target="_blank"
                       style="font-weight:600; color:var(--tx);">{{ $article->titre }}</a>
                    <div class="td-code">{{ $article->slug }}</div>
                </td>
                <td>
                    <span class="badge-mini {{ $catColors[$article->categorie] ?? 'blue' }}">
                        {{ $catLabels[$article->categorie] ?? $article->categorie }}
                    </span>
                </td>
                <td>
                    <div style="display:flex; gap:4px; align-items:center;">
                        <form method="POST" action="{{ route('admin.lugh-owl.move', $article->id) }}" style="margin:0;">
                            @csrf<input type="hidden" name="direction" value="up">
                            <button type="submit" class="btn-admin btn-outline btn-icon" style="padding:4px 8px;" title="Monter">&#9650;</button>
                        </form>
                        <span style="font-family:'JetBrains Mono',monospace; font-size:0.82em; color:var(--tx-2); min-width:20px; text-align:center;">{{ $article->ordre }}</span>
                        <form method="POST" action="{{ route('admin.lugh-owl.move', $article->id) }}" style="margin:0;">
                            @csrf<input type="hidden" name="direction" value="down">
                            <button type="submit" class="btn-admin btn-outline btn-icon" style="padding:4px 8px;" title="Descendre">&#9660;</button>
                        </form>
                    </div>
                </td>
                <td>
                    <form method="POST" action="{{ route('admin.lugh-owl.publie', $article->id) }}" style="margin:0;">
                        @csrf
                        <button type="submit" class="badge-mini {{ $article->publie ? 'green' : 'future' }}"
                                style="border:1px solid; cursor:pointer; background:inherit; font-family:'JetBrains Mono',monospace;">
                            {{ $article->publie ? 'Publie' : 'Masque' }}
                        </button>
                    </form>
                </td>
                <td>
                    <div class="td-actions">
                        <a href="{{ route('admin.lugh-owl.edit', $article->id) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                        <form method="POST" action="{{ route('admin.lugh-owl.destroy', $article->id) }}"
                              onsubmit="return confirm('Supprimer cet article ?')" style="margin:0;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-admin btn-delete btn-sm">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" style="text-align:center; color:var(--tx-3); padding:32px;">Aucun article trouve.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

{{ $articles->links('vendor.pagination.admin') }}

{{-- ORDRE PAR CATEGORIE --}}
@php $catLabelsOrdre = ['modeles' => 'Modeles philosophiques', 'idees' => 'Idees immuables', 'vie' => 'La Vie est [...]']; @endphp
@foreach($catLabelsOrdre as $cat => $catLabel)
@if($parCategorie->has($cat))
<div style="margin-top:36px;">
    <div class="section-label" style="margin-bottom:12px;">Ordre — {{ $catLabel }}</div>
    <div style="display:flex; flex-wrap:wrap; gap:8px;">
        @foreach($parCategorie[$cat] as $art)
        <div class="admin-form-card" style="padding:10px 14px; display:flex; align-items:center; gap:10px; min-width:260px; max-width:340px;">
            <span style="font-family:'JetBrains Mono',monospace; font-size:0.78em; color:var(--tx-3); min-width:22px; text-align:center;">{{ $art->ordre }}</span>
            <span style="font-size:0.88em; flex:1; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; color:var(--tx);">{{ $art->titre }}</span>
            <div style="display:flex; gap:4px;">
                <form method="POST" action="{{ route('admin.lugh-owl.move', $art->id) }}" style="margin:0;">
                    @csrf<input type="hidden" name="direction" value="up">
                    <button class="btn-admin btn-outline btn-icon" style="padding:3px 7px;">&#9650;</button>
                </form>
                <form method="POST" action="{{ route('admin.lugh-owl.move', $art->id) }}" style="margin:0;">
                    @csrf<input type="hidden" name="direction" value="down">
                    <button class="btn-admin btn-outline btn-icon" style="padding:3px 7px;">&#9660;</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endforeach

@endsection
