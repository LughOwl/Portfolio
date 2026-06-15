@extends('layouts.portfolio')

@section('title', 'Experiences — Nicolas BISAGA')
@section('meta_description', 'Professional experience of Nicolas BISAGA: student jobs, administrative contract, volunteering.')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Experiences</h1>
        <p class="page-subtitle">$ git log --oneline career.txt — Most recent first</p>
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
@endsection
