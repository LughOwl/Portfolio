@extends('layouts.admin')
@section('title', 'Formations')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Formations</div>
<p class="admin-page-sub">$ edit portfolio/formations</p>

@include('admin.portfolio._locale-tabs')
@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

{{-- Tableau formations --}}
<div class="admin-form-card" style="margin-top:24px; max-width:none;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px;">
        <span class="section-label">Parcours académique</span>
        <a href="#add-formation" class="btn-admin btn-save btn-sm">+ Ajouter</a>
    </div>
    <div style="overflow-x:auto;">
        <table class="admin-table">
            <thead>
                <tr><th>Période</th><th>Titre</th><th>Établissement</th><th>Statut</th><th>Actions</th></tr>
            </thead>
            <tbody>
            @foreach($formations as $f)
            <tr>
                <td class="td-code">{{ $f->periode }}</td>
                <td style="font-weight:600;">{{ $f->titre }}</td>
                <td class="td-muted">{{ $f->org }}</td>
                <td>
                    @if($f->dot === 'future')   <span class="badge-mini future">À venir</span>
                    @elseif($f->dot === 'blue') <span class="badge-mini blue">Validé</span>
                    @else                       <span class="badge-mini green">En cours</span>
                    @endif
                </td>
                <td>
                    <div class="td-actions">
                        <a href="{{ route('admin.portfolio.formation.edit', [$f->id, 'locale' => $locale]) }}" class="btn-admin btn-outline btn-sm">Modifier</a>
                        <form method="POST" action="{{ route('admin.portfolio.formation.destroy', $f->id) }}" onsubmit="return confirm('Supprimer ?')">
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

{{-- Formulaire ajout --}}
<div class="admin-form-card" id="add-formation" style="margin-top:20px;">
    <div class="section-label" style="margin-bottom:18px;">Ajouter une formation</div>
    <form method="POST" action="{{ route('admin.portfolio.formation.store') }}">
        @csrf
        <input type="hidden" name="locale" value="{{ $locale }}">
        @include('admin.portfolio._timeline-form', ['item' => null])
        <div class="form-actions">
            <button type="submit" class="btn-admin btn-save">Ajouter</button>
        </div>
    </form>
</div>

{{-- Certifications --}}
<div class="admin-form-card" style="margin-top:20px; max-width:none;">
    <div class="section-label" style="margin-bottom:18px;">Certifications visées</div>
    <div style="overflow-x:auto; margin-bottom:20px;">
        <table class="admin-table">
            <thead><tr><th>Nom</th><th>Couleur</th><th>Description</th><th>Actions</th></tr></thead>
            <tbody>
            @foreach($certifications as $c)
            <tr>
                <form method="POST" action="{{ route('admin.portfolio.certification.update', $c->id) }}">
                    @csrf @method('PUT')
                    <input type="hidden" name="locale" value="{{ $locale }}">
                    <td><input class="cell-input" type="text" name="nom" value="{{ $c->nom }}" required></td>
                    <td>
                        <select name="couleur" style="background:var(--bg); border:1px solid var(--bd); border-radius:6px; color:var(--tx); padding:4px 28px 4px 8px; font-size:.82em;">
                            @foreach(['badge-green','badge-blue','badge-purple','badge-cyan','badge-orange','badge-gray'] as $col)
                            <option value="{{ $col }}" {{ $c->couleur === $col ? 'selected' : '' }}>{{ str_replace('badge-','',$col) }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td><input class="cell-input" type="text" name="desc" value="{{ $c->desc }}" required></td>
                    <td>
                        <div class="td-actions">
                            <button class="btn-admin btn-save btn-sm">✓</button>
                </form>
                        <form method="POST" action="{{ route('admin.portfolio.certification.destroy', $c->id) }}" onsubmit="return confirm('Supprimer ?')">
                            @csrf @method('DELETE')
                            <input type="hidden" name="locale" value="{{ $locale }}">
                            <button class="btn-admin btn-delete btn-sm">✕</button>
                        </form>
                        </div>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <form method="POST" action="{{ route('admin.portfolio.certification.store') }}">
        @csrf
        <input type="hidden" name="locale" value="{{ $locale }}">
        <div class="form-grid-3">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required placeholder="CompTIA Security+">
            </div>
            <div class="form-group">
                <label>Couleur</label>
                <select name="couleur">
                    <option value="badge-green">green</option>
                    <option value="badge-blue">blue</option>
                    <option value="badge-purple">purple</option>
                    <option value="badge-cyan">cyan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="desc" required placeholder="Fondamentaux sécurité...">
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-admin btn-save btn-sm">Ajouter certification</button>
        </div>
    </form>
</div>
@endsection
