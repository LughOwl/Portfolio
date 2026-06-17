@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Constellations — Ouranos-Taurus' : 'Constellations — Ouranos-Taurus')
@section('nav_constellations', 'active')

@section('content')

<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Night sky' : 'Ciel nocturne' }}</div>
    <h1 class="ot-page-title">Constellations</h1>
    <p class="ot-page-intro">
        {{ $locale === 'en'
            ? '88 constellations cover the entire celestial sphere. Here are the most visible, their mythology and the best season to observe them.'
            : '88 constellations couvrent la sphère céleste entière. Voici les plus visibles, leur mythologie et la meilleure saison pour les observer.' }}
    </p>
</div>

<div class="ot-content">

@php
$constellations = [
    [
        'name' => 'Taureau', 'name_en' => 'Taurus', 'latin' => 'Taurus',
        'season' => 'hiver', 'season_en' => 'winter',
        'season_class' => 'hiver',
        'stars' => $locale === 'en' ? 'Aldébaran (α), Elnath (β)' : 'Aldébaran (α), Elnath (β)',
        'myth' => $locale === 'en'
            ? 'Zeus transformed into a white bull to seduce Europa. The Taurus also contains the Pleiades (7 sisters) and the Hyades, two famous open clusters.'
            : 'Zeus se transforma en taureau blanc pour séduire Europe. Le Taureau contient aussi les Pléiades (7 sœurs) et les Hyades, deux amas ouverts célèbres.',
        'featured' => true,
        'featured_label' => $locale === 'en' ? '★ Your constellation' : '★ Ta constellation',
    ],
    [
        'name' => 'Orion', 'name_en' => 'Orion', 'latin' => 'Orion',
        'season' => 'hiver', 'season_en' => 'winter',
        'season_class' => 'hiver',
        'stars' => 'Rigel (β), Bételgeuse (α), Bellatrix (γ)',
        'myth' => $locale === 'en'
            ? 'The great hunter of Greek mythology, placed in the sky by Zeus after his death. His belt of three stars (Alnitak, Alnilam, Mintaka) is one of the most recognisable patterns in the sky.'
            : 'Le grand chasseur de la mythologie grecque, placé dans le ciel par Zeus après sa mort. Sa ceinture de trois étoiles (Alnitak, Alnilam, Mintaka) est l\'un des motifs les plus reconnaissables du ciel.',
        'featured' => false,
    ],
    [
        'name' => 'Grande Ourse', 'name_en' => 'Ursa Major', 'latin' => 'Ursa Major',
        'season' => 'circompolaire', 'season_en' => 'circumpolar',
        'season_class' => 'circompolaire',
        'stars' => 'Dubhe (α), Merak (β), Alioth (ε)',
        'myth' => $locale === 'en'
            ? 'Zeus transformed Callisto into a bear to protect her from Hera\'s jealousy, then placed her in the sky as Ursa Major. Contains the Big Dipper asterism.'
            : 'Zeus transforma Callisto en ourse pour la protéger de la jalousie d\'Héra, puis la plaça dans le ciel. Contient l\'astérisme de la Grande Casserole.',
        'featured' => false,
    ],
    [
        'name' => 'Petite Ourse', 'name_en' => 'Ursa Minor', 'latin' => 'Ursa Minor',
        'season' => 'circompolaire', 'season_en' => 'circumpolar',
        'season_class' => 'circompolaire',
        'stars' => 'Polaris (α) — Étoile polaire',
        'myth' => $locale === 'en'
            ? 'Son of Callisto, Arcas was also transformed into a bear and placed beside his mother in the sky. Polaris, at the tip of its tail, marks the North Pole and barely moves in the sky.'
            : 'Fils de Callisto, Arcas fut également transformé en ours et placé près de sa mère dans le ciel. Polaris, à l\'extrémité de sa queue, marque le pôle Nord et bouge à peine dans le ciel.',
        'featured' => false,
    ],
    [
        'name' => 'Cassiopée', 'name_en' => 'Cassiopeia', 'latin' => 'Cassiopeia',
        'season' => 'circompolaire', 'season_en' => 'circumpolar',
        'season_class' => 'circompolaire',
        'stars' => 'Schedar (α), Caph (β), Gamma Cas (γ)',
        'myth' => $locale === 'en'
            ? 'Queen of Ethiopia, punished by Poseidon for her vanity, condemned to revolve around the North Pole for eternity. Her W shape is easily recognised in the northern sky.'
            : 'Reine d\'Éthiopie, punie par Poséidon pour sa vanité, condamnée à tourner autour du pôle Nord pour l\'éternité. Sa forme en W est facilement reconnaissable dans le ciel boréal.',
        'featured' => false,
    ],
    [
        'name' => 'Scorpion', 'name_en' => 'Scorpius', 'latin' => 'Scorpius',
        'season' => 'ete', 'season_en' => 'summer',
        'season_class' => 'ete',
        'stars' => 'Antarès (α), Shaula (λ), Graffias (β)',
        'myth' => $locale === 'en'
            ? 'The scorpion sent by Gaia to kill Orion. The two are placed on opposite sides of the sky so they never appear together : when Scorpius rises, Orion sets.'
            : 'Le scorpion envoyé par Gaïa pour tuer Orion. Les deux sont placés de part et d\'autre du ciel pour ne jamais apparaître ensemble : quand le Scorpion se lève, Orion se couche.',
        'featured' => false,
    ],
    [
        'name' => 'Lion', 'name_en' => 'Leo', 'latin' => 'Leo',
        'season' => 'printemps', 'season_en' => 'spring',
        'season_class' => 'printemps',
        'stars' => 'Régulus (α), Dénébola (β), Algieba (γ)',
        'myth' => $locale === 'en'
            ? 'The Nemean Lion, first labour of Heracles. Its hide was impervious to mortal weapons : Heracles strangled it and wore its skin as armour. Zeus placed it in the sky to honour its strength.'
            : 'Le lion de Némée, premier travail d\'Héraclès. Sa peau était invulnérable aux armes mortelles : Héraclès l\'étrangla et porta sa peau comme armure. Zeus le plaça dans le ciel en hommage à sa force.',
        'featured' => false,
    ],
    [
        'name' => 'Gémeaux', 'name_en' => 'Gemini', 'latin' => 'Gemini',
        'season' => 'hiver', 'season_en' => 'winter',
        'season_class' => 'hiver',
        'stars' => 'Pollux (β), Castor (α)',
        'myth' => $locale === 'en'
            ? 'Castor and Pollux, twin sons of Zeus and Leda. When Castor (mortal) died, Pollux (immortal) asked Zeus to share his immortality. They were placed together in the sky as an eternal pair.'
            : 'Castor et Pollux, fils jumeaux de Zeus et Léda. Quand Castor (mortel) mourut, Pollux (immortel) demanda à Zeus de partager son immortalité. Ils furent placés ensemble dans le ciel en paire éternelle.',
        'featured' => false,
    ],
    [
        'name' => 'Cygne', 'name_en' => 'Cygnus', 'latin' => 'Cygnus',
        'season' => 'ete', 'season_en' => 'summer',
        'season_class' => 'ete',
        'stars' => 'Déneb (α), Sadr (γ), Albireo (β)',
        'myth' => $locale === 'en'
            ? 'Zeus transformed into a swan to seduce Leda, or alternatively Orpheus metamorphosed into a swan after his death. Deneb is one of the most luminous stars visible to the naked eye, some 200,000 times the luminosity of the Sun.'
            : 'Zeus transformé en cygne pour séduire Léda, ou Orphée métamorphosé en cygne après sa mort. Déneb est l\'une des étoiles les plus lumineuses visibles à l\'œil nu, environ 200 000 fois plus lumineuse que le Soleil.',
        'featured' => false,
    ],
    [
        'name' => 'Pégase', 'name_en' => 'Pegasus', 'latin' => 'Pegasus',
        'season' => 'automne', 'season_en' => 'autumn',
        'season_class' => 'automne',
        'stars' => 'Markab (α), Scheat (β), Algenib (γ)',
        'myth' => $locale === 'en'
            ? 'The winged horse born from the blood of Medusa when Perseus cut off her head. Pegasus carried Bellerophon on his back when he slew the Chimera. His body forms the Great Square of Pegasus.'
            : 'Le cheval ailé né du sang de Méduse quand Persée lui trancha la tête. Pégase porta Bellérophon sur son dos pour tuer la Chimère. Son corps forme le Grand Carré de Pégase.',
        'featured' => false,
    ],
    [
        'name' => 'Verseau', 'name_en' => 'Aquarius', 'latin' => 'Aquarius',
        'season' => 'automne', 'season_en' => 'autumn',
        'season_class' => 'automne',
        'stars' => 'Sadalsuud (β), Sadalmelik (α)',
        'myth' => $locale === 'en'
            ? 'Ganymede, the most beautiful of mortals, abducted by Zeus (transformed into an eagle) to serve as cup-bearer to the gods on Olympus. He eternally pours water from an urn.'
            : 'Ganymède, le plus beau des mortels, enlevé par Zeus (transformé en aigle) pour servir d\'échanson aux dieux de l\'Olympe. Il verse éternellement de l\'eau depuis une urne.',
        'featured' => false,
    ],
    [
        'name' => 'Persée', 'name_en' => 'Perseus', 'latin' => 'Perseus',
        'season' => 'hiver', 'season_en' => 'winter',
        'season_class' => 'hiver',
        'stars' => 'Mirfak (α), Algol (β)',
        'myth' => $locale === 'en'
            ? 'Hero who slew Medusa and freed Andromeda. Algol, "the Demon Star", represents the blinking eye of Medusa. It is an eclipsing binary that dims regularly, which frightened ancient observers.'
            : 'Héros qui tua Méduse et libéra Andromède. Algol, "l\'étoile du démon", représente l\'œil clignotant de Méduse. C\'est une binaire à éclipses qui s\'assombrit régulièrement, ce qui effrayait les anciens observateurs.',
        'featured' => false,
    ],
];
@endphp

    <div class="ot-section">
        <div class="ot-constellation-grid">
            @foreach($constellations as $c)
            <div class="ot-constellation-card {{ $c['featured'] ? 'featured' : '' }}">
                <div class="ot-constellation-header">
                    <div>
                        <div class="ot-constellation-name">{{ $locale === 'en' ? $c['name_en'] : $c['name'] }}</div>
                        <div class="ot-constellation-latin">{{ $c['latin'] }}</div>
                    </div>
                    <span class="ot-season-badge {{ $c['season_class'] }}">
                        {{ $locale === 'en' ? ucfirst($c['season_en']) : ucfirst($c['season']) }}
                    </span>
                </div>
                <div class="ot-constellation-stars">
                    {{ $locale === 'en' ? 'Main stars' : 'Étoiles principales' }} : <span>{{ $c['stars'] }}</span>
                </div>
                <div class="ot-constellation-myth">{{ $c['myth'] }}</div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
