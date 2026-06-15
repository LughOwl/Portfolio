@extends('layouts.admin')
@section('title', 'Expériences')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Expériences</div>
<p class="admin-page-sub">$ edit portfolio/experiences</p>

@include('admin.portfolio._locale-tabs')
@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

<div class="admin-form-card" style="margin-top:24px; max-width:none;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px;">
        <span class="section-label">Expériences professionnelles</span>
        <a href="#add-experience" class="btn-admin btn-save btn-sm">+ Ajouter</a>
    </div>
    <div style="overflow-x:auto;">
        <table class="admin-table">
            <thead>
                <tr><th>Période</th><th>Titre</th><th>Organisation</th><th>Statut</th><th>Actions</th></tr>
            </thead>
            <tbody>
            @foreach($experiences as $e)
            <tr>
                <td class="td-code">{{ $e->periode }}</td>
                <td style="font-weight:600;">{{ $e->titre }}</td>
                <td class="td-muted">{{ $e->org }}</td>
                <td>
                    @if($e->dot === 'blue')       <span class="badge-mini blue">Terminé</span>
                    @elseif($e->dot === 'future') <span class="badge-mini future">À venir</span>
                    @else                         <span class="badge-mini green">Actuel</span>
                    @endif
                </td>
                <td>
                    <div class="td-actions">
                        <a href="{{ route('admin.portfolio.experience.edit', [$e->id, 'locale' => $locale]) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                        <form method="POST" action="{{ route('admin.portfolio.experience.destroy', $e->id) }}" onsubmit="return confirm('Supprimer ?')">
                            @csrf @method('DELETE')
                            <input type="hidden" name="locale" value="{{ $locale }}">
                            <button class="btn-admin btn-delete btn-sm">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="admin-form-card" id="add-experience" style="margin-top:20px;">
    <div class="section-label" style="margin-bottom:18px;">Ajouter une expérience</div>
    <form method="POST" action="{{ route('admin.portfolio.experience.store') }}">
        @csrf
        <input type="hidden" name="locale" value="{{ $locale }}">
        @include('admin.portfolio._timeline-form', ['item' => null])
        <div class="form-actions">
            <button type="submit" class="btn-admin btn-save">Ajouter</button>
        </div>
    </form>
</div>
@endsection
