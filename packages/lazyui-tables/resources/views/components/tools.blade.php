<div {{
    $attributes->merge($this->getToolsAttributes)
        ->class([
            'flex-col' => ($this->getToolsAttributes['default-styling'] ?? true),
        ])
        ->except(['default','default-styling','default-colors'])
    }}
>
    {{ $slot }}
</div>
