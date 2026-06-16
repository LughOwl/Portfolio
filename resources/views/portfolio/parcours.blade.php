@extends('layouts.portfolio')

@section('title', __('parcours.page_title'))
@section('meta_description', __('parcours.meta_desc'))

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> {{ __('parcours.title') }}</h1>
        <p class="page-subtitle">{{ __('parcours.subtitle') }}</p>
    </div>

    {{-- Formations --}}
    <div class="parcours-section">
        <div class="parcours-section-header">
            <span class="prefix">//</span> {{ __('parcours.formations_title') }}
        </div>
        <div class="timeline" style="margin-bottom: 40px;">
            @foreach($formations as $f)
                <x-timeline-item
                    :periode="$f['periode']"
                    :titre="$f['titre']"
                    :org="$f['org']"
                    :desc="$f['desc']"
                    :dot="$f['dot']"
                    :tags="$f['tags'] ?? []"
                />
            @endforeach
        </div>

        <div class="cyber-card" style="margin-bottom: 16px; max-width: 700px;">
            <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 14px;">
                <div style="font-family: 'JetBrains Mono', monospace; font-size: 1.1em; color: var(--accent-green);">🔐 TryHackMe</div>
                <span class="badge badge-green">{{ __('parcours.thm_badge') }}</span>
            </div>
            <p style="color: var(--text-secondary); font-size: 0.9em; line-height: 1.7; margin-bottom: 16px;">{{ __('parcours.thm_desc') }}</p>
            <a href="{{ $settings['tryhackme_url'] }}" class="btn btn-outline" style="font-size: 0.85em;">{{ __('parcours.thm_link') }}</a>
        </div>

        <div class="skills-section-title">{{ __('parcours.certs_title') }}</div>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 16px; margin-bottom: 56px;">
            @foreach($certifications as $cert)
            <div class="cyber-card" style="padding: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                    <span style="font-family: 'JetBrains Mono', monospace; font-weight: 700; color: var(--text-primary);">{{ $cert['nom'] }}</span>
                    <span class="badge {{ $cert['couleur'] }}" style="font-size: 0.7em;">{{ __('parcours.cert_badge') }}</span>
                </div>
                <p style="color: var(--text-secondary); font-size: 0.84em;">{{ $cert['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Expériences --}}
    <div class="parcours-section">
        <div class="parcours-section-header">
            <span class="prefix">//</span> {{ __('parcours.experiences_title') }}
        </div>
        <div class="timeline" style="padding-bottom: 60px;">
            @foreach($experiences as $e)
                <x-timeline-item
                    :periode="$e['periode']"
                    :titre="$e['titre']"
                    :org="$e['org']"
                    :desc="$e['desc']"
                    :dot="$e['dot']"
                    :tags="$e['tags'] ?? []"
                />
            @endforeach
        </div>
    </div>

</div>
@endsection
