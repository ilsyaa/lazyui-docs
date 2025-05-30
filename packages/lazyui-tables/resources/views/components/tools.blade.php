<div {{
    $attributes->merge($this->getToolsAttributes)
        ->class([
            'flex-col pt-5 mb-4 px-5' => ($this->getToolsAttributes['default-styling'] ?? true),
        ])
        ->except(['default','default-styling','default-colors'])
    }}
>
    {{ $slot }}
</div>
