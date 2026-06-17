@extends('layouts.gaia-deer')

@section('title', $locale === 'en' ? 'Gaïa-Deer — Health, Nutrition & Investing' : 'Gaïa-Deer — Santé, Nutrition & Investissement')
@section('meta_description', $locale === 'en'
    ? 'Personal views on building a solid physical foundation, eating well and making your money work for you.'
    : 'Réflexions personnelles sur la santé physique, une alimentation sensée et l\'investissement à long terme.')

@section('content')

<section class="gd-hero">
    <img src="/assets/Gaia-Deer/1.logo.png" alt="Gaïa-Deer" class="gd-hero-logo"
         onerror="this.style.display='none'">
    <h1 class="gd-hero-title">Gaïa-<em>Deer</em></h1>
    @if($locale === 'en')
    <p class="gd-hero-sub">
        A body that functions, food that nourishes, money that works.
        Three pillars. One system. The foundation of mental clarity.
    </p>
    @else
    <p class="gd-hero-sub">
        Un corps qui fonctionne, une alimentation qui nourrit, un argent qui travaille.
        Trois piliers. Un système. Le socle d'un esprit clair.
    </p>
    @endif
</section>

<div class="gd-cards">

    {{-- Santé physique --}}
    <a href="{{ $locale === 'en' ? route('en.gaia-deer.sante') : route('fr.gaia-deer.sante') }}" class="gd-card">
        <div class="gd-card-visual">
            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6.5 6.5h1M16.5 6.5h1M6.5 17.5h1M16.5 17.5h1"/>
                <line x1="4" y1="12" x2="7.5" y2="12"/>
                <line x1="16.5" y1="12" x2="20" y2="12"/>
                <line x1="7.5" y1="9" x2="7.5" y2="15"/>
                <line x1="16.5" y1="9" x2="16.5" y2="15"/>
                <line x1="7.5" y1="12" x2="16.5" y2="12"/>
            </svg>
        </div>
        <div class="gd-card-body">
            <div class="gd-card-cat">{{ $locale === 'en' ? 'Physical health' : 'Santé physique' }}</div>
            <div class="gd-card-title">{{ $locale === 'en' ? 'Train. Recover. Repeat.' : 'S\'entraîner. Récupérer. Recommencer.' }}</div>
            <div class="gd-card-desc">
                {{ $locale === 'en'
                    ? 'My approach to strength training, cardio and recovery — and why physical health is the foundation of mental health.'
                    : 'Mon approche de la musculation, du cardio et de la récupération — et pourquoi la santé physique est le socle de la santé mentale.' }}
            </div>
            <span class="gd-card-cta">{{ $locale === 'en' ? 'Read →' : 'Lire →' }}</span>
        </div>
    </a>

    {{-- Nutrition --}}
    <a href="{{ $locale === 'en' ? route('en.gaia-deer.nutrition') : route('fr.gaia-deer.nutrition') }}" class="gd-card">
        <div class="gd-card-visual">
            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2a7 7 0 0 1 7 7c0 4-3 6-5 8H10c-2-2-5-4-5-8a7 7 0 0 1 7-7z"/>
                <line x1="12" y1="17" x2="12" y2="22"/>
                <line x1="9" y1="22" x2="15" y2="22"/>
            </svg>
        </div>
        <div class="gd-card-body">
            <div class="gd-card-cat">Nutrition</div>
            <div class="gd-card-title">{{ $locale === 'en' ? 'Eat less, eat better.' : 'Manger moins, manger mieux.' }}</div>
            <div class="gd-card-desc">
                {{ $locale === 'en'
                    ? 'Two meals a day, quality ingredients, intermittent fasting. A simple and sustainable approach to nutrition.'
                    : 'Deux repas par jour, des aliments de qualité, le jeûne intermittent. Une approche simple et durable de l\'alimentation.' }}
            </div>
            <span class="gd-card-cta">{{ $locale === 'en' ? 'Read →' : 'Lire →' }}</span>
        </div>
    </a>

    {{-- Investissement --}}
    <a href="{{ $locale === 'en' ? route('en.gaia-deer.investissement') : route('fr.gaia-deer.investissement') }}" class="gd-card">
        <div class="gd-card-visual">
            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="3 17 8 11 13 14 21 6"/>
                <polyline points="17 6 21 6 21 10"/>
            </svg>
        </div>
        <div class="gd-card-body">
            <div class="gd-card-cat">{{ $locale === 'en' ? 'Investing' : 'Investissement' }}</div>
            <div class="gd-card-title">{{ $locale === 'en' ? 'Make your money work.' : 'Faire travailler son argent.' }}</div>
            <div class="gd-card-desc">
                {{ $locale === 'en'
                    ? 'My views on ETFs, real estate, crypto and the fundamentals that actually matter for long-term wealth building.'
                    : 'Mon point de vue sur les ETF, l\'immobilier, la crypto et les principes qui comptent vraiment pour construire du patrimoine à long terme.' }}
            </div>
            <span class="gd-card-cta">{{ $locale === 'en' ? 'Read →' : 'Lire →' }}</span>
        </div>
    </a>

</div>

@endsection
