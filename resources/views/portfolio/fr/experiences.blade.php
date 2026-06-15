@extends('layouts.portfolio')

@section('title', 'Expériences — Nicolas BISAGA')
@section('meta_description', 'Expériences professionnelles de Nicolas BISAGA : emplois étudiants, CDD administratif, bénévolat.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Expériences</h1>
        <p class="page-subtitle">$ git log --oneline career.txt — Du plus récent au plus ancien</p>
    </div>

    <div class="timeline" style="padding-bottom: 60px;">
        @foreach($experiences as $e)
            <x-timeline-item
                :periode="$e['periode']"
                :titre="$e['titre']"
                :org="$e['org']"
                :desc="$e['desc']"
                :dot="$e['dot']"
                :tags="$e['tags']"
            />
        @endforeach
    </div>
</div>
@endsection
