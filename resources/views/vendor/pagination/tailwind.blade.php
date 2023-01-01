@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="hidden flex justify-between flex-1">
            @if ($paginator->onFirstPage())
                <span class="text-gray-500 px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="cursor-default px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </a>
            @else
                <span class="text-gray-500 px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium cursor-default leading-5 rounded-md">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </span>
            @endif
        </div>

        <div class="sm:flex-1 sm:items-center sm:justify-between sm:hidden">
            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                <span class="text-gray-500 px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="cursor-default px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </a>
            @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="px-3 py-1 rounded-md cursor-default focus:outline-none focus:shadow-outline-purple">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple" aria-current="page">
                                        <span >{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium hover:text-gray-500 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </a>
            @else
                <span class="text-gray-500 px-3 py-1 rounded-l-lg focus:outline-none focus:shadow-outline-purple relative inline-flex items-center text-sm font-medium cursor-default leading-5 rounded-md">
                    <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                    >
                    <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                    ></path>
                    </svg>
                </span>
            @endif
                </span>
            </div>
        </div>
    </nav>
@endif
