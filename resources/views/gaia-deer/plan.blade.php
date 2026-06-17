@extends('layouts.gaia-deer')
@section('title', $locale === 'en' ? 'Sitemap - Gaïa-Deer' : 'Plan du site - Gaïa-Deer')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="gd-static">

@if($isEn)
        <h1>Sitemap</h1>
        <h2><a href="{{ route('en.gaia-deer.accueil') }}">Home</a></h2>
        <h2><a href="{{ route('en.gaia-deer.sante') }}">Health</a></h2>
        <h2><a href="{{ route('en.gaia-deer.nutrition') }}">Nutrition</a></h2>
        <h2><a href="{{ route('en.gaia-deer.investissement') }}">Investing</a></h2>
        <h2><a href="{{ route('en.gaia-deer.origines') }}">Origins</a></h2>
        <h2><a href="{{ route('en.gaia-deer.legal') }}">Legal Notice</a></h2>
        <h2><a href="{{ route('en.gaia-deer.plan') }}">Sitemap</a></h2>
@else
        <h1>Plan du site</h1>
        <h2><a href="{{ route('fr.gaia-deer.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.gaia-deer.sante') }}">Santé</a></h2>
        <h2><a href="{{ route('fr.gaia-deer.nutrition') }}">Nutrition</a></h2>
        <h2><a href="{{ route('fr.gaia-deer.investissement') }}">Investissement</a></h2>
        <h2><a href="{{ route('fr.gaia-deer.origines') }}">Origines</a></h2>
        <h2><a href="{{ route('fr.gaia-deer.legal') }}">Mentions légales</a></h2>
        <h2><a href="{{ route('fr.gaia-deer.plan') }}">Plan du site</a></h2>
@endif

</div>
@endsection
