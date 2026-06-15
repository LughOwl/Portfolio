@extends('layouts.portfolio')

@section('title', '404 — Page non trouvée')

@section('content')
<div class="container">
    <div class="erreur404-container">
        <div class="erreur404-code">404</div>
        <h1 style="color: var(--text-primary); font-size: 1.5em; margin: 12px 0;">Page non trouvée</h1>
        <p style="color: var(--text-secondary);">La page que vous recherchez n'existe pas ou a été déplacée.</p>
        <div class="erreur404-liens">
            <a href="{{ route('fr.presentation') }}" class="btn btn-primary">Retour à l'accueil</a>
            <a href="{{ route('fr.contact') }}" class="btn btn-outline">Me contacter</a>
        </div>
    </div>
</div>
@endsection
