@extends('layouts.lugh-owl')

@section('title', 'Plan du Site - Lugh-Owl')

@section('content')
<div class="content-plan">
    <div>
        <h1>Plan du Site</h1>

        <h2><a href="{{ route('fr.lugh-owl.accueil') }}">Accueil</a></h2>
        <h2><a href="{{ route('fr.lugh-owl.modeles') }}">Modèles Philosophiques</a></h2>
        <ul>
            <li><a href="{{ route('fr.lugh-owl.article', 'balance') }}">La Balance de Lugh</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'boussole') }}">La Boussole de Lugh</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'lanterne') }}">La Lanterne de Lugh</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'lunettes') }}">Les Lunettes de Lugh</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'pendule') }}">Le Pendule de Lugh</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'pont') }}">Le Pont de Lugh</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'reservoir') }}">Le Réservoir de Lugh</a></li>
        </ul>
        <h2><a href="{{ route('fr.lugh-owl.vie') }}">La Vie est [...]</a></h2>
        <ul>
            <li><a href="{{ route('fr.lugh-owl.article', 'champ-de-bataille') }}">La Vie est un Champ de Bataille</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'dialogue-chaos') }}">La Vie est un Dialogue avec le Chaos</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'enfer-necessaire') }}">La Vie est un Enfer Nécessaire</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'jeu-video-realiste') }}">La Vie est un Jeu Vidéo Réaliste</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'orchestre-symphonique') }}">La Vie est un Orchestre Symphonique</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'paradis-precaire') }}">La Vie est un Paradis Précaire</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'piece-theatre') }}">La Vie est une Pièce de Théâtre</a></li>
        </ul>
        <h2><a href="{{ route('fr.lugh-owl.idees') }}">Idées Immuables</a></h2>
        <ul>
            <li><a href="{{ route('fr.lugh-owl.article', 'acteur-spectateur') }}">Acteur et Spectateur - Réflexion et Tempérance</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'bouc-emissaire') }}">Bouc Émissaire - Capteur de Haine</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'capitalisme') }}">Capitalisme, Progressisme et Idéalisme</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'consommation') }}">Consommation, Capitalisme et Éducation</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'creation-destruction') }}">Création, Transformation et Destruction</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'danger-fiction') }}">Danger, Fiction et Imagination</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'divertissement-peur') }}">Divertissement et Peur de l'Absence</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'entraide') }}">Entraide et Harmonie</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'etres-vivants-information') }}">Être Vivant : Émetteur et Récepteur d'Informations</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'fragile-puissant') }}">Être Vivant : Puissance et Fragilité</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'lachete-courage') }}">Fuite, Lâcheté et Courage</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'haine-indifference-amour') }}">Haine, Indifférence et Amour</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'humanite-amour-mort') }}">Humanité, Amour et Mort</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'inevitable-servitude') }}">Inévitable Servitude</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'logique-sacrifice') }}">Logique du Sacrifice</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'normalite') }}">Normalité Immuable à Influençable</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'fierte-puissance-argent') }}">Orgueil, Pouvoir et Argent</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'puissance-soumission-liberte') }}">Pouvoir, Soumission et Peur de la Liberté</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'tripartition-etre') }}">Tripartition de l'Être</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'verite-raison') }}">Vérité et Raison</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'vitalite-emotions') }}">Vitalité et Émotions</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'optimisme') }}">Voir le Verre à Moitié Plein</a></li>
            <li><a href="{{ route('fr.lugh-owl.article', 'volonte-puissance-desharmonie') }}">Volonté de Puissance et Disharmonie</a></li>
        </ul>
        <h2><a href="{{ route('fr.lugh-owl.recherche') }}">Recherche d'Articles</a></h2>
        <h2><a href="{{ route('fr.lugh-owl.origines') }}">Origines et Objectifs</a></h2>
        <h2><a href="{{ route('fr.lugh-owl.legal') }}">Mentions Légales</a></h2>
        <h2><a href="{{ route('fr.lugh-owl.plan') }}">Plan du Site</a></h2>
    </div>
</div>
@endsection
