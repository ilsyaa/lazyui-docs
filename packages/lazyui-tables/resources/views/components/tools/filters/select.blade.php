<div>
    <x-livewire-tables::tools.filter-label :$filter :$filterLayout :$tableName />

    <div>
        <select
            {!! $filter->getWireMethod('filterComponents.'.$filter->getKey()) !!}
            {{
                $filterInputAttributes->merge()
                ->class([
                    'appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none scheme-light dark:scheme-dark block w-full px-3 py-2 text-sm rounded-md placeholder:text-cat-500 focus:ring-[1.7px] focus:outline-none focus:ring-cat-700 dark:focus:ring-cat-200 focus:border-transparent transition duration-150 ease-in-out bg-white dark:bg-cat-700/10 border border-cat-300 dark:border-cat-700/50 dark:[&>option]:bg-cat-800 disabled:cursor-not-allowed disabled:opacity-50' => ($filterInputAttributes['default-styling'] ?? true),
                    '' => ($filterInputAttributes['default-colors'] ?? true),
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
