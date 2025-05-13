<x-popover class="max-w-sm" trigger="hover">
    <x-slot:toggle>
        <x-button>Hover</x-button>
    </x-slot:toggle>

    <x-slot:content>
        <div class="p-5 text-sm flex sm:flex-row flex-col justify-center sm:items-start items-center gap-3">
            <img width="60" class="rounded-full" src="{{ asset('assets/lazy/image/avatar.webp') }}" alt="avatar">
            <div class="sm:text-left text-center">
                <div class="text-base font-bold">Ilsyaa</div>
                <div class="text-xs mb-1 font-medium">Web Developer</div>
                <div class="text-xs text-cat-600 dark:text-cat-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt aliquam enim beatae hic quo quam qui similique ab error repellendus nobis, distinctio sed molestiae, odio sunt ut earum blanditiis aperiam.</div>
            </div>
        </div>
    </x-slot:content>
</x-popover>
