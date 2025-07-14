@aware(['tableName', 'localisationPath'])
@props(['filterKey', 'filterPillData'])

@php
    $filterButtonAttributes = $filterPillData->getCalculatedCustomResetButtonAttributes($filterKey,$this->getFilterPillsResetFilterButtonAttributes);
@endphp
<button
    {{
        $attributes->merge($filterButtonAttributes)
        ->class([
            'flex-shrink-0 size-3.5 rounded-full inline-flex items-center justify-center text-cat-200 bg-cat-500 dark:bg-cat-700 hover:text-cat-300 focus:outline-none focus:text-white cursor-pointer' => $filterButtonAttributes['default-styling'],
            '' => $filterButtonAttributes['default-colors'],
        ])
        ->except(['default', 'default-colors', 'default-styling', 'default-text'])
    }}
>
    <span class="sr-only">{{ __($localisationPath.'Remove filter option') }}</span>
    <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"></path>
    </svg>
</button>
