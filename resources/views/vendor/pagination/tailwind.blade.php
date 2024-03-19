@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium cursor-default leading-5 rounded-md text-white bg-primary-600  dark:bg-primary-600">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a
                    href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md focus:outline-none focus:ring transition ease-in-out duration-150 text-white bg-primary-700 hover:bg-primary-800 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a
                    href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 rounded-md focus:outline-none focus:ring transition ease-in-out duration-150 text-white bg-primary-700 hover:bg-primary-800 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 border border-white">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium cursor-default leading-5 rounded-md text-white bg-primary-600 dark:bg-primary-600">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center">
                @if ($paginator->onFirstPage())
                    <span class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded">
                        <x-backend.icons.angle-left class="w-7 h-7" />
                    </span>
                @else
                    <a
                        href="{{ $paginator->previousPageUrl() }}"
                        class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <x-backend.icons.angle-left class="w-7 h-7" />
                    </a>
                @endif

                @if ($paginator->hasMorePages())
                    <a
                        href="{{ $paginator->nextPageUrl() }}"
                        class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <x-backend.icons.angle-right class="w-7 h-7" />
                    </a>
                @else
                    <span class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded">
                        <x-backend.icons.angle-right class="w-7 h-7" />
                    </span>
                @endif

                <p class="text-sm text-gray-700 leading-5 dark:text-gray-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>-<span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span
                            aria-disabled="true"
                            aria-label="{{ __('pagination.previous') }}">
                            <span
                                class="relative inline-flex items-center px-2 py-2 text-sm font-medium cursor-default rounded-l-md leading-5  text-white bg-primary-700 dark:bg-primary-600 border border-gray-600 dark:border-gray-600"
                                aria-hidden="true">
                                <x-backend.icons.angle-left class="w-5 h-5" />
                            </span>
                        </span>
                    @else
                        <a
                            href="{{ $paginator->previousPageUrl() }}"
                            rel="prev"
                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium rounded-l-md leading-5 focus:z-10 focus:outline-none transition ease-in-out duration-150 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 border border-white dark:border-gray-600"
                            aria-label="{{ __('pagination.previous') }}">
                            <x-backend.icons.angle-left class="w-5 h-5" />
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white cursor-default leading-5 dark:bg-gray-800 border border-white dark:border-gray-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium cursor-default leading-5 text-primary-700 dark:text-white border border-white dark:border-gray-600">{{ $page }}</span>
                                    </span>
                                @else
                                    <a
                                        href="{{ $url }}"
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 focus:z-10 focus:outline-none transition ease-in-out duration-150 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 border border-white dark:border-gray-600"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a
                            href="{{ $paginator->nextPageUrl() }}"
                            rel="next"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium rounded-r-md leading-5 focus:z-10 transition ease-in-out duration-150 dark:active:bg-gray-700 dark:focus:border-blue-800 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 border border-white dark:border-gray-600"
                            aria-label="{{ __('pagination.next') }}">
                            <x-backend.icons.angle-right class="w-5 h-5" />
                        </a>
                    @else
                        <span
                            aria-disabled="true"
                            aria-label="{{ __('pagination.next') }}">
                            <span
                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium cursor-default rounded-r-md leading-5 text-white bg-primary-700 dark:bg-primary-600 border border-white dark:border-gray-600"
                                aria-hidden="true">
                                <x-backend.icons.angle-right class="w-5 h-5" />
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
