@extends('layouts.lugh-owl')
@section('title', ($locale === 'en') ? 'Origins - Lugh-Owl' : 'Origines - Lugh-Owl')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="lo-static-wrap">
    <div>
@if($isEn)

        <h2>Welcome</h2>
        <p>
            This site is dedicated to the exploration of philosophy and metaphysics.
            It is a space to examine ideas about existence, knowledge, consciousness and meaning —
            subjects that resist simple answers and reward patient thought.
        </p>

        <h2>Origins of the name</h2>
        <p>
            Lugh is a major figure in Celtic mythology, the god of light, craftsmanship and knowledge.
            He is not merely a warrior but a master of every skill — poetry, music, smithcraft, healing.
            His name is related to the Proto-Celtic word for light, and the pan-European root that gave
            Latin <em>lux</em>. He embodies intelligence applied to the world.
        </p>
        <p>
            The owl is a universal symbol of wisdom and clear-sightedness. It sees in the dark,
            turns its head to observe what others miss, and acts without haste. In the Western
            tradition, it is the companion of Athena, goddess of wisdom. In philosophy,
            Hegel famously wrote that "the owl of Minerva spreads its wings only with the falling of dusk"
            — understanding comes after the fact, through reflection.
        </p>
        <p>
            Lugh-Owl brings these two symbols together: the light that illuminates, and the gaze
            that sees clearly. It is an invitation to look at existence with curiosity and precision.
        </p>

        <h2>About the content</h2>
        <p>
            The articles on this site explore philosophical and metaphysical themes. A large part of
            the content was produced with the assistance of artificial intelligence, which I use as
            a tool for generating and structuring ideas. Some sections — particularly the conceptual
            models — reflect my own thinking directly.
        </p>

        <h2>A learning project</h2>
        <p>
            Lugh-Owl is also part of my web development portfolio. It gave me the opportunity to
            work on a complete article management system, multilingual content, and a custom
            administration interface built with Laravel and MySQL.
        </p>

        <h2>Contact</h2>
        <p>
            You can reach me at <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            or via the <a href="{{ route('en.websites') }}">main website</a>.
        </p>

@else

        <h2>Bienvenue</h2>
        <p>
            Ce site est dédié à l'exploration de la philosophie et de la métaphysique.
            C'est un espace pour examiner des idées sur l'existence, la connaissance, la conscience
            et le sens : des sujets qui résistent aux réponses simples et récompensent la pensée patiente.
        </p>

        <h2>Origines du nom</h2>
        <p>
            Lugh est une figure majeure de la mythologie celtique, le dieu de la lumière, de
            l'artisanat et de la connaissance. Il n'est pas seulement un guerrier mais un maître de
            chaque compétence : poésie, musique, forge, médecine. Son nom est lié au mot proto-celtique
            pour la lumière, et à la racine pan-européenne qui a donné le latin <em>lux</em>.
            Il incarne l'intelligence appliquée au monde.
        </p>
        <p>
            Le hibou est un symbole universel de sagesse et de clairvoyance. Il voit dans l'obscurité,
            tourne la tête pour observer ce que les autres manquent, et agit sans précipitation.
            Dans la tradition occidentale, il est le compagnon d'Athéna, déesse de la sagesse. En
            philosophie, Hegel a écrit que "la chouette de Minerve ne prend son envol qu'au
            crépuscule" : la compréhension vient après coup, par la réflexion.
        </p>
        <p>
            Lugh-Owl réunit ces deux symboles : la lumière qui éclaire, et le regard qui voit clairement.
            C'est une invitation à observer l'existence avec curiosité et précision.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Les articles de ce site explorent des thèmes philosophiques et métaphysiques. Une grande
            partie du contenu a été produite avec l'aide de l'intelligence artificielle, que j'utilise
            comme outil pour générer et structurer des idées. Certaines sections, notamment les modèles
            conceptuels, reflètent directement ma propre réflexion.
        </p>

        <h2>Un projet d'apprentissage</h2>
        <p>
            Lugh-Owl fait aussi partie de mon portfolio de développement web. Il m'a permis de
            travailler sur un système complet de gestion d'articles, du contenu multilingue, et une
            interface d'administration construite avec Laravel et MySQL.
        </p>

        <h2>Contact</h2>
        <p>
            Vous pouvez me contacter à <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            ou via le <a href="{{ route('fr.sites') }}">site principal</a>.
        </p>

@endif
    </div>
</div>
@endsection
