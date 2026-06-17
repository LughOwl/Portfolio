@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Origins - Ouranos-Taurus' : 'Origines - Ouranos-Taurus')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="ot-content" style="padding-top:15px;">
    <div class="ot-prose">

@if($isEn)

        <h2>Welcome</h2>
        <p>
            This site is dedicated to astronomy: planets, constellations, observable phenomena,
            and the mythology woven into the names of the sky. It is a space of exploration,
            combining the scientific and the symbolic — because the sky has always been both a
            map and a story.
        </p>

        <h2>Origins of the name</h2>
        <p>
            Ouranos (Οὐρανός) is the primordial god of the Sky in Greek cosmogony, one of the first
            beings to emerge from Chaos, alongside Gaïa (Earth) and Eros (Love). He is not an
            anthropomorphic figure who acts and plots — he <em>is</em> the sky itself: the starry
            vault, infinite, encompassing everything. Every human story unfolds beneath him.
        </p>
        <p>
            He gives his name to the planet Uranus, the only planet in the solar system to bear a
            Greek name rather than a Roman one — a distinction that suits a site dedicated to the
            entire celestial sphere.
        </p>
        <p>
            Taurus is one of the oldest constellations in the sky. Babylonian astronomers identified
            it as early as 3000 BCE, using it to mark the spring equinox. It contains some of the
            most remarkable objects visible to the naked eye: the Pleiades, the Hyades (the nearest
            open cluster to Earth), and the Crab Nebula, the remnant of a supernova observed in 1054.
            Its brightest star, Aldébaran — "the Follower" in Arabic — marks the eye of the bull,
            blazing red-orange in the winter sky.
        </p>
        <p>
            Taurus is also my astrological sign — the personal thread that ties this site to its
            author. Ouranos-Taurus joins the infinite sky and the grounded earth: the act of
            looking up.
        </p>

        <h2>About the content</h2>
        <p>
            The site covers planets, constellations, observable phenomena, and the mythology behind
            the names of the sky. The scientific and the poetic are deliberately mixed here —
            because that is how the sky has always been understood.
        </p>

        <h2>A learning project</h2>
        <p>
            Ouranos-Taurus is also part of my web development portfolio, built with Laravel to
            practise multi-category content management and a multilingual interface.
        </p>

        <h2>Contact</h2>
        <p>
            You can reach me at <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            or via the <a href="{{ route('en.websites') }}">main website</a>.
        </p>

@else

        <h2>Bienvenue</h2>
        <p>
            Ce site est dédié à l'astronomie : planètes, constellations, phénomènes observables,
            et la mythologie tissée dans les noms du ciel. C'est un espace d'exploration qui mêle
            le scientifique et le symbolique, parce que le ciel a toujours été à la fois une carte
            et une histoire.
        </p>

        <h2>Origines du nom</h2>
        <p>
            Ouranos (Οὐρανός) est le dieu primordial du Ciel dans la cosmogonie grecque, l'un des
            premiers êtres à émerger du Chaos, aux côtés de Gaïa (la Terre) et d'Éros (l'Amour).
            Ce n'est pas une figure anthropomorphique qui agit et intrigue : il <em>est</em> le
            ciel lui-même : la voûte étoilée, infinie, englobant tout. Toute histoire humaine se
            déroule sous son regard.
        </p>
        <p>
            Il donne son nom à la planète Uranus, seule planète du système solaire à porter un
            nom grec plutôt que romain, une distinction qui convient à un site dédié à la sphère
            céleste tout entière.
        </p>
        <p>
            Le Taureau est l'une des plus anciennes constellations du ciel. Les astronomes
            babyloniens l'identifiaient déjà en 3 000 av. J.-C. pour marquer l'équinoxe de printemps.
            Elle contient certains des objets les plus remarquables visibles à l'œil nu : les
            Pléiades, les Hyades (l'amas ouvert le plus proche de la Terre), et la Nébuleuse du Crabe,
            vestige d'une supernova observée en 1054. Son étoile la plus brillante, Aldébaran,
            "le Suivant" en arabe, marque l'œil du taureau, brillant rouge-orangé dans le ciel d'hiver.
        </p>
        <p>
            Le Taureau est aussi mon signe astrologique, le fil personnel qui relie ce site à son
            auteur. Ouranos-Taurus unit le ciel infini et la terre ancrée : l'acte de lever les yeux.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Le site couvre les planètes, constellations, phénomènes observables, et la mythologie
            derrière les noms du ciel. Le scientifique et le poétique sont délibérément mêlés ici,
            parce que c'est ainsi que le ciel a toujours été compris.
        </p>

        <h2>Un projet d'apprentissage</h2>
        <p>
            Ouranos-Taurus fait aussi partie de mon portfolio de développement web, construit avec
            Laravel pour pratiquer la gestion de contenu multi-catégories et une interface multilingue.
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
