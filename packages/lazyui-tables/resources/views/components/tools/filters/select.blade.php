<div>
    <x-livewire-tables::tools.filter-label :$filter :$filterLayout :$tableName />

    <div class="rounded-md shadow-sm">
        <select
            {!! $filter->getWireMethod('filterComponents.'.$filter->getKey()) !!}
            {{
                $filterInputAttributes->merge()
                ->class([
                    'block w-full transition duration-150 ease-in-out rounded-md shadow-sm focus:ring focus:ring-opacity-50' => ($filterInputAttributes['default-styling'] ?? true),
                    'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 dark:bg-gray-800 dark:text-white dark:border-gray-600' => ($filterInputAttributes['default-colors'] ?? true),
                ])
                ->except(['default-styling','default-colors'])
            }}>
            @foreach($filter->getOptions() as $key => $value)
                @if (is_iterable($value))
                    <optgroup label="{{ $key }}">
                        @foreach ($value as $optionKey => $optionValue)
                            <option value="{{ $optionKey }}">{{ $optionValue }}</option>
                        @endforeach
                    </optgroup>
                @else
                    <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
