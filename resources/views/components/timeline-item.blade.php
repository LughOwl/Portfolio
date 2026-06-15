@props(['periode', 'titre', 'org', 'desc', 'tags' => [], 'dot' => ''])

<div class="timeline-item">
    <div class="timeline-dot {{ $dot }}"></div>
    <div class="timeline-date {{ $dot === 'future' ? 'future' : '' }}">{{ $periode }}</div>
    <div class="timeline-card">
        <div class="timeline-title">{{ $titre }}</div>
        <div class="timeline-org">{{ $org }}</div>
        <div class="timeline-desc">{{ $desc }}</div>
        <div class="timeline-tags">
            @foreach($tags as $tag)
                <span class="badge badge-{{ $tag['couleur'] }}">{{ $tag['label'] }}</span>
            @endforeach
        </div>
    </div>
</div>
