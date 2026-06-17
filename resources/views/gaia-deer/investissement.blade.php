@extends('layouts.gaia-deer')

@section('title', $locale === 'en' ? 'Investing — Gaïa-Deer' : 'Investissement — Gaïa-Deer')
@section('meta_description', $locale === 'en'
    ? 'My personal approach to investing: ETFs, real estate, crypto and the fundamentals that actually matter.'
    : 'Mon approche personnelle de l\'investissement : ETF, immobilier, crypto et les principes qui comptent vraiment.')
@section('nav_invest', 'active')

@section('content')

<div class="gd-page-hero">
    <div class="gd-page-header">
        <div class="gd-page-cat">{{ $locale === 'en' ? 'Investing' : 'Investissement' }}</div>
        @if($locale === 'en')
        <h1 class="gd-page-title">Make your money work.</h1>
        <p class="gd-page-intro">
            Money that sits idle in a bank account loses value every year to inflation. Investing is not speculation — it is the rational decision to put your savings to work over time. Here is how I think about it, and what I actually do.
        </p>
        @else
        <h1 class="gd-page-title">Faire travailler son argent.</h1>
        <p class="gd-page-intro">
            L'argent qui dort sur un compte bancaire perd de la valeur chaque année à cause de l'inflation. Investir n'est pas spéculer — c'est la décision rationnelle de mettre ses économies au travail dans le temps. Voici comment j'y pense, et ce que je fais concrètement.
        </p>
        @endif
        <p class="gd-disclaimer">
            {{ $locale === 'en'
                ? 'This reflects my personal investment choices and opinions only. I am not a financial advisor. Nothing here constitutes investment advice. Past returns do not guarantee future results.'
                : 'Ceci reflète uniquement mes choix d\'investissement personnels et mes opinions. Je ne suis pas conseiller financier. Rien ici ne constitue un conseil en investissement. Les performances passées ne garantissent pas les résultats futurs.' }}
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
