@extends('layouts.admin')
@section('title', $article ? 'Modifier — ' . $article->titre : 'Nouvel article — Zeus-Bug')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#00f0d2;">//</span>
    {{ $article ? 'Modifier : ' . $article->titre : 'Nouvel article Zeus-Bug' }}
</div>
<p class="admin-page-sub">$ manage sites/zeus-bug{{ $article ? '/articles/' . $article->id : '/create' }}</p>

<div style="margin-bottom:12px;">
    <a href="{{ route('admin.zeus-bug.index') }}" class="btn-admin btn-outline btn-sm">← Retour aux articles</a>
</div>

@if($errors->any())
<div class="admin-alert error" style="margin-bottom:24px;">
    <div>
        @foreach($errors->all() as $error)
        <div>✕ {{ $error }}</div>
        @endforeach
    </div>
</div>
@endif

@php
use App\Models\ZeusBugArticle;
$allCategories = ZeusBugArticle::$categories;
@endphp

<form method="POST"
      action="{{ $article ? route('admin.zeus-bug.update', $article->id) : route('admin.zeus-bug.store') }}">
    @csrf
    @if($article) @method('PUT') @endif

    {{-- CATÉGORIE / TAGS / DATE --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div class="section-label" style="margin-bottom:16px;">// Métadonnées</div>
        <div style="display:grid; grid-template-columns:1fr 1fr 160px; gap:16px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>Catégorie *</label>
                <select name="categorie" required>
                    @foreach($allCategories as $val => $label)
                    <option value="{{ $val }}"
                        {{ old('categorie', $article?->categorie ?? $categorie) === $val ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Tags <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(séparés par des virgules)</span></label>
                <input type="text" name="tags"
                       value="{{ old('tags', $article?->tags) }}"
                       placeholder="PHP, Laravel, MySQL, ...">
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Année du projet</label>
                <input type="date" name="date_projet"
                       value="{{ old('date_projet', $article?->date_projet?->format('Y-m-d')) }}">
            </div>
        </div>
        <div class="form-group" style="margin-top:16px; margin-bottom:0;">
            <label>Lien GitHub <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(facultatif)</span></label>
            <input type="url" name="github_url"
                   value="{{ old('github_url', $article?->github_url) }}"
                   placeholder="https://github.com/lughowl/...">
        </div>
    </div>

    {{-- ONGLETS FR / EN --}}
    <div class="admin-form-card" style="margin-bottom:20px;">

        <div style="display:flex; gap:0; margin-bottom:20px; border-bottom:2px solid var(--bd);">
            <button type="button" class="zb-tab" data-tab="fr"
                style="background:none; border:none; padding:8px 20px; cursor:pointer; font-size:0.9em; color:var(--tx); font-weight:600; border-bottom:3px solid #00f0d2; margin-bottom:-2px;">
                🇫🇷 Français
            </button>
            <button type="button" class="zb-tab" data-tab="en"
                style="background:none; border:none; padding:8px 20px; cursor:pointer; font-size:0.9em; color:var(--tx-3); font-weight:400; border-bottom:3px solid transparent; margin-bottom:-2px;">
                🇬🇧 English
            </button>
        </div>

        {{-- PANEL FR --}}
        <div id="zb-panel-fr">
            <div class="form-group">
                <label>Titre * <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(FR)</span></label>
                <input type="text" name="titre" required
                       value="{{ old('titre', $article?->titre) }}"
                       placeholder="Titre de l'article">
            </div>
            <div class="form-group">
                <label>Intro * <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(FR — résumé court, affiché dans la liste)</span></label>
                <textarea name="intro" rows="3" required
                          placeholder="Courte description visible dans la liste des articles...">{{ old('intro', $article?->intro) }}</textarea>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Contenu * <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(FR — HTML : &lt;h2&gt;, &lt;h3&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;code&gt;, &lt;pre&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;blockquote&gt;, &lt;hr&gt;)</span></label>
                <textarea name="contenu" rows="24" required
                          style="font-family:'JetBrains Mono', monospace; font-size:0.83em; resize:vertical;"
                          placeholder="<h2>Introduction</h2>&#10;<p>...</p>">{{ old('contenu', $article?->contenu) }}</textarea>
            </div>
        </div>

        {{-- PANEL EN --}}
        <div id="zb-panel-en" style="display:none;">
            <div class="form-group">
                <label>Title <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(EN)</span></label>
                <input type="text" name="titre_en"
                       value="{{ old('titre_en', $article?->titre_en) }}"
                       placeholder="Article title in English">
            </div>
            <div class="form-group">
                <label>Intro <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(EN — short summary shown in article list)</span></label>
                <textarea name="intro_en" rows="3"
                          placeholder="Short description shown in article list...">{{ old('intro_en', $article?->intro_en) }}</textarea>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Content <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(EN — HTML: &lt;h2&gt;, &lt;h3&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;code&gt;, &lt;pre&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;blockquote&gt;, &lt;hr&gt;)</span></label>
                <textarea name="contenu_en" rows="24"
                          style="font-family:'JetBrains Mono', monospace; font-size:0.83em; resize:vertical;"
                          placeholder="<h2>Introduction</h2>&#10;<p>...</p>">{{ old('contenu_en', $article?->contenu_en) }}</textarea>
            </div>
        </div>
    </div>

    {{-- STATUT --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div class="section-label" style="margin-bottom:16px;">// Statut</div>
        <div class="form-group" style="margin-bottom:0;">
            <label style="display:flex; align-items:center; gap:10px; cursor:pointer; font-size:0.9em; text-transform:none; letter-spacing:0; font-weight:400; color:var(--tx);">
                <input type="hidden" name="publie" value="0">
                <input type="checkbox" name="publie" value="1"
                       {{ old('publie', $article?->publie ?? true) ? 'checked' : '' }}
                       style="width:auto; accent-color:var(--green);">
                Publié (visible sur le site)
            </label>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn-admin btn-save">
            {{ $article ? 'Enregistrer les modifications' : 'Créer l\'article' }}
        </button>
        <a href="{{ route('admin.zeus-bug.index') }}" class="btn-admin btn-outline">Annuler</a>
    </div>
</form>

<script>
document.querySelectorAll('.zb-tab').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var tab = this.getAttribute('data-tab');
        document.querySelectorAll('.zb-tab').forEach(function(b) {
            b.style.borderBottomColor = 'transparent';
            b.style.color = 'var(--tx-3)';
            b.style.fontWeight = '400';
        });
        this.style.borderBottomColor = '#00f0d2';
        this.style.color = 'var(--tx)';
        this.style.fontWeight = '600';
        document.getElementById('zb-panel-fr').style.display = tab === 'fr' ? '' : 'none';
        document.getElementById('zb-panel-en').style.display = tab === 'en' ? '' : 'none';
    });
});
</script>

@endsection
