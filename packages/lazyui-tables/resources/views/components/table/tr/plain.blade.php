@props(['customAttributes' => [], 'displayMinimisedOnReorder' => true])

<tr {{ $attributes
        ->merge($customAttributes)
        ->class([
            'laravel-livewire-tables-reorderingMinimised',
            'bg-white dark:bg-gray-700 dark:text-white' => ($customAttributes['default'] ?? true),
        ])
        ->except(['default','default-styling','default-colors'])
    }}
>
    {{ $slot }}
</tr>
