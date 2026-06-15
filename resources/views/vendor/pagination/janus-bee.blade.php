@if ($paginator->hasPages())
<nav class="pagination" aria-label="Pagination">
    @if ($paginator->onFirstPage())
        <span class="pagination-btn pagination-nav pagination-disabled">‹ Précédent</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="pagination-btn pagination-nav">‹ Précédent</a>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="pagination-btn pagination-dots">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="pagination-btn pagination-active pagination-num">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="pagination-btn pagination-num">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    <span class="pagination-info">{{ $paginator->currentPage() }} / {{ $paginator->lastPage() }}</span>

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pagination-btn pagination-nav">Suivant ›</a>
    @else
        <span class="pagination-btn pagination-nav pagination-disabled">Suivant ›</span>
    @endif
</nav>
@endif
