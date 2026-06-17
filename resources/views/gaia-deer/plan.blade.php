@extends('layouts.gaia-deer')

@section('title', $locale === 'en' ? 'Sitemap — Gaïa-Deer' : 'Plan du site — Gaïa-Deer')

@section('content')
<div class="gd-static">
    @if($locale === 'en')
    <p class="gd-static-sub">$ ls -la gaiadeer/</p>
    <h1>Sitemap</h1>
    <ul class="gd-sitemap-list">
        <li><a href="{{ route('en.gaia-deer.accueil') }}">Home</a> <span>/en/gaia-deer/</span></li>
        <li><a href="{{ route('en.gaia-deer.sante') }}">Physical Health</a> <span>/en/gaia-deer/health</span></li>
        <li><a href="{{ route('en.gaia-deer.nutrition') }}">Nutrition</a> <span>/en/gaia-deer/nutrition</span></li>
        <li><a href="{{ route('en.gaia-deer.investissement') }}">Investing</a> <span>/en/gaia-deer/investing</span></li>
        <li><a href="{{ route('en.gaia-deer.origines') }}">Origins</a> <span>/en/gaia-deer/origins</span></li>
        <li><a href="{{ route('en.gaia-deer.legal') }}">Legal Notice</a> <span>/en/gaia-deer/legal</span></li>
    </ul>
    @else
    <p class="gd-static-sub">$ ls -la gaiadeer/</p>
    <h1>Plan du site</h1>
    <ul class="gd-sitemap-list">
        <li><a href="{{ route('fr.gaia-deer.accueil') }}">Accueil</a> <span>/fr/gaia-deer/</span></li>
        <li><a href="{{ route('fr.gaia-deer.sante') }}">Santé physique</a> <span>/fr/gaia-deer/sante</span></li>
        <li><a href="{{ route('fr.gaia-deer.nutrition') }}">Nutrition</a> <span>/fr/gaia-deer/nutrition</span></li>
        <li><a href="{{ route('fr.gaia-deer.investissement') }}">Investissement</a> <span>/fr/gaia-deer/investissement</span></li>
        <li><a href="{{ route('fr.gaia-deer.origines') }}">Origines</a> <span>/fr/gaia-deer/origines</span></li>
        <li><a href="{{ route('fr.gaia-deer.legal') }}">Mentions légales</a> <span>/fr/gaia-deer/legal</span></li>
    </ul>
    @endif
</div>
@endsection
