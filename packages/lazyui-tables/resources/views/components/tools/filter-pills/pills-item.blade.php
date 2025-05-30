@aware(['tableName'])

@props([
    'filterKey',
    'filterPillData',
    'shouldWatch' => ($filterPillData->shouldWatchForEvents() ?? 0),
    'filterPillsItemAttributes' => $filterPillData->getFilterPillsItemAttributes(),
])

<div
    x-data="filterPillsHandler(@js($filterPillData->getPillSetupData($filterKey,$shouldWatch)))"
    x-bind="trigger"
    wire:key="{{ $tableName }}-filter-pill-{{ $filterKey }}"
    {{
        $attributes->merge($filterPillsItemAttributes)
            ->class([
                'inline-flex items-center gap-x-1 px-2 py-1 rounded-lg' => ($filterPillsItemAttributes['default-styling'] ?? true),
                'text-xs font-medium leading-4 capitalize' => ($filterPillsItemAttributes['default-text'] ?? ($filterPillsItemAttributes['default-styling'] ?? true)),
                'bg-cat-300/50 dark:bg-cat-750' => ($filterPillsItemAttributes['default-colors'] ?? true),
            ])
            ->except(['default', 'default-styling', 'default-colors'])
    }}
>
    <span x-text="localFilterTitle + ':&nbsp;'"></span>
    <span {{ $filterPillData->getFilterPillDisplayData() }}></span>
    <x-livewire-tables::tools.filter-pills.buttons.reset-filter :$filterKey :$filterPillData/>
</div>
