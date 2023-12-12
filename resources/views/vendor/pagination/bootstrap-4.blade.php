@if ($paginator->hasPages())
    <div class="pagination-area pt-30 mb-50">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            <style>
                
                .pagination{
                    display: flex;
                    justify-content: start;
                }
                .pagination .page-item span{
                    padding: 0 20px;
                }
                
                .pagination li a:hover{
                    background-color: #9d6b34;
                    border:1px solid #9d6b34;
                    justify-content: center;
                    text-align: center!important;
                }
                .pagination .page-item .page-link
                {
                    padding-top: 2px!important;
                    padding-bottom: 2px!important;
                    padding-left: 20px!important;
                    padding-right: 20px!important;
                    text-align: center!important;

                }
                
            </style>
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true" style="padding-top:10px!important;padding-bottom:10px!important;"><i class="fal fa-chevron-double-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fal fa-chevron-double-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true" ><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link" style="background-color: #9d6b34;padding-top:10px!important;padding-bottom:10px!important;border:1px solid #9d6b34;">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fal fa-chevron-double-right"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')" >
                    <span class="page-link" aria-hidden="true" style="padding-top:10px!important;padding-bottom:10px!important;"><i class="fal fa-chevron-double-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
            </div>
@endif
