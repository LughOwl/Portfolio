@extends('layouts.portfolio')

@section('title', 'Plan du site — Nicolas BISAGA')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Plan du site</h1>
        <p class="page-subtitle">$ find / -type page — Architecture complète</p>
    </div>

    <div class="plan-content">
        <h2>Portfolio</h2>
        <ul>
            <li><a href="{{ route('fr.presentation') }}">Accueil</a></li>
            <li><a href="{{ route('fr.profil') }}">Profil</a></li>
            <li><a href="{{ route('fr.parcours') }}">Parcours</a></li>
            <li><a href="{{ route('fr.sites') }}">Projets &amp; Sites</a></li>
            <li><a href="{{ route('fr.contact') }}">Contact</a></li>
            <li><a href="{{ route('fr.legal') }}">Mentions légales</a></li>
        </ul>

        <h2>Janus-Bee</h2>
        <ul>
            <li><a href="{{ route('fr.janus-bee.accueil') }}">Accueil Janus-Bee</a></li>
            <li><a href="{{ route('fr.janus-bee.catalogue') }}">Catalogue des œuvres</a></li>
            <li><a href="{{ route('fr.janus-bee.origines') }}">Origines &amp; Objectifs</a></li>
            <li><a href="{{ route('fr.janus-bee.plan') }}">Plan du site Janus-Bee</a></li>
            <li><a href="{{ route('fr.janus-bee.legal') }}">Mentions légales Janus-Bee</a></li>
        </ul>

        <h2>Lugh-Owl</h2>
        <ul>
            <li><a href="{{ route('fr.lugh-owl.accueil') }}">Accueil Lugh-Owl</a></li>
            <li><a href="{{ route('fr.lugh-owl.catalogue', ['cat' => 'modeles']) }}">Modèles philosophiques</a></li>
            <li><a href="{{ route('fr.lugh-owl.catalogue', ['cat' => 'idees']) }}">Idées immuables</a></li>
            <li><a href="{{ route('fr.lugh-owl.catalogue', ['cat' => 'vie']) }}">La vie est [...]</a></li>
            <li><a href="{{ route('fr.lugh-owl.origines') }}">Origines &amp; Objectifs</a></li>
            <li><a href="{{ route('fr.lugh-owl.plan') }}">Plan du site Lugh-Owl</a></li>
            <li><a href="{{ route('fr.lugh-owl.legal') }}">Mentions légales Lugh-Owl</a></li>
        </ul>

        <h2>En construction</h2>
        <ul>
            <li><a href="{{ route('fr.inari-fox') }}">Inari-Fox</a></li>
            <li><a href="{{ route('fr.bragi-bird') }}">Bragi-Bird</a></li>
            <li><a href="{{ route('fr.gaia-deer') }}">Gaïa-Deer</a></li>
            <li><a href="{{ route('fr.zeus-bug') }}">Zeus-Bug</a></li>
            <li><a href="{{ route('fr.ouranos-taurus') }}">Ouranos-Taurus</a></li>
        </ul>
    </div>
</div>
@endsection
