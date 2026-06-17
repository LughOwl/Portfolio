@extends('layouts.admin')
@section('title', 'Inari-Fox — Recettes')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#c80000;">//</span> Inari-Fox — Recettes
</div>
<p class="admin-page-sub">$ manage sites/inari-fox — {{ $recettes->total() }} recette{{ $recettes->total() > 1 ? 's' : '' }}</p>

@if(session('success'))
<div class="admin-alert success">✓ {{ session('success') }}</div>
@endif
@if(session('error'))
<div class="admin-alert error">✕ {{ session('error') }}</div>
@endif

<div style="display:flex; gap:12px; margin-bottom:24px;">
    <a href="{{ route('admin.inari-fox.recette.create') }}" class="btn-admin btn-save">+ Nouvelle recette</a>
    <a href="{{ route('admin.inari-fox.ingredients') }}" class="btn-admin btn-outline">⚙ Référentiel</a>
    <a href="{{ route('fr.inari-fox.recettes') }}" target="_blank" class="btn-admin btn-outline">↗ Voir le site FR</a>
</div>

<div class="admin-form-card" style="max-width:none; padding:0; overflow:hidden;">
    <div style="overflow-x:auto;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:220px;">Titre</th>
                    <th style="width:140px;">Catégorie</th>
                    <th style="width:90px;">Difficulté</th>
                    <th style="width:80px;">Durée</th>
                    <th style="width:60px;">Ingr.</th>
                    <th style="width:60px;">Étapes</th>
                    <th style="width:80px;">Vedette</th>
                    <th style="width:90px;">Statut</th>
                    <th style="width:160px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recettes as $r)
                <tr>
                    <td>
                        <div style="font-weight:600; color:var(--tx);">{{ $r->titre_fr }}</div>
                        <div style="font-size:.78em; color:var(--tx-3); margin-top:2px; font-style:italic;">{{ $r->titre_en }}</div>
                    </td>
                    <td>
                        <span style="font-size:.8em; background:rgba(200,0,0,.08); color:#c80000; border-radius:4px; padding:2px 7px;">
                            {{ $r->categorieLabel('fr') }}
                        </span>
                    </td>
                    <td style="font-size:.85em; color:var(--tx-2);">{{ $r->difficulteLabel('fr') }}</td>
                    <td style="font-size:.85em; color:var(--tx-2);">
                        {{ $r->tempsTotal() > 0 ? $r->tempsTotalFormate('fr') : '—' }}
                    </td>
                    <td style="text-align:center; color:var(--tx-2);">{{ $r->ingredients_count }}</td>
                    <td style="text-align:center; color:var(--tx-2);">{{ $r->etapes_count }}</td>
                    <td style="text-align:center;">
                        <form method="POST" action="{{ route('admin.inari-fox.recette.vedette', $r->id) }}">
                            @csrf
                            <button type="submit"
                                    class="btn-admin btn-sm {{ $r->est_vedette ? 'btn-save' : 'btn-outline' }}"
                                    title="{{ $r->est_vedette ? 'Retirer de la vedette' : 'Mettre en vedette' }}">★</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.inari-fox.recette.publie', $r->id) }}">
                            @csrf
                            <button type="submit" class="btn-admin btn-sm {{ $r->est_publiee ? 'btn-save' : 'btn-outline' }}">
                                {{ $r->est_publiee ? '✓ Publiée' : '○ Brouillon' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <div style="display:flex; gap:6px; flex-wrap:wrap;">
                            <a href="{{ route('admin.inari-fox.recette.edit', $r->id) }}"
                               class="btn-admin btn-outline btn-sm">Modifier</a>
                            <form method="POST" action="{{ route('admin.inari-fox.recette.destroy', $r->id) }}"
                                  onsubmit="return confirm('Supprimer « {{ addslashes($r->titre_fr) }} » ?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn-admin btn-danger btn-sm">Suppr.</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" style="text-align:center; color:var(--tx-3); padding:32px;">
                        Aucune recette.
                        <a href="{{ route('admin.inari-fox.recette.create') }}" style="color:#c80000;">Créer la première →</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($recettes->hasPages())
<div style="margin-top:20px;">{{ $recettes->links() }}</div>
@endif

@endsection
