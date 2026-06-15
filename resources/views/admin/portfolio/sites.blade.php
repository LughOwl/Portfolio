@extends('layouts.admin')
@section('title', 'Projets & Sites')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Projets & Sites</div>
<p class="admin-page-sub">$ edit portfolio/sites</p>

@include('admin.portfolio._locale-tabs')
@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

<div class="admin-form-card" style="margin-top:24px; max-width:none;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px;">
        <span class="section-label">Projets</span>
        <a href="#add-projet" class="btn-admin btn-save btn-sm">+ Ajouter</a>
    </div>
    <div style="overflow-x:auto;">
        <table class="admin-table">
            <thead><tr><th></th><th>Nom</th><th>Sujet</th><th>Statut</th><th>Actions</th></tr></thead>
            <tbody>
            @foreach($projets as $p)
            <tr>
                <td style="width:24px; padding-right:0;">
                    <span style="display:block; width:10px; height:10px; border-radius:50%; background:{{ $p->color }}; margin:auto;"></span>
                </td>
                <td style="font-weight:600; font-family:'JetBrains Mono',monospace; font-size:.88em;">{{ $p->nom }}</td>
                <td class="td-muted">{{ $p->sujet }}</td>
                <td>
                    @if($p->etat === 'ligne')
                        <span class="badge-mini green">En ligne</span>
                    @else
                        <span class="badge-mini" style="color:var(--tx-3); border-color:rgba(255,255,255,.1);">En constr.</span>
                    @endif
                </td>
                <td>
                    <div class="td-actions">
                        <a href="{{ route('admin.portfolio.projet.edit', [$p->id, 'locale' => $locale]) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                        <form method="POST" action="{{ route('admin.portfolio.projet.destroy', $p->id) }}" onsubmit="return confirm('Supprimer ce projet ?')">
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

<div class="admin-form-card" id="add-projet" style="margin-top:20px;">
    <div class="section-label" style="margin-bottom:18px;">Ajouter un projet</div>
    <form method="POST" action="{{ route('admin.portfolio.projet.store') }}">
        @csrf
        <input type="hidden" name="locale" value="{{ $locale }}">
        @include('admin.portfolio._projet-form', ['projet' => null])
        <div class="form-actions">
            <button type="submit" class="btn-admin btn-save">Ajouter</button>
        </div>
    </form>
</div>
@endsection
