{{-- Partial partagé : formulaire projet --}}
<div class="form-grid-2">
    <div class="form-group">
        <label>Nom du projet</label>
        <input type="text" name="nom" value="{{ old('nom', $projet?->nom) }}" placeholder="Janus-Bee" required>
    </div>
    <div class="form-group">
        <label>Sujet / Thématique</label>
        <input type="text" name="sujet" value="{{ old('sujet', $projet?->sujet) }}" placeholder="Œuvres audiovisuelles" required>
    </div>
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="desc" rows="3" required>{{ old('desc', $projet?->desc) }}</textarea>
</div>
<div class="form-grid-3">
    <div class="form-group">
        <label>Chemin du logo</label>
        <input type="text" name="logo" value="{{ old('logo', $projet?->logo) }}" placeholder="/assets/Janus-Bee/1.logo.png" required>
    </div>
    <div class="form-group">
        <label>Couleur (hex)</label>
        <div style="display:flex; gap:8px; align-items:center;">
            <input type="color" name="color_picker"
                   value="{{ old('color', $projet?->color ?? '#00ff88') }}"
                   onchange="document.getElementById('colorInput').value=this.value"
                   style="width:40px; height:40px; padding:2px; flex-shrink:0; border-radius:7px; border:1px solid var(--bd); cursor:pointer; background:var(--bg);">
            <input type="text" id="colorInput" name="color"
                   value="{{ old('color', $projet?->color ?? '#00ff88') }}"
                   placeholder="#ff5757" required style="flex:1;">
        </div>
    </div>
    <div class="form-group">
        <label>Statut</label>
        <select name="etat">
            <option value="construction" {{ old('etat', $projet?->etat) === 'construction' ? 'selected' : '' }}>En construction</option>
            <option value="ligne"        {{ old('etat', $projet?->etat) === 'ligne'        ? 'selected' : '' }}>En ligne</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label>Nom de la route Laravel</label>
    <input type="text" name="route" value="{{ old('route', $projet?->route) }}" placeholder="fr.janus-bee.accueil" required>
</div>
