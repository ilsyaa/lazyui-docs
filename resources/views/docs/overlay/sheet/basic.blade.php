<x-sheet id="basic">
    <x-sheet.header title="Sheet" />
    <x-sheet.body class="p-3">
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, officia!</p>
    </x-sheet.body>
    <x-sheet.footer class="p-3">
        <x-button class="w-full">Footer</x-button>
    </x-sheet.footer>
</x-sheet>

<x-button x-data x-sheet:toggle="basic" >Sheet</x-button>
