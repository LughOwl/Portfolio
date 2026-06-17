@extends('layouts.admin')
@section('title', $morceau ? 'Modifier - '.$morceau->titre : 'Nouveau morceau - Bragi Bird')
@section('content')

@php
$ytId = $morceau?->youtube_url
    ? preg_replace('/.*(?:v=|youtu\.be\/)([^&\s]+).*/', '$1', $morceau->youtube_url)
    : null;
@endphp

<div class="admin-page-title">
    <span class="prefix" style="color:#ff8c00;">//</span>
    {{ $morceau ? $morceau->titre : 'Nouveau morceau' }}
</div>
<p class="admin-page-sub">$ manage sites/bragi-bird{{ $morceau ? '/'.$morceau->id : '/create' }}</p>

<div style="margin-bottom:20px;">
    <a href="{{ route('admin.bragi-bird.index') }}" class="btn-admin btn-outline btn-sm">← Retour</a>
    @if($morceau?->youtube_url)
    <a href="{{ $morceau->youtube_url }}" target="_blank" class="btn-admin btn-outline btn-sm" style="margin-left:8px; color:#ff8c00; border-color:rgba(255,140,0,.3);">▶ Voir sur YouTube</a>
    @endif
</div>

@if($errors->any())
<div class="admin-alert error" style="margin-bottom:20px;">
    @foreach($errors->all() as $error)<div>✕ {{ $error }}</div>@endforeach
</div>
@endif

<div style="display:grid; grid-template-columns:1fr 280px; gap:20px; align-items:start;">

    {{-- Colonne principale --}}
    <div>

        <form method="POST" enctype="multipart/form-data" id="bb-form"
              action="{{ $morceau ? route('admin.bragi-bird.update', $morceau->id) : route('admin.bragi-bird.store') }}">
            @csrf
            @if($morceau) @method('PUT') @endif

            {{-- Titre + Compositeur --}}
            <div class="admin-form-card" style="margin-bottom:16px;">
                <div class="section-label" style="margin-bottom:16px;">// Informations</div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:12px;">
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Titre FR *</label>
                        <input type="text" name="titre" required
                               value="{{ old('titre', $morceau?->titre) }}"
                               placeholder="Nocturne op. 9 n°2">
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Titre EN</label>
                        <input type="text" name="titre_en"
                               value="{{ old('titre_en', $morceau?->titre_en) }}"
                               placeholder="Nocturne op. 9 No. 2">
                    </div>
                </div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Compositeur FR *</label>
                        <input type="text" name="compositeur" required
                               value="{{ old('compositeur', $morceau?->compositeur) }}"
                               placeholder="Frédéric Chopin">
                    </div>
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Compositeur EN</label>
                        <input type="text" name="compositeur_en"
                               value="{{ old('compositeur_en', $morceau?->compositeur_en) }}"
                               placeholder="Frédéric Chopin">
                    </div>
                </div>
            </div>

            {{-- Description FR / EN --}}
            <div class="admin-form-card" style="margin-bottom:16px;">
                <div style="display:flex; gap:0; margin-bottom:16px; border-bottom:2px solid var(--bd);">
                    <button type="button" class="bb-tab" data-tab="fr"
                        style="background:none; border:none; padding:7px 18px; cursor:pointer; font-size:.88em; color:var(--tx); font-weight:600; border-bottom:3px solid #ff8c00; margin-bottom:-2px;">
                        🇫🇷 Français
                    </button>
                    <button type="button" class="bb-tab" data-tab="en"
                        style="background:none; border:none; padding:7px 18px; cursor:pointer; font-size:.88em; color:var(--tx-3); font-weight:400; border-bottom:3px solid transparent; margin-bottom:-2px;">
                        🇬🇧 English
                    </button>
                </div>
                <div id="bb-panel-fr">
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Description <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(contexte, anecdote, œuvre...)</span></label>
                        <textarea name="description" rows="4"
                            placeholder="Notes sur l'interprétation, le contexte de l'œuvre...">{{ old('description', $morceau?->description) }}</textarea>
                    </div>
                </div>
                <div id="bb-panel-en" style="display:none;">
                    <div class="form-group" style="margin-bottom:0;">
                        <label>Description <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(context, anecdote, piece...)</span></label>
                        <textarea name="description_en" rows="4"
                            placeholder="Performance notes, context of the piece...">{{ old('description_en', $morceau?->description_en) }}</textarea>
                    </div>
                </div>
            </div>

            {{-- Médias --}}
            <div class="admin-form-card" style="margin-bottom:16px;">
                <div class="section-label" style="margin-bottom:16px;">// Médias</div>

                <div class="form-group">
                    <label>URL YouTube</label>
                    <input type="url" name="youtube_url" id="yt-input"
                           value="{{ old('youtube_url', $morceau?->youtube_url) }}"
                           placeholder="https://www.youtube.com/watch?v=...">
                </div>

                <div class="form-group" style="margin-bottom:0;">
                    <label>Fichier MP3 <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(max 50 Mo)</span></label>
                    <input type="file" name="mp3_file" accept=".mp3,audio/mpeg">
                    @if($morceau?->mp3_path)
                    <div style="margin-top:6px; padding:8px 12px; background:var(--bg3); border-radius:4px; font-size:.78em; color:var(--tx-3); display:flex; align-items:center; gap:8px;">
                        <span style="color:#4ade80;">✓</span>
                        <span>{{ basename($morceau->mp3_path) }}</span>
                        <span style="opacity:.5;">— laisser vide pour conserver</span>
                    </div>
                    @endif
                </div>
            </div>

            {{-- Boutons --}}
            <div style="display:flex; gap:10px;">
                <button type="submit" class="btn-admin btn-save">
                    {{ $morceau ? 'Enregistrer' : 'Créer le morceau' }}
                </button>
                <a href="{{ route('admin.bragi-bird.index') }}" class="btn-admin btn-outline">Annuler</a>
            </div>

        </form>
    </div>

    {{-- Colonne latérale --}}
    <div style="display:flex; flex-direction:column; gap:16px;">

        {{-- Statut --}}
        <div class="admin-form-card">
            <div class="section-label" style="margin-bottom:14px;">// Statut</div>
            <label style="display:flex; align-items:center; gap:10px; cursor:pointer; font-size:.9em;">
                <input type="hidden" name="publie" value="0" form="bb-form">
                <input type="checkbox" name="publie" value="1" form="bb-form"
                       {{ old('publie', $morceau?->publie ?? true) ? 'checked' : '' }}>
                <span>Publié</span>
            </label>
            @if($morceau)
            <div style="margin-top:12px; padding-top:12px; border-top:1px solid var(--bd); font-size:.75em; color:var(--tx-3);">
                ID #{{ $morceau->id }} &nbsp;·&nbsp; ordre {{ $morceau->ordre }}
            </div>
            @endif
        </div>

        {{-- Aperçu YouTube --}}
        <div class="admin-form-card" id="yt-preview-card" style="{{ $ytId ? '' : 'display:none;' }}">
            <div class="section-label" style="margin-bottom:10px;">// Aperçu</div>
            <div id="yt-preview" style="position:relative; border-radius:4px; overflow:hidden; border:1px solid var(--bd);">
                @if($ytId)
                <img id="yt-thumb" src="https://img.youtube.com/vi/{{ $ytId }}/mqdefault.jpg"
                     style="width:100%; display:block;" loading="lazy">
                @else
                <img id="yt-thumb" src="" style="width:100%; display:none;">
                @endif
            </div>
        </div>

        {{-- Liens publics --}}
        @if($morceau)
        <div class="admin-form-card">
            <div class="section-label" style="margin-bottom:10px;">// Liens</div>
            <div style="display:flex; flex-direction:column; gap:6px;">
                <a href="{{ route('fr.bragi-bird.morceau', $morceau->id) }}" target="_blank"
                   style="font-size:.78em; color:var(--tx-2); text-decoration:none; display:flex; align-items:center; gap:6px;">
                    <span style="color:#ff8c00;">↗</span> Voir en FR
                </a>
                <a href="{{ route('en.bragi-bird.morceau', $morceau->id) }}" target="_blank"
                   style="font-size:.78em; color:var(--tx-2); text-decoration:none; display:flex; align-items:center; gap:6px;">
                    <span style="color:#ff8c00;">↗</span> Voir en EN
                </a>
            </div>
        </div>
        @endif

    </div>
</div>

<script>
// Onglets FR/EN
document.querySelectorAll('.bb-tab').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.bb-tab').forEach(b => {
            b.style.color = 'var(--tx-3)';
            b.style.fontWeight = '400';
            b.style.borderBottomColor = 'transparent';
        });
        btn.style.color = 'var(--tx)';
        btn.style.fontWeight = '600';
        btn.style.borderBottomColor = '#ff8c00';
        document.getElementById('bb-panel-fr').style.display = btn.dataset.tab === 'fr' ? '' : 'none';
        document.getElementById('bb-panel-en').style.display = btn.dataset.tab === 'en' ? '' : 'none';
    });
});

// Aperçu YouTube live
const ytInput = document.getElementById('yt-input');
const ytThumb = document.getElementById('yt-thumb');
const ytCard  = document.getElementById('yt-preview-card');

if (ytInput) {
    ytInput.addEventListener('input', () => {
        const match = ytInput.value.match(/(?:v=|youtu\.be\/)([^&\s]+)/);
        if (match) {
            ytThumb.src = 'https://img.youtube.com/vi/' + match[1] + '/mqdefault.jpg';
            ytThumb.style.display = 'block';
            ytCard.style.display = '';
        } else {
            ytThumb.style.display = 'none';
            ytCard.style.display = 'none';
        }
    });
}
</script>

@endsection
