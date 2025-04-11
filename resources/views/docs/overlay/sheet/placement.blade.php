{{-- right --}}
<x-sheet id="right" placement="right">
    <x-sheet.header title="Sheet" />
    <x-sheet.body class="p-3">
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, officia!</p>
    </x-sheet.body>
    <x-sheet.footer class="p-3">
        <x-button class="w-full">Footer</x-button>
    </x-sheet.footer>
</x-sheet>

<x-button x-data x-sheet:toggle="right" >Right</x-button>


{{-- left --}}
<x-sheet id="left" placement="left">
    <x-sheet.header title="Sheet" />
    <x-sheet.body class="p-3">
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, officia!</p>
    </x-sheet.body>
    <x-sheet.footer class="p-3">
        <x-button class="w-full">Footer</x-button>
    </x-sheet.footer>
</x-sheet>

<x-button x-data x-sheet:toggle="left" >Left</x-button>


{{-- top --}}
<x-sheet id="top" placement="top">
    <x-sheet.header title="Sheet" />
    <x-sheet.body class="p-3">
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, officia!</p>
    </x-sheet.body>
    <x-sheet.footer class="p-3">
        <x-button class="w-full">Footer</x-button>
    </x-sheet.footer>
</x-sheet>

<x-button x-data x-sheet:toggle="top" >Top</x-button>


{{-- bottom --}}
<x-sheet id="bottom" placement="bottom">
    <x-sheet.header title="Sheet" />
    <x-sheet.body class="p-3">
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, officia!</p>
    </x-sheet.body>
    <x-sheet.footer class="p-3">
        <x-button class="w-full">Footer</x-button>
    </x-sheet.footer>
</x-sheet>

<x-button x-data x-sheet:toggle="bottom" >Bottom</x-button>
