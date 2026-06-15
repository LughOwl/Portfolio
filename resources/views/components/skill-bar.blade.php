@props(['nom', 'niveau', 'couleur'])

<div {{ $attributes->merge(['class' => 'skill-item']) }}>
    <div class="skill-info">
        <span class="skill-name">{{ $nom }}</span>
        <span class="skill-pct">{{ $niveau }}%</span>
    </div>
    <div class="skill-bar-bg">
        <div class="skill-bar-fill {{ $couleur }}" data-width="{{ $niveau }}%"></div>
    </div>
</div>
