@aware([ 'tableName', 'localisationPath'])
<div>
    <select wire:model.live="perPage" id="{{ $tableName }}-perPage"
        {{
            $attributes->merge($this->getPerPageFieldAttributes())
            ->class([
                'appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none scheme-light dark:scheme-dark block w-full px-3 py-2 pr-7 text-sm rounded-md placeholder:text-cat-500 focus:ring-[1.7px] focus:outline-none focus:ring-cat-700 dark:focus:ring-cat-200 focus:border-transparent transition duration-150 ease-in-out bg-white dark:bg-cat-700/10 border border-cat-300 dark:border-cat-700/50 dark:[&>option]:bg-cat-800 disabled:cursor-not-allowed disabled:opacity-50' => $this->getPerPageFieldAttributes()['default-styling'],
                '' => $this->getPerPageFieldAttributes()['default-colors'],
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
