@props([
    'selected' => null,
    'showRadio' => true
])

<div x-data="{ selected: '{{ $selected }}', showRadio: {{ $showRadio ? 'true' : 'false' }} }">
    <div class="space-y-3">
        {{ $slot }}
    </div>
</div>
