@aware([ 'tableName', 'localisationPath' ])

<div
    @class([
        'hidden sm:block' => $this->getColumnSelectIsHiddenOnMobile(),
        'hidden md:block' => $this->getColumnSelectIsHiddenOnTablet(),
        'mb-4 w-full md:w-auto md:mb-0 md:ml-2'
    ])
>
    <div
        x-data="{ open: false, childElementOpen: false }"
        @keydown.window.escape="if (!childElementOpen) { open = false }"
        x-on:click.away="if (!childElementOpen) { open = false }"
        class="inline-block relative w-full text-left md:w-auto"
        wire:key="{{ $tableName }}-column-select-button"
    >
        <div>
            <span class="rounded-md shadow-sm">
                <button
                    x-on:click="open = !open"
                    type="button"
                    {{
                        $attributes->merge($this->getColumnSelectButtonAttributes())
                        ->class([
                            'relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 h-9 w-full px-4 py-2' => $this->getColumnSelectButtonAttributes()['default-styling'],
                            'bg-cat-900 dark:bg-white text-white dark:text-cat-900 shadow hover:bg-cat-800/90 dark:hover:bg-white/90' => $this->getColumnSelectButtonAttributes()['default-colors'],
                        ])
                        ->except(['default-styling', 'default-colors'])
                    }}
                    aria-haspopup="true"
                    x-bind:aria-expanded="open"
                    aria-expanded="true"
                >
                    {{ __($localisationPath.'Columns') }}
                    <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </span>
        </div>

        <div
            x-cloak x-show="open"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute right-0 z-50 mt-2 w-full rounded-md shadow-lg origin-top-right md:w-48 focus:outline-none"
        >
            <div class="bg-white dark:bg-cat-800 lazy-gradient overflow-hidden">
                <div class="p-2" role="menu" aria-orientation="vertical"
                        aria-labelledby="column-select-menu"
                >
                    <div wire:key="{{ $tableName }}-columnSelect-selectAll-{{ rand(0,1000) }}">
                        <label
                            wire:loading.attr="disabled"
                            class="inline-flex items-center px-2 py-1 disabled:opacity-50 disabled:cursor-wait"
                        >
                            <input
                                {{
                                    $attributes->merge($this->getColumnSelectMenuOptionCheckboxAttributes())
                                    ->class([
                                        'checked:bg-accent-500 checked:border-accent-500 indeterminate:!border-accent-500 indeterminate:bg-accent-500 hover:before:bg-accent-500/10 before:focus-visible:bg-accent-500/10' => $this->getColumnSelectMenuOptionCheckboxAttributes()['default-colors'],
                                        'peer block relative cursor-pointer size-[1rem] m-0.5 bg-transparent border-cat-400 dark:border-cat-500 rounded !ring-offset-transparent focus:ring-transparent disabled:cursor-not-allowed disabled:opacity-50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:size-[1.9rem] disabled:before:bg-transparent' => $this->getColumnSelectMenuOptionCheckboxAttributes()['default-styling'],
                                    ])
                                    ->except(['default-styling', 'default-colors'])
                                }}
                                wire:loading.attr="disabled"
                                type="checkbox"
                                @checked($this->getSelectableSelectedColumns()->count() === $this->getSelectableColumns()->count())
                                @if($this->getSelectableSelectedColumns()->count() === $this->getSelectableColumns()->count())  wire:click="deselectAllColumns" @else wire:click="selectAllColumns" @endif
                            >
                            <span class="ml-2 text-sm">{{ __($localisationPath.'All Columns') }}</span>
                        </label>
                    </div>

                    @foreach ($this->getColumnsForColumnSelect() as $columnSlug => $columnTitle)
                        <div
                            wire:key="{{ $tableName }}-columnSelect-{{ $loop->index }}"
                        >
                            <label
                                wire:loading.attr="disabled"
                                wire:target="selectedColumns"
                                class="inline-flex items-center px-2 py-1 disabled:opacity-50 disabled:cursor-wait"
                            >
                                <input
                                    {{
                                        $attributes->merge($this->getColumnSelectMenuOptionCheckboxAttributes())
                                        ->class([
                                            'checked:bg-accent-500 checked:border-accent-500 indeterminate:!border-accent-500 indeterminate:bg-accent-500 hover:before:bg-accent-500/10 before:focus-visible:bg-accent-500/10' => $this->getColumnSelectMenuOptionCheckboxAttributes()['default-colors'],
                                            'peer block relative cursor-pointer size-[1rem] m-0.5 bg-transparent border-cat-400 dark:border-cat-500 rounded !ring-offset-transparent focus:ring-transparent disabled:cursor-not-allowed disabled:opacity-50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:size-[1.9rem] disabled:before:bg-transparent' => $this->getColumnSelectMenuOptionCheckboxAttributes()['default-styling'],
                                        ])
                                        ->except(['default-styling', 'default-colors'])
                                    }}
                                    wire:model.live="selectedColumns" wire:target="selectedColumns"
                                    wire:loading.attr="disabled" type="checkbox"
                                    value="{{ $columnSlug }}" />
                                <span class="ml-2 text-sm">{{ $columnTitle }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
