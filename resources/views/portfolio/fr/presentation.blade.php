@extends('layouts.portfolio')

@section('title', 'Nicolas BISAGA — Portfolio Cybersécurité')
@section('meta_description', 'Portfolio de Nicolas BISAGA, futur analyste SOC et architecte cybersécurité. Master Cybersécurité — UFR MIM Metz, septembre 2026.')

@section('content')
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <div class="hero-prefix">// root@portfolio:~$</div>
        <h1 class="hero-name">Nicolas <span>BISAGA</span></h1>
        <div class="hero-typewriter">
            <span id="typewriter-text"></span><span class="cursor"></span>
        </div>
        <p class="hero-subtitle">{{ $heroData['subtitle'] ?? 'Master Cybersécurité — UFR MIM, Metz | Nationalités française & luxembourgeoise' }}</p>
        <div class="hero-availability">
            {{ $heroData['availability'] ?? 'Admis en Master Cybersécurité · UFR MIM Metz · Sept. 2026' }}
        </div>
        <div class="hero-cta">
            <a href="{{ route('fr.sites') }}" class="btn btn-primary">Voir mes projets</a>
            <a href="{{ route('fr.contact') }}" class="btn btn-outline">Me contacter</a>
            <a href="{{ route('fr.competences') }}" class="btn btn-outline">Mes compétences</a>
        </div>
    </div>
</section>
@if(!empty($heroData['typewriter_phrases']))
<script>window.typewriterPhrases = @json($heroData['typewriter_phrases']);</script>
@endif
@endsection
