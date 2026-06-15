@extends('layouts.portfolio')

@section('title', 'Compétences — Nicolas BISAGA')
@section('meta_description', 'Compétences techniques de Nicolas BISAGA : cybersécurité, réseaux, développement, systèmes Linux/Windows, bases de données.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Compétences</h1>
        <p class="page-subtitle">$ nmap --skills nicolas-bisaga — Cartographie technique complète</p>
    </div>

    @foreach($competences as $cat)
        @if($cat['type'] === 'two-col')
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; padding-bottom: 60px;">
            @foreach($cat['cols'] as $col)
            <div>
                <div class="skills-section-title">{{ $col['titre'] }}</div>
                @if($col['type'] === 'tags')
                <div class="badge-list">
                    @foreach($col['tags'] as $tag)
                        <span class="badge badge-{{ $tag['couleur'] }}">{{ $tag['label'] }}</span>
                    @endforeach
                </div>
                @else
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    @foreach($col['items'] as $s)
                        <x-skill-bar :nom="$s['nom']" :niveau="$s['niveau']" :couleur="$s['couleur']" />
                    @endforeach
                </div>
                @endif
            </div>
            @endforeach
        </div>

        @elseif($cat['type'] === 'bars_and_tags')
        <div class="{{ ($cat['highlight'] ?? false) ? 'skills-cyber-block' : '' }}">
            <div class="skills-section-title">{{ $cat['titre'] }}</div>
            <div class="skill-grid" style="margin-bottom: 16px;">
                @foreach($cat['items'] as $s)
                    <x-skill-bar :nom="$s['nom']" :niveau="$s['niveau']" :couleur="$s['couleur']" />
                @endforeach
            </div>
            <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                @foreach($cat['tags'] as $tag)
                    <span class="badge badge-{{ $tag['couleur'] }}">{{ $tag['label'] }}</span>
                @endforeach
            </div>
        </div>

        @else
        <div>
            <div class="skills-section-title">{{ $cat['titre'] }}</div>
            <div class="skill-grid" style="margin-bottom: 40px;">
                @foreach($cat['items'] as $s)
                    <x-skill-bar :nom="$s['nom']" :niveau="$s['niveau']" :couleur="$s['couleur']" />
                @endforeach
            </div>
        </div>
        @endif
    @endforeach
</div>
@endsection
