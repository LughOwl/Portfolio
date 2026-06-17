@extends('layouts.zeus-bug')
@section('title', $locale === 'en' ? 'Sitemap - Zeus-Bug' : 'Plan du site - Zeus-Bug')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="zb-content" style="padding-top:15px;">
    <div class="zb-prose">

@if($isEn)
        <h2>Sitemap</h2>
        <h2><a href="{{ route('en.zeus-bug.accueil') }}">Home</a></h2>
        <h2><a href="{{ route('en.zeus-bug.origines') }}">Origins</a></h2>
        <h2><a href="{{ route('en.zeus-bug.legal') }}">Legal Notice</a></h2>
        <h2><a href="{{ route('en.zeus-bug.plan') }}">Sitemap</a></h2>
@else
        <h2>Plan du site</h2>
        <h2><a href="{{ route('fr.zeus-bug.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.zeus-bug.origines') }}">Origines</a></h2>
        <h2><a href="{{ route('fr.zeus-bug.legal') }}">Mentions légales</a></h2>
        <h2><a href="{{ route('fr.zeus-bug.plan') }}">Plan du site</a></h2>
@endif

    </div>
</div>
@endsection
