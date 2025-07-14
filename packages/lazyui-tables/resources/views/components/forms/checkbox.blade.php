@aware(['tableName','primaryKey'])
@props(['checkboxAttributes'])

<input
    x-cloak
    {{
        $attributes->merge($checkboxAttributes)->class([
            'checked:bg-accent-500 checked:border-accent-500 indeterminate:!border-accent-500 indeterminate:bg-accent-500 hover:before:bg-accent-500/10 before:focus-visible:bg-accent-500/10' => ($checkboxAttributes['default-colors'] ?? ($checkboxAttributes['default'] ?? true)),
            'peer block relative cursor-pointer size-[1rem] m-0.5 bg-transparent border-cat-400 dark:border-cat-500 rounded !ring-offset-transparent focus:ring-transparent disabled:cursor-not-allowed disabled:opacity-50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:size-[1.9rem] disabled:before:bg-transparent' => ($checkboxAttributes['default-styling'] ?? ($checkboxAttributes['default'] ?? true)),
        ])->except(['default','default-styling','default-colors'])
    }}
/>
