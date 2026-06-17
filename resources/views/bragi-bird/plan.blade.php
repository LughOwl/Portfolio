@extends('layouts.bragi-bird')
@section('title', $locale === 'en' ? 'Sitemap - Bragi-Bird' : 'Plan du site - Bragi-Bird')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="bb-content bb-content-narrow" style="padding-top:15px;">
    <div class="bb-prose">

@if($isEn)
        <h2>Sitemap</h2>
        <h2><a href="{{ route('en.bragi-bird.accueil') }}">Home</a></h2>
        <h2><a href="{{ route('en.bragi-bird.origines') }}">Origins</a></h2>
        <h2><a href="{{ route('en.bragi-bird.legal') }}">Legal Notice</a></h2>
        <h2><a href="{{ route('en.bragi-bird.plan') }}">Sitemap</a></h2>
@else
        <h2>Plan du site</h2>
        <h2><a href="{{ route('fr.bragi-bird.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.bragi-bird.origines') }}">Origines</a></h2>
        <h2><a href="{{ route('fr.bragi-bird.legal') }}">Mentions légales</a></h2>
        <h2><a href="{{ route('fr.bragi-bird.plan') }}">Plan du site</a></h2>
@endif

    </div>
</div>
@endsection
