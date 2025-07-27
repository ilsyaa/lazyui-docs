@props([
    'variant' => 'default',
    'size' => 'md',
])

@php
    $base =
        'inline-flex items-center rounded-md font-semibold focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';

    $variantClasses = [
        'default' => 'bg-cat-900 dark:bg-white text-white dark:text-cat-900',
        'destructive' => 'bg-red-600 dark:bg-red-700 text-white',
        'outline' => 'border border-cat-300 dark:border-cat-700',
        'secondary' => 'bg-cat-300 dark:bg-cat-700 text-cat-900 dark:text-white',
    ];

    $sizeClasses = [
        'xs' => 'px-2 py-0.5 text-[10px]',
        'sm' => 'px-2.5 py-0.5 text-xs',
        'md' => 'px-3 py-1 text-xs',
        'lg' => 'px-3.5 py-1.5 text-sm',
        'xl' => 'px-4 py-2 text-base',
    ];
@endphp

<span
    {{ $attributes->twMerge(
        $base,
        $variantClasses[$variant] ?? $variantClasses['default'],
        $sizeClasses[$size] ?? $sizeClasses['md'],
    ) }}>
    {{ $slot }}
</span>
