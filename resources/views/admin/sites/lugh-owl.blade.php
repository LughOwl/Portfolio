@extends('layouts.admin')
@section('title', $siteLabel)
@section('content')
<div class="admin-page-title">
    <span class="prefix" style="color: {{ $siteColor }};">//</span> {{ $siteLabel }}
</div>
<p class="admin-page-sub">$ manage sites/{{ $site }}</p>
<div class="admin-form-card" style="margin-top: 24px; border-top: 3px solid {{ $siteColor }};">
    <p style="color: #555; font-size: 0.82em; text-align: center; padding: 40px 0;">
        Gestion de ce site — à implémenter
    </p>
</div>
@endsection
