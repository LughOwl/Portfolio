@extends('layouts.portfolio')

@section('title', 'Projects — Nicolas BISAGA')
@section('meta_description', 'Hobby websites of Nicolas BISAGA: Janus-Bee, Lugh-Owl, Inari-Fox, Bragi-Bird, Gaïa-Deer, Zeus-Bug, Ouranos-Taurus.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Projects & Websites</h1>
        <p class="page-subtitle">$ ls -la ~/projects/ — Hobby websites</p>
    </div>

    <div class="projects-grid">
        @foreach($projets as $p)
            <x-project-card
                :nom="$p['nom']"
                :sujet="$p['sujet']"
                :desc="$p['desc']"
                :logo="$p['logo']"
                :color="$p['color']"
                :route="$p['route']"
                :etat="$p['etat']"
            />
        @endforeach
    </div>
</div>
@endsection
