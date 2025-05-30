@aware([ 'tableName' ])
@props(['rowIndex', 'hidden' => false])

@if ($this->collapsingColumnsAreEnabled && $this->hasCollapsedColumns)
    <td x-data="{open:false}" wire:key="{{ $tableName }}-collapsingIcon-{{ $rowIndex }}-{{ md5(now()) }}"
        {{
            $attributes
                ->merge()
                ->class([
                    'p-3 table-cell text-center',
                    'sm:hidden' => !$this->shouldCollapseAlways() && !$this->shouldCollapseOnTablet(),
                    'md:hidden' => !$this->shouldCollapseAlways() && !$this->shouldCollapseOnTablet() && $this->shouldCollapseOnMobile(),
                    'lg:hidden' => !$this->shouldCollapseAlways() && ($this->shouldCollapseOnTablet() || $this->shouldCollapseOnMobile()),
                ])
        }}
        :class="currentlyReorderingStatus ? 'laravel-livewire-tables-reorderingMinimised' : ''"
    >
        @if (! $hidden)
            <button
                x-cloak x-show="!currentlyReorderingStatus"
                x-on:click.prevent="$dispatch('toggle-row-content', {'tableName': '{{ $tableName }}', 'row': {{ $rowIndex }}}); open = !open"
                class="cursor-pointer"
            >
                <svg
                    class="size-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    x-cloak
                    x-show="!open"
                    {{
                        $attributes->merge($this->getCollapsingColumnButtonExpandAttributes)
                            ->class([
                                'h-6 w-6' => ($this->getCollapsingColumnButtonExpandAttributes['default-styling'] ?? true),
                                'text-cat-800 dark:text-white' => ($this->getCollapsingColumnButtonExpandAttributes['default-colors'] ?? true),
                            ])
                            ->except(['default','default-styling','default-colors'])
                    }}
                ><g fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10" opacity="0.5"/><path stroke-linecap="round" d="M15 12h-3m0 0H9m3 0V9m0 3v3"/></g></svg>

                <svg
                    class="size-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    x-cloak
                    x-show="open"
                    {{
                        $attributes->merge($this->getCollapsingColumnButtonExpandAttributes)
                            ->class([
                                'h-6 w-6' => ($this->getCollapsingColumnButtonExpandAttributes['default-styling'] ?? true),
                                'text-cat-800 dark:text-white' => ($this->getCollapsingColumnButtonExpandAttributes['default-colors'] ?? true),
                            ])
                            ->except(['default','default-styling','default-colors'])
                    }}
                ><g fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10" opacity="0.5"/><path stroke-linecap="round" d="M15 12H9"/></g></svg>
            </button>
        @endif
    </td>
@endif
