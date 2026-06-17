@extends('layouts.zeus-bug')
@php
    $titre  = ($locale === 'en' && $article->titre_en)  ? $article->titre_en  : $article->titre;
    $intro  = ($locale === 'en' && $article->intro_en)  ? $article->intro_en  : $article->intro;
    $corps  = ($locale === 'en' && $article->contenu_en) ? $article->contenu_en : $article->contenu;
    $pre    = $locale === 'en' ? 'en' : 'fr';
    use App\Models\ZeusBugArticle;
    $categories = ZeusBugArticle::$categories;
@endphp
@section('title', $titre . ' — Zeus-Bug')
@section('meta_description', Str::limit(strip_tags($intro), 160))

@section('content')

<div class="zb-article-hero">
    <a href="{{ route($pre.'.zeus-bug.accueil') }}" class="zb-back-link">← {{ $locale === 'en' ? 'All articles' : 'Tous les articles' }}</a>

    <div class="zb-article-hero-meta">
        <span class="zb-badge {{ $article->categorie }}">
            {{ $categories[$article->categorie] ?? $article->categorie }}
        </span>
        @if($article->date_projet)
        <span class="zb-article-hero-date">{{ $article->date_projet->format('Y') }}</span>
        @endif
        @if($article->tags)
        <div class="zb-tags">
            @foreach(explode(',', $article->tags) as $tag)
            <span class="zb-tag">{{ trim($tag) }}</span>
            @endforeach
        </div>
        @endif
    </div>

    <h1 class="zb-article-hero-title">{{ $titre }}</h1>

    <p class="zb-article-hero-intro">{{ $intro }}</p>

    @if($article->github_url)
    <div class="zb-article-links">
        <a href="{{ $article->github_url }}" target="_blank" rel="noopener" class="zb-article-link-github">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
            GitHub
        </a>
    </div>
    @endif
</div>

<div class="zb-article-body">
    {!! $corps !!}
</div>

@endsection
