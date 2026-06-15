@extends('layouts.lugh-owl')

@section('title', 'La Vie est [...] — Lugh-Owl')
@section('meta_description', 'Découvrez les articles "La Vie est [...]" de Lugh-Owl : des métaphores philosophiques pour explorer et comprendre l existence humaine.')

@section('content')

<div class="lo-hero">
    <h1>La Vie est [...]</h1>
    <p>Des métaphores et allégories pour explorer les multiples facettes de l existence : un champ de bataille, un orchestre, une pièce de théâtre et bien plus encore.</p>
</div>

<div class="lo-grid lo-grid-full">
    @foreach($articles as $article)
    <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" class="lo-card">
        @if($article->image)
        <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $article->titre }}" class="lo-card-img" loading="lazy">
        @endif
        <div class="lo-card-body">
            <div class="lo-card-cat">La Vie est [...]</div>
            <div class="lo-card-title">{{ $article->titre }}</div>
            <div class="lo-card-desc">{{ $article->description }}</div>
        </div>
    </a>
    @endforeach
</div>

@endsection
