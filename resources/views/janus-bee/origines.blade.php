@extends('layouts.janus-bee')
@section('title', $locale === 'en' ? 'Origins - Janus-Bee' : 'Origines - Janus-Bee')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="content-origines">
    <div>
@if($isEn)

        <h2>Welcome</h2>
        <p>
            This site is a personal catalogue of works that have marked or inspired me, drawn from
            different media: anime, films, books, video games and short films. Not a review platform
            or a ratings site — simply a curated collection of things worth knowing about.
        </p>

        <h2>Origins of the name</h2>
        <p>
            Janus is the Roman god of beginnings, transitions and passageways. He is the only
            major deity in the Roman pantheon with no Greek equivalent — he belongs entirely to Rome.
            Depicted with two faces looking simultaneously toward the past and the future, he embodies
            the capacity to hold both at once: what came before and what is coming next. The month of
            January is named after him; every threshold, every door, every border crossing is under
            his watch.
        </p>
        <p>
            The bee is an insect of extraordinary organisation. A hive operates without a central
            authority: each individual follows simple local rules, and the result is a structure of
            remarkable complexity. The bee builds, stores and communicates — it is the natural
            metaphor for a catalogue: many things gathered, each in its place.
        </p>
        <p>
            Janus-Bee is the space where the past and future of culture meet, catalogued with the
            care of a hive. Works that shaped something — a perspective, a feeling, a way of seeing
            — gathered and organised so they can be found again.
        </p>

        <h2>About the content</h2>
        <p>
            The site does not host the works themselves. It offers descriptions, filters by type and
            genre, and links to the platforms where they are available. The goal is discovery and
            reference, not reproduction.
        </p>

        <h2>A learning project</h2>
        <p>
            Janus-Bee is also part of my web development portfolio. Building it gave me the
            opportunity to work on a full CRUD system, advanced filtering, multilingual content,
            and an administration interface with Laravel.
        </p>

        <h2>Contact</h2>
        <p>
            You can reach me at <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            or via the <a href="{{ route('en.websites') }}">main website</a>.
        </p>

@else

        <h2>Bienvenue</h2>
        <p>
            Ce site est un catalogue personnel d'œuvres qui m'ont marqué ou inspiré, issues de
            différents médias : animés, films, livres, jeux vidéo et courts métrages. Pas une
            plateforme de critiques ou un site de notes, simplement une collection soignée de
            choses qui méritent d'être connues.
        </p>

        <h2>Origines du nom</h2>
        <p>
            Janus est le dieu romain des commencements, des transitions et des passages. Il est
            le seul dieu majeur du panthéon romain sans équivalent grec : il appartient entièrement
            à Rome. Représenté avec deux visages regardant simultanément vers le passé et l'avenir,
            il incarne la capacité de tenir les deux à la fois : ce qui est advenu et ce qui vient.
            Le mois de janvier porte son nom ; chaque seuil, chaque porte, chaque frontière est
            sous sa garde.
        </p>
        <p>
            L'abeille est un insecte d'une organisation extraordinaire. Une ruche fonctionne sans
            autorité centrale : chaque individu suit des règles locales simples, et le résultat est
            une structure d'une complexité remarquable. L'abeille construit, stocke et communique :
            c'est la métaphore naturelle d'un catalogue, de nombreuses choses rassemblées,
            chacune à sa place.
        </p>
        <p>
            Janus-Bee est l'espace où le passé et l'avenir de la culture se rencontrent, catalogués
            avec le soin d'une ruche. Des œuvres qui ont façonné quelque chose : une perspective,
            un sentiment, une façon de voir, rassemblées et organisées pour qu'on puisse les
            retrouver.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Le site n'héberge pas les œuvres elles-mêmes. Il propose des descriptions, des filtres
            par type et genre, et des liens vers les plateformes où elles sont disponibles.
            L'objectif est la découverte et la référence, pas la reproduction.
        </p>

        <h2>Un projet d'apprentissage</h2>
        <p>
            Janus-Bee fait aussi partie de mon portfolio de développement web. Le construire m'a
            permis de travailler sur un système CRUD complet, un filtrage avancé, du contenu
            multilingue, et une interface d'administration avec Laravel.
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
