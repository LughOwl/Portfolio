@if ($paginator->hasPages())
<nav class="pagination" aria-label="Pagination">
    @if ($paginator->onFirstPage())
        <span class="pagination-btn pagination-disabled">‹ Précédent</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="pagination-btn">‹ Précédent</a>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="pagination-btn pagination-dots">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="pagination-btn pagination-active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="pagination-btn">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pagination-btn">Suivant ›</a>
    @else
        <span class="pagination-btn pagination-disabled">Suivant ›</span>
    @endif
</nav>
@endif
