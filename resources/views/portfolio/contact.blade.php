@extends('layouts.portfolio')

@section('title', __('contact.page_title'))
@section('meta_description', __('contact.meta_desc'))

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Contact</h1>
        <p class="page-subtitle">{{ __('contact.subtitle') }}</p>
    </div>

    <div class="contact-layout">
        <div>
            <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 16px;">
                {{ __('contact.links_title') }}
            </div>

            <div class="contact-links">
                <a href="{{ $settings['github_url'] }}" class="contact-link-item">
                    <div class="ci-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                    </div>
                    <div>
                        <span class="ci-label">GitHub</span>
                        <span class="ci-value">{{ ltrim(parse_url($settings['github_url'], PHP_URL_HOST) . parse_url($settings['github_url'], PHP_URL_PATH), '/') }}</span>
                    </div>
                </a>

                <a href="{{ $settings['tryhackme_url'] }}" class="contact-link-item">
                    <div class="ci-icon" style="background: rgba(0, 212, 255, 0.08); color: var(--accent-cyan);">🔐</div>
                    <div>
                        <span class="ci-label">TryHackMe</span>
                        <span class="ci-value">{{ ltrim(parse_url($settings['tryhackme_url'], PHP_URL_HOST) . parse_url($settings['tryhackme_url'], PHP_URL_PATH), '/') }}</span>
                    </div>
                </a>

                <a href="{{ $settings['linkedin_url'] }}" class="contact-link-item">
                    <div class="ci-icon" style="background: rgba(10, 102, 194, 0.12); color: #0a66c2;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </div>
                    <div>
                        <span class="ci-label">LinkedIn</span>
                        <span class="ci-value">{{ ltrim(parse_url($settings['linkedin_url'], PHP_URL_HOST) . parse_url($settings['linkedin_url'], PHP_URL_PATH), '/') }}</span>
                    </div>
                </a>
            </div>

            @php
                $ouvert = $settings['contact_ouvert'] === '1';
                $statut = ($locale ?? 'fr') === 'en' ? $settings['contact_statut_en'] : $settings['contact_statut_fr'];
                $borderColor = $ouvert ? 'rgba(0,255,136,.2)' : 'rgba(255,80,80,.2)';
                $bgColor     = $ouvert ? 'rgba(0,255,136,.05)' : 'rgba(255,80,80,.05)';
                $labelColor  = $ouvert ? 'var(--accent-green)' : '#ff5050';
            @endphp
            <div style="margin-top: 24px; padding: 18px; background: {{ $bgColor }}; border: 1px solid {{ $borderColor }}; border-radius: 10px;">
                <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.75em; color: {{ $labelColor }}; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.08em;">
                    {{ __('contact.status_title') }}
                </div>
                <p style="color: var(--text-secondary); font-size: 0.87em; line-height: 1.6;">{{ $statut }}</p>
            </div>
        </div>

        <div class="contact-form-card">
            <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px;">
                {{ __('contact.form_title') }}
            </div>

            @if(session('success'))
            <div class="alert alert-success">{{ __('contact.success') }}</div>
            @endif

            @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route(__('routes.contact_send')) }}">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label for="nom">{{ __('contact.label_name') }} <span class="required">*</span></label>
                        <input type="text" id="nom" name="nom"
                            value="{{ old('nom') }}" placeholder="{{ __('contact.placeholder_name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email"
                            value="{{ old('email') }}" placeholder="email@example.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sujet">{{ __('contact.label_subject') }} <span class="required">*</span></label>
                    <input type="text" id="sujet" name="sujet"
                        value="{{ old('sujet') }}" placeholder="{{ __('contact.placeholder_subject') }}" required>
                </div>
                <div class="form-group">
                    <label for="message">Message <span class="required">*</span></label>
                    <textarea id="message" name="message" required
                        placeholder="{{ __('contact.placeholder_message') }}">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                    {{ __('contact.btn_send') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
