@aware([ 'tableName','primaryKey' ])
@props(['row', 'rowIndex'])

@php
    $customAttributes = $this->getTrAttributes($row, $rowIndex);
@endphp

<tr
    rowpk='{{ $row->{$primaryKey} }}'
    x-on:dragstart.self="currentlyReorderingStatus && dragStart(event)"
    x-on:drop.prevent="currentlyReorderingStatus && dropEvent(event)"
    x-on:dragover.prevent.throttle.500ms="currentlyReorderingStatus && dragOverEvent(event)"
    x-on:dragleave.prevent.throttle.500ms="currentlyReorderingStatus && dragLeaveEvent(event)"
    @if($this->hasDisplayLoadingPlaceholder())
        wire:loading.class.add="hidden"
    @else
        wire:loading.class.delay="opacity-70"
    @endif
    id="{{ $tableName }}-row-{{ $row->{$primaryKey} }}"
    :draggable="currentlyReorderingStatus"
    wire:key="{{ $tableName }}-tablerow-tr-{{ $row->{$primaryKey} }}"
    loopType="{{ ($rowIndex % 2 === 0) ? 'even' : 'odd' }}"
    {{
        $attributes->merge($customAttributes)
            ->class([
                '[&:not(:first-child):not(:last-child)]:border-b border-dashed border-cat-200 dark:border-cat-750 transition-opacity duration-300 ease-in-out' => ($customAttributes['default'] ?? true),
                'cursor-pointer' => ($this->hasTableRowUrl() && ($customAttributes['default'] ?? true)),
            ])
            ->except(['default','default-styling','default-colors'])
    }}

>
    {{ $slot }}
</tr>
