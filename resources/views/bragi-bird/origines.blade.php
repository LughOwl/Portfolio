@extends('layouts.bragi-bird')
@section('title', $locale === 'en' ? 'Origins - Bragi-Bird' : 'Origines - Bragi-Bird')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="bb-content bb-content-narrow" style="padding-top:52px;">
    <div class="bb-prose">

@if($isEn)

        <h2>Welcome</h2>
        <p>
            This site is a personal collection of piano pieces I appreciate and keep coming
            back to. Not a music school, not a performer's portfolio — just a curated list of
            pieces that mean something to me, with recordings sourced from YouTube and elsewhere.
        </p>

        <h2>Origins of the name</h2>
        <p>
            Bragi is the Norse god of poetry and music, the divine skald who greets heroes
            in Valhalla with song. His name comes from <em>bragr</em> — "the best of its kind."
        </p>
        <p>
            The bird is the oldest musician in the world. Birdsong combines structure and
            spontaneity in a way no instrument fully replicates: a fixed vocabulary, improvised
            every time. It needs no audience to justify the song.
        </p>

        <h2>About the repertoire</h2>
        <p>
            The pieces span several centuries and styles — Baroque counterpoint, Romantic
            lyricism, twentieth-century impressionism, film music, video game soundtracks.
            What they share is that they moved me enough to add them here.
        </p>

        <h2>A learning project</h2>
        <p>
            Bragi-Bird is also part of my web development portfolio. Building it gave me the
            opportunity to work on a custom audio player, a bilingual content system, and a
            complete Laravel CRUD interface.
        </p>

        <h2>Contact</h2>
        <p>
            You can reach me at <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            or via the <a href="{{ route('en.websites') }}">main website</a>.
        </p>

@else

        <h2>Bienvenue</h2>
        <p>
            Ce site est une collection personnelle de morceaux de piano que j'apprécie et
            vers lesquels je reviens régulièrement. Pas une école de musique, pas un portfolio
            d'interprète, juste une liste de morceaux qui comptent pour moi, avec des
            enregistrements issus de YouTube et d'autres sources.
        </p>

        <h2>Origines du nom</h2>
        <p>
            Bragi est le dieu nordique de la poésie et de la musique, le skalde divin qui
            accueille les héros à Valhalla par le chant. Son nom vient de <em>bragr</em>,
            "le meilleur en son genre".
        </p>
        <p>
            L'oiseau est le plus ancien musicien du monde. Le chant des oiseaux mêle structure
            et spontanéité d'une façon qu'aucun instrument n'égale vraiment : un vocabulaire fixe,
            improvisé à chaque fois. Il n'a besoin d'aucun public pour justifier son chant.
        </p>

        <h2>À propos du répertoire</h2>
        <p>
            Les morceaux couvrent plusieurs siècles et styles : contrepoint baroque,
            lyrisme romantique, impressionnisme du vingtième siècle, musiques de film,
            bandes-son de jeux vidéo. Ce qu'ils ont en commun, c'est qu'ils m'ont
            suffisamment touché pour que je les ajoute ici.
        </p>

        <h2>Un projet d'apprentissage</h2>
        <p>
            Bragi-Bird fait aussi partie de mon portfolio de développement web. Le construire
            m'a permis de travailler sur un lecteur audio personnalisé, un système de contenu
            bilingue, et une interface CRUD complète avec Laravel.
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
