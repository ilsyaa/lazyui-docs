@aware(['localisationPath'])
<button
    x-on:click.prevent="resetAllFilters"
    @class([
        'focus:outline-none active:outline-none cursor-pointer'
    ])>
    <span
        {{
            $attributes->merge($this->getFilterPillsResetAllButtonAttributes)
            ->class([
                'inline-flex items-center gap-x-1 px-2 py-1 rounded-lg text-xs font-medium leading-4 capitalize bg-red-400/15 dark:bg-red-400/10 text-red-500' => ($this->getFilterPillsResetAllButtonAttributes['default-styling'] ?? true),
                '' => ($this->getFilterPillsResetAllButtonAttributes['default-colors'] ?? true),
            ])
            ->except(['default-styling', 'default-colors'])
        }}
    >
        {{ __($localisationPath.'Clear') }}
    </span>
</button>
