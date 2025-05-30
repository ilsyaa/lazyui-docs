@if ($this->collapsingColumnsAreEnabled && $this->hasCollapsedColumns)
    <th scope="col" :class="{ 'laravel-livewire-tables-reorderingMinimised': ! currentlyReorderingStatus }" {{
        $attributes->merge()
            ->class([
                'table-cell bg-cat-200 dark:bg-cat-750 laravel-livewire-tables-reorderingMinimised',
                'sm:hidden' => !$this->shouldCollapseOnTablet && !$this->shouldCollapseAlways,
                'md:hidden' => !$this->shouldCollapseOnMobile && !$this->shouldCollapseOnTablet && !$this->shouldCollapseAlways,
                'lg:hidden' => !$this->shouldCollapseAlways,
            ])
        }}></th>
@endif
