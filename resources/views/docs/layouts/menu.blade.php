<x-nav.section label="Getting Started">

    <x-nav.item
        is-active="{{ request()->routeIs('installation') }}"
        href="{{ route('installation') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M15.252 10.689c-.987-1.18-1.48-1.77-2.048-1.68c-.567.091-.832.803-1.362 2.227l-.138.368c-.15.405-.226.607-.373.756c-.146.149-.348.228-.75.386l-.367.143c-1.417.555-2.126.833-2.207 1.4s.52 1.049 1.721 2.011l.31.25c.342.273.513.41.611.597c.1.187.115.404.146.837l.029.394c.11 1.523.166 2.285.683 2.545s1.154-.155 2.427-.983l.329-.215c.362-.235.543-.353.75-.387c.208-.033.42.022.841.132l.385.1c1.485.386 2.228.58 2.629.173s.193-1.144-.221-2.62l-.108-.38c-.117-.42-.176-.63-.147-.837c.03-.208.145-.39.374-.756l.21-.332c.807-1.285 1.21-1.927.94-2.438c-.269-.511-1.033-.553-2.562-.635l-.396-.022c-.434-.023-.652-.035-.841-.13c-.19-.095-.33-.263-.61-.599z"/><path fill="currentColor" d="M10.331 4.252c1.316-1.574 1.974-2.361 2.73-2.24s1.11 1.07 1.817 2.969l.183.491c.201.54.302.81.497 1.008c.196.199.464.304 1.001.514l.489.192c1.89.74 2.835 1.11 2.942 1.866c.108.757-.693 1.398-2.294 2.682l-.414.332c-.455.365-.683.547-.815.797s-.152.538-.194 1.115l-.038.526c-.148 2.031-.222 3.047-.911 3.393c-.69.347-1.538-.206-3.236-1.311l-.439-.286c-.482-.314-.723-.47-1-.515s-.558.028-1.121.175l-.513.133c-1.98.516-2.971.773-3.505.231s-.258-1.526.295-3.492l.142-.509c.157-.559.236-.838.197-1.115c-.04-.277-.193-.52-.499-1.008l-.278-.443C4.29 8.044 3.752 7.187 4.11 6.507c.36-.682 1.379-.737 3.418-.848l.527-.028c.58-.031.869-.047 1.122-.174c.252-.127.439-.35.813-.798z" opacity="0.5"/></svg>
        </x-slot:icon>
        <x-slot:title>Installation</x-slot:title>
    </x-nav.item>

    <x-nav.item
        is-active="{{ request()->routeIs('panel') }}"
        href="{{ route('panel') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M3.172 4.172C2 5.343 2 7.229 2 11v2c0 3.771 0 5.657 1.172 6.828S6.229 21 10 21h5V3h-5C6.229 3 4.343 3 3.172 4.172" clip-rule="evenodd" opacity="0.5"/><path fill="currentColor" d="M5.5 9.25a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 0-1.5zm1 4a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5zM22 13v-2c0-3.771 0-5.657-1.172-6.828c-.974-.975-3.192-1.139-5.828-1.166v17.988c2.636-.027 4.854-.191 5.828-1.166C22 18.657 22 16.771 22 13"/></svg>
        </x-slot:icon>
        <x-slot:title>Dashboard Layout</x-slot:title>
    </x-nav.item>

    <x-nav.item
        is-active=""
        href=""
        disabled
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M6.6 11.397c0-2.726 0-4.089.843-4.936c.844-.847 2.201-.847 4.917-.847h2.88c2.715 0 4.073 0 4.916.847c.844.847.844 2.21.844 4.936v4.82c0 2.726 0 4.089-.844 4.936c-.843.847-2.201.847-4.916.847h-2.88c-2.716 0-4.073 0-4.917-.847s-.843-2.21-.843-4.936z"/><path fill="currentColor" d="M4.172 3.172C3 4.343 3 6.229 3 10v2c0 3.771 0 5.657 1.172 6.828c.617.618 1.433.91 2.62 1.048c-.192-.84-.192-1.996-.192-3.66v-4.819c0-2.726 0-4.089.843-4.936c.844-.847 2.201-.847 4.917-.847h2.88c1.652 0 2.8 0 3.638.19c-.138-1.193-.43-2.012-1.05-2.632C16.657 2 14.771 2 11 2S5.343 2 4.172 3.172" opacity="0.5"/></svg>
        </x-slot:icon>
        <x-slot:title>Page Template</x-slot:title>
    </x-nav.item>

</x-nav.section>

<x-nav.section label="Components">

    <x-nav.item-collapse
        is-active="{{ request()->routeIs('display*') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M14 3h-4C6.229 3 4.343 3 3.172 4.172S2 7.229 2 11s0 5.657 1.172 6.828S6.229 19 10 19h4c3.771 0 5.657 0 6.828-1.172S22 14.771 22 11s0-5.657-1.172-6.828S17.771 3 14 3" opacity="0.5"/><path fill="currentColor" d="M9.95 16.05c.93-.93 1.396-1.396 1.97-1.427q.08-.003.159 0c.574.03 1.04.496 1.971 1.427c2.026 2.026 3.039 3.039 2.755 3.913a1.5 1.5 0 0 1-.09.218C16.297 21 14.865 21 12 21s-4.298 0-4.715-.819a1.5 1.5 0 0 1-.09-.218c-.284-.874.729-1.887 2.755-3.913"/></svg>
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
            <x-nav.sub-item
                is-active="{{ request()->routeIs('display.widget') }}"
                href="{{ route('display.widget') }}"
            >
                <x-slot:title>Widget</x-slot:title>
            </x-nav.sub-item>
        </x-slot:sub>
    </x-nav.item-collapse>

    <x-nav.item-collapse
        is-active="{{ request()->routeIs('input*') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M3.172 18.828C4.343 20 6.229 20 10 20l5.75-.006c2.636-.027 4.104-.191 5.078-1.166C22 17.658 22 15.771 22 12s0-5.657-1.172-6.828c-.974-.975-2.454-1.144-5.09-1.172H10C6.229 4 4.343 4 3.172 5.172S2 8.229 2 12s0 5.657 1.172 6.828" opacity="0.5"/><path fill="currentColor" d="M13 12a1 1 0 1 0-2 0a1 1 0 0 0 2 0m-5 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2"/><path fill="currentColor" fill-rule="evenodd" d="M15 1.25a.75.75 0 0 1 .75.75v20a.75.75 0 0 1-1.5 0V2a.75.75 0 0 1 .75-.75" clip-rule="evenodd"/></svg>
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
                is-active="{{ request()->routeIs('input.slider') }}"
                href="{{ route('input.slider') }}"
            >
                <x-slot:title>Slider</x-slot:title>
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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m13.629 20.472l-.542.916c-.483.816-1.69.816-2.174 0l-.542-.916c-.42-.71-.63-1.066-.968-1.262c-.338-.197-.763-.204-1.613-.219c-1.256-.021-2.043-.098-2.703-.372a5 5 0 0 1-2.706-2.706C2 14.995 2 13.83 2 11.5v-1c0-3.273 0-4.91.737-6.112a5 5 0 0 1 1.65-1.651C5.59 2 7.228 2 10.5 2h3c3.273 0 4.91 0 6.113.737a5 5 0 0 1 1.65 1.65C22 5.59 22 7.228 22 10.5v1c0 2.33 0 3.495-.38 4.413a5 5 0 0 1-2.707 2.706c-.66.274-1.447.35-2.703.372c-.85.015-1.275.022-1.613.219c-.338.196-.548.551-.968 1.262" opacity="0.5"/><path fill="currentColor" d="M7.25 9A.75.75 0 0 1 8 8.25h8a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 9m0 3.5a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75"/></svg>
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

    <x-nav.item-collapse
        is-active="{{ request()->routeIs('external*') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12" opacity="0.5"/><path fill="currentColor" d="M13.488 6.446a.75.75 0 0 1 .53.918l-2.588 9.66a.75.75 0 0 1-1.449-.389l2.589-9.659a.75.75 0 0 1 .918-.53M14.97 8.47a.75.75 0 0 1 1.06 0l.209.208c.635.635 1.165 1.165 1.529 1.642c.384.504.654 1.036.654 1.68s-.27 1.176-.654 1.68c-.364.477-.894 1.007-1.53 1.642l-.208.208a.75.75 0 1 1-1.06-1.06l.171-.172c.682-.682 1.139-1.14 1.434-1.528c.283-.37.347-.586.347-.77s-.064-.4-.347-.77c-.295-.387-.752-.846-1.434-1.528l-.171-.172a.75.75 0 0 1 0-1.06m-7 0a.75.75 0 0 1 1.06 1.06l-.171.172c-.682.682-1.138 1.14-1.434 1.528c-.283.37-.346.586-.346.77s.063.4.346.77c.296.387.752.846 1.434 1.528l.172.172a.75.75 0 1 1-1.061 1.06l-.208-.208c-.636-.635-1.166-1.165-1.53-1.642c-.384-.504-.653-1.036-.653-1.68s.27-1.176.653-1.68c.364-.477.894-1.007 1.53-1.642z"/></svg>
        </x-slot:icon>
        <x-slot:title>External</x-slot:title>
        <x-slot:sub>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('external.apexcharts') }}"
                href="{{ route('external.apexcharts') }}"
            >
                <x-slot:title>Apexcharts</x-slot:title>
            </x-nav.sub-item>
            <x-nav.sub-item
                is-active="{{ request()->routeIs('external.tinymce') }}"
                href="{{ route('external.tinymce') }}"
            >
                <x-slot:title>TinyMCE</x-slot:title>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18 8A6 6 0 1 1 6 8a6 6 0 0 1 12 0"/><path fill="currentColor" d="M13.58 13.79a6 6 0 0 1-7.16-3.58a6 6 0 1 0 7.16 3.58" opacity="0.7"/><path fill="currentColor" d="M13.58 13.79c.271.684.42 1.43.42 2.21a6 6 0 0 1-2 4.472a6 6 0 1 0 5.58-10.262a6.01 6.01 0 0 1-4 3.58" opacity="0.4"/></svg>
        </x-slot:icon>
        <x-slot:title>Color Dashboard</x-slot:title>
    </x-nav.item>
</x-nav.section>

<x-nav.section label="OTHER">

    <x-nav.item >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M2 6.95c0-.883 0-1.324.07-1.692A4 4 0 0 1 5.257 2.07C5.626 2 6.068 2 6.95 2c.386 0 .58 0 .766.017a4 4 0 0 1 2.18.904c.144.119.28.255.554.529L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .848.352C14.098 6 14.675 6 15.828 6h.374c2.632 0 3.949 0 4.804.77q.119.105.224.224c.77.855.77 2.172.77 4.804V14c0 3.771 0 5.657-1.172 6.828S17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172S2 17.771 2 14z" opacity="0.5"/><path fill="currentColor" d="M20 6.238c0-.298-.005-.475-.025-.63a3 3 0 0 0-2.583-2.582C17.197 3 16.965 3 16.5 3H9.988c.116.104.247.234.462.45L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .849.352C14.098 6 14.675 6 15.829 6h.373c1.78 0 2.957 0 3.798.238"/><path fill="currentColor" fill-rule="evenodd" d="M12.25 10a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75" clip-rule="evenodd"/></svg>
        </x-slot:icon>
        <x-slot:title>Package suggestions</x-slot:title>
    </x-nav.item>

    <x-nav.item
        is-active="{{ request()->routeIs('other.packages-installed') }}"
        href="{{ route('other.packages-installed') }}"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M22 14v-2.202c0-2.632 0-3.949-.77-4.804a3 3 0 0 0-.224-.225C20.151 6 18.834 6 16.202 6h-.374c-1.153 0-1.73 0-2.268-.153a4 4 0 0 1-.848-.352C12.224 5.224 11.816 4.815 11 4l-.55-.55c-.274-.274-.41-.41-.554-.53a4 4 0 0 0-2.18-.903C7.53 2 7.336 2 6.95 2c-.883 0-1.324 0-1.692.07A4 4 0 0 0 2.07 5.257C2 5.626 2 6.068 2 6.95V14c0 3.771 0 5.657 1.172 6.828S6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.172S22 17.771 22 14" opacity="0.5"/><path fill="currentColor" d="M14.498 11.44a.75.75 0 0 1 .063 1.058l-2.667 3a.75.75 0 0 1-1.121 0l-1.334-1.5a.75.75 0 1 1 1.122-.996l.772.87l2.107-2.37a.75.75 0 0 1 1.058-.062"/></svg>
        </x-slot:icon>
        <x-slot:title>Packages</x-slot:title>
        <x-slot:description>Default packages installed in lazyui</x-slot:description>
    </x-nav.item>

    <x-nav.item
        href="https://icon-sets.iconify.design/solar"
        target="_blank"
    >
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c-4.714 0-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22" opacity="0.5"/><path fill="currentColor" d="M10.683 18.62A6.75 6.75 0 0 0 18.75 12a.75.75 0 0 0-1.5 0A5.25 5.25 0 1 1 12 6.75a.75.75 0 0 0 0-1.5a6.75 6.75 0 0 0-1.317 13.37"/><path fill="currentColor" d="M13.31 6.045a.75.75 0 0 1 .986-.393a7.73 7.73 0 0 1 4.052 4.052a.75.75 0 0 1-1.378.591a6.23 6.23 0 0 0-3.265-3.265a.75.75 0 0 1-.394-.985"/></svg>
        </x-slot:icon>
        <x-slot:title>Font Svgs</x-slot:title>
    </x-nav.item>
</x-nav.section>
