@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Mythology — Ouranos-Taurus' : 'Mythologie — Ouranos-Taurus')
@section('nav_mythologie', 'active')

@section('content')

<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Myths & legends' : 'Mythes & légendes' }}</div>
    <h1 class="ot-page-title">{{ $locale === 'en' ? 'Celestial mythology' : 'Mythologie céleste' }}</h1>
    <p class="ot-page-intro">
        {{ $locale === 'en'
            ? 'The planets bear Roman names, the constellations often Greek ones. Here are the gods and heroes behind the names we still use today.'
            : 'Les planètes portent des noms romains, les constellations souvent grecs. Voici les dieux et héros derrière les noms que nous utilisons encore aujourd\'hui.' }}
    </p>
</div>

<div class="ot-content">

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'The planets and their Roman gods' : 'Les planètes et leurs dieux romains' }}</div>
        <div class="ot-myth-grid">
            @php
            $planetMyths = [
                ['symbol' => '☿', 'roman' => 'Mercure', 'roman_en' => 'Mercury', 'greek' => 'Hermès',
                 'body' => $locale === 'en'
                    ? 'Messenger of the gods, god of travellers, thieves and commerce. Named for Mercury\'s speed : it is the fastest planet, completing its orbit in just 88 days. Its winged sandals symbolise its swift motion across the sky.'
                    : 'Messager des dieux, dieu des voyageurs, des voleurs et du commerce. Nommé pour la rapidité de Mercure : c\'est la planète la plus rapide, bouclant son orbite en seulement 88 jours. Ses sandales ailées symbolisent son mouvement rapide dans le ciel.'],
                ['symbol' => '♀', 'roman' => 'Vénus', 'roman_en' => 'Venus', 'greek' => 'Aphrodite',
                 'body' => $locale === 'en'
                    ? 'Goddess of love and beauty. Venus is the brightest object in the sky after the Sun and Moon, luminous and beautiful : its name was an obvious choice. Known to the ancients as the "morning star" and "evening star" depending on where it appeared.'
                    : 'Déesse de l\'amour et de la beauté. Vénus est l\'objet le plus brillant du ciel après le Soleil et la Lune, lumineuse et belle : son nom s\'imposait. Connue des anciens comme "étoile du matin" et "étoile du soir" selon où elle apparaissait.'],
                ['symbol' => '♂', 'roman' => 'Mars', 'roman_en' => 'Mars', 'greek' => 'Arès',
                 'body' => $locale === 'en'
                    ? 'God of war. Mars\'s distinctive red colour, caused by iron oxide in its soil, evoked blood and combat for the ancients. Its two moons, Phobos (Fear) and Deimos (Dread), are also named after Ares\'s companions in Homer.'
                    : 'Dieu de la guerre. La couleur rouge caractéristique de Mars, due à l\'oxyde de fer dans son sol, évoquait le sang et le combat pour les anciens. Ses deux lunes, Phobos (Peur) et Deimos (Terreur), portent les noms des compagnons d\'Arès chez Homère.'],
                ['symbol' => '♃', 'roman' => 'Jupiter', 'roman_en' => 'Jupiter', 'greek' => 'Zeus',
                 'body' => $locale === 'en'
                    ? 'King of the gods, master of thunder and lightning, ruler of Olympus. Jupiter is the largest planet : the king of planets bears the king of gods\'s name. Its four largest moons (Io, Europa, Ganymede, Callisto) are all named after Zeus\'s lovers or servants.'
                    : 'Roi des dieux, maître du tonnerre et de la foudre, souverain de l\'Olympe. Jupiter est la plus grande planète : le roi des planètes porte le nom du roi des dieux. Ses quatre plus grandes lunes (Io, Europe, Ganymède, Callisto) portent toutes des noms d\'amants ou serviteurs de Zeus.'],
                ['symbol' => '♄', 'roman' => 'Saturne', 'roman_en' => 'Saturn', 'greek' => 'Cronos',
                 'body' => $locale === 'en'
                    ? 'God of time, agriculture and the golden age, father of Jupiter. The slowest of the visible planets to the naked eye, Saturne seems to move through time with the patience of the god who personifies it. Its symbol, the scythe, evokes both harvest and the passage of time.'
                    : 'Dieu du temps, de l\'agriculture et de l\'âge d\'or, père de Jupiter. La plus lente des planètes visibles à l\'œil nu, Saturne semble traverser le temps avec la patience du dieu qui la personnifie. Son symbole, la faucille, évoque à la fois la moisson et le passage du temps.'],
                ['symbol' => '⛢', 'roman' => 'Uranus', 'roman_en' => 'Uranus', 'greek' => 'Ouranos',
                 'body' => $locale === 'en'
                    ? 'Primordial god of the sky, the first deity in Greek cosmogony. Father of the Titans, castrated by his son Cronus. Discovered in 1781 by William Herschel, Uranus was the first planet discovered with a telescope, and the only one to retain its Greek name rather than a Roman one.'
                    : 'Dieu primordial du Ciel, première divinité dans la cosmogonie grecque. Père des Titans, châtré par son fils Cronos. Découvert en 1781 par William Herschel, Uranus est la première planète découverte avec un télescope, et la seule à conserver son nom grec plutôt que romain.'],
                ['symbol' => '♆', 'roman' => 'Neptune', 'roman_en' => 'Neptune', 'greek' => 'Poséidon',
                 'body' => $locale === 'en'
                    ? 'God of the sea, earthquakes and horses. Neptune\'s deep blue colour, caused by methane in its atmosphere absorbing red light, evoked the ocean. Discovered mathematically in 1846 before being observed, its existence was predicted from gravitational perturbations in Uranus\'s orbit.'
                    : 'Dieu de la mer, des séismes et des chevaux. La couleur bleu profond de Neptune, due au méthane dans son atmosphère absorbant la lumière rouge, évoquait l\'océan. Découverte mathématiquement en 1846 avant d\'être observée, son existence fut prédite par des perturbations gravitationnelles dans l\'orbite d\'Uranus.'],
            ];
            @endphp
            @foreach($planetMyths as $m)
            <div class="ot-myth-card">
                <div class="ot-myth-header">
                    <div class="ot-myth-symbol">{{ $m['symbol'] }}</div>
                    <div class="ot-myth-names">
                        <div class="ot-myth-roman">{{ $locale === 'en' ? $m['roman_en'] : $m['roman'] }}</div>
                        <div class="ot-myth-greek">{{ $locale === 'en' ? 'Greek: ' : 'Grec : ' }}{{ $m['greek'] }}</div>
                    </div>
                </div>
                <div class="ot-myth-body">{{ $m['body'] }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'The primordial gods : origin of the cosmos' : 'Les dieux primordiaux : l\'origine du cosmos' }}</div>
        <div class="ot-text">
            <p>{{ $locale === 'en'
                ? 'In Greek cosmogony, before the Olympian gods, came the primordials. Chaos first, then Gaia (Earth), Tartarus (the deep), Eros (love), Erebus (darkness) and Nyx (night). From Gaia came Ouranos (Sky), and their union produced the Titans, the generation that preceded Zeus and the Olympians.'
                : 'Dans la cosmogonie grecque, avant les dieux de l\'Olympe, vinrent les primordiaux. Chaos d\'abord, puis Gaïa (la Terre), Tartare (les profondeurs), Éros (l\'amour), Érèbe (les ténèbres) et Nyx (la nuit). De Gaïa naquit Ouranos (le Ciel), et leur union produisit les Titans, la génération qui précéda Zeus et les Olympiens.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'The name Ouranos-Taurus unites this primordial sky god with the Taurus constellation, one of the oldest recognised constellations, mentioned in texts as far back as 3000 BCE by the Babylonians, who used it to mark the spring equinox.'
                : 'Le nom Ouranos-Taurus unit ce dieu du ciel primordial avec la constellation du Taureau, l\'une des plus anciennes constellations reconnues, mentionnée dans des textes babyloniens remontant à 3 000 av. J.-C., qui l\'utilisaient pour marquer l\'équinoxe de printemps.' }}
            </p>
        </div>
    </div>

</div>
@endsection
