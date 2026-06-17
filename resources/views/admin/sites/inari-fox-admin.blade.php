@extends('layouts.admin')
@section('title', 'Inari-Fox - Admin')
@section('content')

<div class="admin-page-title">
    <span class="prefix" style="color:#c80000;">//</span> Inari-Fox
</div>
<p class="admin-page-sub">$ manage sites/inari-fox</p>

<div class="admin-form-card" style="margin-top:24px; display:flex; flex-direction:column; gap:16px;">
    <p style="color:var(--tx-2); font-size:.9em;">
        Le contenu d'Inari-Fox n'est pas encore configuré. Les pages publiques sont accessibles :
    </p>
    <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a href="{{ route('fr.inari-fox.accueil') }}" target="_blank" class="btn-admin btn-outline">
            ↗ Voir en FR
        </a>
        <a href="{{ route('en.inari-fox.accueil') }}" target="_blank" class="btn-admin btn-outline">
            ↗ Voir en EN
        </a>
    </div>
</div>

@endsection
