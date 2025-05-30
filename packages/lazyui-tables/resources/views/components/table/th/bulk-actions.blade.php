@aware(['tableName' ])
@php
    $customAttributes = $this->hasBulkActionsThAttributes ? $this->getBulkActionsThAttributes : $this->getAllThAttributes($this->getBulkActionsColumn())['customAttributes'];
    $bulkActionsThCheckboxAttributes = $this->getBulkActionsThCheckboxAttributes();
@endphp

@if ($this->bulkActionsAreEnabled() && $this->hasBulkActions())
    <x-livewire-tables::table.th.plain  :displayMinimisedOnReorder="true" wire:key="{{ $tableName }}-thead-bulk-actions" :$customAttributes>
        <div
            x-data="{newSelectCount: 0, indeterminateCheckbox: false, bulkActionHeaderChecked: false}"
            x-init="$watch('selectedItems', value => indeterminateCheckbox = (value.length > 0 && value.length < paginationTotalItemCount))"
            x-cloak x-show="currentlyReorderingStatus !== true"
            class="inline-flex"
        >
            <input
                x-init="$watch('indeterminateCheckbox', value => $el.indeterminate = value); $watch('selectedItems', value => newSelectCount = value.length);"
                x-on:click="if(selectedItems.length == paginationTotalItemCount) { $el.indeterminate = false; $wire.clearSelected(); bulkActionHeaderChecked = false; } else { bulkActionHeaderChecked = true; $el.indeterminate = false; $wire.setAllSelected(); }"
                type="checkbox"
                :checked="selectedItems.length == paginationTotalItemCount"
                {{
                    $attributes->merge($bulkActionsThCheckboxAttributes)->class([
                        'checked:bg-accent-500 checked:border-accent-500 indeterminate:!border-accent-500 indeterminate:bg-accent-500 hover:before:bg-accent-500/10 before:focus-visible:bg-accent-500/10' => (($bulkActionsThCheckboxAttributes['default'] ?? true) || ($bulkActionsThCheckboxAttributes['default-colors'] ?? true)),
                        'peer block relative cursor-pointer size-[1rem] m-0.5 bg-transparent border-cat-400 dark:border-cat-500 rounded !ring-offset-transparent focus:ring-transparent disabled:cursor-not-allowed disabled:opacity-50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:size-[1.9rem] disabled:before:bg-transparent' => (($bulkActionsThCheckboxAttributes['default'] ?? true) || ($bulkActionsThCheckboxAttributes['default-styling'] ?? true)),
                    ])->except(['default','default-styling','default-colors'])
                }}
            />
        </div>
    </x-livewire-tables::table.th.plain>
@endif
