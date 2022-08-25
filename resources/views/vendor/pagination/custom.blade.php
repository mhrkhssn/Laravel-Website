@if ($paginator->hasPages())
    <div class="pager text-center">
        @if ($paginator->onFirstPage())
            <a class="disabled btn border border-warning text-center">← Prev</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn border border-warning text-center" rel="prev">← Prev</a>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <span class="disabled btn border border-warning text-center">{{ $element }}</span>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="active my-active btn border border-warning text-center">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="btn border border-warning text-center">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn border border-warning text-center" rel="next">Next →</a>
        @else
            <span class="disabled btn border border-warning text-center">Next →</span>
        @endif
    </div>
@endif
