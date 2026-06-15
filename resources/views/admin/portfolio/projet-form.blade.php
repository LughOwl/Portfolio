@extends('layouts.admin')
@section('title', 'Modifier projet')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Modifier le projet</div>
<p class="admin-page-sub">$ edit portfolio/sites/{{ $projet->id }}</p>

<div class="admin-form-card" style="margin-top:24px;">
    <form method="POST" action="{{ route('admin.portfolio.projet.update', $projet->id) }}">
        @csrf @method('PUT')
        <input type="hidden" name="locale" value="{{ $locale }}">
        @include('admin.portfolio._projet-form', ['projet' => $projet])
        <div style="display:flex; gap:12px; margin-top:4px;">
            <button type="submit" class="btn-admin btn-save">Enregistrer</button>
            <a href="{{ route('admin.portfolio.sites', ['locale' => $locale]) }}" class="btn-admin btn-outline">Annuler</a>
        </div>
    </form>
</div>
@endsection
