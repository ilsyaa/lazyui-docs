@props(['direction' => 'none', 'customIconAttributes'])

<span class="relative flex items-center" >
    @switch($direction)
        @case('asc')
            <svg
                {{
                    $attributes->merge($customIconAttributes)
                        ->class([
                            'w-3 h-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                            'absolute opacity-100 group-hover:opacity-0',
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
                }}
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m12.37 8.165l6.43 6.63c.401.414.158 1.205-.37 1.205H5.57c-.528 0-.771-.79-.37-1.205l6.43-6.63a.5.5 0 0 1 .74 0"/>
            </svg>
            <svg
                {{
                    $attributes->merge($customIconAttributes)
                        ->class([
                            'w-3 h-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                            'absolute opacity-0 group-hover:opacity-100',
                        ])
                        ->except(['default', 'default-colors', 'default-styling', 'wire:key'])
                }}
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m12.37 15.835l6.43-6.63C19.201 8.79 18.958 8 18.43 8H5.57c-.528 0-.771.79-.37 1.205l6.43 6.63c.213.22.527.22.74 0"/>
            </svg>
        @break
        @case('desc')
            {{-- <x-heroicon-o-chevron-down {{ $attributes->merge($customIconAttributes)
                ->class([
                    'w-3 h-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                    'absolute opacity-100 group-hover:opacity-0',
                ])
                ->except(['default', 'default-colors', 'default-styling', 'wire:key']) }}   />
            <x-heroicon-o-x-circle  {{ $attributes->merge($customIconAttributes)
                ->class([
                    'w-3 h-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                    'absolute opacity-0 group-hover:opacity-100',
                ])
                ->except(['default', 'default-colors', 'default-styling', 'wire:key']) }}  /> --}}
        @break
        @default
            {{-- <x-heroicon-o-chevron-up-down {{ $attributes->merge($customIconAttributes)
                ->class([
                    'w-3 h-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                    'absolute opacity-100 group-hover:opacity-0',
                ])
                ->except(['default', 'default-colors', 'default-styling', 'wire:key'])  }}  />
            <x-heroicon-o-chevron-up {{ $attributes->merge($customIconAttributes)
                ->class([
                    'w-3 h-3' => $customIconAttributes['default-styling'] ?? ($customIconAttributes['default'] ?? true),
                    'absolute opacity-0 group-hover:opacity-100',
                ])
                ->except(['default', 'default-colors', 'default-styling', 'wire:key']) }} /> --}}
        @endswitch
</span>
