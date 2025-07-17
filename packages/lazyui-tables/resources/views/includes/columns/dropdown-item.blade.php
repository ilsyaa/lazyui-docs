@if ($type === 'a')
    <a
        role="menuitem"
        tabindex="-1"
        @class([
            'flex items-center gap-2 py-1.5 px-2.5 rounded-lg hover:bg-cat-300/50 dark:hover:bg-cat-700/50 text-sm focus-visible:outline-none focus-visible:ring-0 focus-visible:bg-cat-300/50 dark:focus-visible:bg-cat-700/50 w-full cursor-pointer',
            $attributes['class'] ?? '',
        ])
        {!! count($attributes) ? $column->arrayToAttributes(collect($attributes)->except('class', 'role', 'tabindex')->all()) : '' !!}
    >{{ $title }}</a>
@elseif ($type === 'button')
    <button
        type="button"
        role="menuitem"
        tabindex="-1"
        @if ($confirmMessage && $handleFunction)
            onclick="window.zalert ? zalert({
                type: 'info',
                text: '{{ $confirmMessage }}',
                confirmText: '{{__('livewire-tables::core.Confirm')}}',
                cancelText: '{{__('livewire-tables::core.Cancel')}}',
            }).then((res) => {
                if (res?.confirmed) {
                    @this.call('{{ $handleFunction }}', '{{ $row->getKey() }}')
                }
            }) : confirm('{{ $confirmMessage }}') && @this.call('{{ $handleFunction }}', '{{ $row->getKey() }}')"
        @endif
        @class([
            'flex items-center gap-2 py-1.5 px-2.5 rounded-lg hover:bg-cat-300/50 dark:hover:bg-cat-700/50 text-sm focus-visible:outline-none focus-visible:ring-0 focus-visible:bg-cat-300/50 dark:focus-visible:bg-cat-700/50 w-full cursor-pointer',
            $attributes['class'] ?? '',
        ])
        {!! count($attributes) ? $column->arrayToAttributes(collect($attributes)->except('class', 'type', 'role', 'tabindex')->all()) : '' !!}
    >{{ $title }}</button>
@endif
