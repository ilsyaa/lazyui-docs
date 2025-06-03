<div
    x-data="{ isOpen: false }"
    x-on:keydown.escape.stop="if (!this.childElementOpen) { isOpen = false }"
    x-on:mousedown.away="if (!this.childElementOpen) { isOpen = false }"
>
    <button
        type="button"
        x-on:click="isOpen = !isOpen"
        x-ref="button"
        class="relative inline-flex items-center justify-center whitespace-nowrap rounded-full text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 h-9 w-9 hover:bg-cat-300/20 dark:hover:bg-cat-700/20 text-cat-900 dark:text-white"
    >
        <svg class="size-5 rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0m14 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/><path fill="currentColor" d="M14 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0" opacity="0.5"/></svg>
    </button>
    <div
        x-show="isOpen"
        x-anchor.bottom.offset.8.ref="$refs.button"
        x-on:click="isOpen = !isOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="bg-white dark:bg-cat-800 dark:text-white lazy-gradient text-cat-900 p-1 min-w-32 rounded-lg shadow-2xl focus:outline-none z-50"
    >
        @foreach($lists as $list)
            {!! $list->getContents($row) !!}
        @endforeach
    </div>
</div>
