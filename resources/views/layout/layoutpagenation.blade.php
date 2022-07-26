@if($paginator->hasPages())
<ul class="inline-flex -space-x-px">
    <!-- Prevoius Page Link -->
    @if($paginator->onFirstPage())
    <li class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><a class="page-link"><span>&laquo;</span></a></li>
    @else
    <li class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">&laquo;</a></li>
    @endif

    <!-- Pagination Elements Here -->
    @foreach($elements as $element)
    <!-- Make three dots -->
    @if(is_string($element))
    <li class="page-item disabled"><a class="page-link"><span>{{$element}}</span></a></li>
    @endif

    <!-- Links Array Here -->
    @if(is_array($element))
    @foreach($element as $page=>$url)

    @if($page == $paginator->currentPage())
    <li class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"><a class="page-link"><span>{{ $page }}</span></a></li>
    @else
    <li class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
    @endif

    @endforeach
    @endif

    @endforeach

    <!-- Next Page Link -->
    @if($paginator->hasMorePages())
    <li class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><a href="{{ $paginator->nextPageUrl() }}" class="page-link"><span>&raquo;</span></a></li>
    @else
    <li class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white disabled"><a class="page-link"><span>&raquo;</span></a></li>
    @endif
</ul>

@endif