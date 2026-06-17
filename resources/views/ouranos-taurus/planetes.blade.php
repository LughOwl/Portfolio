@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Planets — Ouranos-Taurus' : 'Planètes — Ouranos-Taurus')
@section('nav_planetes', 'active')

@section('content')

<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Solar System' : 'Système solaire' }}</div>
    <h1 class="ot-page-title">{{ $locale === 'en' ? 'The 8 planets' : 'Les 8 planètes' }}</h1>
    <p class="ot-page-intro">
        {{ $locale === 'en'
            ? 'From Mercury, closest to the Sun, to Neptune at the edge of the solar system : key data for each world.'
            : 'De Mercure, la plus proche du Soleil, à Neptune aux confins du système solaire : données clés pour chaque monde.' }}
    </p>
</div>

<div class="ot-content">

@php
$planets = [
    [
        'name'     => 'Mercure', 'name_en' => 'Mercury',
        'symbol'   => '☿',
        'color'    => '#9ca3af',
        'subtitle' => $locale === 'en' ? 'Closest to the Sun' : 'La plus proche du Soleil',
        'tag'      => $locale === 'en' ? 'Telluric' : 'Tellurique',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '0,39 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '4 879 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '88 jours'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '0'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '-180 / +430 °C'],
        ],
        'note' => $locale === 'en' ? 'No atmosphere, extreme temperatures' : 'Pas d\'atmosphère, températures extrêmes',
    ],
    [
        'name'     => 'Vénus', 'name_en' => 'Venus',
        'symbol'   => '♀',
        'color'    => '#f59e0b',
        'subtitle' => $locale === 'en' ? 'Earth\'s twin in size' : 'La jumelle terrestre en taille',
        'tag'      => $locale === 'en' ? 'Telluric' : 'Tellurique',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '0,72 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '12 104 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '225 jours'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '0'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '+465 °C'],
        ],
        'note' => $locale === 'en' ? 'Hottest planet (runaway greenhouse effect)' : 'Planète la plus chaude (effet de serre incontrôlé)',
    ],
    [
        'name'     => 'Terre', 'name_en' => 'Earth',
        'symbol'   => '♁',
        'color'    => '#3b82f6',
        'subtitle' => $locale === 'en' ? 'Our home' : 'Notre maison',
        'tag'      => $locale === 'en' ? 'Telluric' : 'Tellurique',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '1,00 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '12 742 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '365,25 jours'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '1'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '+15 °C'],
        ],
        'note' => $locale === 'en' ? 'Only known planet with life' : 'Seule planète connue abritant la vie',
    ],
    [
        'name'     => 'Mars', 'name_en' => 'Mars',
        'symbol'   => '♂',
        'color'    => '#ef4444',
        'subtitle' => $locale === 'en' ? 'The Red Planet' : 'La planète rouge',
        'tag'      => $locale === 'en' ? 'Telluric' : 'Tellurique',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '1,52 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '6 779 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '687 jours'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '2'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '-60 °C'],
        ],
        'note' => $locale === 'en' ? 'Olympus Mons, tallest volcano in the solar system' : 'Olympus Mons, plus grand volcan du système solaire',
    ],
    [
        'name'     => 'Jupiter', 'name_en' => 'Jupiter',
        'symbol'   => '♃',
        'color'    => '#f97316',
        'subtitle' => $locale === 'en' ? 'The giant' : 'Le géant',
        'tag'      => $locale === 'en' ? 'Gas giant' : 'Géante gazeuse',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '5,20 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '139 820 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '11,9 ans'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '95'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '-110 °C'],
        ],
        'note' => $locale === 'en' ? 'Great Red Spot, a storm raging for 350+ years' : 'Grande Tache Rouge, tempête active depuis plus de 350 ans',
    ],
    [
        'name'     => 'Saturne', 'name_en' => 'Saturn',
        'symbol'   => '♄',
        'color'    => '#eab308',
        'subtitle' => $locale === 'en' ? 'The ringed planet' : 'La planète aux anneaux',
        'tag'      => $locale === 'en' ? 'Gas giant' : 'Géante gazeuse',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '9,58 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '116 460 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '29,5 ans'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '146'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '-140 °C'],
        ],
        'note' => $locale === 'en' ? 'Rings made of ice and rock, less dense than water' : 'Anneaux de glace et de roche, moins dense que l\'eau',
    ],
    [
        'name'     => 'Uranus', 'name_en' => 'Uranus',
        'symbol'   => '♅',
        'color'    => '#67e8f9',
        'subtitle' => $locale === 'en' ? 'The tilted planet' : 'La planète couchée',
        'tag'      => $locale === 'en' ? 'Ice giant' : 'Géante de glace',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '19,2 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '50 724 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '84 ans'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '28'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '-195 °C'],
        ],
        'note' => $locale === 'en' ? 'Axial tilt of 98°, rotates on its side' : 'Inclinaison axiale de 98°, tourne sur le côté',
    ],
    [
        'name'     => 'Neptune', 'name_en' => 'Neptune',
        'symbol'   => '♆',
        'color'    => '#6366f1',
        'subtitle' => $locale === 'en' ? 'The furthest' : 'La plus lointaine',
        'tag'      => $locale === 'en' ? 'Ice giant' : 'Géante de glace',
        'rows'     => [
            [$locale === 'en' ? 'Distance from Sun' : 'Distance au Soleil', '30,1 UA'],
            [$locale === 'en' ? 'Diameter' : 'Diamètre', '49 244 km'],
            [$locale === 'en' ? 'Orbital period' : 'Période orbitale', '164,8 ans'],
            [$locale === 'en' ? 'Known moons' : 'Lunes connues', '16'],
            [$locale === 'en' ? 'Avg. temperature' : 'Temp. moy.', '-200 °C'],
        ],
        'note' => $locale === 'en' ? 'Fastest winds in the solar system (2 100 km/h)' : 'Vents les plus rapides du système solaire (2 100 km/h)',
    ],
];
@endphp

    <div class="ot-section">
        <div class="ot-planet-grid">
            @foreach($planets as $p)
            @php [$r,$g,$b] = sscanf($p['color'], '#%02x%02x%02x'); @endphp
            <div class="ot-planet-card" style="border-top: 3px solid {{ $p['color'] }}; border-color: rgba({{ $r }},{{ $g }},{{ $b }},0.35); border-top-color: {{ $p['color'] }};">
                <div class="ot-planet-header">
                    <div class="ot-planet-icon" style="background:rgba({{ $r }},{{ $g }},{{ $b }},0.15); color:{{ $p['color'] }}; font-size:1.5em;">
                        {{ $p['symbol'] }}
                    </div>
                    <div>
                        <div class="ot-planet-name">{{ $locale === 'en' ? $p['name_en'] : $p['name'] }}</div>
                        <div class="ot-planet-subtitle">{{ $p['subtitle'] }}</div>
                    </div>
                </div>
                <div class="ot-planet-rows">
                    @foreach($p['rows'] as [$label, $val])
                    <div class="ot-planet-row" style="border-bottom-color: rgba({{ $r }},{{ $g }},{{ $b }},0.1);">
                        <span class="ot-planet-row-label">{{ $label }}</span>
                        <span class="ot-planet-row-val" style="color:{{ $p['color'] }};">{{ $val }}</span>
                    </div>
                    @endforeach
                </div>
                <div class="ot-planet-tag" style="background:rgba({{ $r }},{{ $g }},{{ $b }},0.12); color:{{ $p['color'] }}; border-color:rgba({{ $r }},{{ $g }},{{ $b }},0.25);">{{ $p['tag'] }}</div>
                <div style="font-size:0.75em; color:#7c7a9e; margin-top:8px; font-style:italic;">{{ $p['note'] }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Key: astronomical unit (AU)' : 'Repère : l\'unité astronomique (UA)' }}</div>
        <div class="ot-text">
            <p>{{ $locale === 'en'
                ? 'One astronomical unit (AU) equals the average distance between the Earth and the Sun, approximately 149.6 million kilometres. It is the reference unit for measuring distances within the solar system.'
                : 'Une unité astronomique (UA) correspond à la distance moyenne entre la Terre et le Soleil, soit environ 149,6 millions de kilomètres. C\'est l\'unité de référence pour mesurer les distances dans le système solaire.' }}
            </p>
        </div>
    </div>

</div>
@endsection
