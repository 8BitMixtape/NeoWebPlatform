@if ($paginator->hasPages())
    <ul class="pagination ma0 pa0">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="ba b--black-20 pa2 dib disabled"><span>&laquo;</span></li>
        @else
            <li class="ba b--black-20 pa2 dib"><a class="link black" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="ba b--black-20 pa2 dib disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="ba b--black-20 pa2 dib active"><span>{{ $page }}</span></li>
                    @else
                        <li class="ba b--black-20 pa2 dib"><a  class="link black"  href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="ba  b--black-20 pa2 dib"><a  class="link black"  href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="ba b--black-20 pa2 dib disabled"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
