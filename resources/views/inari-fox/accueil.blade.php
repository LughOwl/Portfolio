@extends('layouts.inari-fox')
@section('title', $locale === 'en' ? 'Inari-Fox — Recipes' : 'Inari-Fox — Recettes')
@section('nav_accueil', 'active')
@php $isEn = $locale === 'en'; @endphp
@section('content')

{{-- Hero --}}
<section class="if-hero">
    <div class="if-hero-inner">
        <img src="/assets/Inari-Fox/1.logo.png" width="72" alt="Inari-Fox"
             class="if-hero-logo" onerror="this.style.display='none'">
        <h1 class="if-hero-title">
            Inari-<em>Fox</em>
        </h1>
        <p class="if-hero-sub">
            {{ $isEn
                ? 'A collection of recipes to cook with curiosity and simplicity.'
                : 'Une collection de recettes à cuisiner avec curiosité et simplicité.' }}
        </p>
        <a href="{{ $isEn ? route('en.inari-fox.recettes') : route('fr.inari-fox.recettes') }}"
           class="if-hero-cta">
            {{ $isEn ? 'Browse recipes' : 'Parcourir les recettes' }}
        </a>
    </div>
</section>

@if($vedettes->isNotEmpty())
{{-- Recettes vedettes --}}
<section class="if-section">
    <div class="if-content">
        <h2 class="if-section-title">
            {{ $isEn ? 'Featured' : 'En vedette' }}
        </h2>
        <div class="if-recipe-grid">
            @foreach($vedettes as $r)
                <a href="{{ $isEn ? route('en.inari-fox.recette', $r->slug) : route('fr.inari-fox.recette', $r->slug) }}"
                   class="if-recipe-card">
                    <div class="if-rc-photo">
                        @if($r->photo)
                            <img src="{{ $r->photoUrl() }}" alt="{{ $r->titre($locale) }}" loading="lazy">
                        @else
                            <div class="if-rc-no-photo">🍽️</div>
                        @endif
                        <span class="if-rc-badge if-rc-badge--vedette">★</span>
                    </div>
                    <div class="if-rc-body">
                        <p class="if-rc-cat">{{ $r->categorieLabel($locale) }}</p>
                        <h3 class="if-rc-title">{{ $r->titre($locale) }}</h3>
                        <div class="if-rc-meta">
                            <span class="if-rc-diff if-rc-diff--{{ $r->difficulte }}">{{ $r->difficulteLabel($locale) }}</span>
                            @if($r->tempsTotal() > 0)
                                <span class="if-rc-time">⏱ {{ $r->tempsTotalFormate($locale) }}</span>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($recentes->isNotEmpty())
{{-- Dernières recettes --}}
<section class="if-section if-section--alt">
    <div class="if-content">
        <h2 class="if-section-title">
            {{ $isEn ? 'Latest recipes' : 'Dernières recettes' }}
        </h2>
        <div class="if-recipe-grid if-recipe-grid--3">
            @foreach($recentes as $r)
                <a href="{{ $isEn ? route('en.inari-fox.recette', $r->slug) : route('fr.inari-fox.recette', $r->slug) }}"
                   class="if-recipe-card">
                    <div class="if-rc-photo">
                        @if($r->photo)
                            <img src="{{ $r->photoUrl() }}" alt="{{ $r->titre($locale) }}" loading="lazy">
                        @else
                            <div class="if-rc-no-photo">🍽️</div>
                        @endif
                    </div>
                    <div class="if-rc-body">
                        <p class="if-rc-cat">{{ $r->categorieLabel($locale) }}</p>
                        <h3 class="if-rc-title">{{ $r->titre($locale) }}</h3>
                        <div class="if-rc-meta">
                            <span class="if-rc-diff if-rc-diff--{{ $r->difficulte }}">{{ $r->difficulteLabel($locale) }}</span>
                            @if($r->tempsTotal() > 0)
                                <span class="if-rc-time">⏱ {{ $r->tempsTotalFormate($locale) }}</span>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="if-section-cta">
            <a href="{{ $isEn ? route('en.inari-fox.recettes') : route('fr.inari-fox.recettes') }}"
               class="if-btn-outline">
                {{ $isEn ? 'See all recipes →' : 'Voir toutes les recettes →' }}
            </a>
        </div>
    </div>
</section>
@endif

@if($vedettes->isEmpty() && $recentes->isEmpty())
{{-- État vide : aucune recette encore --}}
<section class="if-section">
    <div class="if-content" style="text-align:center; padding-top:60px; padding-bottom:60px;">
        <p style="color:var(--if-muted); font-size:1.05rem;">
            {{ $isEn ? 'No recipes yet — check back soon.' : 'Pas encore de recettes — revenez bientôt.' }}
        </p>
    </div>
</section>
@endif

@endsection
