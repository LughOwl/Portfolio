@extends('layouts.zeus-bug')
@section('title', $locale === 'en' ? 'Sitemap — Zeus-Bug' : 'Plan du site — Zeus-Bug')

@section('content')
<div class="zb-page-hero">
    <div class="zb-page-cat">Navigation</div>
    <h1 class="zb-page-title">{{ $locale === 'en' ? 'Sitemap' : 'Plan du site' }}</h1>
</div>
<div class="zb-content">
    <div class="zb-section">
        <div class="zb-text">
            @php $pre = $locale === 'en' ? 'en' : 'fr'; @endphp
            <p><a href="{{ route($pre.'.zeus-bug.accueil') }}">{{ $locale === 'en' ? 'Articles' : 'Articles' }}</a></p>
            <p><a href="{{ route($pre.'.zeus-bug.origines') }}">{{ $locale === 'en' ? 'Origins' : 'Origines' }}</a></p>
            <p><a href="{{ route($pre.'.zeus-bug.legal') }}">{{ $locale === 'en' ? 'Legal Notice' : 'Mentions légales' }}</a></p>
        </div>
    </div>
</div>
@endsection
