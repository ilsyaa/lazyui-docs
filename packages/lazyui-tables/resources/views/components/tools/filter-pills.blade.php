@aware([ 'tableName', 'localisationPath' ])

<div
    {{
        $attributes->merge([
            'wire:loading.class' => $this->displayFilterPillsWhileLoading ? '' : 'invisible',
            'x-cloak',
        ])
        ->class([ 'border border-dashed border-cat-300 dark:border-cat-750 inline-flex items-center flex-wrap gap-1 py-1 px-2 rounded-lg mb-3' ])
    }}
>
    <small class="text-cat-800 dark:text-white">
        {{ __($localisationPath.'Applied Filters') }}:
    </small>
    @tableloop($this->getPillDataForFilter() as $filterKey => $filterPillData)

        @if ($filterPillData->hasCustomPillBlade)
            @include($filterPillData->getCustomPillBlade(), ['filter' => $this->getFilterByKey($filterKey), 'filterPillData' => $filterPillData])
        @else
            <x-livewire-tables::filter-pill :$filterKey :$filterPillData />
        @endif
    @endtableloop

    <x-livewire-tables::tools.filter-pills.buttons.reset-all />
</div>
