@aware(['localisationPath'])
<button
    type="button"
    wire:click.prevent="setFilterDefaults"
    x-on:click="filterPopoverOpen = false"
    class="relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 h-9 w-full px-4 py-2 bg-cat-900 dark:bg-white text-white dark:text-cat-900 shadow hover:bg-cat-800/90 dark:hover:bg-white/90"
>
    {{ __($localisationPath.'Clear') }}
</button>
