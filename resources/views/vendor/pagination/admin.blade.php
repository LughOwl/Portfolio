@if ($paginator->hasPages())
<nav style="display:flex; align-items:center; gap:6px; flex-wrap:wrap; margin-top:16px;" aria-label="Pagination">
    @if ($paginator->onFirstPage())
        <span class="btn-admin btn-outline btn-sm" style="opacity:.4; cursor:default;">‹ Précédent</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="btn-admin btn-outline btn-sm">‹ Précédent</a>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <span style="color:var(--tx-3); padding:0 4px;">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="btn-admin btn-save btn-sm" style="cursor:default; min-width:34px; justify-content:center;">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="btn-admin btn-outline btn-sm" style="min-width:34px; justify-content:center;">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="btn-admin btn-outline btn-sm">Suivant ›</a>
    @else
        <span class="btn-admin btn-outline btn-sm" style="opacity:.4; cursor:default;">Suivant ›</span>
    @endif

    <span style="margin-left:8px; font-size:0.8em; color:var(--tx-3); font-family:'JetBrains Mono',monospace;">
        {{ $paginator->firstItem() }}–{{ $paginator->lastItem() }} / {{ $paginator->total() }}
    </span>
</nav>
@endif
