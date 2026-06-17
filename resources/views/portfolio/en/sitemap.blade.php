@extends('layouts.portfolio')
@section('title', 'Sitemap — Nicolas BISAGA')
@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Sitemap</h1>
        <p class="page-subtitle">$ find / -type page</p>
    </div>

    <div class="plan-content">

        <h2>Portfolio</h2>
        <ul>
            <li><a href="{{ route('en.presentation') }}">→ Home</a></li>
            <li><a href="{{ route('en.profil') }}">→ Profile</a></li>
            <li><a href="{{ route('en.parcours') }}">→ Career</a></li>
            <li><a href="{{ route('en.websites') }}">→ Websites</a></li>
            <li><a href="{{ route('en.contact') }}">→ Contact</a></li>
            <li><a href="{{ route('en.termsofuse') }}">→ Legal Notice</a></li>
            <li><a href="{{ route('en.sitemap') }}">→ Sitemap</a></li>
        </ul>

        <h2>Inari-Fox</h2>
        <ul>
            <li><a href="{{ route('en.inari-fox.accueil') }}">→ Home</a></li>
            <li><a href="{{ route('en.inari-fox.recettes') }}">→ Recipes</a></li>
            <li><a href="{{ route('en.inari-fox.origines') }}">→ Origins</a></li>
            <li><a href="{{ route('en.inari-fox.legal') }}">→ Legal Notice</a></li>
        </ul>

        <h2>Bragi-Bird</h2>
        <ul>
            <li><a href="{{ route('en.bragi-bird.accueil') }}">→ Home</a></li>
            <li><a href="{{ route('en.bragi-bird.origines') }}">→ Origins</a></li>
            <li><a href="{{ route('en.bragi-bird.legal') }}">→ Legal Notice</a></li>
        </ul>

        <h2>Janus-Bee</h2>
        <ul>
            <li><a href="{{ route('en.janus-bee.accueil') }}">→ Home</a></li>
            <li><a href="{{ route('en.janus-bee.catalogue') }}">→ Catalogue</a></li>
            <li><a href="{{ route('en.janus-bee.origines') }}">→ Origins</a></li>
            <li><a href="{{ route('en.janus-bee.legal') }}">→ Legal Notice</a></li>
        </ul>

        <h2>Gaïa-Deer</h2>
        <ul>
            <li><a href="{{ route('en.gaia-deer.accueil') }}">→ Home</a></li>
            <li><a href="{{ route('en.gaia-deer.sante') }}">→ Health</a></li>
            <li><a href="{{ route('en.gaia-deer.nutrition') }}">→ Nutrition</a></li>
            <li><a href="{{ route('en.gaia-deer.investissement') }}">→ Investing</a></li>
            <li><a href="{{ route('en.gaia-deer.origines') }}">→ Origins</a></li>
            <li><a href="{{ route('en.gaia-deer.legal') }}">→ Legal Notice</a></li>
        </ul>

        <h2>Zeus-Bug</h2>
        <ul>
            <li><a href="{{ route('en.zeus-bug.accueil') }}">→ Home</a></li>
            <li><a href="{{ route('en.zeus-bug.origines') }}">→ Origins</a></li>
            <li><a href="{{ route('en.zeus-bug.legal') }}">→ Legal Notice</a></li>
        </ul>

        <h2>Lugh-Owl</h2>
        <ul>
            <li><a href="{{ route('en.lugh-owl.accueil') }}">→ Home</a></li>
            <li><a href="{{ route('en.lugh-owl.catalogue', ['cat' => 'modeles']) }}">→ Philosophical Models</a></li>
            <li><a href="{{ route('en.lugh-owl.catalogue', ['cat' => 'idees']) }}">→ Timeless Ideas</a></li>
            <li><a href="{{ route('en.lugh-owl.catalogue', ['cat' => 'vie']) }}">→ Life is [...]</a></li>
            <li><a href="{{ route('en.lugh-owl.origines') }}">→ Origins</a></li>
            <li><a href="{{ route('en.lugh-owl.legal') }}">→ Legal Notice</a></li>
        </ul>

        <h2>Ouranos-Taurus</h2>
        <ul>
            <li><a href="{{ route('en.ouranos-taurus.accueil') }}">→ Home</a></li>
            <li><a href="{{ route('en.ouranos-taurus.planetes') }}">→ Planets</a></li>
            <li><a href="{{ route('en.ouranos-taurus.constellations') }}">→ Constellations</a></li>
            <li><a href="{{ route('en.ouranos-taurus.phenomenes') }}">→ Phenomena</a></li>
            <li><a href="{{ route('en.ouranos-taurus.mythologie') }}">→ Mythology</a></li>
            <li><a href="{{ route('en.ouranos-taurus.observer') }}">→ Observe</a></li>
            <li><a href="{{ route('en.ouranos-taurus.origines') }}">→ Origins</a></li>
            <li><a href="{{ route('en.ouranos-taurus.legal') }}">→ Legal Notice</a></li>
        </ul>

    </div>
</div>
@endsection
