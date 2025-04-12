<x-nav.section label="Getting Started">

    <x-nav.item>
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M313 7c-9.4-9.4-24.6-9.4-33.9 0L231 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9zM505 199c-9.4-9.4-24.6-9.4-33.9 0l-48 48c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9zM505 41c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L327 151c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0L505 41z"/><path fill="currentColor" class="fa-primary" d="M213.4 157.4c-8.8-17.9-34.3-17.9-43.1 0l-46.3 94L20.5 266.5C.9 269.3-7 293.5 7.2 307.4l74.9 73.2L64.5 483.9c-3.4 19.6 17.2 34.6 34.8 25.3l92.6-48.8 92.6 48.8c17.6 9.3 38.2-5.7 34.8-25.3L301.6 380.6l74.9-73.2c14.2-13.9 6.4-38.1-13.3-40.9L259.7 251.4l-46.3-94z"/></svg>
        </x-slot:icon>
        <x-slot:title>Intallation</x-slot:title>
    </x-nav.item>

</x-nav.section>

<x-nav.section label="Components">

    <x-nav.item-collapse
        is-active="{{ request()->routeIs('display*') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M64 64c0-17.7 14.3-32 32-32s32 14.3 32 32l0 288H64L64 64zm0 384V416h64l0 32c0 17.7-14.3 32-32 32s-32-14.3-32-32zm320 0c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-288 64 0 0 288zm0-384V96l-64 0V64c0-17.7 14.3-32 32-32s32 14.3 32 32z"/><path fill="currentColor" class="fa-primary" d="M416 96c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0V96H416zM32 96H64v64l-32 0c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 320c-17.7 0-32-14.3-32-32s14.3-32 32-32l288 0v64L32 416zm384 0H384V352h32c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
        </x-slot:icon>
        <x-slot:title>Display</x-slot:title>
        <x-slot:sub>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.button') }}"
                href="{{ route('display.button') }}"
            >
                <x-slot:title>Button</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.card') }}"
                href="{{ route('display.card') }}"
            >
                <x-slot:title>Card</x-slot:title>
            </x-nav.sub-item>
        </x-slot:sub>
    </x-nav.item-collapse>

    <x-nav.item-collapse
        is-active="{{ request()->routeIs('overlay*') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M0 64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L185.6 508.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V416H64c-35.3 0-64-28.7-64-64V64zm152 80c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H152zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H152z"/><path fill="currentColor" class="fa-primary" d="M128 168c0-13.3 10.7-24 24-24H360c13.3 0 24 10.7 24 24s-10.7 24-24 24H152c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24H264c13.3 0 24 10.7 24 24s-10.7 24-24 24H152c-13.3 0-24-10.7-24-24z"/></svg>
        </x-slot:icon>
        <x-slot:title>Overlay</x-slot:title>
        <x-slot:sub>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('overlay.dropdown') }}"
                href="{{ route('overlay.dropdown') }}"
            >
                <x-slot:title>Dropdown</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('overlay.dialog') }}"
                href="{{ route('overlay.dialog') }}"
            >
                <x-slot:title>Dialog</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('overlay.sheet') }}"
                href="{{ route('overlay.sheet') }}"
            >
                <x-slot:title>Sheet</x-slot:title>
            </x-nav.sub-item>
        </x-slot:sub>
    </x-nav.item-collapse>

</x-nav.section>

<x-nav.section label="OTHER">

    <x-nav.item disabled >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M99.5 144.8L367.2 412.5c17.5-12.5 32.8-27.8 45.3-45.3L144.8 99.5C127.3 112 112 127.3 99.5 144.8z"/><path fill="currentColor" class="fa-primary" d="M256 64a192 192 0 1 1 0 384 192 192 0 1 1 0-384zm0 448A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>
        </x-slot:icon>
        <x-slot:title>Disabled</x-slot:title>
    </x-nav.item>

    <x-nav.item>
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M50.7 58.5C58.9 42.3 75.5 32 93.7 32H192L160 160H0L50.7 58.5zM288 160v96c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V160H288zm0 0L256 32h98.3c18.2 0 34.8 10.3 42.9 26.5L448 160H288z"/><path fill="currentColor" class="fa-primary" d="M160 160H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V160H288v96c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32V160z"/></svg>
        </x-slot:icon>
        <x-slot:title>Item Caption</x-slot:title>
        <x-slot:description>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, cupiditate!</x-slot:description>
    </x-nav.item>

    <x-nav.item
        href="https://github.com/kodinginn/lazy-ui"
        target="_blank"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
        </x-slot:icon>
        <x-slot:title>Github</x-slot:title>
    </x-nav.item>

</x-nav.section>
