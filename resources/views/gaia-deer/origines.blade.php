@extends('layouts.gaia-deer')
@section('title', $locale === 'en' ? 'Origins - Gaïa-Deer' : 'Origines - Gaïa-Deer')
@section('meta_description', $locale === 'en'
    ? 'Why Gaïa-Deer exists: a systemic vision linking physical health, nutrition and investing.'
    : 'Pourquoi Gaïa-Deer existe : une vision systémique qui relie santé, nutrition et investissement.')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="gd-static">
@if($isEn)

        <h2>Welcome</h2>
        <p>
            This site covers three domains — physical health, nutrition and investing — not as
            separate subjects but as a single system. What you eat affects how you think. How you
            move affects how you sleep. Financial stability affects everything else. The three
            are connected, and neglecting one weakens the other two.
        </p>

        <h2>Origins of the name</h2>
        <p>
            Gaïa is the primordial goddess of the Earth in Greek mythology, mother of all living
            things and the original nourishing force. She is the soil that produces food, the physical
            world the body moves through, the ground beneath everything. She is abundance, cycle,
            rootedness.
        </p>
        <p>
            The deer — stag or doe — is a symbol of vitality, agility and harmony with the natural
            world. It lives alert, moves with precision, and exists in balance with its environment.
            It does not accumulate beyond its needs. It is the image of a body that functions well:
            lean, responsive, enduring.
        </p>
        <p>
            Together, Gaïa-Deer suggests a simple idea: nourish well, move well, live in equilibrium.
        </p>

        <h2>About the content</h2>
        <p>
            This is not a guide to follow to the letter. It is a personal account of what I have
            tested, adapted, dropped, and kept. Everything here is my opinion, based on my
            experience. Take what is useful, leave the rest.
        </p>

        <h2>A learning project</h2>
        <p>
            Gaïa-Deer is also part of my web development portfolio. It gave me the opportunity to
            work on a multi-category article system, multilingual content, and a complete
            administration interface built with Laravel.
        </p>

        <h2>Contact</h2>
        <p>
            You can reach me at <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            or via the <a href="{{ route('en.websites') }}">main website</a>.
        </p>

@else

        <h2>Bienvenue</h2>
        <p>
            Ce site couvre trois domaines (santé physique, nutrition et investissement), non pas
            comme des sujets séparés mais comme un seul système. Ce que vous mangez affecte comment
            vous pensez. Comment vous bougez affecte comment vous dormez. La stabilité financière
            affecte tout le reste. Les trois sont liés, et négliger l'un fragilise les deux autres.
        </p>

        <h2>Origines du nom</h2>
        <p>
            Gaïa est la déesse primordiale de la Terre dans la mythologie grecque, mère de tout
            le vivant et force nourricière originelle. Elle est le sol qui produit la nourriture,
            le monde physique dans lequel le corps évolue, le socle de toute chose. Elle est
            abondance, cycle, enracinement.
        </p>
        <p>
            Le cerf ou la biche est un symbole de vitalité, d'agilité et d'harmonie avec le monde
            naturel. Il vit en état d'alerte, se déplace avec précision, et existe en équilibre
            avec son environnement. Il n'accumule pas au-delà de ses besoins. C'est l'image d'un
            corps qui fonctionne bien : élancé, réactif, endurant.
        </p>
        <p>
            Ensemble, Gaïa-Deer évoque une idée simple : bien nourrir, bien bouger, vivre en équilibre.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Ce n'est pas un guide à suivre à la lettre. C'est un témoignage personnel de ce que
            j'ai testé, adapté, abandonné et conservé. Tout ici est mon avis, basé sur mon
            expérience. Prenez ce qui vous est utile, laissez le reste.
        </p>

        <h2>Un projet d'apprentissage</h2>
        <p>
            Gaïa-Deer fait aussi partie de mon portfolio de développement web. Le construire m'a
            permis de travailler sur un système d'articles multi-catégories, du contenu multilingue,
            et une interface d'administration complète avec Laravel.
        </p>

        <h2>Contact</h2>
        <p>
            Vous pouvez me contacter à <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            ou via le <a href="{{ route('fr.sites') }}">site principal</a>.
        </p>

@endif
</div>
@endsection
