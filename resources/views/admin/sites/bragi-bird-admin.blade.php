@extends('layouts.admin')
@section('title', 'Bragi Bird - Morceaux')
@section('content')

@php
$total   = $morceaux->count();
$avecYt  = $morceaux->whereNotNull('youtube_url')->count();
$avecMp3 = $morceaux->whereNotNull('mp3_path')->count();
$publies = $morceaux->where('publie', true)->count();
@endphp

<div class="admin-page-title">
    <span class="prefix" style="color:#ff8c00;">//</span> Bragi Bird
    <span style="font-size:.55em; font-weight:400; color:var(--tx-3); margin-left:12px;">morceaux</span>
</div>
<p class="admin-page-sub">$ manage sites/bragi-bird — {{ $total }} morceau{{ $total > 1 ? 'x' : '' }}</p>

{{-- Stats --}}
<div style="display:flex; gap:12px; flex-wrap:wrap; margin-bottom:24px;">
    <div style="background:var(--bg2); border:1px solid var(--bd); border-radius:6px; padding:10px 18px; font-size:.78em;">
        <span style="color:var(--tx-3);">Publiés</span>
        <span style="display:block; font-size:1.5em; font-weight:700; color:var(--tx); line-height:1.2;">{{ $publies }}</span>
    </div>
    <div style="background:var(--bg2); border:1px solid var(--bd); border-radius:6px; padding:10px 18px; font-size:.78em;">
        <span style="color:var(--tx-3);">Avec YouTube</span>
        <span style="display:block; font-size:1.5em; font-weight:700; color:{{ $avecYt === $total ? '#4ade80' : '#ff8c00' }}; line-height:1.2;">{{ $avecYt }}/{{ $total }}</span>
    </div>
    <div style="background:var(--bg2); border:1px solid var(--bd); border-radius:6px; padding:10px 18px; font-size:.78em;">
        <span style="color:var(--tx-3);">Avec MP3</span>
        <span style="display:block; font-size:1.5em; font-weight:700; color:{{ $avecMp3 > 0 ? '#4ade80' : 'var(--tx-3)' }}; line-height:1.2;">{{ $avecMp3 }}/{{ $total }}</span>
    </div>
    <div style="margin-left:auto; display:flex; align-items:center;">
        <a href="{{ route('admin.bragi-bird.create') }}" class="btn-admin btn-save">+ Nouveau morceau</a>
    </div>
</div>

@if(session('success'))
<div class="admin-alert success" style="margin-bottom:20px;">✓ {{ session('success') }}</div>
@endif

<div class="admin-form-card" style="max-width:none; padding:0; overflow:hidden;">
    <div style="overflow-x:auto;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:36px; text-align:center;">#</th>
                    <th style="width:72px;"></th>
                    <th>Titre</th>
                    <th style="width:180px;">Compositeur</th>
                    <th style="width:70px; text-align:center;">YT</th>
                    <th style="width:70px; text-align:center;">MP3</th>
                    <th style="width:80px; text-align:center;">Statut</th>
                    <th style="width:130px;">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($morceaux as $m)
            @php
                $ytId = $m->youtube_url
                    ? preg_replace('/.*(?:v=|youtu\.be\/)([^&\s]+).*/', '$1', $m->youtube_url)
                    : null;
            @endphp
            <tr>
                {{-- Ordre --}}
                <td style="text-align:center; padding:4px 6px; vertical-align:middle;">
                    <div style="display:flex; flex-direction:column; gap:2px; align-items:center;">
                        <span style="font-size:.7em; color:var(--tx-3); font-family:'JetBrains Mono',monospace; margin-bottom:2px;">{{ $loop->iteration }}</span>
                        @if(!$loop->first)
                        <form method="POST" action="{{ route('admin.bragi-bird.move', $m->id) }}" style="margin:0;">
                            @csrf<input type="hidden" name="direction" value="up">
                            <button title="Monter" style="background:rgba(255,255,255,.06); border:1px solid var(--bd); border-radius:3px; color:var(--tx-2); cursor:pointer; font-size:.6em; padding:1px 5px; line-height:1.6; width:22px;">▲</button>
                        </form>
                        @else<span style="display:block; width:22px; height:18px;"></span>@endif
                        @if(!$loop->last)
                        <form method="POST" action="{{ route('admin.bragi-bird.move', $m->id) }}" style="margin:0;">
                            @csrf<input type="hidden" name="direction" value="down">
                            <button title="Descendre" style="background:rgba(255,255,255,.06); border:1px solid var(--bd); border-radius:3px; color:var(--tx-2); cursor:pointer; font-size:.6em; padding:1px 5px; line-height:1.6; width:22px;">▼</button>
                        </form>
                        @else<span style="display:block; width:22px; height:18px;"></span>@endif
                    </div>
                </td>

                {{-- Miniature --}}
                <td style="padding:6px 8px; vertical-align:middle; width:72px;">
                    @if($ytId)
                    <a href="{{ $m->youtube_url }}" target="_blank" style="display:block; position:relative; width:60px; height:34px; overflow:hidden; border-radius:3px; border:1px solid var(--bd);">
                        <img src="https://img.youtube.com/vi/{{ $ytId }}/default.jpg"
                             style="width:100%; height:100%; object-fit:cover; display:block; opacity:.8;" loading="lazy">
                        <span style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; font-size:.6em; color:rgba(255,255,255,.9); text-shadow:0 1px 3px rgba(0,0,0,.8);">▶</span>
                    </a>
                    @else
                    <div style="width:60px; height:34px; border-radius:3px; border:1px solid var(--bd); background:var(--bg3); display:flex; align-items:center; justify-content:center; color:var(--tx-3); font-size:1em;">♪</div>
                    @endif
                </td>

                {{-- Titre --}}
                <td style="vertical-align:middle;">
                    <div style="font-weight:600; font-size:.88em; color:var(--tx);">{{ $m->titre }}</div>
                    @if($m->titre_en && $m->titre_en !== $m->titre)
                    <div style="font-size:.75em; color:var(--tx-3); margin-top:2px; font-style:italic;">{{ $m->titre_en }}</div>
                    @endif
                </td>

                {{-- Compositeur --}}
                <td style="font-size:.82em; color:var(--tx-2); vertical-align:middle;">{{ $m->compositeur }}</td>

                {{-- YouTube --}}
                <td style="text-align:center; vertical-align:middle;">
                    @if($m->youtube_url)
                    <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#4ade80;" title="URL présente"></span>
                    @else
                    <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:rgba(255,140,0,.4);" title="Manquant"></span>
                    @endif
                </td>

                {{-- MP3 --}}
                <td style="text-align:center; vertical-align:middle;">
                    @if($m->mp3_path)
                    <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#4ade80;" title="Fichier présent"></span>
                    @else
                    <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:var(--bd);" title="Absent"></span>
                    @endif
                </td>

                {{-- Statut --}}
                <td style="text-align:center; vertical-align:middle;">
                    <form method="POST" action="{{ route('admin.bragi-bird.publie', $m->id) }}" style="margin:0;">
                        @csrf
                        <button type="submit"
                            class="badge-mini {{ $m->publie ? 'green' : 'future' }}"
                            style="border:1px solid; cursor:pointer; background:inherit; font-family:'JetBrains Mono',monospace;">
                            {{ $m->publie ? 'Publié' : 'Masqué' }}
                        </button>
                    </form>
                </td>

                {{-- Actions --}}
                <td style="vertical-align:middle;">
                    <div class="td-actions">
                        <a href="{{ route('admin.bragi-bird.edit', $m->id) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                        <form method="POST" action="{{ route('admin.bragi-bird.destroy', $m->id) }}"
                              onsubmit="return confirm('Supprimer « {{ $m->titre }} » ?')" style="margin:0;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-admin btn-delete btn-sm">Supp.</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" style="text-align:center; padding:48px; color:var(--tx-3); font-size:.88em;">
                    Aucun morceau.
                    <a href="{{ route('admin.bragi-bird.create') }}" style="color:#ff8c00;">Créer le premier →</a>
                </td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
