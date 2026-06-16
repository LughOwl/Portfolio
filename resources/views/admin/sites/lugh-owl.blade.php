@extends('layouts.admin')
@section('title', 'Lugh-Owl — Articles')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#0078ff;">//</span> Lugh-Owl — Articles
</div>
<p class="admin-page-sub">$ manage sites/lugh-owl — {{ $articles->total() }} article{{ $articles->total() > 1 ? 's' : '' }}</p>

@if(session('success'))
<div class="admin-alert success">✓ {{ session('success') }}</div>
@endif

{{-- FILTRES --}}
<form method="GET" action="{{ route('admin.lugh-owl.index') }}" class="admin-form-card" style="margin-top:20px; display:flex; flex-wrap:wrap; gap:12px; align-items:flex-end;">
    <div class="form-group" style="flex:2; min-width:200px; margin:0;">
        <label>Recherche</label>
        <input type="text" name="search" value="{{ $search }}" placeholder="Titre, slug...">
    </div>
    <div class="form-group" style="flex:1; min-width:180px; margin:0;">
        <label>Catégorie</label>
        <select name="categorie" onchange="this.form.submit()">
            <option value="">Toutes les catégories</option>
            <option value="modeles" {{ $categorie === 'modeles' ? 'selected' : '' }}>Modèles philosophiques</option>
            <option value="idees"   {{ $categorie === 'idees'   ? 'selected' : '' }}>Idées immuables</option>
            <option value="vie"     {{ $categorie === 'vie'     ? 'selected' : '' }}>La Vie est [...]</option>
        </select>
    </div>
    <div style="display:flex; gap:8px; padding-bottom:1px;">
        <button type="submit" class="btn-admin btn-save btn-sm">Filtrer</button>
        @if($search || $categorie)
        <a href="{{ route('admin.lugh-owl.index') }}" class="btn-admin btn-outline btn-sm">Réinitialiser</a>
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
                    <th style="width:56px; text-align:center;" title="En vedette sur l'accueil">★</th>
                    <th style="width:90px;">Statut</th>
                    <th style="width:140px;">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($articles as $article)
            @php
                $catColors  = ['modeles' => 'blue', 'idees' => 'future', 'vie' => 'green'];
                $catLabels  = ['modeles' => 'Modèle', 'idees' => 'Idée', 'vie' => 'Vie'];
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
                       title="{{ $article->titre }}"
                       style="font-weight:600; color:var(--tx); display:block; max-width:280px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">{{ $article->titre }}</a>
                    <div class="td-code">{{ $article->slug }}</div>
                </td>
                <td>
                    <span class="badge-mini {{ $catColors[$article->categorie] ?? 'blue' }}">
                        {{ $catLabels[$article->categorie] ?? $article->categorie }}
                    </span>
                </td>
                <td style="text-align:center;">
                    <form method="POST" action="{{ route('admin.lugh-owl.vedette', $article->id) }}" style="margin:0;">
                        @csrf
                        <button type="submit" title="{{ $article->en_vedette ? 'Retirer de la vedette' : 'Mettre en vedette' }}"
                                style="background:none; border:none; cursor:pointer; font-size:1.2em; line-height:1; color:{{ $article->en_vedette ? '#f0b429' : 'var(--tx-3)' }};">
                            ★
                        </button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="{{ route('admin.lugh-owl.publie', $article->id) }}" style="margin:0;">
                        @csrf
                        <button type="submit" class="badge-mini {{ $article->publie ? 'green' : 'future' }}"
                                style="border:1px solid; cursor:pointer; background:inherit; font-family:'JetBrains Mono',monospace;">
                            {{ $article->publie ? 'Publié' : 'Masqué' }}
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
            <tr><td colspan="7" style="text-align:center; color:var(--tx-3); padding:32px;">Aucun article trouve.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

{{ $articles->links('vendor.pagination.admin') }}

{{-- ORDRE PAR CATEGORIE --}}
@php
$catConfig = [
    'modeles' => ['label' => 'Modèles philosophiques', 'color' => '#0078ff'],
    'idees'   => ['label' => 'Idées immuables',        'color' => '#9b59b6'],
    'vie'     => ['label' => 'La Vie est [...]',        'color' => '#27ae60'],
];
@endphp

<div style="margin-top:36px;">
    <div style="font-family:'JetBrains Mono',monospace; font-size:.76em; font-weight:600; text-transform:uppercase; letter-spacing:.1em; color:var(--tx-3); margin-bottom:16px;">
        // Ordre d'affichage par categorie
    </div>
    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(320px, 1fr)); gap:16px;">
        @foreach($catConfig as $cat => $cfg)
        <div class="admin-form-card" style="padding:20px 24px;">
            <div style="font-size:.78em; font-weight:700; color:{{ $cfg['color'] }}; font-family:'JetBrains Mono',monospace; margin-bottom:14px; border-bottom:1px solid {{ $cfg['color'] }}26; padding-bottom:10px;">
                ★ {{ $cfg['label'] }} <span style="color:var(--tx-3); font-weight:400;">({{ isset($vedetteParCategorie[$cat]) ? $vedetteParCategorie[$cat]->count() : 0 }})</span>
            </div>
            @if(!isset($vedetteParCategorie[$cat]) || $vedetteParCategorie[$cat]->isEmpty())
            <div style="color:var(--tx-3); font-size:.83em; font-family:'JetBrains Mono',monospace; padding:8px 0;">Aucun article en vedette.</div>
            @else
            <div style="display:flex; flex-direction:column; gap:6px;">
                @foreach($vedetteParCategorie[$cat] as $i => $art)
                <div style="display:flex; align-items:center; gap:8px; padding:6px 8px; background:rgba(255,255,255,.025); border-radius:7px;">
                    {{-- Boutons haut/bas empilés --}}
                    <div style="display:flex; flex-direction:column; gap:2px; flex-shrink:0;">
                        @if(!$loop->first)
                        <form method="POST" action="{{ route('admin.lugh-owl.move', $art->id) }}" style="margin:0;">
                            @csrf<input type="hidden" name="direction" value="up">
                            <button title="Monter" style="background:rgba(255,255,255,.07); border:1px solid var(--bd); border-radius:4px; color:var(--tx-2); cursor:pointer; font-size:.7em; padding:1px 5px; line-height:1.6; display:block; width:100%;">▲</button>
                        </form>
                        @else
                        <span style="display:block; width:24px; height:16px;"></span>
                        @endif
                        @if(!$loop->last)
                        <form method="POST" action="{{ route('admin.lugh-owl.move', $art->id) }}" style="margin:0;">
                            @csrf<input type="hidden" name="direction" value="down">
                            <button title="Descendre" style="background:rgba(255,255,255,.07); border:1px solid var(--bd); border-radius:4px; color:var(--tx-2); cursor:pointer; font-size:.7em; padding:1px 5px; line-height:1.6; display:block; width:100%;">▼</button>
                        </form>
                        @else
                        <span style="display:block; width:24px; height:16px;"></span>
                        @endif
                    </div>
                    {{-- Numéro de position --}}
                    <span style="font-family:'JetBrains Mono',monospace; font-size:.75em; color:var(--tx-3); width:18px; text-align:center; flex-shrink:0;">{{ $loop->iteration }}</span>
                    {{-- Miniature --}}
                    @if($art->image)
                    <img src="/assets/Lugh-Owl/{{ $art->image }}" style="width:28px; height:28px; object-fit:cover; border-radius:4px; flex-shrink:0;">
                    @else
                    <div style="width:28px; height:28px; background:var(--bg); border:1px solid var(--bd); border-radius:4px; flex-shrink:0;"></div>
                    @endif
                    {{-- Titre --}}
                    <span style="font-size:.85em; color:var(--tx); flex:1; min-width:0; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">{{ $art->titre }}</span>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>

@endsection
