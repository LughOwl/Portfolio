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
            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="m6.5 6.5 11 11"/><path d="m21 21-1-1"/><path d="m3 3 1 1"/><path d="m18 22 4-4"/><path d="m2 6 4-4"/><path d="m3 10 7-7"/><path d="m14 21 7-7"/></svg>
        </div>
        <div class="gd-card-body">
            <div class="gd-card-cat">{{ $locale === 'en' ? 'Physical health' : 'Santé physique' }}</div>
            <div class="gd-card-title">{{ $locale === 'en' ? 'Train. Recover. Repeat.' : 'S\'entraîner. Récupérer. Recommencer.' }}</div>
            <div class="gd-card-desc">
                {{ $locale === 'en'
                    ? 'My approach to strength training, cardio and recovery, and why physical health is the foundation of mental health.'
                    : 'Mon approche de la musculation, du cardio et de la récupération, et pourquoi la santé physique est le socle de la santé mentale.' }}
            </div>
            <span class="gd-card-cta">{{ $locale === 'en' ? 'Read →' : 'Lire →' }}</span>
        </div>
    </a>

    {{-- Nutrition --}}
    <a href="{{ $locale === 'en' ? route('en.gaia-deer.nutrition') : route('fr.gaia-deer.nutrition') }}" class="gd-card">
        <div class="gd-card-visual">
            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/></svg>
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
            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
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
