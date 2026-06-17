@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Observe — Ouranos-Taurus' : 'Observer — Ouranos-Taurus')
@section('nav_observer', 'active')

@section('content')

<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Practical guide' : 'Guide pratique' }}</div>
    <h1 class="ot-page-title">{{ $locale === 'en' ? 'How to observe the sky' : 'Comment observer le ciel' }}</h1>
    <p class="ot-page-intro">
        {{ $locale === 'en'
            ? 'You do not need expensive equipment to start. The naked eye reveals planets, constellations and shooting stars. Here is how to get started.'
            : 'Vous n\'avez pas besoin d\'équipement coûteux pour commencer. L\'œil nu révèle les planètes, constellations et étoiles filantes. Voici comment débuter.' }}
    </p>
</div>

<div class="ot-content">

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Equipment — what you can see' : 'Équipement — ce que vous pouvez voir' }}</div>
        <div class="ot-observe-grid">
            <div class="ot-observe-card">
                <div class="ot-observe-card-title">{{ $locale === 'en' ? 'Naked eye' : 'Œil nu' }}</div>
                <ul class="ot-observe-list">
                    <li>{{ $locale === 'en' ? '5 planets (Venus, Mars, Jupiter, Saturn, Mercury)' : '5 planètes (Vénus, Mars, Jupiter, Saturne, Mercure)' }}</li>
                    <li>{{ $locale === 'en' ? 'All 88 constellations (dark sky)' : 'Les 88 constellations (ciel sombre)' }}</li>
                    <li>{{ $locale === 'en' ? 'The Milky Way band' : 'La bande de la Voie Lactée' }}</li>
                    <li>{{ $locale === 'en' ? 'Meteor showers' : 'Pluies de météores' }}</li>
                    <li>{{ $locale === 'en' ? 'ISS and satellites' : 'ISS et satellites' }}</li>
                    <li>{{ $locale === 'en' ? 'Andromeda Galaxy (M31, just barely)' : 'Galaxie d\'Andromède (M31, tout juste)' }}</li>
                </ul>
            </div>
            <div class="ot-observe-card">
                <div class="ot-observe-card-title">{{ $locale === 'en' ? 'Binoculars (7×50 or 10×50)' : 'Jumelles (7×50 ou 10×50)' }}</div>
                <ul class="ot-observe-list">
                    <li>{{ $locale === 'en' ? 'Jupiter\'s 4 Galilean moons' : 'Les 4 lunes galiléennes de Jupiter' }}</li>
                    <li>{{ $locale === 'en' ? 'Moon craters in detail' : 'Cratères lunaires en détail' }}</li>
                    <li>{{ $locale === 'en' ? 'Open clusters (Pleiades, Hyades)' : 'Amas ouverts (Pléiades, Hyades)' }}</li>
                    <li>{{ $locale === 'en' ? 'Andromeda + several galaxies' : 'Andromède + plusieurs galaxies' }}</li>
                    <li>{{ $locale === 'en' ? 'Uranus and Neptune (as dots)' : 'Uranus et Neptune (comme des points)' }}</li>
                </ul>
            </div>
            <div class="ot-observe-card">
                <div class="ot-observe-card-title">{{ $locale === 'en' ? 'Telescope (114mm+)' : 'Télescope (114mm+)' }}</div>
                <ul class="ot-observe-list">
                    <li>{{ $locale === 'en' ? 'Saturn\'s rings' : 'Anneaux de Saturne' }}</li>
                    <li>{{ $locale === 'en' ? 'Mars surface features' : 'Reliefs de la surface de Mars' }}</li>
                    <li>{{ $locale === 'en' ? 'Jupiter\'s cloud bands' : 'Bandes nuageuses de Jupiter' }}</li>
                    <li>{{ $locale === 'en' ? 'Globular clusters' : 'Amas globulaires' }}</li>
                    <li>{{ $locale === 'en' ? 'Nebulae (Orion, Ring...)' : 'Nébuleuses (Orion, Anneau...)' }}</li>
                    <li>{{ $locale === 'en' ? 'Double stars' : 'Étoiles doubles' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Light pollution — the Bortle scale' : 'Pollution lumineuse — l\'échelle de Bortle' }}</div>
        <div class="ot-text" style="margin-bottom:16px;">
            <p>{{ $locale === 'en'
                ? 'The Bortle scale rates sky darkness from 1 (perfect dark sky) to 9 (inner city). Most people live under Bortle 5–7. To see the Milky Way, you need at least Bortle 4.'
                : 'L\'échelle de Bortle évalue l\'obscurité du ciel de 1 (ciel parfaitement noir) à 9 (centre-ville). La plupart des gens vivent sous Bortle 5–7. Pour voir la Voie Lactée, il faut au moins Bortle 4.' }}
            </p>
        </div>
        <div class="ot-bortle-grid">
            @php
            $bortle = [
                ['1', $locale === 'en' ? 'Zodiacal light visible, M33 direct' : 'Lumière zodiacale visible, M33 direct'],
                ['2', $locale === 'en' ? 'Zodiacal light obvious, airglow faint' : 'Lumière zodiacale évidente, airglow faible'],
                ['3', $locale === 'en' ? 'Rural sky — Milky Way complex structure' : 'Ciel rural — structure complexe Voie Lactée'],
                ['4', $locale === 'en' ? 'Rural/suburban — Milky Way visible' : 'Rural/périurbain — Voie Lactée visible'],
                ['5', $locale === 'en' ? 'Suburban — zodiacal light barely' : 'Banlieue — lumière zodiacale à peine'],
                ['6', $locale === 'en' ? 'Bright suburban — no Milky Way' : 'Banlieue lumineuse — pas de Voie Lactée'],
                ['7', $locale === 'en' ? 'Suburban/urban transition' : 'Transition banlieue/ville'],
                ['8', $locale === 'en' ? 'City sky' : 'Ciel de ville'],
                ['9', $locale === 'en' ? 'Inner city — only Moon and planets' : 'Centre-ville — Lune et planètes seulement'],
            ];
            @endphp
            @foreach($bortle as [$num, $desc])
            <div class="ot-bortle-item">
                <span class="ot-bortle-num">{{ $num }}</span>
                <span class="ot-bortle-desc">{{ $desc }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Recommended apps' : 'Applications recommandées' }}</div>
        <div class="ot-observe-grid">
            <div class="ot-observe-card">
                <div class="ot-observe-card-title">Stellarium</div>
                <ul class="ot-observe-list">
                    <li>{{ $locale === 'en' ? 'Free & open source (PC + mobile)' : 'Gratuit et open source (PC + mobile)' }}</li>
                    <li>{{ $locale === 'en' ? 'Real-time sky in any direction' : 'Ciel en temps réel dans toute direction' }}</li>
                    <li>{{ $locale === 'en' ? 'Constellations, planets, deep sky' : 'Constellations, planètes, ciel profond' }}</li>
                    <li>{{ $locale === 'en' ? 'Time simulation (past & future)' : 'Simulation temporelle (passé & futur)' }}</li>
                </ul>
            </div>
            <div class="ot-observe-card">
                <div class="ot-observe-card-title">SkySafari</div>
                <ul class="ot-observe-list">
                    <li>{{ $locale === 'en' ? 'iOS & Android — augmented reality' : 'iOS & Android — réalité augmentée' }}</li>
                    <li>{{ $locale === 'en' ? 'Point phone at sky to identify objects' : 'Pointer le téléphone vers le ciel' }}</li>
                    <li>{{ $locale === 'en' ? 'ISS & satellite tracking' : 'Suivi ISS & satellites' }}</li>
                    <li>{{ $locale === 'en' ? 'Night mode (red screen)' : 'Mode nuit (écran rouge)' }}</li>
                </ul>
            </div>
            <div class="ot-observe-card">
                <div class="ot-observe-card-title">Light Pollution Map</div>
                <ul class="ot-observe-list">
                    <li>{{ $locale === 'en' ? 'lightpollutionmap.info (web)' : 'lightpollutionmap.info (web)' }}</li>
                    <li>{{ $locale === 'en' ? 'Interactive Bortle map worldwide' : 'Carte Bortle interactive mondiale' }}</li>
                    <li>{{ $locale === 'en' ? 'Find dark sky sites near you' : 'Trouver des ciels sombres proches' }}</li>
                    <li>{{ $locale === 'en' ? 'Compare city vs dark sky' : 'Comparer ville vs ciel sombre' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Tips for beginners' : 'Conseils pour débuter' }}</div>
        <div class="ot-text">
            <p><strong>{{ $locale === 'en' ? 'Dark adaptation' : 'Adaptation à l\'obscurité' }} :</strong>
            {{ $locale === 'en'
                ? 'Your eyes take 20–30 minutes to fully adapt to darkness. Avoid any white light during that time. Red lights (head torches, phone night mode) do not break dark adaptation.'
                : 'Vos yeux mettent 20–30 minutes pour s\'adapter complètement à l\'obscurité. Évitez toute lumière blanche pendant ce temps. Les lumières rouges (frontales, mode nuit du téléphone) ne brisent pas l\'adaptation.' }}
            </p>
            <p><strong>{{ $locale === 'en' ? 'Best conditions' : 'Meilleures conditions' }} :</strong>
            {{ $locale === 'en'
                ? 'New moon nights, clear skies, low humidity, no wind (less atmospheric turbulence). Avoid nights just after rain — wait for the sky to settle. Winter skies are generally more transparent than summer ones.'
                : 'Nuits de nouvelle lune, ciel dégagé, faible humidité, pas de vent (moins de turbulence atmosphérique). Évitez les nuits juste après la pluie — attendez que le ciel se stabilise. Les ciels d\'hiver sont généralement plus transparents que ceux d\'été.' }}
            </p>
            <p><strong>{{ $locale === 'en' ? 'Start simple' : 'Commencer simple' }} :</strong>
            {{ $locale === 'en'
                ? 'Begin with the Moon, then find Venus and Jupiter — they are the brightest objects and easy to locate. Then learn 3–5 constellations. Orion in winter and the Big Dipper year-round are the best starting points.'
                : 'Commencez par la Lune, puis repérez Vénus et Jupiter — ce sont les objets les plus brillants et faciles à localiser. Puis apprenez 3–5 constellations. Orion en hiver et la Grande Ourse toute l\'année sont les meilleurs points de départ.' }}
            </p>
        </div>
    </div>

</div>
@endsection
