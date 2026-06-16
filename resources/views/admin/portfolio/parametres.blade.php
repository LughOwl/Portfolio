@extends('layouts.admin')
@section('title', 'Paramètres globaux')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Paramètres globaux</div>
<p class="admin-page-sub">$ edit global.json — Liens sociaux et statut de disponibilité</p>

@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

<form method="POST" action="{{ route('admin.portfolio.parametres.save') }}" class="admin-form-card" style="margin-top:24px;">
    @csrf

    <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.75em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px;">
        // Liens sociaux
    </div>

    <div class="form-group">
        <label>GitHub URL</label>
        <input type="url" name="github_url" value="{{ old('github_url', $p['github_url']) }}" required>
        @error('github_url')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label>LinkedIn URL</label>
        <input type="url" name="linkedin_url" value="{{ old('linkedin_url', $p['linkedin_url']) }}" required>
        @error('linkedin_url')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label>TryHackMe URL</label>
        <input type="url" name="tryhackme_url" value="{{ old('tryhackme_url', $p['tryhackme_url']) }}" required>
        @error('tryhackme_url')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <hr style="border: none; border-top: 1px solid var(--border); margin: 28px 0;">

    <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.75em; color: var(--accent-green); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px;">
        // Statut de disponibilité (page Contact)
    </div>

    <div class="form-group" style="flex-direction: row; align-items: center; gap: 12px;">
        <input type="checkbox" name="contact_ouvert" id="contact_ouvert" value="1"
            {{ old('contact_ouvert', $p['contact_ouvert']) === '1' ? 'checked' : '' }}
            style="width: 18px; height: 18px; accent-color: var(--accent-green); cursor: pointer; flex-shrink: 0;">
        <label for="contact_ouvert" style="margin: 0; cursor: pointer;">Disponible aux opportunités</label>
    </div>

    <div class="form-group">
        <label>Message de statut — Français</label>
        <textarea name="contact_statut_fr" rows="3" required>{{ old('contact_statut_fr', $p['contact_statut_fr']) }}</textarea>
        @error('contact_statut_fr')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label>Message de statut — English</label>
        <textarea name="contact_statut_en" rows="3" required>{{ old('contact_statut_en', $p['contact_statut_en']) }}</textarea>
        @error('contact_statut_en')<div class="form-error">{{ $message }}</div>@enderror
    </div>

    <button type="submit" class="btn-admin btn-save">Enregistrer</button>
</form>
@endsection
