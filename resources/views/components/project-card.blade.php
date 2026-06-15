@props(['nom', 'sujet', 'desc', 'logo', 'route', 'etat', 'color'])

<a href="{{ route($route) }}" class="project-card" style="--project-color: {{ $color }}">
    <div class="project-card-left">
        <div class="project-logo">
            <img src="{{ $logo }}" alt="{{ $nom }}"
                 onerror="this.parentNode.innerHTML='<span class=\'logo-fallback\'>'+(this.alt.substring(0,2))+'</span>'">
        </div>
        <div class="project-meta">
            <div class="project-title">{{ $nom }}</div>
            <div class="project-topic">{{ $sujet }}</div>
        </div>
    </div>
    <div class="project-desc">{{ $desc }}</div>
    <div class="project-card-right">
        <span class="project-status {{ $etat === 'ligne' ? 'online' : 'building' }}">
            {{ $etat === 'ligne' ? 'En ligne' : 'En construction' }}
        </span>
    </div>
</a>
