@props([
    'placement' => 'bottom',
    'offset' => 8,
    'noscroll' => false,
    'trigger' => 'click',
    'class' => ''
])


<div x-data="{
    _isOpen: false,
    _isHovered: false,
    _timer: null,
    open() {
        this._isHovered = true;
        this._isOpen = true;
        if (this._timer) clearTimeout(this._timer);
    },
    close() {
        this._isHovered = false;
        this._timer = setTimeout(() => {
            if (!this._isHovered) {
                this._isOpen = false;
            }
        }, 500);
    },
    toggle() {
        this._isOpen = !this._isOpen;
    }
}">
    <div
        x-ref="button"
        @if ($trigger == 'hover')
        x-on:mouseenter="open()"
        x-on:mouseleave="close()"
        @else
        x-on:click="toggle()"
        @endif
    >
        {{ $toggle }}
    </div>

    <div
        x-show="_isOpen"
        x-transition:enter="transition ease-out duration-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:enter-start="transform opacity-0 scale-75"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-75"
        @if ($noscroll) x-trap.inert.noscroll="_isOpen" @endif
        @if ($trigger === 'hover')
        x-on:mouseenter="open()"
        x-on:mouseleave="close()"
        @else
        x-on:click.outside="_isOpen = false"
        @endif
        @keydown.escape.window="_isOpen = false"
        x-anchor.{{ $placement }}.offset.{{ $offset }}.ref="$refs.button"
        @class([
            'z-[61] bg-white/90 lazy-shadow-overlay rounded-xl dark:bg-cat-800/90 backdrop-blur lazy-gradient',
            'origin-top-left' => $placement === 'bottom-start',
            'origin-top-right' => $placement === 'bottom-end',
            'origin-bottom-left' => $placement === 'top-start',
            'origin-bottom-right' => $placement === 'top-end',
            $class
        ])
        x-cloak
    >
        {{ $content }}
    </div>
</div>

