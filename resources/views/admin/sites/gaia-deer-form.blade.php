@extends('layouts.admin')
@section('title', $section ? 'Modifier — ' . $section->titre : 'Nouvelle section — Gaïa-Deer')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#00af00;">//</span>
    {{ $section ? 'Modifier : ' . $section->titre : 'Nouvelle section Gaïa-Deer' }}
</div>
<p class="admin-page-sub">$ manage sites/gaia-deer{{ $section ? '/sections/' . $section->id : '/create' }}</p>

<div style="margin-bottom:12px;">
    <a href="{{ route('admin.gaia-deer.index') }}" class="btn-admin btn-outline btn-sm">← Retour aux sections</a>
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

<form method="POST"
      action="{{ $section ? route('admin.gaia-deer.section.update', $section->id) : route('admin.gaia-deer.section.store') }}">
    @csrf
    @if($section) @method('PUT') @endif

    {{-- RUBRIQUE --}}
    <div class="admin-form-card" style="margin-bottom:20px;">
        <div class="section-label" style="margin-bottom:16px;">// Rubrique</div>
        <div class="form-group" style="margin-bottom:0;">
            <label>Rubrique *</label>
            <select name="rubrique" required>
                @foreach(['sante' => 'Santé physique', 'nutrition' => 'Nutrition', 'investissement' => 'Investissement'] as $val => $label)
                <option value="{{ $val }}"
                    {{ old('rubrique', $section?->rubrique ?? $rubrique) === $val ? 'selected' : '' }}>
                    {{ $label }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- ONGLETS FR / EN --}}
    <div class="admin-form-card" style="margin-bottom:20px;">

        <div style="display:flex; gap:0; margin-bottom:20px; border-bottom:2px solid var(--bd);">
            <button type="button" class="gd-tab" data-tab="fr"
                style="background:none; border:none; padding:8px 20px; cursor:pointer; font-size:0.9em; color:var(--tx); font-weight:600; border-bottom:3px solid #00af00; margin-bottom:-2px;">
                🇫🇷 Français
            </button>
            <button type="button" class="gd-tab" data-tab="en"
                style="background:none; border:none; padding:8px 20px; cursor:pointer; font-size:0.9em; color:var(--tx-3); font-weight:400; border-bottom:3px solid transparent; margin-bottom:-2px;">
                🇬🇧 English
            </button>
        </div>

        {{-- PANEL FR --}}
        <div id="gd-panel-fr">
            <div class="form-group">
                <label>Titre * <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(FR)</span></label>
                <input type="text" name="titre" required
                       value="{{ old('titre', $section?->titre) }}"
                       placeholder="Titre de la section">
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Contenu * <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(FR — balises : &lt;h3&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;hr&gt;)</span></label>
                <textarea name="contenu" rows="20" required
                          style="font-family:'JetBrains Mono', monospace; font-size:0.83em; resize:vertical;"
                          placeholder="<p>Contenu de la section...</p>&#10;<ul>&#10;  <li>Point 1</li>&#10;</ul>">{{ old('contenu', $section?->contenu) }}</textarea>
            </div>
        </div>

        {{-- PANEL EN --}}
        <div id="gd-panel-en" style="display:none;">
            <div class="form-group">
                <label>Title <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(EN)</span></label>
                <input type="text" name="titre_en"
                       value="{{ old('titre_en', $section?->titre_en) }}"
                       placeholder="Section title in English">
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <label>Content <span style="font-weight:400; text-transform:none; color:var(--tx-3);">(EN — allowed tags: &lt;h3&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;hr&gt;)</span></label>
                <textarea name="contenu_en" rows="20"
                          style="font-family:'JetBrains Mono', monospace; font-size:0.83em; resize:vertical;"
                          placeholder="<p>Section content in English...</p>">{{ old('contenu_en', $section?->contenu_en) }}</textarea>
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
                       {{ old('publie', $section?->publie ?? true) ? 'checked' : '' }}
                       style="width:auto; accent-color:var(--green);">
                Publié (visible sur le site)
            </label>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn-admin btn-save">
            {{ $section ? 'Enregistrer les modifications' : 'Créer la section' }}
        </button>
        <a href="{{ route('admin.gaia-deer.index') }}" class="btn-admin btn-outline">Annuler</a>
    </div>
</form>

<script>
document.querySelectorAll('.gd-tab').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var tab = this.getAttribute('data-tab');
        document.querySelectorAll('.gd-tab').forEach(function(b) {
            b.style.borderBottomColor = 'transparent';
            b.style.color = 'var(--tx-3)';
            b.style.fontWeight = '400';
        });
        this.style.borderBottomColor = '#00af00';
        this.style.color = 'var(--tx)';
        this.style.fontWeight = '600';
        document.getElementById('gd-panel-fr').style.display = tab === 'fr' ? '' : 'none';
        document.getElementById('gd-panel-en').style.display = tab === 'en' ? '' : 'none';
    });
});
</script>

@endsection
