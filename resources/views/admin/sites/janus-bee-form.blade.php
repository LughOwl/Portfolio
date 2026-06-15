@extends('layouts.admin')
@section('title', $oeuvre ? 'Modifier — ' . $oeuvre->titre : 'Nouvelle œuvre')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#ffdc00;">//</span>
    {{ $oeuvre ? 'Modifier une œuvre' : 'Ajouter une œuvre' }}
</div>
<p class="admin-page-sub">
    $ manage sites/janus-bee/{{ $oeuvre ? $oeuvre->id . '/edit' : 'create' }}
</p>

<div style="margin-bottom:12px;">
    <a href="{{ route('admin.janus-bee.index') }}" class="btn-admin btn-outline btn-sm">← Retour au catalogue</a>
</div>

@if($errors->any())
<div class="admin-alert error" style="margin-bottom:16px;">
    @foreach($errors->all() as $e)<div>✕ {{ $e }}</div>@endforeach
</div>
@endif

<form method="POST"
      action="{{ $oeuvre ? route('admin.janus-bee.update', $oeuvre->id) : route('admin.janus-bee.store') }}"
      enctype="multipart/form-data">
    @csrf
    @if($oeuvre) @method('PUT') @endif

    <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">

        {{-- COLONNE GAUCHE --}}
        <div>
            <div class="admin-form-card">
                <div class="section-label" style="margin-bottom:16px;">// Informations</div>

                <div class="form-group">
                    <label>Titre <span style="color:#ff5757;">*</span></label>
                    <input type="text" name="titre" value="{{ old('titre', $oeuvre?->titre) }}" required>
                </div>

                <div class="form-group">
                    <label>Titres alternatifs <span style="color:var(--tx-3); font-weight:400; font-size:.8em;">(un par ligne)</span></label>
                    <textarea name="titres_alternatifs" rows="4" placeholder="Titre alternatif 1&#10;Titre alternatif 2">{{ old('titres_alternatifs', $oeuvre ? implode("\n", $oeuvre->titres_alternatifs ?? []) : '') }}</textarea>
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                    <div class="form-group">
                        <label>Date de sortie</label>
                        <input type="text" name="sortie" value="{{ old('sortie', $oeuvre?->sortie) }}" placeholder="ex: 2020">
                    </div>
                    <div class="form-group">
                        <label>Statut</label>
                        <input type="text" name="status" value="{{ old('status', $oeuvre?->status) }}" placeholder="ex: Terminé">
                    </div>
                </div>

                <div class="form-group">
                    <label>Durée</label>
                    <input type="text" name="duree" value="{{ old('duree', $oeuvre?->duree) }}" placeholder="ex: 1h30 · 3 épisodes">
                </div>

                <div class="form-group">
                    <label>Vidéo</label>
                    <input type="text" name="video" value="{{ old('video', $oeuvre?->video) }}" placeholder="ex: /assets/Janus-Bee/video.mp4 ou URL">
                </div>

                <div class="form-group">
                    <label>Synopsis</label>
                    <textarea name="synopsis" rows="6">{{ old('synopsis', $oeuvre?->synopsis) }}</textarea>
                </div>
            </div>
        </div>

        {{-- COLONNE DROITE --}}
        <div style="display:flex; flex-direction:column; gap:20px;">

            {{-- IMAGE --}}
            <div class="admin-form-card">
                <div class="section-label" style="margin-bottom:16px;">// Image</div>

                @if($oeuvre?->image)
                <div style="margin-bottom:12px; text-align:center;">
                    <img src="/assets/Janus-Bee/{{ $oeuvre->image }}" alt=""
                         style="max-height:180px; border-radius:6px; border:1px solid var(--bd);">
                    <div style="font-size:.75em; color:var(--tx-3); margin-top:6px;">{{ $oeuvre->image }}</div>
                </div>
                @endif

                <div class="form-group">
                    <label>Nom du fichier <span style="color:var(--tx-3); font-weight:400; font-size:.8em;">(si déjà présent dans /assets/Janus-Bee/)</span></label>
                    <input type="text" name="image" value="{{ old('image', $oeuvre?->image) }}" placeholder="ex: mon-film.jpg">
                </div>

                <div class="form-group">
                    <label>Uploader un nouveau fichier</label>
                    <input type="file" name="image_file" accept="image/*"
                           style="background:var(--bg); border:1px solid var(--bd); border-radius:6px; padding:6px 10px; width:100%; color:var(--tx); font-size:.82em;">
                    <span style="font-size:.72em; color:var(--tx-3); display:block; margin-top:4px;">PNG, JPG, WEBP — max 10 Mo. Remplace le nom ci-dessus si uploadé.</span>
                </div>
            </div>

            {{-- TYPES --}}
            <div class="admin-form-card">
                <div class="section-label" style="margin-bottom:14px;">// Types</div>
                <div style="display:flex; flex-wrap:wrap; gap:8px;">
                    @foreach($types as $t)
                    @php $checked = $oeuvre && $oeuvre->types->pluck('id')->contains($t->id); @endphp
                    <label style="display:inline-flex; align-items:center; gap:5px; cursor:pointer;
                                  background:{{ $checked ? 'rgba(255,220,0,.15)' : 'rgba(255,255,255,.04)' }};
                                  border:1px solid {{ $checked ? 'rgba(255,220,0,.5)' : 'var(--bd)' }};
                                  border-radius:6px; padding:5px 12px; font-size:.82em; color:{{ $checked ? '#ffdc00' : 'var(--tx-2)' }};">
                        <input type="checkbox" name="types[]" value="{{ $t->id }}"
                               {{ $checked ? 'checked' : '' }} style="accent-color:#ffdc00; margin:0;">
                        {{ $t->nom }}
                    </label>
                    @endforeach
                </div>
            </div>

            {{-- GENRES --}}
            <div class="admin-form-card">
                <div class="section-label" style="margin-bottom:14px;">// Genres</div>
                <div style="display:flex; flex-wrap:wrap; gap:8px;">
                    @foreach($genres as $g)
                    @php $checked = $oeuvre && $oeuvre->genres->pluck('id')->contains($g->id); @endphp
                    <label style="display:inline-flex; align-items:center; gap:5px; cursor:pointer;
                                  background:{{ $checked ? 'rgba(77,150,255,.15)' : 'rgba(255,255,255,.04)' }};
                                  border:1px solid {{ $checked ? 'rgba(77,150,255,.5)' : 'var(--bd)' }};
                                  border-radius:6px; padding:5px 12px; font-size:.82em; color:{{ $checked ? '#4d96ff' : 'var(--tx-2)' }};">
                        <input type="checkbox" name="genres[]" value="{{ $g->id }}"
                               {{ $checked ? 'checked' : '' }} style="accent-color:#4d96ff; margin:0;">
                        {{ $g->nom }}
                    </label>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- BOUTONS --}}
    <div style="display:flex; gap:12px; justify-content:flex-end; margin-top:20px;">
        <a href="{{ route('admin.janus-bee.index') }}" class="btn-admin btn-outline">Annuler</a>
        <button type="submit" class="btn-admin btn-save">
            {{ $oeuvre ? 'Enregistrer les modifications' : 'Créer l\'œuvre' }}
        </button>
    </div>
</form>

@endsection
