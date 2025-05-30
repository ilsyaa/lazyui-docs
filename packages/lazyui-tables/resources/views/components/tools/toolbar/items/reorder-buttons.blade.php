@aware(['tableName','localisationPath'])

<div x-data x-cloak x-show="reorderStatus" >
    <button
        x-on:click="reorderToggle"
        type="button"
        class="relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 h-9 w-9 bg-cat-900 dark:bg-white text-white dark:text-cat-900 shadow hover:bg-cat-800/90 dark:hover:bg-white/90"
        x-show="!currentlyReorderingStatus"
    >
        <span x-cloak x-show="!currentlyReorderingStatus">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M16 18V6m0 0l4 4.125M16 6l-4 4.125" opacity="0.5"/><path d="M8 6v12m0 0l4-4.125M8 18l-4-4.125"/></g></svg>
        </span>
    </button>
    <button
        x-on:click="reorderToggle"
        type="button"
        class="relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 h-9 px-4 py-2 bg-cat-300 dark:bg-cat-700 text-cat-900 dark:text-white"
        x-show="currentlyReorderingStatus"
    >
        <span x-cloak>
         {{ __($localisationPath.'cancel') }}
        </span>
    </button>

    <div :class="{ 'inline d-inline' : currentlyReorderingStatus }" x-cloak x-show="currentlyReorderingStatus" >
        <button
            type="button"
            x-on:click="updateOrderedItems"
            class="relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 h-9 px-4 py-2 bg-cat-900 dark:bg-white text-white dark:text-cat-900 shadow hover:bg-cat-800/90 dark:hover:bg-white/90"
        >
            <span>
            {{ __($localisationPath.'save') }}
            </span>
        </button>
    </div>
</div>
