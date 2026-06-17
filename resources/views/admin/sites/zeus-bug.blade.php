@extends('layouts.admin')
@section('title', 'Zeus-Bug — Articles')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#00f0d2;">//</span> Zeus-Bug — Articles
</div>
<p class="admin-page-sub">$ manage sites/zeus-bug — {{ $articles->flatten()->count() }} article{{ $articles->flatten()->count() > 1 ? 's' : '' }}</p>

@if(session('success'))
<div class="admin-alert success">✓ {{ session('success') }}</div>
@endif

@php
use App\Models\ZeusBugArticle;
$allCategories = ZeusBugArticle::$categories;
@endphp

<div style="margin-bottom:24px;">
    <a href="{{ route('admin.zeus-bug.create') }}" class="btn-admin btn-save">+ Nouvel article</a>
</div>

@foreach($allCategories as $slug => $label)
@php $catArticles = $articles->get($slug, collect()); @endphp
@if($catArticles->isEmpty()) @continue @endif

<div style="margin-top:32px;">

    <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px;">
        <div style="display:flex; align-items:center; gap:12px;">
            <span style="font-family:'JetBrains Mono',monospace; font-size:.78em; font-weight:700; color:#00f0d2; text-transform:uppercase; letter-spacing:.08em;">
                ◆ {{ $label }}
            </span>
            <span style="font-size:.73em; color:var(--tx-3);">{{ $catArticles->count() }} article{{ $catArticles->count() > 1 ? 's' : '' }}</span>
        </div>
        <a href="{{ route('admin.zeus-bug.create', ['categorie' => $slug]) }}" class="btn-admin btn-save btn-sm">+ Ajouter</a>
    </div>

    <div class="admin-form-card" style="max-width:none; padding:0; overflow:hidden;">
        <div style="overflow-x:auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width:44px;">Ordre</th>
                        <th>Titre (FR)</th>
                        <th style="width:160px;">Tags</th>
                        <th style="width:80px;">Année</th>
                        <th style="width:80px;">GitHub</th>
                        <th style="width:90px;">Statut</th>
                        <th style="width:160px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($catArticles as $a)
                <tr>
                    <td style="text-align:center; padding:4px 8px;">
                        <div style="display:flex; flex-direction:column; gap:2px; align-items:center;">
                            @if(!$loop->first)
                            <form method="POST" action="{{ route('admin.zeus-bug.move', $a->id) }}" style="margin:0;">
                                @csrf<input type="hidden" name="direction" value="up">
                                <button title="Monter" style="background:rgba(255,255,255,.07); border:1px solid var(--bd); border-radius:4px; color:var(--tx-2); cursor:pointer; font-size:.65em; padding:1px 5px; line-height:1.6; width:100%;">▲</button>
                            </form>
                            @else<span style="display:block; width:22px; height:14px;"></span>@endif
                            @if(!$loop->last)
                            <form method="POST" action="{{ route('admin.zeus-bug.move', $a->id) }}" style="margin:0;">
                                @csrf<input type="hidden" name="direction" value="down">
                                <button title="Descendre" style="background:rgba(255,255,255,.07); border:1px solid var(--bd); border-radius:4px; color:var(--tx-2); cursor:pointer; font-size:.65em; padding:1px 5px; line-height:1.6; width:100%;">▼</button>
                            </form>
                            @else<span style="display:block; width:22px; height:14px;"></span>@endif
                        </div>
                    </td>
                    <td>
                        <span style="font-weight:600; color:var(--tx);">{{ $a->titre }}</span>
                        @if($a->titre_en)
                        <span style="display:block; font-size:.78em; color:var(--tx-3);">{{ $a->titre_en }}</span>
                        @endif
                    </td>
                    <td class="td-muted" style="font-size:.78em;">{{ $a->tags ?: '—' }}</td>
                    <td class="td-muted" style="font-size:.82em;">{{ $a->date_projet ? $a->date_projet->format('Y') : '—' }}</td>
                    <td style="text-align:center;">
                        @if($a->github_url)
                        <a href="{{ $a->github_url }}" target="_blank" style="font-size:.75em; color:#00f0d2; text-decoration:none;">↗</a>
                        @else
                        <span style="color:var(--tx-3); font-size:.78em;">—</span>
                        @endif
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.zeus-bug.publie', $a->id) }}" style="margin:0;">
                            @csrf
                            <button type="submit" class="badge-mini {{ $a->publie ? 'green' : 'future' }}"
                                    style="border:1px solid; cursor:pointer; background:inherit; font-family:'JetBrains Mono',monospace;">
                                {{ $a->publie ? 'Publié' : 'Masqué' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <div class="td-actions">
                            <a href="{{ route('admin.zeus-bug.edit', $a->id) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                            <form method="POST" action="{{ route('admin.zeus-bug.destroy', $a->id) }}"
                                  onsubmit="return confirm('Supprimer cet article ?')" style="margin:0;">
                                @csrf @method('DELETE')
                                <button class="btn-admin btn-delete btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endforeach

@if($articles->flatten()->isEmpty())
<div class="admin-form-card" style="padding:32px; text-align:center; color:var(--tx-3);">
    Aucun article. <a href="{{ route('admin.zeus-bug.create') }}" style="color:#00f0d2;">Créer le premier →</a>
</div>
@endif

@endsection
