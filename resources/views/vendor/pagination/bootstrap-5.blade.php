@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-center">
        <div class="pagination_rounded">
            <ul>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li>
                        <span class="prev" aria-disabled="true"><i class="fa fa-angle-left" aria-hidden="true"></i> @lang('pagination.previous')</span>
                    </li>
                @else
                    <li>
                        <a class="prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> @lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="hidden-xs"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><a href="#" class="active">{{ $page }}</a></li>
                            @else
                                <li class="hidden-xs"><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next') <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </li>
                @else
                    <li>
                        <span class="next" aria-disabled="true">@lang('pagination.next') <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
@endif

<style>
    .pagination_rounded, .pagination_square {
    display: inline-block;
    margin-left: 0;
    margin-top: 20px;
    width: 100%;
    text-align: center;
}

.pagination_rounded ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: center;
}

.pagination_rounded li:first-child {
    margin-left: 0px;
}

.pagination_rounded ul li {
    margin: 5px;
}

.pagination_rounded ul li a:hover {
    background: #4285f4;
    color: #fff;
    border: 1px solid #4285f4;
}

a:link {
  text-decoration: none;
}

.pagination_rounded .prev {
    border-radius: 35px;
    width: 90px;
    height: 34px;
    line-height: 34px;
}

.pagination_rounded ul li a {
    color: #4285f4;
    border-radius: 50%;
    line-height: 30px;
    height: 30px;
    width: 30px;
    text-align: center;
    margin-bottom: 10px;
    border: 1px solid #e0e0e0;
    display: block;
}

.pagination_rounded .prev i {
    margin-right: 10px;
}

.pagination_rounded .next {
    border-radius: 35px;
    width: 90px;
    height: 34px;
    line-height: 34px;
}

@media (max-width: 768px) {
    .hidden-xs {
        display: none !important;
    }

    .pagination_rounded ul li a {
        width: 25px;
        height: 25px;
        line-height: 25px;
        font-size: 12px;
    }

    .pagination_rounded .prev,
    .pagination_rounded .next {
        width: 70px;
        height: 30px;
        line-height: 30px;
        font-size: 12px;
    }
}

.pagination_rounded ul li a.active {
    background: #4285f4;
    color: #fff;
    border: 1px solid #4285f4;
}
</style>
