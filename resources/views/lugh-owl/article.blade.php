@extends('layouts.lugh-owl')

@section('title', $article->titre . ' — Lugh-Owl')
@section('meta_description', $article->description)
@if($article->image)
@section('meta_image', url('/assets/Lugh-Owl/' . $article->image))
@endif

@section('content')
<div class="lo-article-wrap">

    <nav class="lo-breadcrumb">
        <a href="{{ route('fr.lugh-owl.accueil') }}">Accueil</a>
        <span>/</span>
        <a href="{{ route($article->categorieRoute()) }}">{{ $article->categorieLabel() }}</a>
        <span>/</span>
        <span>{{ $article->titre }}</span>
    </nav>

    <div class="lo-article-cat">{{ $article->categorieLabel() }}</div>
    <h1 class="lo-article-title">{{ $article->titre }}</h1>

    <div class="lo-article-desc">{{ $article->description }}</div>

    @if($article->image)
    <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $article->titre }}" class="lo-article-img">
    @endif

    @if($article->contenu)
    <div class="lo-article-content">
        {!! $article->contenu !!}
    </div>
    @endif

</div>
@endsection
