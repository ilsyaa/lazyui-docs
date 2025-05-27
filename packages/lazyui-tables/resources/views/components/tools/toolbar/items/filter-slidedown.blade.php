@aware([ 'tableName' ])
@props([])

<div x-cloak x-show="filtersOpen"
    {{
        $attributes
            ->merge($this->getFilterSlidedownWrapperAttributes)
            ->merge([
                'x-transition:enter' => 'transition ease-out duration-100',
                'x-transition:enter-start' => 'transform opacity-0',
                'x-transition:enter-end' => 'transform opacity-100',
                'x-transition:leave' => 'transition ease-in duration-75',
                'x-transition:leave-start' => 'transform opacity-100',
                'x-transition:leave-end' => 'transform opacity-0',
            ])
            ->except(['default','default-colors','default-styling'])
    }}
>
    @foreach ($this->getFiltersByRow() as $filterRowIndex => $filtersInRow)
        @php($defaultAttributes = $this->getFilterSlidedownRowAttributes($filterRowIndex))
        <div {{ $attributes
            ->merge($defaultAttributes)
            ->merge([
                'row' => $filterRowIndex,
            ])
            ->class([
                'grid grid-cols-12 gap-6 px-4 py-2 mb-2' => ($defaultAttributes['default-styling'] ?? true),
            ])
            ->except(['default','default-colors','default-styling'])
        }}
        >
            @foreach ($filtersInRow as $filter)
                <div
                    @class([
                        'space-y-1 col-span-12',
                        'sm:col-span-6 md:col-span-4 lg:col-span-2' => !$filter->hasFilterSlidedownColspan(),
                        'sm:col-span-12 md:col-span-8 lg:col-span-4' => $filter->hasFilterSlidedownColspan() && $filter->getFilterSlidedownColspan() === 2,
                        'sm:col-span-9 md:col-span-4 lg:col-span-3' => $filter->hasFilterSlidedownColspan() && $filter->getFilterSlidedownColspan() === 3,
                    ])
                    id="{{ $tableName }}-filter-{{ $filter->getKey() }}-wrapper"
                >
                    {{ $filter->setGenericDisplayData($this->getFilterGenericData)->render() }}
                </div>
            @endforeach
        </div>
    @endforeach
</div>
