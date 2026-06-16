@php
$isEn       = ($locale ?? 'fr') === 'en';
$routePfx   = $isEn ? 'en' : 'fr';
$displayTitre = ($isEn && $article->titre_en) ? $article->titre_en : $article->titre;
$displayDesc  = ($isEn && $article->description_en) ? $article->description_en : $article->description;
$displayContenu = ($isEn && $article->contenu_en) ? $article->contenu_en : $article->contenu;
@endphp
@extends('layouts.lugh-owl')

@section('title', $displayTitre . ' — Lugh-Owl')
@section('meta_description', $displayDesc)
@if($article->image)
@section('meta_image', url('/assets/Lugh-Owl/' . $article->image))
@endif

@section('content')
<div class="lo-article-wrap">

    <nav class="lo-breadcrumb">
        <a href="{{ route($routePfx . '.lugh-owl.accueil') }}">{{ $isEn ? 'Home' : 'Accueil' }}</a>
        <span>/</span>
        <a href="{{ $article->categorieUrl($locale ?? 'fr') }}">{{ $article->categorieLabel($locale ?? 'fr') }}</a>
        <span>/</span>
        <span>{{ $displayTitre }}</span>
    </nav>

    <div class="lo-article-cat">{{ $article->categorieLabel($locale ?? 'fr') }}</div>
    <h1 class="lo-article-title">{{ $displayTitre }}</h1>

    <div class="lo-article-desc">{{ $displayDesc }}</div>

    @if($article->image)
    <img src="/assets/Lugh-Owl/{{ $article->image }}" alt="{{ $displayTitre }}" class="lo-article-img">
    @endif

    @if($displayContenu)
    <div class="lo-article-content">
        {!! $displayContenu !!}
    </div>
    @endif

</div>
@endsection
