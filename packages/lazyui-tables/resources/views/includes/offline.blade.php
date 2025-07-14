@aware(['localisationPath'])
@if ($this->offlineIndicatorIsEnabled())
    <div wire:offline.class.remove="hidden" class="hidden">
        <div class="rounded-md bg-red-100 p-4 mb-4 dark:border-red-800 dark:bg-red-500">
            <div class="flex">
                <div class="flex-shrink-0">
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800 dark:text-white">
                        {{ __($localisationPath.'You are not connected to the internet') }}.
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endif
