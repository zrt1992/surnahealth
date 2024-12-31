@if ($paginator->hasPages() || $paginator->total() > 0)
    <div class="pagination dashboard-pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <a href="javascript:void(0)" class="page-link disabled"><i class="fa-solid fa-chevron-left"></i></a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>
                        <a href="javascript:void(0)" class="page-link disabled">{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <a href="javascript:void(0)" class="page-link active">{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                </li>
            @else
                <li>
                    <a href="javascript:void(0)" class="page-link disabled"><i class="fa-solid fa-chevron-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
