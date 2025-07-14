@aware(['tableName'])

<div x-data="filterPillsHandler(@js($setupData))" x-bind="trigger"
    wire:key="{{ $tableName }}-filter-pill-{{ $filterKey }}" {{
    $attributes->merge($filterPillsItemAttributes)
    ->class([
        'inline-flex items-center gap-x-1 px-2 py-1 rounded-lg' => ($filterPillsItemAttributes['default-styling'] ?? true),
        'text-xs font-medium leading-4 capitalize' => ($filterPillsItemAttributes['default-text'] ?? ($filterPillsItemAttributes['default-styling'] ?? true)),
        'bg-cat-300/50 dark:bg-cat-750' => ($filterPillsItemAttributes['default-colors'] ?? true),
    ])
    ->except(['default', 'default-styling', 'default-colors'])
}}
>
    <span {{ $attributes->merge($pillTitleDisplayDataArray) }}></span>:&nbsp;
    <span {{ $attributes->merge($pillDisplayDataArray) }}></span>
    <x-livewire-tables::tools.filter-pills.buttons.reset-filter :$filterKey :$filterPillData/>
</div>
