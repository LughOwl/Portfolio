@extends('layouts.gaia-deer')

@section('title', $locale === 'en' ? 'Nutrition — Gaïa-Deer' : 'Nutrition — Gaïa-Deer')
@section('meta_description', $locale === 'en'
    ? 'Two meals a day, quality food, intermittent fasting. My personal approach to sustainable nutrition.'
    : 'Deux repas par jour, des aliments de qualité, le jeûne intermittent. Mon approche personnelle d\'une nutrition durable.')
@section('nav_nutrition', 'active')

@section('content')

<div class="gd-page-hero">
    <div class="gd-page-header">
        <div class="gd-page-cat">Nutrition</div>
        @if($locale === 'en')
        <h1 class="gd-page-title">Eat less, eat better.</h1>
        <p class="gd-page-intro">
            We eat too much, too often, and not well enough. The modern food environment is designed to make us consume more than we need. My approach is to simplify: fewer meals, better quality, and water above all else.
        </p>
        @else
        <h1 class="gd-page-title">Manger moins, manger mieux.</h1>
        <p class="gd-page-intro">
            On mange trop, trop souvent, et pas assez bien. L'environnement alimentaire moderne est conçu pour nous faire consommer plus que ce dont on a besoin. Mon approche est de simplifier : moins de repas, meilleure qualité, et de l'eau avant tout.
        </p>
        @endif
        <p class="gd-disclaimer">
            {{ $locale === 'en'
                ? 'This is my personal approach, not medical advice. Nutritional needs vary by individual. If you have health conditions, consult a professional.'
                : 'Ceci est mon approche personnelle, pas un conseil médical. Les besoins nutritionnels varient selon les individus. En cas de problème de santé, consultez un professionnel.' }}
        </p>
    </div>
</div>

<div class="gd-content">

    @forelse($sections as $section)
    @php
        $titre   = ($locale === 'en' && $section->titre_en)   ? $section->titre_en   : $section->titre;
        $contenu = ($locale === 'en' && $section->contenu_en) ? $section->contenu_en : $section->contenu;
    @endphp
    <div class="gd-section">
        <h2 class="gd-section-title">{{ $titre }}</h2>
        <div class="gd-text">{!! $contenu !!}</div>
    </div>
    @empty
    <div class="gd-section" style="text-align:center; color:var(--gd-muted); padding:60px 0;">
        {{ $locale === 'en' ? 'Content coming soon.' : 'Contenu à venir.' }}
    </div>
    @endforelse

</div>

@endsection
