@extends('layouts.lugh-owl')

@section('title', 'Recherche — Lugh-Owl')

@section('content')
<div class="lo-search-wrap">
    <h1 style="font-size:1.6rem; margin-bottom:8px;">Recherche</h1>

    @if(mb_strlen($q) > 0 && mb_strlen($q) < 2)
        <p class="lo-search-info">Saisissez au moins 2 caractères pour lancer une recherche.</p>

    @elseif(mb_strlen($q) >= 2)
        @if($resultats->isEmpty())
            <p class="lo-search-info">Aucun résultat pour <strong>{{ $q }}</strong>.</p>
        @else
            <p class="lo-search-info">{{ $resultats->count() }} résultat{{ $resultats->count() > 1 ? 's' : '' }} pour <strong>{{ $q }}</strong></p>

            @foreach($resultats->groupBy('categorie') as $cat => $group)
            <div class="lo-result-group">
                <div class="lo-result-group-label">
                    @if($cat === 'modeles') Modèles philosophiques
                    @elseif($cat === 'idees') Idées immuables
                    @else La Vie est [...]
                    @endif
                </div>
                @foreach($group as $article)
                <a href="{{ route('fr.lugh-owl.article', $article->slug) }}" class="lo-result-item">
                    <div class="lo-result-title">{{ $article->titre }}</div>
                    <div class="lo-result-desc">{{ $article->description }}</div>
                </a>
                @endforeach
            </div>
            @endforeach
        @endif

    @else
        <p class="lo-search-info">Utilisez la barre de recherche en haut de page pour trouver un article.</p>
    @endif
</div>
@endsection
