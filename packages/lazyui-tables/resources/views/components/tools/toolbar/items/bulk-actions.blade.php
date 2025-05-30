@aware([ 'tableName', 'localisationPath' ])
<div
    x-data="{ open: false, childElementOpen: false }"
    x-cloak x-show="(selectedItems.length > 0 || hideBulkActionsWhenEmpty == false)"
    class="w-full md:w-auto mb-4 md:mb-0"
>
    <div class="relative inline-block text-left z-10 w-full md:w-auto" >
        <button
            {{
                $attributes->merge($this->getBulkActionsButtonAttributes)
                ->class([
                    'relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors cursor-pointer focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50',
                    'h-9 w-full px-4 py-2',
                    'bg-cat-900 dark:bg-white text-white dark:text-cat-900 shadow hover:bg-cat-800/90 dark:hover:bg-white/90'
                ])
                ->except(['default','default-styling','default-colors'])
            }}
            type="button"
            id="{{ $tableName }}-bulkActionsDropdown"
            x-on:click="open = !open"
            aria-haspopup="true" aria-expanded="false"
        >
            {{ __($localisationPath.'Bulk Actions') }}
            <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <div
            x-on:click.away="if (!childElementOpen) { open = false }"
            @keydown.window.escape="if (!childElementOpen) { open = false }"
            x-cloak x-show="open"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="origin-top-right absolute right-0 mt-2 w-full md:w-48 focus:outline-none z-50"
        >
            <div
                {{
                    $attributes->merge($this->getBulkActionsMenuAttributes)
                    ->class([
                        'bg-white dark:bg-cat-800 lazy-gradient overflow-hidden' => ($this->getBulkActionsMenuAttributes['default-colors'] ?? true),
                        'rounded-md shadow-xs' => ($this->getBulkActionsMenuAttributes['default-styling'] ?? true),
                    ])
                    ->except(['default','default-styling','default-colors'])
                }}
            >
                <div class="p-1" role="menu" aria-orientation="vertical">
                    @foreach ($this->getBulkActions() as $action => $title)
                        <button
                            @if($this->hasConfirmationMessage($action))
                            onclick="window.zalert ? zalert({
                                type: 'info',
                                text: '{{ $this->getBulkActionConfirmMessage($action) }}',
                                confirmText: 'Confirm',
                                cancelText: 'Cancel',
                            }).then((res) => {
                                if (res?.confirmed) {
                                    @this.call('{{ $action }}')
                                }
                            }) : confirm('{{ $this->getBulkActionConfirmMessage($action) }}') && @this.call('{{ $action }}')"
                            @else
                            wire:click="{{ $action }}"
                            @endif
                            wire:key="{{ $tableName }}-bulk-action-{{ $action }}"
                            type="button"
                            role="menuitem"
                            {{
                                $attributes->merge($this->getBulkActionsMenuItemAttributes)
                                ->class([
                                    'hover:bg-cat-300/50 dark:hover:bg-cat-700/50 focus-visible:bg-cat-300/50 dark:focus-visible:bg-cat-700/50' => ($this->getBulkActionsMenuItemAttributes['default-colors'] ?? true),
                                    'flex items-center gap-2 py-2 px-2.5 rounded-lg text-sm focus-visible:outline-none focus-visible:ring-0 w-full cursor-pointer' => ($this->getBulkActionsMenuItemAttributes['default-styling'] ?? true),
                                ])
                                ->except(['default','default-styling','default-colors'])
                            }}
                        >
                            <span>{{ $title }}</span>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
