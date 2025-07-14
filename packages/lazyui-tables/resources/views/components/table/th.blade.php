@props(['column', 'index'])

@php
    $allThAttributes = $this->getAllThAttributes($column);
    $customThAttributes = $allThAttributes['customAttributes'];
    $customSortButtonAttributes = $allThAttributes['sortButtonAttributes'];
    $customLabelAttributes = $allThAttributes['labelAttributes'];
    $customIconAttributes = $this->getThSortIconAttributes($column);
    $direction = $column->hasField() ? $this->getSort($column->getColumnSelectName()) : $this->getSort($column->getSlug()) ?? null;
@endphp

<th {{
    $attributes->merge($customThAttributes)
        ->class([
            'text-cat-600 dark:text-cat-400' => (($customThAttributes['default-colors'] ?? true) || ($customThAttributes['default'] ?? true)),
            'px-6 py-5 text-left text-xs font-medium whitespace-nowrap uppercase tracking-wider' => (($customThAttributes['default-styling'] ?? true) || ($customThAttributes['default'] ?? true)),
            'hidden' => $column->shouldCollapseAlways(),
            'hidden md:table-cell' => $column->shouldCollapseOnMobile(),
            'hidden lg:table-cell' => $column->shouldCollapseOnTablet(),
        ])
        ->except(['default', 'default-colors', 'default-styling'])
}}>
    @if($column->getColumnLabelStatus())
        @unless ($this->sortingIsEnabled() && ($column->isSortable() || $column->getSortCallback()))
            <x-livewire-tables::table.th.label :$customLabelAttributes :columnTitle="$column->getTitle()" />
        @else
            <button wire:click="sortBy('{{ $column->getColumnSortKey() }}')" {{
                    $attributes->merge($customSortButtonAttributes)
                        ->class([
                            'text-cat-600 dark:text-cat-400' => (($customSortButtonAttributes['default-colors'] ?? true) || ($customSortButtonAttributes['default'] ?? true)),
                            'flex items-center space-x-1 text-left text-xs leading-4 font-medium uppercase tracking-wider group focus:outline-none cursor-pointer' => (($customSortButtonAttributes['default-styling'] ?? true) || ($customSortButtonAttributes['default'] ?? true)),
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
            }}>
                <x-livewire-tables::table.th.label :$customLabelAttributes :columnTitle="$column->getTitle()" />
                <x-livewire-tables::table.th.sort-icons :$direction :$customIconAttributes />
            </button>
        @endunless
    @endif
</th>
