<div
    x-data="{
        __showFallback: false,
        __showImage: false,
        __applyState() {
            if (!$refs.image) {
                this.__showFallback = true;
                return
            }
            if (!$refs.image.complete) return

            this.__showFallback = $refs.image.naturalWidth === 0 || $refs.image.naturalHeight === 0
            this.__showImage = !this.__showFallback
        },
    }"
    x-init="$nextTick(() => __applyState())"
    {!! count($attributes) ? $column->arrayToAttributes($attributes) : '' !!}
>
    <img
        x-show="__showImage"
        x-ref="image"
        x-cloak
        x-init="$el.addEventListener('error', () => __applyState());
        $el.addEventListener('load', () => __applyState());"
        src="{{ $path }}"
        class="w-full h-full object-cover object-center"
    />
    <span
        x-cloak
        x-show="__showFallback"
        class="flex h-full w-full items-center justify-center bg-cat-300 dark:bg-cat-750 select-none"
    >
        {{
            collect(explode(' ', $attributes['alt'] ?? '-'))
                ->map(fn($word) => strtoupper(substr($word, 0, 1)))
                ->take(2)
                ->implode('')
        }}
    </span>
</div>
