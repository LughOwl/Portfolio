@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Origins — Ouranos-Taurus' : 'Origines — Ouranos-Taurus')

@section('content')

<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'About' : 'À propos' }}</div>
    <h1 class="ot-page-title">{{ $locale === 'en' ? 'Origins of the name' : 'Origines du nom' }}</h1>
</div>

<div class="ot-content">
    <div class="ot-section">
        <div class="ot-section-title">Ouranos</div>
        <div class="ot-text">
            <p>{{ $locale === 'en'
                ? 'Ouranos (Οὐρανός) is the primordial god of the Sky in Greek cosmogony, one of the first beings to emerge from Chaos, alongside Gaia (Earth), Tartarus (the abyss) and Eros (love). He personifies the starry vault itself: infinite, encompassing all things, the great dome beneath which every human story unfolds.'
                : 'Ouranos (Οὐρανός) est le dieu primordial du Ciel dans la cosmogonie grecque, l\'un des premiers êtres à émerger du Chaos, aux côtés de Gaïa (la Terre), de Tartare (l\'abîme) et d\'Éros (l\'amour). Il personnifie la voûte étoilée elle-même : infinie, englobant toutes choses, le grand dôme sous lequel se déroule toute histoire humaine.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'Son of Gaia, he became her consort and together they produced the Titans, the Cyclops and the Hecatonchires. Ouranos gives his name to the planet Uranus, the only planet in the solar system to bear a Greek name rather than a Roman one, a distinction that suits a site dedicated to the entire celestial sphere.'
                : 'Fils de Gaïa, il devint son époux et ensemble ils engendrèrent les Titans, les Cyclopes et les Hécatonchires. Ouranos donne son nom à la planète Uranus, seule planète du système solaire à porter un nom grec plutôt que romain, une distinction qui convient à un site dédié à la sphère céleste tout entière.' }}
            </p>
        </div>
    </div>

    <div class="ot-section">
        <div class="ot-section-title">Taurus</div>
        <div class="ot-text">
            <p>{{ $locale === 'en'
                ? 'Taurus is one of the oldest constellations in the sky : Babylonian astronomers identified it as early as 3000 BCE, using it to mark the spring equinox. It contains some of the sky\'s most remarkable objects: the Pleiades (the Seven Sisters), the Hyades (the nearest open cluster to Earth), and the Crab Nebula, the remnant of a supernova observed in 1054 CE.'
                : 'Le Taureau est l\'une des plus anciennes constellations du ciel : les astronomes babyloniens l\'identifiaient déjà en 3 000 av. J.-C., l\'utilisant pour marquer l\'équinoxe de printemps. Elle contient certains des objets les plus remarquables du ciel : les Pléiades (les Sept Sœurs), les Hyades (l\'amas ouvert le plus proche de la Terre), et la Nébuleuse du Crabe, vestige d\'une supernova observée en 1054.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'In mythology, Taurus represents Zeus transformed into a white bull to seduce Europa, a princess of Phoenicia whom he carried across the sea to the island of Crete. The constellation\'s brightest star, Aldébaran ("the Follower" in Arabic), marks the eye of the bull, blazing red-orange in the winter sky.'
                : 'Dans la mythologie, le Taureau représente Zeus transformé en taureau blanc pour séduire Europe, une princesse de Phénicie qu\'il emporta sur son dos à travers la mer jusqu\'à l\'île de Crète. L\'étoile la plus brillante de la constellation, Aldébaran (« le Suivant » en arabe), marque l\'œil du taureau, brillant rouge-orangé dans le ciel d\'hiver.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'Taurus is also my astrological sign, the personal thread that ties this site to its author. The bull\'s qualities, patience, groundedness and steadiness, are values I recognise in how I approach things: astronomy included.'
                : 'Le Taureau est aussi mon signe astrologique, le fil personnel qui relie ce site à son auteur. Les qualités du taureau, patience, ancrage et constance, sont des valeurs que je reconnais dans ma façon d\'aborder les choses : l\'astronomie y compris.' }}
            </p>
        </div>
    </div>

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Ouranos-Taurus : sky and earth' : 'Ouranos-Taurus : ciel et terre' }}</div>
        <div class="ot-text">
            <p>{{ $locale === 'en'
                ? 'Together, the two names form a tension between the infinite and the grounded. Ouranos is the boundless sky, primordial, mythological, cosmic. Taurus is the fixed earth, the patient bull, the sign that marks the turning of the seasons. Between the two: the act of looking up.'
                : 'Ensemble, les deux noms forment une tension entre l\'infini et l\'ancrage. Ouranos est le ciel sans bornes, primordial, mythologique, cosmique. Taurus est la terre ferme, le taureau patient, le signe qui marque le tournant des saisons. Entre les deux : l\'acte de lever les yeux.' }}
            </p>
        </div>
    </div>
</div>
@endsection
