@aware(['tableName','primaryKey'])
@props(['checkboxAttributes'])
<input x-cloak
    {{
        $attributes->merge($checkboxAttributes)->class([
            'border-gray-300 text-indigo-600 focus:border-indigo-300 focus:ring-indigo-200 dark:bg-gray-900 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:bg-gray-600' => ($checkboxAttributes['default-colors'] ?? ($checkboxAttributes['default'] ?? true)),
            'rounded shadow-sm transition duration-150 ease-in-out focus:ring focus:ring-opacity-50' => ($checkboxAttributes['default-styling'] ?? ($checkboxAttributes['default'] ?? true)),
        ])->except(['default','default-styling','default-colors'])
    }}
/>
