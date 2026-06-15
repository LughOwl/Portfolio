@extends('layouts.lugh-owl')

@section('title', 'Accueil - Lugh-Owl')

@section('content')
<div class="h1-container">
    <h1 class="h1-pr"><span>Exploration Philosophique et Métaphysique</span></h1>
</div>
<p class="p-presentation">
    Bienvenue sur Lugh-Owl, un espace dédié à l'exploration
    de la philosophie et de la métaphysique. Ici, nous
    plongeons dans les questions fondamentales
    de l'existence et de la connaissance.<br><em>Les textes et images ont été créés en partie par l'intelligence artificielle (ChatGPT et DALL·E).</em>
</p>
<section class="s-modele">
    <h2>Modèles Philosphiques</h2>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'balance') }}">
        <img class="img" src="/assets/Lugh-Owl/mdl-balance_lugh.jpg" width="200" alt="Image Modèle">
        <div class="catego">Modèle Philosophique</div>
        <div class="titre">La Balance de Lugh</div>
        <div class="descri">La Balance de Lugh illustre l'équilibre entre le bien et le mal dans
            nos actions. Elle met en lumière le poids de chaque geste et son impact, en fonction
            de la sagesse des individus.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'boussole') }}">
        <img class="img" src="/assets/Lugh-Owl/mdl-boussole_lugh.jpg" width="200" alt="Image Modèle">
        <div class="catego">Modèle Philosophique</div>
        <div class="titre">La Boussole de Lugh</div>
        <div class="descri">Un concept métaphysique qui guide l'être humain vers la sagesse et
            l'unité divine, en distinguant les vertus et les vices à travers une boussole
            spirituelle orientée vers le bien.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'lanterne') }}">
        <img class="img" src="/assets/Lugh-Owl/mdl-lanterne_lugh.jpg" width="200" alt="Image Modèle">
        <div class="catego">Modèle Philosophique</div>
        <div class="titre">La Lanterne de Lugh</div>
        <div class="descri">Une métaphore lumineuse pour explorer la sagesse, l'équilibre intérieur
            et les défis liés à notre rayonnement personnel, qu'il soit discret ou éclatant.</div>
    </a>
    <a href="{{ route('fr.lugh-owl.modeles') }}" class="btn-bleu"><div>Voir tous les articles : Modèles Philosphiques</div></a>
</section>
<section class="s-vie">
    <h2>La Vie est [...]</h2>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'champ-de-bataille') }}">
        <img class="img" src="/assets/Lugh-Owl/vie-champ_bataille.jpg" width="200" alt="Image Modèle">
        <div class="catego">La Vie est [...]</div>
        <div class="titre">La Vie est un Champ de Bataille</div>
        <div class="descri">Une métaphore puissante qui illustre les luttes, les défis et les victoires de l'existence. Chaque jour, nous sommes appelés à combattre pour avancer, évoluer et triompher de nous-mêmes.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'dialogue-chaos') }}">
        <img class="img" src="/assets/Lugh-Owl/vie-dialogue_chaos.jpg" width="200" alt="Image Modèle">
        <div class="catego">La Vie est [...]</div>
        <div class="titre">La Vie est un Dialogue avec le Chaos</div>
        <div class="descri">Une exploration des interactions constantes entre l'ordre et le chaos, où l'être humain apprend à naviguer dans l'imprévu pour trouver un équilibre et construire un sens à son existence.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'enfer-necessaire') }}">
        <img class="img" src="/assets/Lugh-Owl/vie-enfer_necessaire.jpg" width="200" alt="Image Modèle">
        <div class="catego">La Vie est [...]</div>
        <div class="titre">La Vie est un Enfer Nécessaire</div>
        <div class="descri">La vie, malgré ses épreuves et ses douleurs, est une forge essentielle où l'âme se renforce, apprend et évolue. Les souffrances y sont nécessaires pour atteindre la sagesse et l'accomplissement.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'jeu-video-realiste') }}">
        <img class="img" src="/assets/Lugh-Owl/vie-jeu_video_realiste.jpg" width="200" alt="Image Modèle">
        <div class="catego">La Vie est [...]</div>
        <div class="titre">La Vie est un Jeu Vidéo Réaliste</div>
        <div class="descri">La vie peut être perçue comme un immense jeu vidéo, où chaque individu incarne un personnage évoluant dans un monde complexe, confronté à des défis, des choix, et des quêtes multiples.</div>
    </a>
    <a href="{{ route('fr.lugh-owl.vie') }}" class="btn-bleu"><div>Voir tous les articles : La Vie est [...]</div></a>
</section>
<section class="s-idee">
    <h2>Idées Immuables</h2>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'acteur-spectateur') }}">
        <img class="img" src="/assets/Lugh-Owl/id-acteur_spectateur-reflexion_temperance.jpg" width="200" alt="Image Modèle">
        <div class="catego">Idée Immuable</div>
        <div class="titre">Acteur et Spectateur - Réflexion et Tempérance</div>
        <div class="descri">La vie nous place dans les rôles d'acteur et de spectateur. Apprendre à jongler entre l'action réfléchie et l'observation tempérée nous aide à trouver l'équilibre et la sagesse.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'bouc-emissaire') }}">
        <img class="img" src="/assets/Lugh-Owl/id-bouc_emissaire-capteur_haine.jpg" width="200" alt="Image Modèle">
        <div class="catego">Idée Immuable</div>
        <div class="titre">Bouc Émissaire - Capteur de haine</div>
        <div class="descri">Le concept du bouc émissaire montre comment une société ou un individu désigne quelqu'un pour porter la haine et les maux, détournant ainsi l'attention de leurs propres faiblesses ou erreurs.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'capitalisme') }}">
        <img class="img" src="/assets/Lugh-Owl/id-capitalisme_progressisme_idealisme.jpg" width="200" alt="Image Modèle">
        <div class="catego">Idée Immuable</div>
        <div class="titre">Capitalisme, Progressisme et Idéalisme</div>
        <div class="descri">Le capitalisme, le progressisme et l'idéalisme sont des forces qui façonnent notre société contemporaine. Entre dérives économiques et impacts psychologiques, la quête de progrès nous mène-t-elle vraiment vers un monde meilleur ?</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'consommation') }}">
        <img class="img" src="/assets/Lugh-Owl/id-consommation_capitalisme_education.jpg" width="200" alt="Image Modèle">
        <div class="catego">Idée Immuable</div>
        <div class="titre">Consommation, Capitalisme et Éducation</div>
        <div class="descri">Bien que l'éducation puisse jouer un rôle essentiel dans la formation d'individus responsables, la société de consommation détourne ces efforts en favorisant une culture de l'achat et du paraître.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'creation-destruction') }}">
        <img class="img" src="/assets/Lugh-Owl/id-creation_transformation_destruction.jpg" width="200" alt="Image Modèle">
        <div class="catego">Idée Immuable</div>
        <div class="titre">Création, Transformation et Destruction</div>
        <div class="descri">La création, la transformation et la destruction forment un cycle fondamental de l'existence. Comprendre ce cycle permet d'accepter le changement comme une force naturelle et nécessaire.</div>
    </a>
    <hr>
    <a class="content" href="{{ route('fr.lugh-owl.article', 'danger-fiction') }}">
        <img class="img" src="/assets/Lugh-Owl/id-danger_fiction_imagination.jpg" width="200" alt="Image Modèle">
        <div class="catego">Idée Immuable</div>
        <div class="titre">Danger, Fiction et Imagination</div>
        <div class="descri">La fiction et l'imagination peuvent être de puissants moyens d'évasion, mais rester spectateur du monde, sans confrontation active à la réalité, peut mener à un danger : celui de ne jamais agir.</div>
    </a>
    <a href="{{ route('fr.lugh-owl.idees') }}" class="btn-bleu"><div>Voir tous les articles : Idées Immuables</div></a>
</section>
@endsection
