@aware([ 'row', 'rowIndex', 'tableName', 'primaryKey' ])
@props(['column', 'colIndex'])

@php
    $customAttributes = $this->getTdAttributes($column, $row, $colIndex, $rowIndex)
@endphp

<td wire:key="{{ $tableName . '-table-td-'.$row->{$primaryKey}.'-'.$column->getSlug() }}"
    @if ($column->isClickable())
        @if($this->getTableRowUrlTarget($row) === 'navigate')
            wire:navigate href="{{ $this->getTableRowUrl($row) }}"
        @else
            onclick="window.open('{{ $this->getTableRowUrl($row) }}', '{{ $this->getTableRowUrlTarget($row) ?? '_self' }}')"
        @endif
    @endif
        {{
            $attributes->merge($customAttributes)
                ->class([
                    'px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white' => ($customAttributes['default'] ?? true),
                    'hidden' => $column && $column->shouldCollapseAlways(),
                    'hidden md:table-cell' => $column && $column->shouldCollapseOnMobile(),
                    'hidden lg:table-cell' => $column && $column->shouldCollapseOnTablet(),
                ])
                ->except(['default','default-styling','default-colors'])
        }}
>
    {{ $slot }}
</td>
