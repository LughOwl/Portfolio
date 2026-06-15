@extends('layouts.portfolio')

@section('title', __('sites.page_title'))
@section('meta_description', __('sites.meta_desc'))

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> {{ __('sites.title') }}</h1>
        <p class="page-subtitle">{{ __('sites.subtitle') }}</p>
    </div>

    <div class="projects-grid">
        @foreach($projets as $p)
            <x-project-card
                :nom="$p['nom']"
                :sujet="$p['sujet']"
                :desc="$p['desc']"
                :logo="$p['logo']"
                :color="$p['color']"
                :route="$p['route']"
                :etat="$p['etat']"
            />
        @endforeach
    </div>
</div>
@endsection
