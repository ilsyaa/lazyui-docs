<x-nav.section label="Getting Started">

    <x-nav.item
        is-active="{{ request()->routeIs('installation') }}"
        href="{{ route('installation') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M313 7c-9.4-9.4-24.6-9.4-33.9 0L231 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9zM505 199c-9.4-9.4-24.6-9.4-33.9 0l-48 48c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9zM505 41c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L327 151c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0L505 41z"/><path fill="currentColor" class="fa-primary" d="M213.4 157.4c-8.8-17.9-34.3-17.9-43.1 0l-46.3 94L20.5 266.5C.9 269.3-7 293.5 7.2 307.4l74.9 73.2L64.5 483.9c-3.4 19.6 17.2 34.6 34.8 25.3l92.6-48.8 92.6 48.8c17.6 9.3 38.2-5.7 34.8-25.3L301.6 380.6l74.9-73.2c14.2-13.9 6.4-38.1-13.3-40.9L259.7 251.4l-46.3-94z"/></svg>
        </x-slot:icon>
        <x-slot:title>Installation</x-slot:title>
    </x-nav.item>

    <x-nav.item
        is-active="{{ request()->routeIs('panel') }}"
        href="{{ route('panel') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M96 96a32 32 0 1 0 0 64 32 32 0 1 0 0-64zM448 480c35.3 0 64-28.7 64-64V224L0 224V416c0 35.3 28.7 64 64 64l384 0z"/><path fill="currentColor" class="fa-primary" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V224H0V96zm64 32a32 32 0 1 0 64 0 32 32 0 1 0 -64 0zm120-24c-13.3 0-24 10.7-24 24s10.7 24 24 24H424c13.3 0 24-10.7 24-24s-10.7-24-24-24H184z"/></svg>
        </x-slot:icon>
        <x-slot:title>Dashboard Layout</x-slot:title>
    </x-nav.item>

    <x-nav.item
        is-active=""
        href=""
        disabled
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64z"/><path fill="currentColor" class="fa-primary" d="M384 160L224 0V128c0 17.7 14.3 32 32 32H384zm48 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288zm16-208v48h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V384H368c-8.8 0-16-7.2-16-16s7.2-16 16-16h48V304c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
        </x-slot:icon>
        <x-slot:title>Page Template</x-slot:title>
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
                is-active="{{ request()->routeIs('display.accordion') }}"
                href="{{ route('display.accordion') }}"
            >
                <x-slot:title>Accordion</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.avatar') }}"
                href="{{ route('display.avatar') }}"
            >
                <x-slot:title>Avatar</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.badge') }}"
                href="{{ route('display.badge') }}"
            >
                <x-slot:title>Badge</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.breadcrumb') }}"
                href="{{ route('display.breadcrumb') }}"
            >
                <x-slot:title>Breadcrumb</x-slot:title>
            </x-nav.sub-item>
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
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.tabs') }}"
                href="{{ route('display.tabs') }}"
            >
                <x-slot:title>Tabs</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.nav') }}"
                href="{{ route('display.nav') }}"
            >
                <x-slot:title>Nav Item</x-slot:title>
            </x-nav.sub-item>
        </x-slot:sub>
    </x-nav.item-collapse>

    <x-nav.item-collapse
        is-active="{{ request()->routeIs('input*') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M576 128V384H64V128H576zM64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64z"/><path fill="currentColor" class="fa-primary" d="M205.9 174.3c-3.9-8.7-12.4-14.3-21.9-14.3s-18.1 5.6-21.9 14.3l-64 144c-5.4 12.1 .1 26.3 12.2 31.7s26.3-.1 31.7-12.2l4.3-9.7h75.5l4.3 9.7c5.4 12.1 19.6 17.6 31.7 12.2s17.6-19.6 12.2-31.7l-64-144zM200.4 280H167.6L184 243.1 200.4 280zM304 184v8 64 64 8c0 13.3 10.7 24 24 24h68c33.1 0 60-26.9 60-60c0-18.6-8.5-35.3-21.8-46.3c3.7-7.8 5.8-16.5 5.8-25.7c0-33.1-26.9-60-60-60H328c-13.3 0-24 10.7-24 24zm48 24h28c6.6 0 12 5.4 12 12s-5.4 12-12 12H352V208zm0 96V280h28 16c6.6 0 12 5.4 12 12s-5.4 12-12 12H352z"/></svg>
        </x-slot:icon>
        <x-slot:title>Input</x-slot:title>
        <x-slot:sub>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.autocomplete') }}"
                href="{{ route('input.autocomplete') }}"
            >
                <x-slot:title>Autocomplete</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.autocomplete.multiple') }}"
                href="{{ route('input.autocomplete.multiple') }}"
            >
                <x-slot:title>Autocomplete Multiple</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.checkbox') }}"
                href="{{ route('input.checkbox') }}"
            >
                <x-slot:title>Checkbox</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.form') }}"
                href="{{ route('input.form') }}"
            >
                <x-slot:title>Form</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.input') }}"
                href="{{ route('input.input') }}"
            >
                <x-slot:title>Input</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.label') }}"
                href="{{ route('input.label') }}"
            >
                <x-slot:title>Label</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.radio') }}"
                href="{{ route('input.radio') }}"
            >
                <x-slot:title>Radio</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.select') }}"
                href="{{ route('input.select') }}"
            >
                <x-slot:title>Select</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.select.multiple') }}"
                href="{{ route('input.select.multiple') }}"
            >
                <x-slot:title>Select Multiple</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.switch') }}"
                href="{{ route('input.switch') }}"
            >
                <x-slot:title>Switch</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('input.textarea') }}"
                href="{{ route('input.textarea') }}"
            >
                <x-slot:title>Textarea</x-slot:title>
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
                is-active="{{ request()->routeIs('overlay.alert') }}"
                href="{{ route('overlay.alert') }}"
            >
                <x-slot:title>Alert</x-slot:title>
            </x-nav.sub-item>
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
                is-active="{{ request()->routeIs('overlay.popover') }}"
                href="{{ route('overlay.popover') }}"
            >
                <x-slot:title>Popover</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('overlay.sheet') }}"
                href="{{ route('overlay.sheet') }}"
            >
                <x-slot:title>Sheet</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('overlay.toast') }}"
                href="{{ route('overlay.toast') }}"
            >
                <x-slot:title>Toast</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('overlay.tooltip') }}"
                href="{{ route('overlay.tooltip') }}"
            >
                <x-slot:title>Tooltip</x-slot:title>
            </x-nav.sub-item>
        </x-slot:sub>
    </x-nav.item-collapse>

</x-nav.section>

<x-nav.section label="STYLE">
    <x-nav.item
        is-active="{{ request()->routeIs('style.dashboard') }}"
        href="{{ route('style.dashboard') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0,0,512,512"><path d="M64 64l64 0 0 64-64 0 0-64zm0 128l64 0 0 64-64 0 0-64zM173.1 473.1c.8-1.1 1.7-2.3 2.5-3.5c5.2-7.7 9.3-16.1 12.1-25.1c1.4-4.5 2.5-9.2 3.2-13.9c.4-2.4 .6-4.8 .8-7.2c.1-1.2 .2-2.4 .2-3.7s.1-2.5 .1-3.7l0-230L299.4 78.6c12.5-12.5 32.8-12.5 45.3 0l90.5 90.5c12.5 12.5 12.5 32.8 0 45.3L189.7 459.9c-5.1 5.1-10.7 9.5-16.5 13.2zm9.7 38.9l192-192L480 320c17.7 0 32 14.3 32 32l0 128c0 17.7-14.3 32-32 32l-297.2 0z" fill="currentColor" style="opacity: 0.4;"></path><path d="M32 0C14.3 0 0 14.3 0 32L0 416c0 53 43 96 96 96s96-43 96-96l0-384c0-17.7-14.3-32-32-32L32 0zm96 64l0 64-64 0 0-64 64 0zM64 192l64 0 0 64-64 0 0-64zM96 392a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" fill="currentColor" style="opacity: 1;"></path></svg>
        </x-slot:icon>
        <x-slot:title>Color Dashboard</x-slot:title>
    </x-nav.item>
</x-nav.section>

<x-nav.section label="OTHER">

    <x-nav.item >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0,0,640,512"><path d="M0 416c0 53 43 96 96 96l448 0c53 0 96-43 96-96s-43-96-96-96L96 320c-53 0-96 43-96 96zm160 0a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm192 0a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm192 0a32 32 0 1 1 -64 0 32 32 0 1 1 64 0z" fill="currentColor" style="opacity: 0.4;"></path><path d="M96 0C78.3 0 64 14.3 64 32l0 192c0 17.7 14.3 32 32 32l192 0c17.7 0 32-14.3 32-32l0-192c0-17.7-14.3-32-32-32L96 0zM416 64c-17.7 0-32 14.3-32 32l0 128c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-128c0-17.7-14.3-32-32-32L416 64z" fill="currentColor" style="opacity: 1;"></path></svg>
        </x-slot:icon>
        <x-slot:title>Package suggestions</x-slot:title>
    </x-nav.item>

    <x-nav.item>
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0,0,448,512"><path d="M0 160l160 0L192 32 93.7 32C75.5 32 58.9 42.3 50.7 58.5L0 160zm160 0l128 0 0 96c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-96zM256 32l32 128 160 0L397.3 58.5C389.1 42.3 372.5 32 354.3 32L256 32z" fill="currentColor" style="opacity: 0.4;"></path><path d="M160 160L0 160 0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256-160 0 0 96c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-96z" fill="currentColor" style="opacity: 1;"></path></svg>
        </x-slot:icon>
        <x-slot:title>NPM Packages</x-slot:title>
        <x-slot:description>Default packages installed in lazyui</x-slot:description>
    </x-nav.item>

    <x-nav.item
        href="https://lazysvg.vercel.app/"
        target="_blank"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0,0,512,512"><path d="M96 96l0 352 373.6 0c14.6 0 26.4-11.8 26.4-26.4c0-3.7-.8-7.3-2.3-10.7L432 272l61.7-138.9c1.5-3.4 2.3-7 2.3-10.7c0-14.6-11.8-26.4-26.4-26.4L96 96z" fill="currentColor" style="opacity: 0.4;"></path><path d="M96 93c12.2-9.5 20-24.3 20-41C116 23.3 92.7 0 64 0S12 23.3 12 52c0 16.7 7.8 31.5 20 41l0 419 64 0L96 93z" fill="currentColor" style="opacity: 1;"></path></svg>
        </x-slot:icon>
        <x-slot:title>Font Svgs</x-slot:title>
    </x-nav.item>

    <x-nav.item
        href="https://github.com/ilsyaa/lazyui"
        target="_blank"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
        </x-slot:icon>
        <x-slot:title>Github</x-slot:title>
    </x-nav.item>

</x-nav.section>
