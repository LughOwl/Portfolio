@extends('layouts.janus-bee')

@section('title', 'Plan du Site - Janus-Bee')

@section('content')
<div class="content-plan">
    <div>
        <h1>Plan du Site</h1>
        <h2><a href="{{ route('fr.janus-bee.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.janus-bee.catalogue') }}">Catalogue</a></h2>
        <h2><a href="{{ route('fr.janus-bee.origines') }}">Origines et Objectifs</a></h2>
        <h2><a href="{{ route('fr.janus-bee.legal') }}">Mentions Légales</a></h2>
        <h2><a href="{{ route('fr.janus-bee.plan') }}">Plan du Site</a></h2>
    </div>
</div>
@endsection
