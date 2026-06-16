@extends('layouts.janus-bee')

@section('title', $locale === 'en' ? 'Sitemap - Janus-Bee' : 'Plan du Site - Janus-Bee')

@section('content')
<div class="content-plan">
    <div>
        @if($locale === 'en')
        <h1>Sitemap</h1>
        <h2><a href="{{ route('en.janus-bee.accueil') }}">Home</a></h2>
        <h2><a href="{{ route('en.janus-bee.catalogue') }}">Catalogue</a></h2>
        <h2><a href="{{ route('en.janus-bee.origines') }}">Origins & Goals</a></h2>
        <h2><a href="{{ route('en.janus-bee.legal') }}">Legal Notice</a></h2>
        <h2><a href="{{ route('en.janus-bee.plan') }}">Sitemap</a></h2>
        @else
        <h1>Plan du Site</h1>
        <h2><a href="{{ route('fr.janus-bee.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.janus-bee.catalogue') }}">Catalogue</a></h2>
        <h2><a href="{{ route('fr.janus-bee.origines') }}">Origines et Objectifs</a></h2>
        <h2><a href="{{ route('fr.janus-bee.legal') }}">Mentions Légales</a></h2>
        <h2><a href="{{ route('fr.janus-bee.plan') }}">Plan du Site</a></h2>
        @endif
    </div>
</div>
@endsection
