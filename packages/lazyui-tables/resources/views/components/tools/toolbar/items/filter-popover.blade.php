@aware(['tableName'])

<div x-cloak x-show="filterPopoverOpen"
    {{
        $attributes
        ->merge($this->getFilterPopoverAttributes)
        ->merge([
            'role' => 'menu',
            'aria-orientation' => 'vertical',
            'aria-labelledby' => 'filters-menu',
            'x-transition:enter' => 'transition ease-out duration-100',
            'x-transition:enter-start' => 'transform opacity-0 scale-95',
            'x-transition:enter-end' => 'transform opacity-100 scale-100',
            'x-transition:leave' => 'transition ease-in duration-75',
            'x-transition:leave-start' => 'transform opacity-100 scale-100',
            'x-transition:leave-end' => 'transform opacity-0 scale-95',
        ])
        ->class([
            'w-full md:w-56' => $this->getFilterPopoverAttributes['default-width'] ?? true,
            'origin-top-left absolute left-0 mt-2 rounded-md shadow-lg focus:outline-none z-50' => $this->getFilterPopoverAttributes['default-styling'] ?? true,
            'bg-white dark:bg-cat-800 lazy-gradient dark:text-white text-cat-900' => $this->getFilterPopoverAttributes['default-colors'] ?? true,
        ])
        ->except(['x-cloak', 'x-show', 'default','default-width', 'default-styling','default-colors'])
    }}>

    @foreach ($this->getVisibleFilters() as $filter)
        <div class="py-1" role="none">
            <div id="{{ $tableName }}-filter-{{ $filter->getKey() }}-wrapper" wire:key="{{ $tableName }}-filter-{{ $filter->getKey() }}-toolbar" class="block px-4 py-2 text-sm space-y-1" role="menuitem">
                {{ $filter->setGenericDisplayData($this->getFilterGenericData)->render() }}
            </div>
        </div>
    @endforeach

    @if ($this->hasAppliedVisibleFiltersWithValuesThatCanBeCleared())
        <div class="block px-4 py-3 text-sm text-cat-900 dark:text-white" role="menuitem">
            <x-livewire-tables::tools.toolbar.items.filter-popover.clear-button />
        </div>
    @endif
</div>
