@extends('layouts.admin')
@section('title', 'Compétences')
@section('content')

<div class="admin-page-title"><span class="prefix">//</span> Compétences</div>
<p class="admin-page-sub">$ edit portfolio/competences — Éditeur JSON (structure complexe)</p>

@if(session('success'))<div class="admin-alert success">✓ {{ session('success') }}</div>@endif
@if($errors->any())<div class="admin-alert error">{{ $errors->first('data') }}</div>@endif

<form method="POST" action="{{ route('admin.portfolio.competences.save') }}" style="margin-top:24px;">
    @csrf
    <div class="admin-form-card">
        <div class="section-label" style="margin-bottom:12px;">// Structure JSON des compétences</div>
        <div style="font-size:.75em; color:#555; margin-bottom:14px; line-height:1.8;">
            Chaque catégorie a un <code>type</code> : <code>bars</code>, <code>bars_and_tags</code> ou <code>two-col</code>.<br>
            Les items ont : <code>nom</code>, <code>niveau</code> (0-100), <code>couleur</code> (g/b/p/o).
        </div>
        <textarea name="data" rows="28" style="font-size:.8em; line-height:1.5;" spellcheck="false" id="jsonEditor">{{ old('data', $json) }}</textarea>
    </div>
    <div style="display:flex; gap:12px; margin-top:16px; align-items:center;">
        <button type="submit" class="btn-admin btn-save">Enregistrer</button>
        <button type="button" class="btn-admin btn-outline" onclick="formatJson()">Formater JSON</button>
        <span id="jsonStatus" style="font-size:.78em; color:#555;"></span>
    </div>
</form>

<script>
function formatJson() {
    const ta = document.getElementById('jsonEditor');
    const st = document.getElementById('jsonStatus');
    try {
        ta.value = JSON.stringify(JSON.parse(ta.value), null, 2);
        st.textContent = '✓ JSON valide'; st.style.color = '#00ff88';
    } catch(e) {
        st.textContent = '✗ ' + e.message; st.style.color = '#ff5757';
    }
}
document.getElementById('jsonEditor').addEventListener('input', () => {
    document.getElementById('jsonStatus').textContent = '';
});
</script>
@endsection
