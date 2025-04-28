@props([
    'options' => []
])

<div
    x-data="{
        _isOpen: false,
        _options: @js($options),
        _search: '',

        init() {
            this.$nextTick(() => {
                const currentValue = this.$refs.selectOrigin.value;
                const querySelectOptions = Array.from(this.$refs.selectOrigin.querySelectorAll('option'));
                const hasMatchingOption = querySelectOptions.some(option => option.value === currentValue);
                if (querySelectOptions.length > 1) {
                    this._options = querySelectOptions.map((option, i) => ({
                        index: i,
                        value: option.value,
                        html: option.innerHTML,
                        selected: hasMatchingOption ? option.value === currentValue : option.hasAttribute('selected')
                    }));
                }
            });


            this.$watch('_options', (value) => {
                this.$refs.selectOrigin.value = value.find((option) => option.selected).value;
                this.$refs.selectOrigin.dispatchEvent(new Event('change', { bubbles: true }));
            });

            this.$watch('_isOpen', (value) => {
                if (value) {
                    if(window.matchMedia('(min-width: 768px)').matches) {
                        this.$nextTick(() => {
                            this.$refs.search?.focus();
                        });
                    }
                    this._search = '';
                }
            });
        },

        toggle() {
            this._isOpen = !this._isOpen;
        },

        getSelected(key = null) {
            const selectedOption = this._options.find(option => option.selected);
            if (key) {
                return selectedOption ? selectedOption[key] : '';
            } else {
                return selectedOption;
            }
        },

        setSelected(index) {
            this._options = this._options.map((option, i) => ({
                ...option,
                selected: i === index
            }));
        },

        getFilteredOptions() {
            if (this._search.trim() === '') {
                return this._options;
            }
            return this._options.filter(option => option.html.toLowerCase().includes(this._search.toLowerCase()));
        },
    }"
    class="relative w-full"
    x-on:keydown.escape.prevent="_isOpen = false"
    x-on:keydown.enter.prevent="toggle()"
>
    <select class="sr-only" tabindex="-1" aria-hidden="true" x-ref="selectOrigin" {{ $attributes->only(['x-model', 'wire:model', 'name']) }}>
        {{ $slot }}
    </select>

    <div class="w-full">
        <input
            x-bind:class="{'ring-2 ring-cat-700 dark:ring-cat-200': _isOpen}"
            x-bind:value="getSelected('html')"
            x-ref="toggle"
            class="cursor-auto appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none scheme-light dark:scheme-dark block w-full px-3 py-2.5 text-sm rounded-md placeholder:text-cat-500 focus:ring-[1.7px] focus:outline-none focus:ring-cat-700 dark:focus:ring-cat-200 focus:border-transparent transition duration-150 ease-in-out bg-white dark:bg-cat-700/10 border border-cat-300 dark:border-cat-700/50 file:border-0 file:bg-transparent file:px-1 file:rounded file:text-sm file:font-medium disabled:cursor-not-allowed disabled:opacity-50"
            readonly
            x-on:focus="$nextTick(() => {
                const el = $event.target;
                const val = el.value;
                el.value = '';
                el.value = val;
            })"
            {{ $attributes->except(['x-model', 'wire:model', 'name']) }}
            x-on:click="toggle()"
        />
        <div
            x-ref="dropdown"
            x-show="_isOpen"
            x-cloak
            x-anchor.bottom.offset.8="$refs.toggle"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            role="listbox"
            class="z-[61] bg-white/90 rounded-md dark:bg-cat-800/90 backdrop-blur w-full shadow"
            x-on:click.outside="_isOpen = false"
        >
            <div class="p-1 pb-0">
                <input type="text" x-ref="search" placeholder="Start typing to search..." class="px-2 w-full rounded-md border-transparent bg-transparent focus:ring-0 focus-within:ring-0 text-sm" x-model="_search" />
            </div>
            <ul class="[&::-webkit-scrollbar]:!w-1 overflow-y-auto max-h-60 flex flex-col gap-y-1 p-1">
                <template x-for="opt of getFilteredOptions()" :key="opt.index">
                    <li
                        :class="{
                            'bg-cat-300/50 dark:bg-cat-700/30': getSelected('index') === opt.index
                        }"
                        class="px-2.5 py-2 rounded-lg text-sm w-full cursor-pointer hover:bg-cat-300/30 dark:hover:bg-cat-700/15 select-none"
                        x-on:click="setSelected(opt.index); _isOpen = false;"
                        role="option"
                    >
                        <div x-text="opt.html"></div>
                    </li>
                </template>
                <template x-if="getFilteredOptions().length === 0">
                    <div class="px-2 py-10 text-sm text-center">
                        No options found
                    </div>
                </template>
            </ul>
        </div>
    </div>
</div>
