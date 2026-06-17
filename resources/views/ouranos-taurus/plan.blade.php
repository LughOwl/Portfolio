@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Sitemap — Ouranos-Taurus' : 'Plan du site — Ouranos-Taurus')

@section('content')
<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Navigation' : 'Navigation' }}</div>
    <h1 class="ot-page-title">{{ $locale === 'en' ? 'Sitemap' : 'Plan du site' }}</h1>
</div>
<div class="ot-content">
    <div class="ot-section">
        <div class="ot-text">
            @php $pre = $locale === 'en' ? 'en' : 'fr'; @endphp
            <p><a href="{{ route($pre.'.ouranos-taurus.accueil') }}">{{ $locale === 'en' ? 'Home' : 'Accueil' }}</a></p>
            <p><a href="{{ route($pre.'.ouranos-taurus.planetes') }}">{{ $locale === 'en' ? 'Planets' : 'Planètes' }}</a></p>
            <p><a href="{{ route($pre.'.ouranos-taurus.constellations') }}">Constellations</a></p>
            <p><a href="{{ route($pre.'.ouranos-taurus.phenomenes') }}">{{ $locale === 'en' ? 'Phenomena' : 'Phénomènes' }}</a></p>
            <p><a href="{{ route($pre.'.ouranos-taurus.mythologie') }}">{{ $locale === 'en' ? 'Mythology' : 'Mythologie' }}</a></p>
            <p><a href="{{ route($pre.'.ouranos-taurus.observer') }}">{{ $locale === 'en' ? 'Observe' : 'Observer' }}</a></p>
            <p><a href="{{ route($pre.'.ouranos-taurus.origines') }}">{{ $locale === 'en' ? 'Origins' : 'Origines' }}</a></p>
            <p><a href="{{ route($pre.'.ouranos-taurus.legal') }}">{{ $locale === 'en' ? 'Legal Notice' : 'Mentions légales' }}</a></p>
        </div>
    </div>
</div>
@endsection
