@props([
    'selected' => null,
    'showRadio' => true
])

<div x-data="{ selected: '{{ $selected }}', showRadio: {{ $showRadio ? 'true' : 'false' }} }" {{ $attributes }}>
        {{ $slot }}
</div>
