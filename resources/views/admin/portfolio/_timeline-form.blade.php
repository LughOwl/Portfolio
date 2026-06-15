{{-- Partial partagé : formulaire formation/expérience --}}
<div class="form-grid-2">
    <div class="form-group">
        <label>Période</label>
        <input type="text" name="periode" value="{{ old('periode', $item?->periode) }}" placeholder="2023 → 2026" required>
    </div>
    <div class="form-group">
        <label>Type de point</label>
        <select name="dot">
            <option value=""       {{ old('dot', $item?->dot) === ''       ? 'selected' : '' }}>Actuel (vert)</option>
            <option value="blue"   {{ old('dot', $item?->dot) === 'blue'   ? 'selected' : '' }}>Validé (bleu)</option>
            <option value="future" {{ old('dot', $item?->dot) === 'future' ? 'selected' : '' }}>À venir (violet)</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label>Titre</label>
    <input type="text" name="titre" value="{{ old('titre', $item?->titre) }}" required>
</div>
<div class="form-group">
    <label>Établissement / Organisation</label>
    <input type="text" name="org" value="{{ old('org', $item?->org) }}" required>
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="desc" rows="3" required>{{ old('desc', $item?->desc) }}</textarea>
</div>

<div class="section-label" style="margin-bottom:10px;">// Badges</div>
<div id="tagsContainer">
    @foreach(old('tags', $item?->tags ?? []) as $t => $tag)
    <div class="tag-row">
        <input type="text" name="tags[{{ $t }}][label]" value="{{ $tag['label'] }}" placeholder="Label du badge">
        <select name="tags[{{ $t }}][couleur]">
            @foreach(['green','blue','cyan','purple','orange','gray'] as $c)
            <option value="{{ $c }}" {{ ($tag['couleur'] ?? '') === $c ? 'selected' : '' }}>{{ ucfirst($c) }}</option>
            @endforeach
        </select>
        <button type="button" class="btn-admin btn-delete btn-icon" onclick="this.closest('.tag-row').remove()">✕</button>
    </div>
    @endforeach
</div>
<button type="button" class="btn-admin btn-outline btn-sm" style="margin-bottom:24px;" onclick="addTag()">+ Badge</button>

<template id="tplTag">
<div class="tag-row">
    <input type="text" name="tags[IDX][label]" placeholder="Label du badge">
    <select name="tags[IDX][couleur]">
        <option value="green">Green</option><option value="blue">Blue</option>
        <option value="cyan">Cyan</option><option value="purple">Purple</option>
        <option value="orange">Orange</option><option value="gray">Gray</option>
    </select>
    <button type="button" class="btn-admin btn-delete btn-icon" onclick="this.closest('.tag-row').remove()">✕</button>
</div>
</template>
<script>
let tagIdx = document.querySelectorAll('.tag-row').length;
function addTag() {
    document.getElementById('tagsContainer').insertAdjacentHTML('beforeend',
        document.getElementById('tplTag').innerHTML.replaceAll('IDX', tagIdx++));
}
</script>
