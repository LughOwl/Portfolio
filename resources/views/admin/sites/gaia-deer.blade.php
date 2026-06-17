@extends('layouts.admin')
@section('title', 'Gaïa-Deer — Sections')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#00af00;">//</span> Gaïa-Deer — Sections
</div>
<p class="admin-page-sub">$ manage sites/gaia-deer — {{ $sections->flatten()->count() }} section{{ $sections->flatten()->count() > 1 ? 's' : '' }}</p>

@if(session('success'))
<div class="admin-alert success">✓ {{ session('success') }}</div>
@endif

@php
$rubriquesConfig = [
    'sante'          => ['label' => 'Santé physique',  'color' => '#00af00', 'fr' => 'fr.gaia-deer.sante',         'en' => 'en.gaia-deer.sante'],
    'nutrition'      => ['label' => 'Nutrition',        'color' => '#00af00', 'fr' => 'fr.gaia-deer.nutrition',     'en' => 'en.gaia-deer.nutrition'],
    'investissement' => ['label' => 'Investissement',   'color' => '#00af00', 'fr' => 'fr.gaia-deer.investissement','en' => 'en.gaia-deer.investissement'],
];
@endphp

@foreach($rubriquesConfig as $slug => $cfg)
@php $rubSections = $sections->get($slug, collect()); @endphp

<div style="margin-top:32px;">

    {{-- En-tête rubrique --}}
    <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px;">
        <div style="display:flex; align-items:center; gap:12px;">
            <span style="font-family:'JetBrains Mono',monospace; font-size:.78em; font-weight:700; color:{{ $cfg['color'] }}; text-transform:uppercase; letter-spacing:.08em;">
                ◆ {{ $cfg['label'] }}
            </span>
            <span style="font-size:.73em; color:var(--tx-3);">{{ $rubSections->count() }} section{{ $rubSections->count() > 1 ? 's' : '' }}</span>
            <a href="{{ route($cfg['fr']) }}" target="_blank" style="font-size:.72em; color:var(--tx-3); text-decoration:none; &:hover{color:var(--tx)}">FR ↗</a>
            <a href="{{ route($cfg['en']) }}" target="_blank" style="font-size:.72em; color:var(--tx-3); text-decoration:none;">EN ↗</a>
        </div>
        <a href="{{ route('admin.gaia-deer.section.create', ['rubrique' => $slug]) }}" class="btn-admin btn-save btn-sm">+ Ajouter une section</a>
    </div>

    @if($rubSections->isEmpty())
    <div class="admin-form-card" style="padding:24px; text-align:center; color:var(--tx-3); font-size:.85em;">
        Aucune section pour cette rubrique.
    </div>
    @else
    <div class="admin-form-card" style="max-width:none; padding:0; overflow:hidden;">
        <div style="overflow-x:auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width:44px;">Ordre</th>
                        <th>Titre (FR)</th>
                        <th style="width:200px;">Titre (EN)</th>
                        <th style="width:90px;">Statut</th>
                        <th style="width:160px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($rubSections as $s)
                <tr>
                    <td style="text-align:center; padding:4px 8px;">
                        <div style="display:flex; flex-direction:column; gap:2px; align-items:center;">
                            @if(!$loop->first)
                            <form method="POST" action="{{ route('admin.gaia-deer.section.move', $s->id) }}" style="margin:0;">
                                @csrf<input type="hidden" name="direction" value="up">
                                <button title="Monter" style="background:rgba(255,255,255,.07); border:1px solid var(--bd); border-radius:4px; color:var(--tx-2); cursor:pointer; font-size:.65em; padding:1px 5px; line-height:1.6; width:100%;">▲</button>
                            </form>
                            @else<span style="display:block; width:22px; height:14px;"></span>@endif
                            @if(!$loop->last)
                            <form method="POST" action="{{ route('admin.gaia-deer.section.move', $s->id) }}" style="margin:0;">
                                @csrf<input type="hidden" name="direction" value="down">
                                <button title="Descendre" style="background:rgba(255,255,255,.07); border:1px solid var(--bd); border-radius:4px; color:var(--tx-2); cursor:pointer; font-size:.65em; padding:1px 5px; line-height:1.6; width:100%;">▼</button>
                            </form>
                            @else<span style="display:block; width:22px; height:14px;"></span>@endif
                        </div>
                    </td>
                    <td>
                        <span style="font-weight:600; color:var(--tx);">{{ $s->titre }}</span>
                    </td>
                    <td class="td-muted" style="font-size:.82em;">{{ $s->titre_en ?: '—' }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.gaia-deer.section.publie', $s->id) }}" style="margin:0;">
                            @csrf
                            <button type="submit" class="badge-mini {{ $s->publie ? 'green' : 'future' }}"
                                    style="border:1px solid; cursor:pointer; background:inherit; font-family:'JetBrains Mono',monospace;">
                                {{ $s->publie ? 'Publié' : 'Masqué' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <div class="td-actions">
                            <a href="{{ route('admin.gaia-deer.section.edit', $s->id) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                            <form method="POST" action="{{ route('admin.gaia-deer.section.destroy', $s->id) }}"
                                  onsubmit="return confirm('Supprimer cette section ?')" style="margin:0;">
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
    @endif

</div>
@endforeach

@endsection
