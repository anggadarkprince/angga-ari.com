@if ($paginator->hasPages())
    <div class="d-flex justify-content-between mt-5 w-100">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="text-muted">
                @lang('pagination.previous')
                @isset($title)
                    <span class="d-none d-sm-inline-block">Posts</span>
                @endif
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                @lang('pagination.previous')
                @isset($title)
                    <span class="d-none d-sm-inline-block">Posts</span>
                @endif
            </a>
        @endif

        <span class="small text-muted p-1">
            Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
        </span>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                @lang('pagination.next')
                @isset($title)
                    <span class="d-none d-sm-inline-block">Posts</span>
                @endif
            </a>
        @else
            <span class="text-muted">
                @lang('pagination.next')
                @isset($title)
                    <span class="d-none d-sm-inline-block">Posts</span>
                @endif
            </span>
        @endif
    </div>
@endif
