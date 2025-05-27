@aware(['localisationPath'])
<button
    x-on:click.prevent="resetAllFilters"
    @class([
        'focus:outline-none active:outline-none'
    ])>
    <span
        {{
            $attributes->merge($this->getFilterPillsResetAllButtonAttributes)
            ->class([
                'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium' => ($this->getFilterPillsResetAllButtonAttributes['default-styling'] ?? true),
                'bg-gray-100 text-gray-800 dark:bg-gray-200 dark:text-gray-900' => ($this->getFilterPillsResetAllButtonAttributes['default-colors'] ?? true),
            ])
            ->except(['default-styling', 'default-colors'])
        }}
    >
        {{ __($localisationPath.'Clear') }}
    </span>
</button>
