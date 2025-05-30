@if($isToggleable && $toggleMethod !== '')
    <button wire:click="{{ $toggleMethod }}('{{ $rowPrimaryKey }}')"
    @if($hasConfirmMessage) wire:confirm="{{ $confirmMessage }}" @endif
    wire:loading.class="pointer-events-none"
>
@endif
    @if ($status)
        @if ($type === 'icons')
            @if ($successValue === true)
                <svg class="inline-block h-5 w-5 text-emerald-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="m8.5 12.5l2 2l5-5"/></g></svg>
            @else
                <svg class="inline-block h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="m8.5 12.5l2 2l5-5"/></g></svg>
            @endif
        @elseif ($type === 'yes-no')
            @if ($successValue === true)
                <span>Yes</span>
            @else
                <span>No</span>
            @endif
        @elseif ($type === 'switch')
            @if ($successValue === true)
                <label role="switch" class="inline-block cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked />
                    <div
                        @class([
                            "relative peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-black/10 peer-focus:dark:ring-white/10 rounded-full peer-checked:after:translate-x-full after:content-[''] after:absolute after:rounded-full after:transition-all peer-disabled:opacity-80 peer-disabled:cursor-default",
                            "min-w-9 min-h-5 after:size-4 after:top-[2px] after:start-[2px]",
                            "bg-cat-300 dark:bg-cat-700 peer-checked:after:bg-white peer-checked:dark:after:bg-cat-800 after:bg-white dark:after:bg-white peer-checked:bg-cat-800 dark:peer-checked:bg-white",
                        ])
                    ></div>
                </label>
            @else
                <label role="switch" class="inline-block cursor-pointer">
                    <input type="checkbox" class="sr-only peer" />
                    <div
                        @class([
                            "relative peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-black/10 peer-focus:dark:ring-white/10 rounded-full peer-checked:after:translate-x-full after:content-[''] after:absolute after:rounded-full after:transition-all peer-disabled:opacity-80 peer-disabled:cursor-default",
                            "min-w-9 min-h-5 after:size-4 after:top-[2px] after:start-[2px]",
                            "bg-cat-300 dark:bg-cat-700 peer-checked:after:bg-white peer-checked:dark:after:bg-cat-800 after:bg-white dark:after:bg-white peer-checked:bg-cat-800 dark:peer-checked:bg-white",
                        ])
                    ></div>
                </label>
            @endif
        @endif
    @else
        @if ($type === 'icons')
            @if ($successValue === false)
                <svg class="inline-block h-5 w-5 text-emerald-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="m14.5 9.5l-5 5m0-5l5 5"/></g></svg>
            @else
                <svg class="inline-block h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="m14.5 9.5l-5 5m0-5l5 5"/></g></svg>
            @endif
        @elseif ($type === 'yes-no')
            @if ($successValue === false)
                <span>Yes</span>
            @else
                <span>No</span>
            @endif
        @elseif ($type === 'switch')
            @if ($successValue === false)
                <label role="switch" class="inline-block cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked />
                    <div
                        @class([
                            "relative peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-black/10 peer-focus:dark:ring-white/10 rounded-full peer-checked:after:translate-x-full after:content-[''] after:absolute after:rounded-full after:transition-all peer-disabled:opacity-80 peer-disabled:cursor-default",
                            "min-w-9 min-h-5 after:size-4 after:top-[2px] after:start-[2px]",
                            "bg-cat-300 dark:bg-cat-700 peer-checked:after:bg-white peer-checked:dark:after:bg-cat-800 after:bg-white dark:after:bg-white peer-checked:bg-cat-800 dark:peer-checked:bg-white",
                        ])
                    ></div>
                </label>
            @else
                <label role="switch" class="inline-block cursor-pointer">
                    <input type="checkbox" class="sr-only peer" />
                    <div
                        @class([
                            "relative peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-black/10 peer-focus:dark:ring-white/10 rounded-full peer-checked:after:translate-x-full after:content-[''] after:absolute after:rounded-full after:transition-all peer-disabled:opacity-80 peer-disabled:cursor-default",
                            "min-w-9 min-h-5 after:size-4 after:top-[2px] after:start-[2px]",
                            "bg-cat-300 dark:bg-cat-700 peer-checked:after:bg-white peer-checked:dark:after:bg-cat-800 after:bg-white dark:after:bg-white peer-checked:bg-cat-800 dark:peer-checked:bg-white",
                        ])
                    ></div>
                </label>
            @endif
        @endif
    @endif
@if($isToggleable && $toggleMethod !== '')
    </button>
@endif
