@aware([ 'tableName', 'localisationPath' ])

<div>
    @if ($this->sortingPillsAreEnabled() && $this->hasSorts())
        <div class="border border-dashed border-cat-300 dark:border-cat-750 inline-flex items-center flex-wrap gap-1 py-1 px-2 rounded-lg mb-3" x-cloak x-show="!currentlyReorderingStatus">
            <small class="text-cat-800 dark:text-white">{{ __($localisationPath.'Applied Sorting') }}:</small>

            @foreach($this->getSorts() as $columnSelectName => $direction)
                @php($column = $this->getColumnBySelectName($columnSelectName) ?? $this->getColumnBySlug($columnSelectName))

                @continue(is_null($column))
                @continue($column->isHidden())
                @continue($this->columnSelectIsEnabled && ! $this->columnSelectIsEnabledForColumn($column))

                <span
                    wire:key="{{ $tableName }}-sorting-pill-{{ $columnSelectName }}"
                    {{
                        $attributes->merge($this->getSortingPillsItemAttributes())
                        ->class([
                            'inline-flex items-center gap-x-1 px-2 py-1 rounded-lg text-xs font-medium leading-4 capitalize' => $this->getSortingPillsItemAttributes()['default-styling'],
                            'bg-cat-300/50 dark:bg-cat-750' => $this->getSortingPillsItemAttributes()['default-colors'],
                        ])
                        ->except(['default-styling', 'default-colors'])
                    }}
                >
                    {{ $column->getSortingPillTitle() }}: {{ $column->getSortingPillDirectionLabel($direction, $this->getDefaultSortingLabelAsc, $this->getDefaultSortingLabelDesc) }}

                    <button
                        wire:click="clearSort('{{ $columnSelectName }}')"
                        type="button"
                        {{
                            $attributes->merge($this->getSortingPillsClearSortButtonAttributes())
                            ->class([
                                'flex-shrink-0 size-3.5 rounded-full inline-flex items-center justify-center focus:outline-none cursor-pointer' => $this->getSortingPillsClearSortButtonAttributes()['default-styling'],
                                'text-cat-200 bg-cat-500 dark:bg-cat-700 hover:text-cat-300' => $this->getSortingPillsClearSortButtonAttributes()['default-colors'],
                            ])
                            ->except(['default-styling', 'default-colors'])
                        }}
                    >
                        <span class="sr-only">{{ __($localisationPath.'Remove sort option') }}</span>
                        <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"></path>
                        </svg>
                    </button>
                </span>
            @endforeach

            <button
                wire:click.prevent="clearSorts"
                class="focus:outline-none active:outline-none cursor-pointer"
            >
                <span
                    {{
                        $attributes->merge($this->getSortingPillsClearAllButtonAttributes())
                        ->class([
                            'inline-flex items-center gap-x-1 px-2 py-1 rounded-lg text-xs font-medium leading-4 capitalize' => $this->getSortingPillsClearAllButtonAttributes()['default-styling'],
                            'bg-red-400/15 dark:bg-red-400/10 text-red-500' => $this->getSortingPillsClearAllButtonAttributes()['default-colors'],
                        ])
                        ->except(['default-styling', 'default-colors'])
                    }}
                >
                    {{ __($localisationPath.'Clear') }}
                </span>
            </button>
        </div>
    @endif
</div>
