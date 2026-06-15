@extends('layouts.admin')
@section('title', $article ? 'Modifier — ' . $article->titre : 'Nouvel article — Lugh-Owl')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#0078ff;">//</span>
    {{ $article ? 'Modifier : ' . $article->titre : 'Nouvel article Lugh-Owl' }}
</div>
<p class="admin-page-sub">$ manage sites/lugh-owl{{ $article ? '/' . $article->slug : '/create' }}</p>

@if($errors->any())
<div class="admin-alert error" style="margin-bottom:24px;">
    <div>
        @foreach($errors->all() as $error)
        <div>&#8250; {{ $error }}</div>
        @endforeach
    </div>
</div>
@endif

<form method="POST"
      action="{{ $article ? route('admin.lugh-owl.update', $article->id) : route('admin.lugh-owl.store') }}"
      enctype="multipart/form-data">
    @csrf
    @if($article) @method('PUT') @endif

    {{-- INFOS PRINCIPALES --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div class="form-grid-2">
            <div class="form-group">
                <label>Titre *</label>
                <input type="text" name="titre" required
                       value="{{ old('titre', $article?->titre) }}"
                       placeholder="Titre de l'article">
                @if($article)
                <span class="form-error" style="color:var(--tx-3); font-size:0.75em;">
                    Slug : <code>{{ $article->slug }}</code>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Categorie *</label>
                <select name="categorie" required>
                    <option value="">-- Choisir --</option>
                    @foreach(['modeles' => 'Modeles philosophiques', 'idees' => 'Idees immuables', 'vie' => 'La Vie est [...]'] as $val => $label)
                    <option value="{{ $val }}" {{ old('categorie', $article?->categorie) === $val ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Description courte * <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(visible sur les cartes et dans les listes)</span></label>
            <textarea name="description" rows="3" required
                      placeholder="Phrase d'accroche de l'article...">{{ old('description', $article?->description) }}</textarea>
        </div>

        <div class="form-group" style="margin-bottom:0;">
            <label>Statut</label>
            <label style="display:flex; align-items:center; gap:10px; cursor:pointer; font-size:0.9em; text-transform:none; letter-spacing:0; font-weight:400; color:var(--tx);">
                <input type="hidden" name="publie" value="0">
                <input type="checkbox" name="publie" value="1"
                       {{ old('publie', $article?->publie ?? true) ? 'checked' : '' }}
                       style="width:auto; accent-color:var(--green);">
                Publie (visible sur le site)
            </label>
        </div>
    </div>

    {{-- IMAGE --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div class="section-label" style="margin-bottom:16px;">Image</div>
        @if($article && $article->image)
        <div style="margin-bottom:14px;">
            <img src="/assets/Lugh-Owl/{{ $article->image }}" alt=""
                 style="max-width:220px; max-height:160px; object-fit:cover; border-radius:8px; border:1px solid var(--bd);">
            <div class="td-code" style="margin-top:6px;">{{ $article->image }}</div>
        </div>
        @endif
        <div class="form-group">
            <label>Nom du fichier existant</label>
            <input type="text" name="image" value="{{ old('image', $article?->image) }}"
                   placeholder="ex: mdl-balance_lugh.jpg">
        </div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Deposer un nouveau fichier <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(max 10 Mo)</span></label>
            <input type="file" name="image_file" accept="image/*"
                   style="padding:8px; background:var(--bg); border:1px solid var(--bd); border-radius:8px; color:var(--tx); width:100%;">
        </div>
    </div>

    {{-- CONTENU --}}
    <div class="admin-form-card" style="margin-bottom:24px;">
        <div class="section-label" style="margin-bottom:16px;">Contenu de l'article</div>
        <div class="form-group" style="margin-bottom:0;">
            <label>HTML <span style="font-weight:400; text-transform:none; color:var(--tx-3);">— balises autorisees : &lt;h2&gt;, &lt;p&gt;, &lt;hr&gt;, &lt;strong&gt;, &lt;em&gt;</span></label>
            <textarea name="contenu" rows="22"
                      style="font-family:'JetBrains Mono', monospace; font-size:0.83em; resize:vertical;"
                      placeholder="<h2>Titre de section</h2>&#10;<p>Contenu du paragraphe...</p>&#10;<hr>">{{ old('contenu', $article?->contenu) }}</textarea>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn-admin btn-save">
            {{ $article ? 'Enregistrer les modifications' : 'Creer l\'article' }}
        </button>
        <a href="{{ route('admin.lugh-owl.index') }}" class="btn-admin btn-outline">Annuler</a>
        @if($article)
        <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" target="_blank" class="btn-admin btn-outline" style="margin-left:auto;">
            Voir sur le site &#8599;
        </a>
        @endif
    </div>
</form>

@endsection
