<header class="lazy-header">
    <nav>
        <div class="lg:hidden mr-3">
            <x-button
                variant="ghost"
                size="icon"
                class="rounded-full"
                x-data
                x-on:click="$store.sidebar.toggle()"
            >
                <svg class="size-5 text-cat-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32z"/><path fill="currentColor" class="fa-primary" d="M448 96c0-17.7-14.3-32-32-32H32C14.3 64 0 78.3 0 96s14.3 32 32 32H416c17.7 0 32-14.3 32-32zm0 320c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32z"/></svg>
            </x-button>
        </div>

        <div class="lazy-header-icon">
            <div x-data>
                <x-button
                    variant="ghost"
                    size="icon"
                    class="rounded-full md:hidden"
                    x-on:click="$dialog.toggle('dialog-search')"
                >
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M208 64a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 352A208 208 0 1 0 208 0a208 208 0 1 0 0 416z"/><path fill="currentColor" class="fa-primary" d="M330.7 376L457.4 502.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L376 330.7C363.3 348 348 363.3 330.7 376z"/></svg>
                </x-button>
                <button type="button" x-on:click="$dialog.toggle('dialog-search')" class="lazy-header-search-button">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M208 64a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 352A208 208 0 1 0 208 0a208 208 0 1 0 0 416z"/><path fill="currentColor" class="fa-primary" d="M330.7 376L457.4 502.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L376 330.7C363.3 348 348 363.3 330.7 376z"/></svg>
                    <span class="shortcut">⌘K</span>
                </button>
            </div>
            <div class="flex gap-1 items-center">
                <x-button
                    href="https://github.com/ilsyaa/lazyui"
                    variant="ghost"
                    size="icon"
                    class="rounded-full"
                >
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                </x-button>
                <x-button
                    variant="ghost"
                    size="icon"
                    class="rounded-full relative"
                    x-data
                    x-sheet:toggle="lazySettings"
                >
                    <svg class="size-5 motion-rotate-loop-[1turn]/reset motion-ease-linear motion-duration-[10s]" xmlns="http://www.w3.org/2000/svg" viewbox="0,0,512,512"><path d="M192 256a64 64 0 1 0 128 0 64 64 0 1 0 -128 0z" fill="currentColor" style="opacity: 1;"></path><path d="M305.4 21.8c-1.3-10.4-9.1-18.8-19.5-20C276.1 .6 266.1 0 256 0c-11.1 0-22.1 .7-32.8 2.1c-10.3 1.3-18 9.7-19.3 20l-2.9 23.1c-.8 6.4-5.4 11.6-11.5 13.7c-9.6 3.2-19 7.2-27.9 11.7c-5.8 3-12.8 2.5-18-1.5l-18-14c-8.2-6.4-19.7-6.8-27.9-.4c-16.6 13-31.5 28-44.4 44.7c-6.3 8.2-5.9 19.6 .5 27.8l14.2 18.3c4 5.1 4.4 12 1.5 17.8c-4.4 8.8-8.2 17.9-11.3 27.4c-2 6.2-7.3 10.8-13.7 11.6l-22.8 2.9c-10.3 1.3-18.7 9.1-20 19.4C.7 234.8 0 245.3 0 256c0 10.6 .6 21.1 1.9 31.4c1.3 10.3 9.7 18.1 20 19.4l22.8 2.9c6.4 .8 11.7 5.4 13.7 11.6c3.1 9.5 6.9 18.7 11.3 27.5c2.9 5.8 2.4 12.7-1.5 17.8L54 384.8c-6.4 8.2-6.8 19.6-.5 27.8c12.9 16.7 27.8 31.7 44.4 44.7c8.2 6.4 19.7 6 27.9-.4l18-14c5.1-4 12.2-4.4 18-1.5c9 4.6 18.3 8.5 27.9 11.7c6.1 2.1 10.7 7.3 11.5 13.7l2.9 23.1c1.3 10.3 9 18.7 19.3 20c10.7 1.4 21.7 2.1 32.8 2.1c10.1 0 20.1-.6 29.9-1.7c10.4-1.2 18.2-9.7 19.5-20l2.8-22.5c.8-6.5 5.5-11.8 11.7-13.8c10-3.2 19.7-7.2 29-11.8c5.8-2.9 12.7-2.4 17.8 1.5L385 457.9c8.2 6.4 19.6 6.8 27.8 .5c2.8-2.2 5.5-4.4 8.2-6.7L451.7 421c1.8-2.2 3.6-4.4 5.4-6.6c6.5-8.2 6-19.7-.4-27.9l-14-17.9c-4-5.1-4.4-12.2-1.5-18c4.8-9.4 9-19.3 12.3-29.5c2-6.2 7.3-10.8 13.7-11.6l22.8-2.8c10.3-1.3 18.8-9.1 20-19.4c.2-1.7 .4-3.5 .6-5.2l0-51.9c-.2-1.7-.4-3.5-.6-5.2c-1.3-10.3-9.7-18.1-20-19.4l-22.8-2.8c-6.4-.8-11.7-5.4-13.7-11.6c-3.4-10.2-7.5-20.1-12.3-29.5c-3-5.8-2.5-12.8 1.5-18l14-17.9c6.4-8.2 6.8-19.7 .4-27.9c-1.8-2.2-3.6-4.4-5.4-6.6L421 60.3c-2.7-2.3-5.4-4.5-8.2-6.7c-8.2-6.4-19.6-5.9-27.8 .5L366.7 68.3c-5.1 4-12.1 4.4-17.8 1.5c-9.3-4.6-19-8.6-29-11.8c-6.2-2-10.9-7.3-11.7-13.7l-2.8-22.5zM256 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" fill="currentColor" style="opacity: 0.4;"></path></svg>
                    <span class="absolute top-2 end-2 inline-flex items-center size-2 rounded-full font-medium transform -translate-y-1/2 translate-x-1/2 bg-red-500 text-white dark:border-slate-900 animate-pulse"></span>
                </x-button>
                <x-dropdown class="ml-2">
                    <x-dropdown.trigger variant="outline">
                        <img class="cursor-pointer size-9 rounded-full overflow-hidden object-center object-cover" src="{{ asset('assets/lazy/image/avatar.webp') }}" alt="avatar">
                    </x-dropdown.trigger>
                    <x-dropdown.content class="w-40" align="end">
                        <x-dropdown.label>My Account</x-dropdown.label>
                        <x-dropdown.separator />
                        <x-dropdown.link href="">
                            Profile
                        </x-dropdown.link>
                        <x-dropdown.link href="">
                            Settings
                        </x-dropdown.link>
                        <x-dropdown.separator />
                        <x-dropdown.link href="">
                            Log out
                        </x-dropdown.link>
                    </x-dropdown.content>
                </x-dropdown>
            </div>
        </div>
    </nav>
</header>
