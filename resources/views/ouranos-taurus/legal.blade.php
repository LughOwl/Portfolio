@extends('layouts.ouranos-taurus')
@section('title', $locale === 'en' ? 'Legal Notice — Ouranos-Taurus' : 'Mentions légales — Ouranos-Taurus')

@section('content')
<div class="ot-page-hero">
    <div class="ot-page-cat">{{ $locale === 'en' ? 'Legal' : 'Légal' }}</div>
    <h1 class="ot-page-title">{{ $locale === 'en' ? 'Legal Notice' : 'Mentions légales' }}</h1>
</div>
<div class="ot-content">
    <div class="ot-section">
        <div class="ot-text">
            <p><strong>{{ $locale === 'en' ? 'Publisher' : 'Éditeur' }} :</strong> Nicolas BISAGA</p>
            <p><strong>{{ $locale === 'en' ? 'Hosting' : 'Hébergement' }} :</strong> {{ $locale === 'en' ? 'Personal server' : 'Serveur personnel' }}</p>
            <p>{{ $locale === 'en'
                ? 'The astronomical data presented on this site is sourced from public databases (NASA, IAU, JPL) and is provided for informational purposes only. No guarantee is made as to its accuracy or completeness.'
                : 'Les données astronomiques présentées sur ce site sont issues de bases de données publiques (NASA, UAI, JPL) et sont fournies à titre informatif uniquement. Aucune garantie n\'est donnée quant à leur exactitude ou exhaustivité.' }}
            </p>
        </div>
    </div>
</div>
@endsection
