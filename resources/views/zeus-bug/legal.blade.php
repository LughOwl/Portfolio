@extends('layouts.zeus-bug')
@section('title', $locale === 'en' ? 'Legal Notice — Zeus-Bug' : 'Mentions légales — Zeus-Bug')

@section('content')
<div class="zb-page-hero">
    <div class="zb-page-cat">{{ $locale === 'en' ? 'Legal' : 'Légal' }}</div>
    <h1 class="zb-page-title">{{ $locale === 'en' ? 'Legal Notice' : 'Mentions légales' }}</h1>
</div>
<div class="zb-content">
    <div class="zb-section">
        <div class="zb-text">
            <p><strong>{{ $locale === 'en' ? 'Publisher' : 'Éditeur' }}</strong> : Nicolas BISAGA</p>
            <p><strong>{{ $locale === 'en' ? 'Contact' : 'Contact' }}</strong> : nicola.bisaga@gmail.com</p>
            <p>{{ $locale === 'en'
                ? 'This site is a personal project intended for educational and portfolio purposes. All content is created by Nicolas BISAGA unless otherwise stated.'
                : 'Ce site est un projet personnel à but éducatif et de portfolio. Tout le contenu est créé par Nicolas BISAGA sauf indication contraire.' }}
            </p>
        </div>
    </div>
</div>
@endsection
