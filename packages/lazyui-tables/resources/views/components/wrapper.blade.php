@props(['component', 'tableName', 'primaryKey'])

<div wire:key="{{ $tableName }}-wrapper" class="border border-cat-200 dark:border-transparent bg-white dark:bg-cat-800 shadow rounded-xl" >
    <div {{ $attributes->merge($this->getComponentWrapperAttributes()) }}
        @if ($this->hasRefresh()) wire:poll{{ $this->getRefreshOptions() }} @endif
        @if ($this->isFilterLayoutSlideDown()) wire:ignore.self @endif>

        <div>
        @if ($this->debugIsEnabled())
            @include('livewire-tables::includes.debug')
        @endif
        @if ($this->offlineIndicatorIsEnabled())
            @include('livewire-tables::includes.offline')
        @endif

            {{ $slot }}
        </div>
    </div>
</div>
