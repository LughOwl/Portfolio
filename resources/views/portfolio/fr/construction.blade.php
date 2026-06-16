@extends('layouts.portfolio')

@section('title', '{{ ucfirst($project ?? "Projet") }} — En construction')

@section('content')
<div id="construction">
    <img src="/assets/{{ ucfirst($project ?? 'projet') }}/1.logo.png"
         alt="Logo {{ $project ?? '' }}"
         onerror="this.style.display='none'">
    <h1>{{ ucwords(str_replace('-', ' ', $project ?? 'Ce projet')) }}</h1>
    @if(($locale ?? 'fr') === 'en')
        <p>This site is under construction. Check back soon!</p>
        <div style="margin-top: 28px;">
            <a href="{{ route('en.websites') }}" class="btn btn-outline" style="font-size: 0.85em;">
                ← See all projects
            </a>
        </div>
    @else
        <p>Ce site est en cours de construction. Revenez bientôt !</p>
        <div style="margin-top: 28px;">
            <a href="{{ route('fr.sites') }}" class="btn btn-outline" style="font-size: 0.85em;">
                ← Voir tous les projets
            </a>
        </div>
    @endif
</div>
@endsection
