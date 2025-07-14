@aware([ 'tableName' ])

@php
    $customAttributes = [
        'wrapper' => $this->getTableWrapperAttributes(),
        'table' => $this->getTableAttributes(),
        'thead' => $this->getTheadAttributes(),
        'tbody' => $this->getTbodyAttributes(),
    ];
@endphp

<div
    wire:key="{{ $tableName }}-twrap"
    {{ $attributes->merge($customAttributes['wrapper'])
        ->class([
            'overflow-y-auto' => $customAttributes['wrapper']['default'] ?? true
        ])
        ->except(['default','default-styling','default-colors']) }}
>
    <table
        wire:key="{{ $tableName }}-table"
        {{ $attributes->merge($customAttributes['table'])
            ->class(['min-w-full divide-y divide-cat-200 dark:divide-none' => $customAttributes['table']['default'] ?? true])
            ->except(['default','default-styling','default-colors']) }}

    >
        <thead wire:key="{{ $tableName }}-thead"
            {{ $attributes->merge($customAttributes['thead'])
                ->class([
                    'bg-cat-200 dark:bg-cat-750' => $customAttributes['thead']['default'] ?? true
                ])
                ->except(['default','default-styling','default-colors']) }}
        >
            <tr>
                {{ $thead }}
            </tr>
        </thead>

        <tbody
            wire:key="{{ $tableName }}-tbody"
            id="{{ $tableName }}-tbody"
            {{ $attributes->merge($customAttributes['tbody'])
                    ->class([
                        '' => $customAttributes['tbody']['default'] ?? true
                    ])
                    ->except(['default','default-styling','default-colors']) }}
        >
            {{ $slot }}
        </tbody>

        @isset($tfoot)
            <tfoot wire:key="{{ $tableName }}-tfoot">
                {{ $tfoot }}
            </tfoot>
        @endisset
    </table>
</div>
