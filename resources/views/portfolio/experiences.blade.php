@extends('layouts.portfolio')

@section('title', __('experiences.page_title'))
@section('meta_description', __('experiences.meta_desc'))

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> {{ __('experiences.title') }}</h1>
        <p class="page-subtitle">{{ __('experiences.subtitle') }}</p>
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
