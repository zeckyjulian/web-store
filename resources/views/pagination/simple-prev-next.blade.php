@if ($paginator->hasPages())
    <div class="flex-c-m flex-w w-full p-t-45">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="flex-c-m stext-101 cl5 size-103 bg-light bor1 hov-btn1 p-lr-15 trans-04 disabled">
                Previous
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Previous
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Next
            </a>
        @else
            <span class="flex-c-m stext-101 cl5 size-103 bg-light bor1 hov-btn1 p-lr-15 trans-04 disabled">
                Next
            </span>
        @endif
    </div>
@endif
