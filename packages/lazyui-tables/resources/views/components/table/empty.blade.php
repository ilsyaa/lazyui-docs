@php($attributes = $attributes->merge(['wire:key' => 'empty-message-'.$this->getId()]))

<tr {{ $attributes }}>
    <td colspan="{{ $this->getColspanCount() }}">
        <div class="flex justify-center items-center p-4">
            <span class="bg-cat-200 dark:bg-cat-750/50 rounded-lg w-full font-medium py-20 text-cat-600 dark:text-white flex flex-col gap-3 justify-center items-center">
                <img src="{{ asset('assets/lazy/image/ic-content.svg') }}" alt="empty">
                {{ $this->getEmptyMessage() }}
            </span>
        </div>
    </td>
</tr>
