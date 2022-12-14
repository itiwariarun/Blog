@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <span
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 opacity-60 border border-gray-300 cursor-default leading-5 rounded-md">
        {!! __('pagination.previous') !!}
    </span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
        class="relative inline-flex items-center px-4 py-2 text-sm bg-blue-500 font-medium text-gray-100 border border-gray-300 leading-5 rounded-md hover:text-gray-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-300 transition ease-in-out duration-150">
        {!! __('pagination.previous') !!}
    </a>
    @endif
    <div>
        <p class="text-sm text-gray-300 leading-5">
            {!! __('Showing Posts') !!}
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
            {!! __('-') !!}
            <span class="font-medium">{{ $paginator->lastItem() }}</span>

        </p>
    </div>

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium bg-blue-500 text-gray-100 border border-gray-300 leading-5 rounded-md hover:text-gray-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-300 transition ease-in-out duration-150">
        {!! __('pagination.next') !!}
    </a>
    @else
    <span
        class="relative inline-flex items-center bg-gray-100 opacity-60  px-4 py-2 text-sm font-medium text-gray-400  border border-gray-300 cursor-default leading-5 rounded-md">
        {!! __('pagination.next') !!}
    </span>
    @endif
</nav>
@endif