@extends('layouts.zeus-bug')
@section('title', $locale === 'en' ? 'Zeus-Bug — Tech articles' : 'Zeus-Bug — Articles tech')

@section('content')
@php
    use App\Models\ZeusBugArticle;
    $categories = ZeusBugArticle::$categories;
    $pre = $locale === 'en' ? 'en' : 'fr';
@endphp

<div class="zb-page-hero">
    <div class="zb-page-cat">{{ $locale === 'en' ? 'Tech — Coding — Projects' : 'Tech — Code — Projets' }}</div>
    <h1 class="zb-page-title">Zeus-Bug</h1>
    <p class="zb-page-intro">
        {{ $locale === 'en'
            ? 'Articles, project write-ups and technical notes — everything I\'ve built, coded or configured.'
            : 'Articles, compte-rendus de projets et notes techniques — tout ce que j\'ai construit, codé ou configuré.' }}
    </p>
</div>

<div class="zb-content">

    @php
        $total  = ZeusBugArticle::where('publie', true)->count();
        $nbCats = ZeusBugArticle::where('publie', true)->distinct('categorie')->count('categorie');
    @endphp
    <div class="zb-stats-bar">
        <div class="zb-stat-item">
            <div class="zb-stat-val">{{ $total }}</div>
            <div class="zb-stat-lbl">Articles</div>
        </div>
        <div class="zb-stat-item">
            <div class="zb-stat-val">{{ $nbCats }}</div>
            <div class="zb-stat-lbl">{{ $locale === 'en' ? 'Categories' : 'Catégories' }}</div>
        </div>
    </div>

    {{-- Filtre catégories --}}
    <div class="zb-cat-filter">
        <a href="{{ route($pre.'.zeus-bug.accueil') }}"
           class="zb-cat-btn systeme {{ !isset($categorieActive) ? 'active' : '' }}">
            {{ $locale === 'en' ? 'All' : 'Tous' }}
        </a>
        @foreach($categories as $slug => $label)
        @if(ZeusBugArticle::where('publie', true)->where('categorie', $slug)->exists())
        <a href="{{ route($pre.'.zeus-bug.categorie', $slug) }}"
           class="zb-cat-btn {{ $slug }} {{ (isset($categorieActive) && $categorieActive === $slug) ? 'active' : '' }}">
            {{ $label }}
        </a>
        @endif
        @endforeach
    </div>

    {{-- Liste articles --}}
    @forelse($articles as $article)
    @php
        $titre = ($locale === 'en' && $article->titre_en) ? $article->titre_en : $article->titre;
        $intro = ($locale === 'en' && $article->intro_en) ? $article->intro_en : $article->intro;
        $articleUrl = route($pre.'.zeus-bug.article', $article->id);
    @endphp
    @if($loop->first)
    <div class="zb-article-grid">
    @endif

    <a href="{{ $articleUrl }}" class="zb-article-card">
        <div class="zb-article-top">
            <div class="zb-article-title">{{ $titre }}</div>
            <span class="zb-badge {{ $article->categorie }}">
                {{ $categories[$article->categorie] ?? $article->categorie }}
            </span>
        </div>
        <div class="zb-article-intro">{{ Str::limit(strip_tags($intro), 140) }}</div>
        @if($article->tags)
        <div class="zb-tags">
            @foreach(explode(',', $article->tags) as $tag)
            <span class="zb-tag">{{ trim($tag) }}</span>
            @endforeach
        </div>
        @endif
        <div class="zb-article-footer">
            @if($article->date_projet)
            <span class="zb-article-date">{{ $article->date_projet->format('Y') }}</span>
            @else
            <span></span>
            @endif
            <span class="zb-article-read">{{ $locale === 'en' ? 'Read →' : 'Lire →' }}</span>
        </div>
    </a>

    @if($loop->last)
    </div>
    @endif

    @empty
    <div class="zb-empty">
        {{ $locale === 'en' ? '// No articles yet.' : '// Aucun article pour le moment.' }}
    </div>
    @endforelse

</div>
@endsection
