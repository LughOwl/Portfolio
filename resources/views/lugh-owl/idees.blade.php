@extends('layouts.lugh-owl')

@section('title', 'Idées immuables — Lugh-Owl')
@section('meta_description', 'Explorez les idées immuables de Lugh-Owl : des réflexions sur la société, la psychologie humaine et les forces qui façonnent notre monde.')

@section('content')

<div class="lo-hero">
    <h1>Idées immuables</h1>
    <p>Des réflexions sur les forces et les dynamiques qui traversent toutes les civilisations et tous les temps : pouvoir, amour, sacrifice, normalité et bien plus encore.</p>
</div>

<div class="lo-grid lo-grid-full">
    @foreach($articles as $article)
    <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" class="lo-card">
        @if($article->image)
        <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $article->titre }}" class="lo-card-img" loading="lazy">
        @endif
        <div class="lo-card-body">
            <div class="lo-card-cat">Idée immuable</div>
            <div class="lo-card-title">{{ $article->titre }}</div>
            <div class="lo-card-desc">{{ $article->description }}</div>
        </div>
    </a>
    @endforeach
</div>

@endsection
