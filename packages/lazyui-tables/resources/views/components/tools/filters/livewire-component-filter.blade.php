<div wire:key="filterComponents.{{ $filter->getKey() }}-wrapper">
    <x-livewire-tables::tools.filter-label :$filter :$filterLayout :$tableName />
    <livewire:dynamic-component :is="$livewireComponent" :tableComponent="get_class($this)" :filterKey="$filter->getKey()" :$tableName :key="'filterComponents-'.$filter->getKey()" wire:model.live="filterComponents.{{ $filter->getKey() }}" />
</div>
