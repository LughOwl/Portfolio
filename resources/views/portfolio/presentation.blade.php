@extends('layouts.portfolio')

@section('title', __('presentation.page_title'))
@section('meta_description', __('presentation.meta_desc'))

@section('content')
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <div class="hero-prefix">// root@portfolio:~$</div>
        <h1 class="hero-name">Nicolas <span>BISAGA</span></h1>
        <div class="hero-typewriter">
            <span id="typewriter-text"></span><span class="cursor"></span>
        </div>
        <p class="hero-subtitle">{{ $heroData['subtitle'] ?? '' }}</p>
        <div class="hero-availability">{{ $heroData['availability'] ?? '' }}</div>
        <div class="hero-cta">
            <a href="{{ route(__('routes.sites')) }}" class="btn btn-primary">{{ __('presentation.cta_projects') }}</a>
            <a href="{{ route(__('routes.contact')) }}" class="btn btn-outline">{{ __('presentation.cta_contact') }}</a>
            <a href="{{ route(__('routes.profil')) }}" class="btn btn-outline">{{ __('presentation.cta_profil') }}</a>
        </div>
    </div>
</section>
@if(!empty($heroData['typewriter_phrases']))
<script>window.typewriterPhrases = @json($heroData['typewriter_phrases']);</script>
@endif
@endsection
