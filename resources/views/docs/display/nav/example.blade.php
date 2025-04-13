
<x-nav.section label="PRODUCT">

    <x-nav.item href="#">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"/><path fill="currentColor" class="fa-primary" d="M576 224H0V128H576v96z"/></svg>
        </x-slot:icon>
        <x-slot:title>Payment Transaction</x-slot:title>
    </x-nav.item>

    <x-nav.item-collapse href="#">
        <x-slot:icon>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H416h32L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm176 32H0V416c0 35.3 28.7 64 64 64H296.2C271.1 449.6 256 410.5 256 368c0-91.8 70.3-167.2 160-175.3V192z"/><path fill="currentColor" class="fa-primary" d="M432 512a144 144 0 1 0 0-288 144 144 0 1 0 0 288zm67.3-164.7l-72 72c-6.2 6.2-16.4 6.2-22.6 0l-40-40c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0L416 385.4l60.7-60.7c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
        </x-slot:icon>
        <x-slot:title>Product Manage</x-slot:title>

        <x-slot:sub>
            <x-nav.sub-item>
                <x-slot:title>Create</x-slot:title>
            </x-nav.sub-item>

            <x-nav.sub-item>
                <x-slot:title>List</x-slot:title>
            </x-nav.sub-item>

            <x-nav.sub-item>
                <x-slot:title>Categories</x-slot:title>
            </x-nav.sub-item>
        </x-slot:sub>
    </x-nav.item-collapse>

</x-nav.section>
