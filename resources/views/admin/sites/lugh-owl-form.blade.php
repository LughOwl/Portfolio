@extends('layouts.admin')

@section('title', $article ? 'Modifier — ' . $article->titre : 'Nouvel article — Lugh-Owl')

@section('content')
<div class="page-header">
    <h1 class="page-title">
        <span style="color:#0078ff">●</span>
        {{ $article ? 'Modifier : ' . $article->titre : 'Nouvel article Lugh-Owl' }}
    </h1>
    <a href="{{ route('admin.lugh-owl.index') }}" class="btn btn-sm btn-secondary">← Retour</a>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul style="margin:0;padding-left:1.2em">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST"
      action="{{ $article ? route('admin.lugh-owl.update', $article->id) : route('admin.lugh-owl.store') }}"
      enctype="multipart/form-data"
      class="admin-form">
    @csrf
    @if($article) @method('PUT') @endif

    <div class="form-two-col">

        {{-- COL GAUCHE --}}
        <div class="form-col">

            <div class="form-group">
                <label class="form-label">Titre *</label>
                <input type="text" name="titre" class="form-control" required
                       value="{{ old('titre', $article?->titre) }}" placeholder="Titre de l'article">
                @if(!$article)
                <small style="color:#888">Le slug sera generé automatiquement depuis le titre.</small>
                @else
                <small style="color:#888">Slug : <code>{{ $article->slug }}</code></small>
                @endif
            </div>

            <div class="form-group">
                <label class="form-label">Categorie *</label>
                <select name="categorie" class="form-control" required>
                    <option value="">-- Choisir --</option>
                    @foreach(['modeles' => 'Modeles philosophiques', 'idees' => 'Idees immuables', 'vie' => 'La Vie est [...]'] as $val => $label)
                    <option value="{{ $val }}" {{ old('categorie', $article?->categorie) === $val ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Description courte *</label>
                <textarea name="description" class="form-control" rows="3" required
                          placeholder="Phrase d'accroche visible dans les listes et sur les cartes...">{{ old('description', $article?->description) }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Statut</label>
                <label style="display:flex;align-items:center;gap:8px;cursor:pointer">
                    <input type="hidden" name="publie" value="0">
                    <input type="checkbox" name="publie" value="1"
                           {{ old('publie', $article?->publie ?? true) ? 'checked' : '' }}>
                    <span>Publie (visible sur le site)</span>
                </label>
            </div>

        </div>

        {{-- COL DROITE --}}
        <div class="form-col">

            <div class="form-group">
                <label class="form-label">Image</label>
                @if($article && $article->image)
                <div style="margin-bottom:8px">
                    <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="" style="max-width:200px;border-radius:6px;border:1px solid #0078ff22">
                </div>
                @endif
                <input type="text" name="image" class="form-control" style="margin-bottom:6px"
                       value="{{ old('image', $article?->image) }}" placeholder="Nom du fichier (ex: mdl-balance_lugh.jpg)">
                <input type="file" name="image_file" class="form-control" accept="image/*">
                <small style="color:#888">Deposez un nouveau fichier pour remplacer. Max 10 Mo.</small>
            </div>

        </div>
    </div>

    {{-- CONTENU --}}
    <div class="form-group" style="margin-top:20px">
        <label class="form-label">Contenu de l'article (HTML)</label>
        <textarea name="contenu" class="form-control" rows="20"
                  style="font-family:monospace;font-size:0.85em"
                  placeholder="Contenu HTML de l'article (h2, p, hr...)">{{ old('contenu', $article?->contenu) }}</textarea>
        <small style="color:#888">Utilisez des balises HTML : &lt;h2&gt;, &lt;p&gt;, &lt;hr&gt;, &lt;strong&gt;, &lt;em&gt;...</small>
    </div>

    <div style="margin-top:20px;display:flex;gap:12px">
        <button type="submit" class="btn btn-primary">
            {{ $article ? 'Enregistrer les modifications' : 'Creer l\'article' }}
        </button>
        <a href="{{ route('admin.lugh-owl.index') }}" class="btn btn-secondary">Annuler</a>
    </div>
</form>

@endsection
