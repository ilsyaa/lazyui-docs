@props([
    'placement' => 'top-right',
    'max' => 4,
    'duration' => 3000
])

@php
    $classPlacement = [
        'top-right' => 'right-0 top-0 sm:mt-6 sm:mr-6',
        'top-left' => 'left-0 top-0 sm:mt-6 sm:ml-6',
        'top-center' => 'left-1/2 -translate-x-1/2 top-0 sm:mt-6',
        'bottom-right' => 'right-0 bottom-0 sm:mb-6 sm:mr-6',
        'bottom-left' => 'left-0 bottom-0 sm:mb-6 sm:ml-6',
        'bottom-center' => 'left-1/2 -translate-x-1/2 bottom-0 sm:mb-6',
    ]
@endphp

<div
    {{
        $attributes
            ->twMerge([ 'fixed block w-full z-[99] sm:max-w-2xs transition-all duration-300 ease-out', $classPlacement[$placement] ?? $classPlacement['top-right'] ])
    }}
    data-lazy-toast='@json(["placement" => $placement, "max" => $max, "duration" => $duration])'
    aria-label="LazyToast Notification"
    tabindex="-1"
></div>

<script> document.addEventListener('toast', ({ detail }) => { detail.forEach(d => { toast(d); }); }); </script>
@if (session('toast')) <script> document.addEventListener('DOMContentLoaded', () => { toast(@js(session('toast'))); }) </script> @endif
