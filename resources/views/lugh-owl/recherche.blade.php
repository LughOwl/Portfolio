@extends('layouts.lugh-owl')

@section('title', 'Recherche - Lugh-Owl')

@section('content')
<div class="content-plan">
    <div>
        <h1>Recherche</h1>

        @if(mb_strlen($q) > 0 && mb_strlen($q) < 2)
            <p class="recherche-info">Saisissez au moins 2 caractères pour lancer une recherche.</p>

        @elseif(mb_strlen($q) >= 2)
            @if(count($resultats) === 0)
                <p class="recherche-info">Aucun résultat pour <strong>« {{ $q }} »</strong>.</p>
            @else
                <p class="recherche-info">{{ count($resultats) }} résultat{{ count($resultats) > 1 ? 's' : '' }} pour <strong>« {{ $q }} »</strong></p>

                @php $currentCategorie = null; @endphp
                @foreach($resultats as $article)
                    @if($article['categorie'] !== $currentCategorie)
                        @php $currentCategorie = $article['categorie']; @endphp
                        <h2>{{ $currentCategorie }}</h2>
                    @endif
                    <a href="{{ route('fr.lugh-owl.article', $article['slug']) }}" class="resultat-item">
                        <div class="resultat-titre">{{ $article['titre'] }}</div>
                        <div class="resultat-description">{{ $article['description'] }}</div>
                    </a>
                @endforeach
            @endif

        @else
            <p class="recherche-info">Utilisez la barre de recherche en haut de page pour trouver un article.</p>
        @endif
    </div>
</div>
@endsection
