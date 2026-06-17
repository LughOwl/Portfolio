@extends('layouts.zeus-bug')
@section('title', $locale === 'en' ? 'Origins — Zeus-Bug' : 'Origines — Zeus-Bug')

@section('content')
<div class="zb-page-hero">
    <div class="zb-page-cat">{{ $locale === 'en' ? 'About' : 'À propos' }}</div>
    <h1 class="zb-page-title">{{ $locale === 'en' ? 'Origins' : 'Origines' }}</h1>
</div>
<div class="zb-content">
    <div class="zb-section">
        <div class="zb-text">
            <p>{{ $locale === 'en'
                ? 'Zeus-Bug is a technical blog dedicated to programming projects, system configuration, and everything I build as a computer science student.'
                : 'Zeus-Bug est un blog technique dédié aux projets de programmation, à la configuration de systèmes, et à tout ce que je construis en tant qu\'étudiant en informatique.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'The name combines Zeus — king of the gods, symbol of power and creation — and Bug, the inevitable companion of every developer. It\'s a nod to the humility required in programming: even the most ambitious projects come with their share of bugs to fix.'
                : 'Le nom combine Zeus — roi des dieux, symbole de puissance et de création — et Bug, le compagnon inévitable de tout développeur. C\'est un clin d\'œil à l\'humilité nécessaire en programmation : même les projets les plus ambitieux ont leur lot de bugs à corriger.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'Each article documents a project from start to finish: the objective, the technologies chosen, the main challenges, and what I learned along the way.'
                : 'Chaque article documente un projet de A à Z : l\'objectif, les technologies choisies, les défis rencontrés, et ce que j\'en ai appris.' }}
            </p>
        </div>
    </div>
</div>
@endsection
