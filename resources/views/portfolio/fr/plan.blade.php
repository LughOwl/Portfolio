@extends('layouts.portfolio')
@section('title', 'Plan du site — Nicolas BISAGA')
@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Plan du site</h1>
        <p class="page-subtitle">$ find / -type page</p>
    </div>

    <div class="plan-content">

        <h2>Portfolio</h2>
        <ul>
            <li><a href="{{ route('fr.presentation') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.profil') }}">→ Profil</a></li>
            <li><a href="{{ route('fr.parcours') }}">→ Parcours</a></li>
            <li><a href="{{ route('fr.sites') }}">→ Sites</a></li>
            <li><a href="{{ route('fr.contact') }}">→ Contact</a></li>
            <li><a href="{{ route('fr.legal') }}">→ Mentions légales</a></li>
            <li><a href="{{ route('fr.plan') }}">→ Plan du site</a></li>
        </ul>

        <h2>Inari-Fox</h2>
        <ul>
            <li><a href="{{ route('fr.inari-fox.accueil') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.inari-fox.recettes') }}">→ Recettes</a></li>
            <li><a href="{{ route('fr.inari-fox.origines') }}">→ Origines</a></li>
            <li><a href="{{ route('fr.inari-fox.legal') }}">→ Mentions légales</a></li>
        </ul>

        <h2>Bragi-Bird</h2>
        <ul>
            <li><a href="{{ route('fr.bragi-bird.accueil') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.bragi-bird.origines') }}">→ Origines</a></li>
            <li><a href="{{ route('fr.bragi-bird.legal') }}">→ Mentions légales</a></li>
        </ul>

        <h2>Janus-Bee</h2>
        <ul>
            <li><a href="{{ route('fr.janus-bee.accueil') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.janus-bee.catalogue') }}">→ Catalogue</a></li>
            <li><a href="{{ route('fr.janus-bee.origines') }}">→ Origines</a></li>
            <li><a href="{{ route('fr.janus-bee.legal') }}">→ Mentions légales</a></li>
        </ul>

        <h2>Gaïa-Deer</h2>
        <ul>
            <li><a href="{{ route('fr.gaia-deer.accueil') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.gaia-deer.sante') }}">→ Santé</a></li>
            <li><a href="{{ route('fr.gaia-deer.nutrition') }}">→ Nutrition</a></li>
            <li><a href="{{ route('fr.gaia-deer.investissement') }}">→ Investissement</a></li>
            <li><a href="{{ route('fr.gaia-deer.origines') }}">→ Origines</a></li>
            <li><a href="{{ route('fr.gaia-deer.legal') }}">→ Mentions légales</a></li>
        </ul>

        <h2>Zeus-Bug</h2>
        <ul>
            <li><a href="{{ route('fr.zeus-bug.accueil') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.zeus-bug.origines') }}">→ Origines</a></li>
            <li><a href="{{ route('fr.zeus-bug.legal') }}">→ Mentions légales</a></li>
        </ul>

        <h2>Lugh-Owl</h2>
        <ul>
            <li><a href="{{ route('fr.lugh-owl.accueil') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.lugh-owl.catalogue', ['cat' => 'modeles']) }}">→ Modèles philosophiques</a></li>
            <li><a href="{{ route('fr.lugh-owl.catalogue', ['cat' => 'idees']) }}">→ Idées immuables</a></li>
            <li><a href="{{ route('fr.lugh-owl.catalogue', ['cat' => 'vie']) }}">→ La vie est [...]</a></li>
            <li><a href="{{ route('fr.lugh-owl.origines') }}">→ Origines</a></li>
            <li><a href="{{ route('fr.lugh-owl.legal') }}">→ Mentions légales</a></li>
        </ul>

        <h2>Ouranos-Taurus</h2>
        <ul>
            <li><a href="{{ route('fr.ouranos-taurus.accueil') }}">→ Accueil</a></li>
            <li><a href="{{ route('fr.ouranos-taurus.planetes') }}">→ Planètes</a></li>
            <li><a href="{{ route('fr.ouranos-taurus.constellations') }}">→ Constellations</a></li>
            <li><a href="{{ route('fr.ouranos-taurus.phenomenes') }}">→ Phénomènes</a></li>
            <li><a href="{{ route('fr.ouranos-taurus.mythologie') }}">→ Mythologie</a></li>
            <li><a href="{{ route('fr.ouranos-taurus.observer') }}">→ Observer</a></li>
            <li><a href="{{ route('fr.ouranos-taurus.origines') }}">→ Origines</a></li>
            <li><a href="{{ route('fr.ouranos-taurus.legal') }}">→ Mentions légales</a></li>
        </ul>

    </div>
</div>
@endsection
