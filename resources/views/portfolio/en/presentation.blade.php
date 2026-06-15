@extends('layouts.portfolio')

@section('title', 'Nicolas BISAGA — Cybersecurity Portfolio')
@section('meta_description', 'Portfolio of Nicolas BISAGA, future SOC Analyst and Cybersecurity Architect. Master in Cybersecurity — UFR MIM Metz, September 2026.')

@section('content')
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <div class="hero-prefix">// root@portfolio:~$</div>
        <h1 class="hero-name">Nicolas <span>BISAGA</span></h1>
        <div class="hero-typewriter">
            <span id="typewriter-text"></span><span class="cursor"></span>
        </div>
        <p class="hero-subtitle">
            Master in Cybersecurity — UFR MIM, Metz &nbsp;|&nbsp;
            French &amp; Luxembourgish nationalities
        </p>
        <div class="hero-availability">
            Admitted to Master's in Cybersecurity · UFR MIM Metz · Sept. 2026
        </div>
        <div class="hero-cta">
            <a href="{{ route('en.websites') }}" class="btn btn-primary">View my projects</a>
            <a href="{{ route('en.contact') }}" class="btn btn-outline">Contact me</a>
            <a href="{{ route('en.skills') }}" class="btn btn-outline">My skills</a>
        </div>
    </div>
</section>
@if(!empty($heroData['typewriter_phrases']))
<script>window.typewriterPhrases = @json($heroData['typewriter_phrases']);</script>
@endif
@endsection
