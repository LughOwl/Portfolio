@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Phenomena — Ouranos-Taurus' : 'Phénomènes — Ouranos-Taurus')
@section('nav_phenomenes', 'active')

@section('content')

<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Celestial calendar' : 'Calendrier céleste' }}</div>
    <h1 class="ot-page-title">{{ $locale === 'en' ? 'Celestial phenomena' : 'Phénomènes célestes' }}</h1>
    <p class="ot-page-intro">
        {{ $locale === 'en'
            ? 'The recurring events of the sky — meteor showers, solstices, eclipses and planetary oppositions.'
            : 'Les événements récurrents du ciel — pluies de météores, solstices, éclipses et oppositions planétaires.' }}
    </p>
</div>

<div class="ot-content">

    {{-- Meteor showers --}}
    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Meteor showers' : 'Pluies de météores' }}</div>
        <div class="ot-phenomenon-list">
            @php
            $meteors = [
                ['3–4 jan.',  $locale === 'en' ? 'Quadrantids' : 'Quadrantides',        $locale === 'en' ? '~120 meteors/h' : '~120 météores/h'],
                ['22 avr.',   $locale === 'en' ? 'Lyrids' : 'Lyrides',                  $locale === 'en' ? '~20 meteors/h' : '~20 météores/h'],
                ['5–6 mai',   $locale === 'en' ? 'Eta Aquariids' : 'Êta-Aquariides',    $locale === 'en' ? '~50 meteors/h' : '~50 météores/h'],
                ['28–29 jul.',$locale === 'en' ? 'Delta Aquariids' : 'Delta-Aquariides',$locale === 'en' ? '~20 meteors/h' : '~20 météores/h'],
                ['11–13 aoû.',$locale === 'en' ? 'Perseids ★' : 'Perséides ★',          $locale === 'en' ? '~100 meteors/h — most watched' : '~100 météores/h — les plus observées'],
                ['21–22 oct.',$locale === 'en' ? 'Orionids' : 'Orionides',              $locale === 'en' ? '~20 meteors/h (Halley debris)' : '~20 météores/h (débris Halley)'],
                ['17–18 nov.',$locale === 'en' ? 'Leonids' : 'Léonides',               $locale === 'en' ? '~15 meteors/h (storms every 33 yrs)' : '~15 météores/h (tempêtes tous les 33 ans)'],
                ['13–14 déc.',$locale === 'en' ? 'Geminids ★' : 'Géminides ★',          $locale === 'en' ? '~120 meteors/h — richest shower' : '~120 météores/h — la plus riche'],
                ['22–23 déc.',$locale === 'en' ? 'Ursids' : 'Ursides',                 $locale === 'en' ? '~10 meteors/h' : '~10 météores/h'],
            ];
            @endphp
            @foreach($meteors as [$date, $name, $note])
            <div class="ot-phenomenon-item">
                <span class="ot-phenomenon-date">{{ $date }}</span>
                <span class="ot-phenomenon-name">{{ $name }}</span>
                <span class="ot-phenomenon-note">{{ $note }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Solstices & equinoxes --}}
    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Solstices & equinoxes' : 'Solstices & équinoxes' }}</div>
        <div class="ot-phenomenon-list">
            @php
            $seasons = [
                ['~20 mar.', $locale === 'en' ? 'Spring equinox' : 'Équinoxe de printemps',    $locale === 'en' ? 'Day = Night' : 'Jour = Nuit'],
                ['~21 jun.', $locale === 'en' ? 'Summer solstice' : 'Solstice d\'été',          $locale === 'en' ? 'Longest day' : 'Jour le plus long'],
                ['~23 sep.', $locale === 'en' ? 'Autumn equinox' : 'Équinoxe d\'automne',       $locale === 'en' ? 'Day = Night' : 'Jour = Nuit'],
                ['~21 déc.', $locale === 'en' ? 'Winter solstice' : 'Solstice d\'hiver',        $locale === 'en' ? 'Shortest day' : 'Jour le plus court'],
            ];
            @endphp
            @foreach($seasons as [$date, $name, $note])
            <div class="ot-phenomenon-item">
                <span class="ot-phenomenon-date">{{ $date }}</span>
                <span class="ot-phenomenon-name">{{ $name }}</span>
                <span class="ot-phenomenon-note">{{ $note }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Eclipses --}}
    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Eclipses' : 'Éclipses' }}</div>
        <div class="ot-text">
            <p>{{ $locale === 'en'
                ? 'Unlike meteor showers, eclipses are not annual — they depend on the precise alignment of the Sun, Moon and Earth. Two to five solar eclipses and up to three lunar eclipses can occur each year, but total solar eclipses are rare events visible from a narrow path on Earth.'
                : 'Contrairement aux pluies de météores, les éclipses ne sont pas annuelles — elles dépendent de l\'alignement précis Soleil–Lune–Terre. Il peut y avoir 2 à 5 éclipses solaires et jusqu\'à 3 éclipses lunaires par an, mais les éclipses solaires totales sont des événements rares visibles depuis un couloir étroit.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'A lunar eclipse occurs when Earth passes between the Sun and the Moon. A solar eclipse occurs when the Moon passes between the Sun and Earth. Total solar eclipses are among the most spectacular events visible from the ground — day turns to night in seconds and the solar corona becomes visible to the naked eye.'
                : 'Une éclipse lunaire se produit quand la Terre passe entre le Soleil et la Lune. Une éclipse solaire se produit quand la Lune passe entre le Soleil et la Terre. Les éclipses solaires totales sont parmi les événements les plus spectaculaires visibles depuis la Terre — le jour devient nuit en quelques secondes et la couronne solaire devient visible à l\'œil nu.' }}
            </p>
        </div>
    </div>

    {{-- Oppositions --}}
    <div class="ot-section">
        <div class="ot-section-title">{{ $locale === 'en' ? 'Planet oppositions' : 'Oppositions planétaires' }}</div>
        <div class="ot-text">
            <p>{{ $locale === 'en'
                ? 'A planet is in opposition when it is on the opposite side of Earth from the Sun — it rises at sunset, is visible all night and reaches its maximum brightness. Gas giants (Jupiter, Saturn) have oppositions roughly once a year. Mars\'s opposition repeats every 26 months, with a close approach every 15–17 years.'
                : 'Une planète est en opposition quand elle se trouve du côté opposé à la Terre par rapport au Soleil — elle se lève au coucher du soleil, est visible toute la nuit et atteint sa luminosité maximale. Les géantes gazeuses (Jupiter, Saturne) ont des oppositions environ une fois par an. L\'opposition de Mars se répète tous les 26 mois, avec un grand rapprochement tous les 15–17 ans.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'During opposition, even a small telescope reveals Jupiter\'s cloud bands and its four Galilean moons, Saturn\'s rings, or the polar ice caps of Mars. These are the best windows for planetary observation.'
                : 'Lors d\'une opposition, même un petit télescope révèle les bandes nuageuses de Jupiter et ses quatre lunes galiléennes, les anneaux de Saturne, ou les calottes polaires de Mars. Ce sont les meilleures fenêtres pour l\'observation planétaire.' }}
            </p>
        </div>
    </div>

</div>
@endsection
