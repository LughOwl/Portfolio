@extends('layouts.admin')
@section('title', 'Modifier expérience')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Modifier l'expérience</div>
<p class="admin-page-sub">$ edit portfolio/experiences/{{ $item->id }}</p>

<div class="admin-form-card" style="margin-top:24px;">
    <form method="POST" action="{{ route('admin.portfolio.experience.update', $item->id) }}">
        @csrf @method('PUT')
        @include('admin.portfolio._timeline-form', ['item' => $item])
        <div style="display:flex; gap:12px;">
            <button type="submit" class="btn-admin btn-save">Enregistrer</button>
            <a href="{{ route('admin.portfolio.experiences') }}" class="btn-admin btn-outline">Annuler</a>
        </div>
    </form>
</div>
@endsection
