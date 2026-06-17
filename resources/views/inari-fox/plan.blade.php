@extends('layouts.inari-fox')
@section('title', $locale === 'en' ? 'Sitemap - Inari-Fox' : 'Plan du site - Inari-Fox')
@section('content')
@php
$isEn = ($locale ?? 'fr') === 'en';
$p = $isEn ? 'en' : 'fr';
@endphp

<div class="if-content if-content-narrow" style="padding-top:15px;">
    <div class="if-prose">

@if($isEn)
        <h2>Sitemap</h2>
        <h2><a href="{{ route('en.inari-fox.accueil') }}">Home</a></h2>
        <h2><a href="{{ route('en.inari-fox.recettes') }}">Recipes</a></h2>
        <h2><a href="{{ route('en.inari-fox.origines') }}">Origins</a></h2>
        <h2><a href="{{ route('en.inari-fox.legal') }}">Legal Notice</a></h2>
        <h2><a href="{{ route('en.inari-fox.plan') }}">Sitemap</a></h2>
@else
        <h2>Plan du site</h2>
        <h2><a href="{{ route('fr.inari-fox.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.inari-fox.recettes') }}">Recettes</a></h2>
        <h2><a href="{{ route('fr.inari-fox.origines') }}">Origines</a></h2>
        <h2><a href="{{ route('fr.inari-fox.legal') }}">Mentions légales</a></h2>
        <h2><a href="{{ route('fr.inari-fox.plan') }}">Plan du site</a></h2>
@endif

    </div>
</div>
@endsection
