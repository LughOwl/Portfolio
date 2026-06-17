@extends('layouts.gaia-deer')

@section('title', $locale === 'en' ? 'Physical Health — Gaïa-Deer' : 'Santé physique — Gaïa-Deer')
@section('meta_description', $locale === 'en'
    ? 'My strength training program, cardio routine and recovery habits — and how physical health feeds mental health.'
    : 'Mon programme de musculation, ma routine cardio et mes habitudes de récupération — et comment la santé physique nourrit la santé mentale.')
@section('nav_sante', 'active')

@section('content')

<div class="gd-page-hero">
    <div class="gd-page-header">
        <div class="gd-page-cat">{{ $locale === 'en' ? 'Physical health' : 'Santé physique' }}</div>
        @if($locale === 'en')
        <h1 class="gd-page-title">Train. Recover. Repeat.</h1>
        <p class="gd-page-intro">
            Physical health is not a goal in itself — it is an infrastructure. A well-functioning body produces a clearer, more stable mind. This is the most fundamental investment you can make, and it costs nothing but consistency.
        </p>
        @else
        <h1 class="gd-page-title">S'entraîner. Récupérer. Recommencer.</h1>
        <p class="gd-page-intro">
            La santé physique n'est pas une fin en soi — c'est une infrastructure. Un corps qui fonctionne bien produit un esprit plus clair, plus stable. C'est l'investissement le plus fondamental que l'on puisse faire, et il ne coûte que de la régularité.
        </p>
        @endif
        <p class="gd-disclaimer">
            {{ $locale === 'en'
                ? 'Everything here reflects my personal experience. I am not a health professional. Adapt any routine to your own situation.'
                : 'Tout ce qui suit reflète mon expérience personnelle. Je ne suis pas un professionnel de santé. Adaptez toute routine à votre propre situation.' }}
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
