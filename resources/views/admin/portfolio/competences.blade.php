@extends('layouts.admin')
@section('title', 'Compétences')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Compétences</div>
<p class="admin-page-sub">$ edit portfolio/competences</p>

@include('admin.portfolio._locale-tabs')
@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif

<form method="POST" action="{{ route('admin.portfolio.competences.save') }}" id="compForm">
    @csrf
    <input type="hidden" name="locale" value="{{ $locale }}">

    <div id="categoriesContainer">
    @foreach($categories as $ci => $cat)
        @php $type = $cat['type'] ?? 'bars'; @endphp
        <div class="comp-category" data-ci="{{ $ci }}">
            <div class="comp-cat-header">
                <div class="comp-cat-meta">
                    <input type="hidden" name="cats[{{ $ci }}][id]" value="{{ $cat['id'] }}">
                    <input type="hidden" name="cats[{{ $ci }}][type]" value="{{ $type }}">
                    @if(!empty($cat['highlight']))
                    <input type="hidden" name="cats[{{ $ci }}][highlight]" value="1">
                    @endif
                    <span class="comp-cat-id">{{ $cat['id'] }}</span>
                    <span class="comp-cat-type-badge type-{{ $type }}">{{ $type }}</span>
                    @if(!empty($cat['highlight']))<span class="comp-cat-type-badge" style="background:rgba(255,200,0,.12); color:#ffc800; border-color:rgba(255,200,0,.3);">★ highlight</span>@endif
                </div>
                <input type="text" name="cats[{{ $ci }}][titre]" value="{{ $cat['titre'] ?? '' }}"
                    class="comp-cat-title-input" placeholder="Titre de la catégorie">
                <button type="button" class="btn-admin btn-outline btn-sm comp-toggle"
                    onclick="toggleCat(this)">▾ Déplier</button>
            </div>

            <div class="comp-cat-body" style="display:none;">

            @if($type === 'two-col')
                {{-- Two-col: deux colonnes côte à côte --}}
                <div class="comp-two-col">
                @foreach($cat['cols'] as $coli => $col)
                    @php $colType = $col['type'] ?? 'tags'; @endphp
                    <div class="comp-col-block">
                        <div class="comp-col-header">
                            <input type="hidden" name="cats[{{ $ci }}][cols][{{ $coli }}][type]" value="{{ $colType }}">
                            <span class="comp-cat-type-badge type-{{ $colType }}">{{ $colType }}</span>
                            <input type="text" name="cats[{{ $ci }}][cols][{{ $coli }}][titre]"
                                value="{{ $col['titre'] ?? '' }}" class="comp-col-title-input" placeholder="Titre">
                        </div>

                        @if($colType === 'tags')
                            <div class="comp-tags-list" id="tags-col-{{ $ci }}-{{ $coli }}">
                            @foreach($col['tags'] ?? [] as $ti => $tag)
                                <div class="comp-tag-row">
                                    <input type="text" name="cats[{{ $ci }}][cols][{{ $coli }}][tags][{{ $ti }}][label]"
                                        value="{{ $tag['label'] }}" placeholder="Label">
                                    <select name="cats[{{ $ci }}][cols][{{ $coli }}][tags][{{ $ti }}][couleur]">
                                        @foreach(['green','blue','cyan','purple','orange','gray'] as $c)
                                        <option value="{{ $c }}" {{ ($tag['couleur'] ?? 'green') === $c ? 'selected' : '' }}>{{ $c }}</option>
                                        @endforeach
                                    </select>
                                    <button type="button" class="btn-admin btn-delete btn-icon"
                                        onclick="this.closest('.comp-tag-row').remove()">✕</button>
                                </div>
                            @endforeach
                            </div>
                            <button type="button" class="btn-admin btn-outline btn-sm"
                                onclick="addTag('tags-col-{{ $ci }}-{{ $coli }}', 'cats[{{ $ci }}][cols][{{ $coli }}][tags]')">+ Tag</button>

                        @else {{-- bars --}}
                            <div class="comp-items-list" id="items-col-{{ $ci }}-{{ $coli }}">
                            @foreach($col['items'] ?? [] as $ii => $item)
                                <div class="comp-item-row">
                                    <input type="text" name="cats[{{ $ci }}][cols][{{ $coli }}][items][{{ $ii }}][nom]"
                                        value="{{ $item['nom'] }}" placeholder="Compétence" class="comp-item-nom">
                                    <div class="comp-item-niveau">
                                        <input type="range" min="0" max="100" value="{{ $item['niveau'] ?? 50 }}"
                                            name="cats[{{ $ci }}][cols][{{ $coli }}][items][{{ $ii }}][niveau]"
                                            oninput="this.nextElementSibling.textContent=this.value+'%'">
                                        <span class="niveau-val">{{ $item['niveau'] ?? 50 }}%</span>
                                    </div>
                                    <select name="cats[{{ $ci }}][cols][{{ $coli }}][items][{{ $ii }}][couleur]">
                                        @foreach(['g'=>'Vert','b'=>'Bleu','p'=>'Violet','o'=>'Orange'] as $cv => $cl)
                                        <option value="{{ $cv }}" {{ ($item['couleur'] ?? 'g') === $cv ? 'selected' : '' }}>{{ $cl }}</option>
                                        @endforeach
                                    </select>
                                    <button type="button" class="btn-admin btn-delete btn-icon"
                                        onclick="this.closest('.comp-item-row').remove()">✕</button>
                                </div>
                            @endforeach
                            </div>
                            <button type="button" class="btn-admin btn-outline btn-sm"
                                onclick="addItem('items-col-{{ $ci }}-{{ $coli }}', 'cats[{{ $ci }}][cols][{{ $coli }}][items]')">+ Compétence</button>
                        @endif
                    </div>
                @endforeach
                </div>

            @else
                {{-- bars ou bars_and_tags --}}
                <div class="section-label" style="margin-bottom:10px; font-size:.72em;">Barres de niveau</div>
                <div class="comp-items-list" id="items-{{ $ci }}">
                @foreach($cat['items'] ?? [] as $ii => $item)
                    <div class="comp-item-row">
                        <input type="text" name="cats[{{ $ci }}][items][{{ $ii }}][nom]"
                            value="{{ $item['nom'] }}" placeholder="Nom de la compétence" class="comp-item-nom">
                        <div class="comp-item-niveau">
                            <input type="range" min="0" max="100" value="{{ $item['niveau'] ?? 50 }}"
                                name="cats[{{ $ci }}][items][{{ $ii }}][niveau]"
                                oninput="this.nextElementSibling.textContent=this.value+'%'">
                            <span class="niveau-val">{{ $item['niveau'] ?? 50 }}%</span>
                        </div>
                        <select name="cats[{{ $ci }}][items][{{ $ii }}][couleur]">
                            @foreach(['g'=>'Vert','b'=>'Bleu','p'=>'Violet','o'=>'Orange'] as $cv => $cl)
                            <option value="{{ $cv }}" {{ ($item['couleur'] ?? 'g') === $cv ? 'selected' : '' }}>{{ $cl }}</option>
                            @endforeach
                        </select>
                        <button type="button" class="btn-admin btn-delete btn-icon"
                            onclick="this.closest('.comp-item-row').remove()">✕</button>
                    </div>
                @endforeach
                </div>
                <button type="button" class="btn-admin btn-outline btn-sm" style="margin-bottom:20px;"
                    onclick="addItem('items-{{ $ci }}', 'cats[{{ $ci }}][items]')">+ Compétence</button>

                @if($type === 'bars_and_tags')
                <div class="section-label" style="margin-bottom:10px; font-size:.72em;">Tags / Badges</div>
                <div class="comp-tags-list" id="tags-{{ $ci }}">
                @foreach($cat['tags'] ?? [] as $ti => $tag)
                    <div class="comp-tag-row">
                        <input type="text" name="cats[{{ $ci }}][tags][{{ $ti }}][label]"
                            value="{{ $tag['label'] }}" placeholder="Label du tag">
                        <select name="cats[{{ $ci }}][tags][{{ $ti }}][couleur]">
                            @foreach(['green','blue','cyan','purple','orange','gray'] as $c)
                            <option value="{{ $c }}" {{ ($tag['couleur'] ?? 'green') === $c ? 'selected' : '' }}>{{ $c }}</option>
                            @endforeach
                        </select>
                        <button type="button" class="btn-admin btn-delete btn-icon"
                            onclick="this.closest('.comp-tag-row').remove()">✕</button>
                    </div>
                @endforeach
                </div>
                <button type="button" class="btn-admin btn-outline btn-sm"
                    onclick="addTag('tags-{{ $ci }}', 'cats[{{ $ci }}][tags]')">+ Tag</button>
                @endif
            @endif

            </div>{{-- /comp-cat-body --}}
        </div>{{-- /comp-category --}}
    @endforeach
    </div>

    <div style="margin-top:24px; display:flex; gap:12px; align-items:center;">
        <button type="submit" class="btn-admin btn-save">Enregistrer toutes les compétences</button>
    </div>
</form>

<style>
.comp-category {
    background: var(--bg-card);
    border: 1px solid var(--bd);
    border-radius: 10px;
    margin-bottom: 12px;
    overflow: hidden;
}
.comp-cat-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 18px;
    background: rgba(255,255,255,.02);
    flex-wrap: wrap;
}
.comp-cat-meta {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-shrink: 0;
}
.comp-cat-id {
    font-family: 'JetBrains Mono', monospace;
    font-size: .78em;
    color: var(--tx-3);
}
.comp-cat-type-badge {
    font-size: .68em;
    padding: 2px 8px;
    border-radius: 4px;
    border: 1px solid;
    font-family: monospace;
}
.type-bars         { background:rgba(77,150,255,.12); color:#4d96ff; border-color:rgba(77,150,255,.3); }
.type-bars_and_tags{ background:rgba(0,255,136,.1);  color:#00ff88; border-color:rgba(0,255,136,.3); }
.type-tags         { background:rgba(180,120,255,.1); color:#b47cff; border-color:rgba(180,120,255,.3); }
.type-two-col      { background:rgba(255,152,0,.1);  color:#ff9800; border-color:rgba(255,152,0,.3); }
.comp-cat-title-input {
    flex: 1;
    min-width: 200px;
    background: var(--bg);
    border: 1px solid var(--bd);
    border-radius: 6px;
    color: var(--tx);
    padding: 7px 12px;
    font-size: .88em;
    font-weight: 600;
}
.comp-cat-body {
    padding: 18px;
    border-top: 1px solid var(--bd);
}
.comp-item-row {
    display: grid;
    grid-template-columns: 1fr 260px 110px 32px;
    gap: 10px;
    align-items: center;
    margin-bottom: 8px;
}
/* Dans un bloc two-col, l'espace est réduit : nom sur sa propre ligne */
.comp-col-block .comp-item-row {
    grid-template-columns: 1fr 32px;
    grid-template-rows: auto auto;
}
.comp-col-block .comp-item-nom {
    grid-column: 1;
    grid-row: 1;
}
.comp-col-block .comp-item-row > button {
    grid-column: 2;
    grid-row: 1;
}
.comp-col-block .comp-item-niveau {
    grid-column: 1;
    grid-row: 2;
}
.comp-col-block .comp-item-row > select {
    grid-column: 2;
    grid-row: 2;
}
.comp-item-nom { font-size: .86em; }
.comp-item-niveau {
    display: flex;
    align-items: center;
    gap: 8px;
}
.comp-item-niveau input[type=range] {
    flex: 1;
    accent-color: var(--accent-green);
    cursor: pointer;
}
.niveau-val {
    font-family: 'JetBrains Mono', monospace;
    font-size: .75em;
    color: var(--accent-green);
    min-width: 36px;
    text-align: right;
}
.comp-tag-row {
    display: grid;
    grid-template-columns: 1fr 120px 32px;
    gap: 8px;
    align-items: center;
    margin-bottom: 6px;
}
.comp-tags-list { margin-bottom: 10px; }
.comp-two-col {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
.comp-col-block {
    background: rgba(255,255,255,.02);
    border: 1px solid var(--bd);
    border-radius: 8px;
    padding: 14px;
}
.comp-col-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 14px;
}
.comp-col-title-input {
    flex: 1;
    background: var(--bg);
    border: 1px solid var(--bd);
    border-radius: 6px;
    color: var(--tx);
    padding: 5px 10px;
    font-size: .84em;
    font-weight: 600;
}
@media (max-width: 700px) {
    .comp-item-row { grid-template-columns: 1fr 32px; }
    .comp-item-niveau, .comp-item-row > select { display: none; }
    .comp-two-col { grid-template-columns: 1fr; }
}
</style>

<script>
function toggleCat(btn) {
    const body = btn.closest('.comp-category').querySelector('.comp-cat-body');
    const open = body.style.display !== 'none';
    body.style.display = open ? 'none' : 'block';
    btn.textContent = open ? '▾ Déplier' : '▴ Replier';
}

function addItem(containerId, prefix) {
    const container = document.getElementById(containerId);
    const idx = container.querySelectorAll('.comp-item-row').length;
    container.insertAdjacentHTML('beforeend', `
        <div class="comp-item-row">
            <input type="text" name="${prefix}[${idx}][nom]" placeholder="Nom de la compétence" class="comp-item-nom">
            <div class="comp-item-niveau">
                <input type="range" min="0" max="100" value="50" name="${prefix}[${idx}][niveau]"
                    oninput="this.nextElementSibling.textContent=this.value+'%'">
                <span class="niveau-val">50%</span>
            </div>
            <select name="${prefix}[${idx}][couleur]">
                <option value="g">Vert</option>
                <option value="b">Bleu</option>
                <option value="p">Violet</option>
                <option value="o">Orange</option>
            </select>
            <button type="button" class="btn-admin btn-delete btn-icon" onclick="this.closest('.comp-item-row').remove()">✕</button>
        </div>`);
}

function addTag(containerId, prefix) {
    const container = document.getElementById(containerId);
    const idx = container.querySelectorAll('.comp-tag-row').length;
    container.insertAdjacentHTML('beforeend', `
        <div class="comp-tag-row">
            <input type="text" name="${prefix}[${idx}][label]" placeholder="Label">
            <select name="${prefix}[${idx}][couleur]">
                <option value="green">green</option>
                <option value="blue">blue</option>
                <option value="cyan">cyan</option>
                <option value="purple">purple</option>
                <option value="orange">orange</option>
                <option value="gray">gray</option>
            </select>
            <button type="button" class="btn-admin btn-delete btn-icon" onclick="this.closest('.comp-tag-row').remove()">✕</button>
        </div>`);
}
</script>
@endsection
