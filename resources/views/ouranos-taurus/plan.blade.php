@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Sitemap - Ouranos-Taurus' : 'Plan du site - Ouranos-Taurus')
@section('content')
@php
$isEn = ($locale ?? 'fr') === 'en';
$p    = $isEn ? 'en' : 'fr';
@endphp

<div class="ot-content" style="padding-top:15px;">
    <div class="ot-prose">

@if($isEn)
        <h2>Sitemap</h2>
        <h2><a href="{{ route('en.ouranos-taurus.accueil') }}">Home</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.planetes') }}">Planets</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.constellations') }}">Constellations</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.phenomenes') }}">Phenomena</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.mythologie') }}">Mythology</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.observer') }}">Observe</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.origines') }}">Origins</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.legal') }}">Legal Notice</a></h2>
        <h2><a href="{{ route('en.ouranos-taurus.plan') }}">Sitemap</a></h2>
@else
        <h2>Plan du site</h2>
        <h2><a href="{{ route('fr.ouranos-taurus.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.planetes') }}">Planètes</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.constellations') }}">Constellations</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.phenomenes') }}">Phénomènes</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.mythologie') }}">Mythologie</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.observer') }}">Observer</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.origines') }}">Origines</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.legal') }}">Mentions légales</a></h2>
        <h2><a href="{{ route('fr.ouranos-taurus.plan') }}">Plan du site</a></h2>
@endif

    </div>
</div>
@endsection
