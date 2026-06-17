@extends('layouts.janus-bee')
@section('title', $locale === 'en' ? 'Sitemap - Janus-Bee' : 'Plan du site - Janus-Bee')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="content-plan">
    <div>

@if($isEn)
        <h1>Sitemap</h1>
        <h2><a href="{{ route('en.janus-bee.accueil') }}">Home</a></h2>
        <h2><a href="{{ route('en.janus-bee.catalogue') }}">Catalogue</a></h2>
        <h2><a href="{{ route('en.janus-bee.origines') }}">Origins</a></h2>
        <h2><a href="{{ route('en.janus-bee.legal') }}">Legal Notice</a></h2>
        <h2><a href="{{ route('en.janus-bee.plan') }}">Sitemap</a></h2>
@else
        <h1>Plan du site</h1>
        <h2><a href="{{ route('fr.janus-bee.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.janus-bee.catalogue') }}">Catalogue</a></h2>
        <h2><a href="{{ route('fr.janus-bee.origines') }}">Origines</a></h2>
        <h2><a href="{{ route('fr.janus-bee.legal') }}">Mentions légales</a></h2>
        <h2><a href="{{ route('fr.janus-bee.plan') }}">Plan du site</a></h2>
@endif

    </div>
</div>
@endsection
