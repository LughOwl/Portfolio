@extends('layouts.lugh-owl')

@section('title', ($locale === 'en') ? 'Sitemap - Lugh-Owl' : 'Plan du Site - Lugh-Owl')

@section('content')
@php
$isEn     = ($locale ?? 'fr') === 'en';
$routePfx = $isEn ? 'en' : 'fr';
@endphp
<div class="lo-static-wrap">
    <div>
        <h1>{{ $isEn ? 'Sitemap' : 'Plan du Site' }}</h1>

        <h2><a href="{{ route($routePfx . '.lugh-owl.accueil') }}">{{ $isEn ? 'Home' : 'Accueil' }}</a></h2>

        <h2><a href="{{ route($routePfx . '.lugh-owl.catalogue', ['cat' => 'modeles']) }}">{{ $isEn ? 'Philosophical Models' : 'Modèles Philosophiques' }}</a></h2>
        <ul>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'balance') }}">{{ $isEn ? "Lugh's Scale" : 'La Balance de Lugh' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'boussole') }}">{{ $isEn ? "Lugh's Compass" : 'La Boussole de Lugh' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'lanterne') }}">{{ $isEn ? "Lugh's Lantern" : 'La Lanterne de Lugh' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'lunettes') }}">{{ $isEn ? "Lugh's Glasses" : 'Les Lunettes de Lugh' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'pendule') }}">{{ $isEn ? "Lugh's Pendulum" : 'Le Pendule de Lugh' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'pont') }}">{{ $isEn ? "Lugh's Bridge" : 'Le Pont de Lugh' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'reservoir') }}">{{ $isEn ? "Lugh's Reservoir" : 'Le Réservoir de Lugh' }}</a></li>
        </ul>

        <h2><a href="{{ route($routePfx . '.lugh-owl.catalogue', ['cat' => 'vie']) }}">Life is [...]</a></h2>
        <ul>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'champ-de-bataille') }}">{{ $isEn ? 'Life is a Battlefield' : 'La Vie est un Champ de Bataille' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'dialogue-chaos') }}">{{ $isEn ? 'Life is a Dialogue with Chaos' : 'La Vie est un Dialogue avec le Chaos' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'enfer-necessaire') }}">{{ $isEn ? 'Life is a Necessary Hell' : 'La Vie est un Enfer Nécessaire' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'jeu-video-realiste') }}">{{ $isEn ? 'Life is a Realistic Video Game' : 'La Vie est un Jeu Vidéo Réaliste' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'orchestre-symphonique') }}">{{ $isEn ? 'Life is a Symphony Orchestra' : 'La Vie est un Orchestre Symphonique' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'paradis-precaire') }}">{{ $isEn ? 'Life is a Precarious Paradise' : 'La Vie est un Paradis Précaire' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'piece-theatre') }}">{{ $isEn ? 'Life is a Play' : 'La Vie est une Pièce de Théâtre' }}</a></li>
        </ul>

        <h2><a href="{{ route($routePfx . '.lugh-owl.catalogue', ['cat' => 'idees']) }}">{{ $isEn ? 'Timeless Ideas' : 'Idées Immuables' }}</a></h2>
        <ul>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'acteur-spectateur') }}">{{ $isEn ? 'Actor and Spectator – Reflection and Temperance' : 'Acteur et Spectateur - Réflexion et Tempérance' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'bouc-emissaire') }}">{{ $isEn ? 'Scapegoat – Hatred Catcher' : 'Bouc Émissaire - Capteur de Haine' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'capitalisme') }}">{{ $isEn ? 'Capitalism, Progressivism and Idealism' : 'Capitalisme, Progressisme et Idéalisme' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'consommation') }}">{{ $isEn ? 'Consumption, Capitalism and Education' : 'Consommation, Capitalisme et Éducation' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'creation-destruction') }}">{{ $isEn ? 'Creation, Transformation and Destruction' : 'Création, Transformation et Destruction' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'danger-fiction') }}">{{ $isEn ? 'Danger, Fiction and Imagination' : 'Danger, Fiction et Imagination' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'divertissement-peur') }}">{{ $isEn ? 'Entertainment and Fear of Absence' : 'Divertissement et Peur de l\'Absence' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'entraide') }}">{{ $isEn ? 'Mutual Aid and Harmony' : 'Entraide et Harmonie' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'etres-vivants-information') }}">{{ $isEn ? 'Living Beings: Emitters and Receivers of Information' : 'Être Vivant : Émetteur et Récepteur d\'Informations' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'fragile-puissant') }}">{{ $isEn ? 'Living Beings: Power and Fragility' : 'Être Vivant : Puissance et Fragilité' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'lachete-courage') }}">{{ $isEn ? 'Flight, Cowardice and Courage' : 'Fuite, Lâcheté et Courage' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'haine-indifference-amour') }}">{{ $isEn ? 'Hatred, Indifference and Love' : 'Haine, Indifférence et Amour' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'humanite-amour-mort') }}">{{ $isEn ? 'Humanity, Love and Death' : 'Humanité, Amour et Mort' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'inevitable-servitude') }}">{{ $isEn ? 'Inevitable Servitude' : 'Inévitable Servitude' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'logique-sacrifice') }}">{{ $isEn ? 'The Logic of Sacrifice' : 'Logique du Sacrifice' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'normalite') }}">{{ $isEn ? 'Normality: Immutable to Influenceable' : 'Normalité Immuable à Influençable' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'fierte-puissance-argent') }}">{{ $isEn ? 'Pride, Power and Money' : 'Orgueil, Pouvoir et Argent' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'puissance-soumission-liberte') }}">{{ $isEn ? 'Power, Submission and Fear of Freedom' : 'Pouvoir, Soumission et Peur de la Liberté' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'tripartition-etre') }}">{{ $isEn ? 'The Tripartition of Being' : 'Tripartition de l\'Être' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'verite-raison') }}">{{ $isEn ? 'Truth and Reason' : 'Vérité et Raison' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'vitalite-emotions') }}">{{ $isEn ? 'Vitality and Emotions' : 'Vitalité et Émotions' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'optimisme') }}">{{ $isEn ? 'Seeing the Glass Half Full' : 'Voir le Verre à Moitié Plein' }}</a></li>
            <li><a href="{{ route($routePfx . '.lugh-owl.article', 'volonte-puissance-desharmonie') }}">{{ $isEn ? 'Will to Power and Disharmony' : 'Volonté de Puissance et Disharmonie' }}</a></li>
        </ul>

        <h2><a href="{{ $isEn ? route('en.lugh-owl.recherche') : route('fr.lugh-owl.recherche') }}">{{ $isEn ? 'Article Search' : 'Recherche d\'Articles' }}</a></h2>
        <h2><a href="{{ $isEn ? route('en.lugh-owl.origines') : route('fr.lugh-owl.origines') }}">{{ $isEn ? 'Origins & Goals' : 'Origines et Objectifs' }}</a></h2>
        <h2><a href="{{ $isEn ? route('en.lugh-owl.legal') : route('fr.lugh-owl.legal') }}">{{ $isEn ? 'Legal Notice' : 'Mentions Légales' }}</a></h2>
        <h2><a href="{{ $isEn ? route('en.lugh-owl.plan') : route('fr.lugh-owl.plan') }}">{{ $isEn ? 'Sitemap' : 'Plan du Site' }}</a></h2>
    </div>
</div>
@endsection
