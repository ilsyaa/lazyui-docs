<div>
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)

        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
            <div class="flex justify-between flex-1 md:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <span class="relative flex justify-center items-center size-10 rounded-full text-sm font-medium text-cat-800 dark:text-white select-none">
                            {{-- {!! __('pagination.previous') !!} --}}
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15 5l-6 7l6 7"/></svg>
                        </span>
                    @else
                        <button wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="relative flex justify-center items-center size-10 rounded-full text-sm font-medium hover:bg-cat-200 dark:hover:bg-cat-700/50 text-cat-800 dark:text-white select-none cursor-pointer">
                            {{-- {!! __('pagination.previous') !!} --}}
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15 5l-6 7l6 7"/></svg>
                        </button>
                    @endif
                </span>

                <span>
                    @if ($paginator->hasMorePages())
                        <button wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="relative flex justify-center items-center size-10 rounded-full text-sm font-medium hover:bg-cat-200 dark:hover:bg-cat-700/50 text-cat-800 dark:text-white select-none cursor-pointer">
                            {{-- {!! __('pagination.next') !!} --}}
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5l6 7l-6 7"/></svg>
                        </button>
                    @else
                        <span class="relative flex justify-center items-center size-10 rounded-full text-sm font-medium text-cat-800 dark:text-white select-none">
                            {{-- {!! __('pagination.next') !!} --}}
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5l6 7l-6 7"/></svg>
                        </span>
                    @endif
                </span>
            </div>

            <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">
                <div>
                    <span class="relative z-0 inline-flex gap-x-1">
                        <span>
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                    <span class="relative flex justify-center items-center size-8 rounded-md text-sm font-medium bg-cat-200 dark:bg-cat-700/50 text-cat-700/50 dark:text-white/50 select-none" aria-hidden="true">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15 5l-6 7l6 7"/></svg>
                                    </span>
                                </span>
                            @else
                                <button wire:click="previousPage('{{ $paginator->getPageName() }}')" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" rel="prev" class="relative flex justify-center items-center size-8 rounded-md text-sm font-medium bg-cat-200 dark:bg-cat-700/50 text-cat-700 dark:text-white select-none cursor-pointer" aria-label="{{ __('pagination.previous') }}">
                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15 5l-6 7l6 7"/></svg>
                                </button>
                            @endif
                        </span>

                        {{-- Pagination Elements --}}
                        @if ($elements ?? null)
                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <span aria-disabled="true">
                                        <span class="relative flex justify-center items-center size-8 rounded-md text-sm font-medium bg-cat-200 dark:bg-cat-700/50 text-cat-800 dark:text-white select-none">{{ $element }}</span>
                                    </span>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <span wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page{{ $page }}">
                                            @if ($page == $paginator->currentPage())
                                                <span aria-current="page">
                                                    <span class="relative flex justify-center items-center size-8 rounded-md text-sm font-medium bg-cat-200 dark:bg-cat-700/50 text-cat-700/50 dark:text-white/50 select-none">{{ $page }}</span>
                                                </span>
                                            @else
                                                <button wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" class="relative flex justify-center items-center size-8 rounded-md text-sm font-medium bg-cat-200 dark:bg-cat-700/50 text-cat-800 dark:text-white select-none cursor-pointer" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                    {{ $page }}
                                                </button>
                                            @endif
                                        </span>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif

                        <span>
                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <button wire:click="nextPage('{{ $paginator->getPageName() }}')" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" rel="next" class="relative flex justify-center items-center size-8 rounded-md text-sm font-medium bg-cat-200 dark:bg-cat-700/50 text-cat-800 dark:text-white select-none cursor-pointer" aria-label="{{ __('pagination.next') }}">
                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5l6 7l-6 7"/></svg>
                                </button>
                            @else
                                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                    <span class="relative flex justify-center items-center size-8 rounded-md text-sm font-medium bg-cat-200 dark:bg-cat-700/50 text-cat-700/50 dark:text-white/50 select-none" aria-hidden="true">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5l6 7l-6 7"/></svg>
                                    </span>
                                </span>
                            @endif
                        </span>
                    </span>
                </div>
            </div>
        </nav>
    @endif
</div>
