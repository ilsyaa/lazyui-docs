@aware([ 'tableName'])
@props(['filter', 'filterLayout' => 'popover', 'tableName' => 'table', 'isTailwind' => false, 'isBootstrap' => false, 'isBootstrap4' => false, 'isBootstrap5' => false, 'for' => null])

@php
    $filterLabelAttributes = $filter->getFilterLabelAttributes();
    $customLabelAttributes = $filter->getLabelAttributes();
@endphp

@if($filter->hasCustomFilterLabel() && !$filter->hasCustomPosition())
    @include($filter->getCustomFilterLabel(),['filter' => $filter, 'filterLayout' => $filterLayout, 'tableName' => $tableName, 'customLabelAttributes' => $customLabelAttributes])
@elseif(!$filter->hasCustomPosition())
    <label for="{{ $for ?? $tableName.'-filter-'.$filter->getKey() }}" {{
            $attributes->merge($customLabelAttributes)->merge($filterLabelAttributes)
                ->class([
                    'block text-xs font-medium leading-5' => ($filterLabelAttributes['default-styling'] ?? ($filterLabelAttributes['default'] ?? true)),
                    'text-cat-800 dark:text-white' => ($filterLabelAttributes['default-colors'] ?? ($filterLabelAttributes['default'] ?? true)),
                ])
                ->except(['default', 'default-colors', 'default-styling'])
        }}
    >
        {{ $filter->getName() }}
    </label>
@endif
