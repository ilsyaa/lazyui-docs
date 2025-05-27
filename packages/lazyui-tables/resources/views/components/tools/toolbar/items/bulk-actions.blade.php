@aware([ 'tableName', 'localisationPath' ])
<div
    x-data="{ open: false, childElementOpen: false, isTailwind: @js($isTailwind), isBootstrap: @js($isBootstrap) }"
    x-cloak x-show="(selectedItems.length > 0 || hideBulkActionsWhenEmpty == false)"
    class="w-full md:w-auto mb-4 md:mb-0"
>
    <div class="relative inline-block text-left z-10 w-full md:w-auto" >
        <button
            {{
                $attributes->merge($this->getBulkActionsButtonAttributes)
                ->class([
                    'border-gray-300 bg-white text-gray-700 hover:bg-gray-50 focus:border-indigo-300 focus:ring-indigo-200 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600' => ($this->getBulkActionsButtonAttributes['default-colors'] ?? true),
                    'inline-flex justify-center w-full rounded-md border shadow-sm px-4 py-2 text-sm font-medium focus:ring focus:ring-opacity-50' => ($this->getBulkActionsButtonAttributes['default-styling'] ?? true),

                ])
                ->except(['default','default-styling','default-colors'])
            }}
            type="button"
            id="{{ $tableName }}-bulkActionsDropdown"
            x-on:click="open = !open"
            aria-haspopup="true" aria-expanded="false"
        >
            {{ __($localisationPath.'Bulk Actions') }}
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M5 6.25a.75.75 0 0 0-.488 1.32l7 6c.28.24.695.24.976 0l7-6A.75.75 0 0 0 19 6.25z" opacity="0.5"/><path fill="currentColor" fill-rule="evenodd" d="M4.43 10.512a.75.75 0 0 1 1.058-.081L12 16.012l6.512-5.581a.75.75 0 1 1 .976 1.139l-7 6a.75.75 0 0 1-.976 0l-7-6a.75.75 0 0 1-.081-1.058" clip-rule="evenodd"/></svg>
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
            class="origin-top-right absolute right-0 mt-2 w-full md:w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none z-50"
        >
            <div
                {{
                    $attributes->merge($this->getBulkActionsMenuAttributes)
                    ->class([
                        'bg-white dark:bg-gray-700 dark:text-white' => $isTailwind && ($this->getBulkActionsMenuAttributes['default-colors'] ?? true),
                        'rounded-md shadow-xs' => $isTailwind && ($this->getBulkActionsMenuAttributes['default-styling'] ?? true),
                    ])
                    ->except(['default','default-styling','default-colors'])
                }}
            >
                <div class="py-1" role="menu" aria-orientation="vertical">
                    @foreach ($this->getBulkActions() as $action => $title)
                        <button
                            wire:click="{{ $action }}"
                            @if($this->hasConfirmationMessage($action))
                                wire:confirm="{{ $this->getBulkActionConfirmMessage($action) }}"
                            @endif
                            wire:key="{{ $tableName }}-bulk-action-{{ $action }}"
                            type="button"
                            role="menuitem"
                            {{
                                $attributes->merge($this->getBulkActionsMenuItemAttributes)
                                ->class([
                                    'text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-100 focus:text-gray-900 dark:text-white dark:hover:bg-gray-600' => $isTailwind && ($this->getBulkActionsMenuItemAttributes['default-colors'] ?? true),
                                    'block w-full px-4 py-2 text-sm leading-5 focus:outline-none flex items-center space-x-2' => $isTailwind && ($this->getBulkActionsMenuItemAttributes['default-styling'] ?? true),
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
