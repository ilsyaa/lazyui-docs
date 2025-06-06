<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-cat-500 bg-white border border-cat-300 cursor-default leading-5 rounded-md select-none dark:bg-cat-700 dark:text-white dark:border-cat-500">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    @if(method_exists($paginator,'getCursorName'))
                        {{-- // @todo: Remove `wire:key` once mutation observer has been fixed to detect parameter change for the `setPage()` method call --}}
                        <button type="button" dusk="previousPage" wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->previousCursor()->encode() }}" wire:click="setPage('{{$paginator->previousCursor()->encode()}}','{{ $paginator->getCursorName() }}')" wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-cat-700 bg-white border border-cat-300 leading-5 rounded-md hover:text-cat-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cat-100 active:text-cat-700 transition ease-in-out duration-150 dark:bg-cat-700 dark:text-white dark:border-cat-600">
                            {!! __('pagination.previous') !!}
                        </button>
                    @else
                        <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-cat-700 bg-white border border-cat-300 leading-5 rounded-md hover:text-cat-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cat-100 active:text-cat-700 transition ease-in-out duration-150 dark:bg-cat-700 dark:text-white dark:border-cat-600">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    @if(method_exists($paginator,'getCursorName'))
                        {{-- // @todo: Remove `wire:key` once mutation observer has been fixed to detect parameter change for the `setPage()` method call --}}
                        <button type="button" dusk="nextPage" wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->nextCursor()->encode() }}" wire:click="setPage('{{$paginator->nextCursor()->encode()}}','{{ $paginator->getCursorName() }}')" wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-cat-700 bg-white border border-cat-300 leading-5 rounded-md hover:text-cat-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cat-100 active:text-cat-700 transition ease-in-out duration-150 dark:bg-cat-700 dark:text-white dark:border-cat-600">
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-cat-700 bg-white border border-cat-300 leading-5 rounded-md hover:text-cat-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cat-100 active:text-cat-700 transition ease-in-out duration-150 dark:bg-cat-700 dark:text-white dark:border-cat-600">
                            {!! __('pagination.next') !!}
                        </button>
                    @endif
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-cat-500 bg-white border border-cat-300 cursor-default leading-5 rounded-md select-none dark:bg-cat-700 dark:text-white dark:border-cat-600">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
