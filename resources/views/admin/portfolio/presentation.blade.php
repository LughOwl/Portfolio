@extends('layouts.admin')
@section('title', 'Présentation')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Présentation</div>
<p class="admin-page-sub">$ edit portfolio/presentation — Hero de la page d'accueil</p>

@include('admin.portfolio._locale-tabs')
@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

<form method="POST" action="{{ route('admin.portfolio.presentation.save') }}" class="admin-form-card" style="margin-top:24px;">
    @csrf
    <input type="hidden" name="locale" value="{{ $locale }}">

    <div class="form-group">
        <label>Sous-titre (sous le nom)</label>
        <input type="text" name="subtitle" value="{{ old('subtitle', $hero->subtitle) }}" required>
        @error('subtitle')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label>Badge de disponibilité</label>
        <input type="text" name="availability" value="{{ old('availability', $hero->availability) }}" required>
        @error('availability')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label>Phrases du typewriter (une par ligne)</label>
        <textarea name="phrases" rows="5" required>{{ old('phrases', implode("\n", $hero->typewriter_phrases ?? [])) }}</textarea>
        @error('phrases')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <button type="submit" class="btn-admin btn-save">Enregistrer</button>
</form>
@endsection
