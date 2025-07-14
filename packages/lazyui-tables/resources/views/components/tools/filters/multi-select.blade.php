<div
    x-data="{ isOpen: false }"
    class="relative block md:inline-block"
    @if ($this->isFilterLayoutSlideDown())
    x-on:keydown.escape.stop="if (!this.childElementOpen) { isOpen = false }"
    x-on:mousedown.away="if (!this.childElementOpen) { isOpen = false }"
    @endif
>
    @if ($this->isFilterLayoutSlideDown())
        <x-livewire-tables::tools.filter-label :$filter :$filterLayout :$tableName />
        <button
            type="button"
            x-on:click="isOpen = !isOpen"
            class="relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 h-9 w-full px-4 py-2 bg-cat-900 dark:bg-white text-white dark:text-cat-900 shadow hover:bg-cat-800/90 dark:hover:bg-white/90"
        >Open {{ $filter->getName() }}</button>
    @endif
    <div
        @if ($this->isFilterLayoutSlideDown())
            x-show="isOpen"
            x-cloak
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            @class([
                'w-full md:w-56',
                'origin-top-left absolute left-0 mt-2 rounded-md shadow-lg focus:outline-none z-50',
                'bg-white dark:bg-cat-800 lazy-gradient dark:text-white text-cat-900 p-3',
            ])
        @endif
    >
        <x-livewire-tables::tools.filter-label :$filter :$filterLayout :$tableName />
        <div class="flex flex-col gap-1">
            <div class="flex gap-2 items-center">
                <input
                    id="{{ $tableName }}-filter-{{ $filter->getKey() }}-select-all{{ $filter->hasCustomPosition() ? '-'.$filter->getCustomPosition() : null }}"
                    wire:input="selectAllFilterOptions('{{ $filter->getKey() }}')"
                    {{
                        $filterInputAttributes->merge([
                            'type' => 'checkbox'
                        ])
                        ->class([
                            'checked:bg-accent-500 checked:border-accent-500 indeterminate:!border-accent-500 indeterminate:bg-accent-500 hover:before:bg-accent-500/10 before:focus-visible:bg-accent-500/10' => ($filterInputAttributes['default-colors'] ?? true),
                            'peer block relative cursor-pointer size-[1rem] m-0.5 bg-transparent border-cat-400 dark:border-cat-500 rounded !ring-offset-transparent focus:ring-transparent disabled:cursor-not-allowed disabled:opacity-50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:size-[1.9rem] disabled:before:bg-transparent' => ($filterInputAttributes['default-styling'] ?? true),
                        ])
                        ->except(['id','wire:key','value','default-styling','default-colors'])
                    }}
                >
                <label
                    for="{{ $tableName }}-filter-{{ $filter->getKey() }}-select-all{{ $filter->hasCustomPosition() ? '-'.$filter->getCustomPosition() : null }}"
                    class="dark:text-white"
                >
                    @if ($filter->getFirstOption() !== '')
                        {{ $filter->getFirstOption() }}
                    @else
                        {{ __($localisationPath.'All') }}
                    @endif
                </label>
            </div>
            @foreach($filter->getOptions() as $key => $value)
                <div class="flex gap-2 items-center" wire:key="{{ $tableName }}-filter-{{ $filter->getKey() }}-multiselect-{{ $key }}{{ $filter->hasCustomPosition() ? '-'.$filter->getCustomPosition() : null }}">
                    <input
                        {!! $filter->getWireMethod('filterComponents.'.$filter->getKey()) !!}
                        id="{{ $tableName }}-filter-{{ $filter->getKey() }}-{{ $loop->index }}{{ $filter->hasCustomPosition() ? '-'.$filter->getCustomPosition() : null }}"
                        wire:key="{{ $tableName }}-filter-{{ $filter->getKey() }}-{{ $loop->index }}{{ $filter->hasCustomPosition() ? '-'.$filter->getCustomPosition() : null }}"
                        value="{{ $key }}"
                        {{
                            $filterInputAttributes->merge([
                                'type' => 'checkbox'
                            ])
                            ->class([
                                'checked:bg-accent-500 checked:border-accent-500 indeterminate:!border-accent-500 indeterminate:bg-accent-500 hover:before:bg-accent-500/10 before:focus-visible:bg-accent-500/10' => ($filterInputAttributes['default-colors'] ?? true),
                                'peer block relative cursor-pointer size-[1rem] m-0.5 bg-transparent border-cat-400 dark:border-cat-500 rounded !ring-offset-transparent focus:ring-transparent disabled:cursor-not-allowed disabled:opacity-50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:size-[1.9rem] disabled:before:bg-transparent' => ($filterInputAttributes['default-styling'] ?? true),
                            ])
                            ->except(['id','wire:key','value','default-styling','default-colors'])
                        }}
                    >
                    <label
                        for="{{ $tableName }}-filter-{{ $filter->getKey() }}-{{ $loop->index }}{{ $filter->hasCustomPosition() ? '-'.$filter->getCustomPosition() : null }}"
                        class="dark:text-white line-clamp-1"
                    ])>{{ $value }}</label>
                </div>
            @endforeach
        </div>
    </div>
</div>
