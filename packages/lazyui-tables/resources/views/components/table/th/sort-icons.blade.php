@props(['direction' => 'none', 'customIconAttributes'])

<span class="relative flex items-center" >
    @switch($direction)
        @case('asc')
            <svg
                data-svg="up"
                {{
                    $attributes->merge($customIconAttributes)
                        ->class([
                            'size-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                            'absolute opacity-100 group-hover:rotate-180 transition-transform ease-in-out duration-300',
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
                }}
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            ><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 15l-7-6l-7 6"/></svg>
        @break
        @case('desc')
            <svg
                data-svg="down"
                {{
                    $attributes->merge($customIconAttributes)
                        ->class([
                            'size-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                            'absolute opacity-100 group-hover:opacity-0 transition-opacity ease-in',
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
                }}
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            ><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6"/></svg>
            <svg
                data-svg="-"
                {{
                    $attributes->merge($customIconAttributes)
                        ->class([
                            'size-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                            'absolute opacity-0 group-hover:opacity-100 transition-opacity ease-in',
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
                }}
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M15 12H9"/></g></svg>
        @break
        @default
            <svg
            data-svg="up-down"
                {{
                    $attributes->merge($customIconAttributes)
                        ->class([
                            'size-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                            'absolute opacity-100 group-hover:opacity-0 transition-opacity ease-in',
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
                }}
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M16 18V6m0 0l4 4.125M16 6l-4 4.125" opacity="0.5"/><path d="M8 6v12m0 0l4-4.125M8 18l-4-4.125"/></g></svg>
            <svg
                data-svg="up"
                {{
                    $attributes->merge($customIconAttributes)
                        ->class([
                            'size-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                            'absolute opacity-0 group-hover:opacity-100 transition-opacity ease-in',
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
                }}
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            ><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 15l-7-6l-7 6"/></svg>
        @endswitch
</span>
