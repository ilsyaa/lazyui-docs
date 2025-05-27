@aware([ 'tableName', 'localisationPath'])
<div>
    <select wire:model.live="perPage" id="{{ $tableName }}-perPage"
        {{
            $attributes->merge($this->getPerPageFieldAttributes())
            ->class([
                'block w-full rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:ring focus:ring-opacity-50' => $this->getPerPageFieldAttributes()['default-styling'],
                'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 dark:bg-gray-700 dark:text-white dark:border-gray-600' => $this->getPerPageFieldAttributes()['default-colors'],
            ])
            ->except(['default','default-styling','default-colors'])
        }}
    >
        @foreach ($this->getPerPageAccepted() as $item)
            <option
                value="{{ $item }}"
                wire:key="{{ $tableName }}-per-page-{{ $item }}"
            >
                {{ $item === -1 ? __($localisationPath.'All') : $item }}
            </option>
        @endforeach
    </select>
</div>
