@aware(['localisationPath'])
@props(['currentRows'])
@includeWhen(
    $this->hasConfigurableAreaFor('before-pagination'),
    $this->getConfigurableAreaFor('before-pagination'),
    $this->getParametersForConfigurableArea('before-pagination')
)

<div {{ $this->getPaginationWrapperAttributesBag() }}>
    @if ($this->paginationVisibilityIsEnabled())
        <div class="py-3 p-5 sm:flex justify-between items-center space-y-4 sm:space-y-0">
            <div>
                @if ($this->paginationIsEnabled && $this->isPaginationMethod('standard') && $currentRows->lastPage() > 1 && $this->showPaginationDetails)
                    <p class="paged-pagination-results text-sm text-cat-700 leading-5 dark:text-white">
                            <span>{{ __($localisationPath.'Showing') }}</span>
                            <span class="font-medium">{{ $currentRows->firstItem() }}</span>
                            <span>{{ __($localisationPath.'to') }}</span>
                            <span class="font-medium">{{ $currentRows->lastItem() }}</span>
                            <span>{{ __($localisationPath.'of') }}</span>
                            <span class="font-medium"><span x-text="paginationTotalItemCount"></span></span>
                            <span>{{ __($localisationPath.'results') }}</span>
                    </p>
                @elseif ($this->paginationIsEnabled && $this->isPaginationMethod('simple') && $this->showPaginationDetails)
                    <p class="paged-pagination-results text-sm text-cat-700 leading-5 dark:text-white">
                        <span>{{ __($localisationPath.'Showing') }}</span>
                        <span class="font-medium">{{ $currentRows->firstItem() }}</span>
                        <span>{{ __($localisationPath.'to') }}</span>
                        <span class="font-medium">{{ $currentRows->lastItem() }}</span>
                    </p>
                @elseif ($this->paginationIsEnabled && $this->isPaginationMethod('cursor'))
                @else
                    @if($this->showPaginationDetails)
                        <p class="total-pagination-results text-sm text-cat-700 leading-5 dark:text-white">
                            <span>{{ __($localisationPath.'Showing') }}</span>
                            <span class="font-medium">{{ $currentRows->count() }}</span>
                            <span>{{ __($localisationPath.'results') }}</span>
                        </p>
                    @endif
                @endif
            </div>

            @if ($this->paginationIsEnabled)
                {{ $currentRows->onEachSide(0)->links('livewire-tables::specific.tailwind.'.(!$this->isPaginationMethod('standard') ? 'simple-' : '').'pagination') }}
            @endif
        </div>
    @endif
</div>

@includeWhen(
    $this->hasConfigurableAreaFor('after-pagination'),
    $this->getConfigurableAreaFor('after-pagination'),
    $this->getParametersForConfigurableArea('after-pagination')
)
