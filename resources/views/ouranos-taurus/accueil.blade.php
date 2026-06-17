@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Ouranos-Taurus — Astronomy' : 'Ouranos-Taurus — Astronomie')
@section('meta_description', $locale === 'en'
    ? 'Planets, constellations, celestial phenomena and mythology : a personal reference site on astronomy.'
    : 'Planètes, constellations, phénomènes célestes et mythologie : un site de référence personnel sur l\'astronomie.')

@section('content')

<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Astronomy' : 'Astronomie' }}</div>
    @if($locale === 'en')
    <h1 class="ot-page-title">The sky above us.</h1>
    <p class="ot-page-intro">
        A personal reference on the cosmos : planets, constellations, phenomena and the myths that gave them their names.
        Everything that has captivated humanity since the first clear night.
    </p>
    @else
    <h1 class="ot-page-title">Le ciel au-dessus de nous.</h1>
    <p class="ot-page-intro">
        Une référence personnelle sur le cosmos : planètes, constellations, phénomènes et les mythes qui leur ont donné
        leurs noms. Tout ce qui fascine l'humanité depuis la première nuit claire.
    </p>
    @endif

    <div class="ot-stats-bar">
        <div class="ot-stat-item">
            <div class="ot-stat-val">8</div>
            <div class="ot-stat-lbl">{{ $locale === 'en' ? 'planets' : 'planètes' }}</div>
        </div>
        <div class="ot-stat-item">
            <div class="ot-stat-val">88</div>
            <div class="ot-stat-lbl">constellations</div>
        </div>
        <div class="ot-stat-item">
            <div class="ot-stat-val">~200 Md</div>
            <div class="ot-stat-lbl">{{ $locale === 'en' ? 'stars in the Milky Way' : 'étoiles dans la Voie Lactée' }}</div>
        </div>
        <div class="ot-stat-item">
            <div class="ot-stat-val">13,8 Ga</div>
            <div class="ot-stat-lbl">{{ $locale === 'en' ? 'age of the universe' : 'âge de l\'univers' }}</div>
        </div>
    </div>
</div>

<div class="ot-content">
    <div class="ot-home-grid">

        <a href="{{ $locale === 'en' ? route('en.ouranos-taurus.planetes') : route('fr.ouranos-taurus.planetes') }}" class="ot-home-card">
            <div class="ot-home-card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="9"/>
                    <ellipse cx="12" cy="12" rx="14" ry="5" transform="rotate(-20 12 12)" stroke-dasharray="3 2"/>
                </svg>
            </div>
            <div>
                <div class="ot-home-card-title">{{ $locale === 'en' ? 'Planets' : 'Planètes' }}</div>
                <div class="ot-home-card-desc">
                    {{ $locale === 'en'
                        ? 'The 8 planets of the solar system : key data, distances, moons and distinctive features.'
                        : 'Les 8 planètes du système solaire : données clés, distances, lunes et particularités.' }}
                </div>
            </div>
            <div class="ot-home-card-arrow">{{ $locale === 'en' ? 'Explore →' : 'Explorer →' }}</div>
        </a>

        <a href="{{ $locale === 'en' ? route('en.ouranos-taurus.constellations') : route('fr.ouranos-taurus.constellations') }}" class="ot-home-card">
            <div class="ot-home-card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="5" cy="5" r="1.5" fill="currentColor"/>
                    <circle cx="19" cy="4" r="1.5" fill="currentColor"/>
                    <circle cx="12" cy="10" r="1.5" fill="currentColor"/>
                    <circle cx="7" cy="18" r="1.5" fill="currentColor"/>
                    <circle cx="18" cy="17" r="1.5" fill="currentColor"/>
                    <line x1="5" y1="5" x2="12" y2="10"/><line x1="19" y1="4" x2="12" y2="10"/>
                    <line x1="12" y1="10" x2="7" y2="18"/><line x1="12" y1="10" x2="18" y2="17"/>
                </svg>
            </div>
            <div>
                <div class="ot-home-card-title">Constellations</div>
                <div class="ot-home-card-desc">
                    {{ $locale === 'en'
                        ? 'The major constellations visible to the naked eye : best season, main stars and myths.'
                        : 'Les grandes constellations visibles à l\'œil nu : saison d\'observation, étoiles principales et mythes.' }}
                </div>
            </div>
            <div class="ot-home-card-arrow">{{ $locale === 'en' ? 'Explore →' : 'Explorer →' }}</div>
        </a>

        <a href="{{ $locale === 'en' ? route('en.ouranos-taurus.phenomenes') : route('fr.ouranos-taurus.phenomenes') }}" class="ot-home-card">
            <div class="ot-home-card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                    <circle cx="12" cy="12" r="4"/>
                </svg>
            </div>
            <div>
                <div class="ot-home-card-title">{{ $locale === 'en' ? 'Phenomena' : 'Phénomènes' }}</div>
                <div class="ot-home-card-desc">
                    {{ $locale === 'en'
                        ? 'Eclipses, meteor showers, solstices, equinoxes : the annual calendar of celestial events.'
                        : 'Éclipses, pluies de météores, solstices, équinoxes : le calendrier annuel des événements célestes.' }}
                </div>
            </div>
            <div class="ot-home-card-arrow">{{ $locale === 'en' ? 'Explore →' : 'Explorer →' }}</div>
        </a>

        <a href="{{ $locale === 'en' ? route('en.ouranos-taurus.mythologie') : route('fr.ouranos-taurus.mythologie') }}" class="ot-home-card">
            <div class="ot-home-card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
            </div>
            <div>
                <div class="ot-home-card-title">{{ $locale === 'en' ? 'Mythology' : 'Mythologie' }}</div>
                <div class="ot-home-card-desc">
                    {{ $locale === 'en'
                        ? 'The gods and heroes behind the names of planets and constellations, drawn from Greek and Roman mythology.'
                        : 'Les dieux et héros derrière les noms des planètes et constellations, issus de la mythologie grecque et romaine.' }}
                </div>
            </div>
            <div class="ot-home-card-arrow">{{ $locale === 'en' ? 'Explore →' : 'Explorer →' }}</div>
        </a>

        <a href="{{ $locale === 'en' ? route('en.ouranos-taurus.observer') : route('fr.ouranos-taurus.observer') }}" class="ot-home-card">
            <div class="ot-home-card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    <line x1="11" y1="8" x2="11" y2="14"/>
                    <line x1="8" y1="11" x2="14" y2="11"/>
                </svg>
            </div>
            <div>
                <div class="ot-home-card-title">{{ $locale === 'en' ? 'Observe' : 'Observer' }}</div>
                <div class="ot-home-card-desc">
                    {{ $locale === 'en'
                        ? 'Practical guide for sky observation : naked eye, binoculars, telescope, apps and light pollution.'
                        : 'Guide pratique pour observer le ciel : œil nu, jumelles, télescope, applications et pollution lumineuse.' }}
                </div>
            </div>
            <div class="ot-home-card-arrow">{{ $locale === 'en' ? 'Explore →' : 'Explorer →' }}</div>
        </a>

    </div>
</div>

@endsection
