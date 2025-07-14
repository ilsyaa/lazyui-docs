<x-dialog id="backdrop-static" :backdrop-static="true">
    <x-dialog.header />
    <x-dialog.body class="p-5">
        <div class="flex flex-col gap-4 text-center">
            <div class="text-lg font-medium">Use Google's location service?</div>
            <p class="text-cat-500 text-sm">Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.</p>
            <div class="grid grid-cols-2 gap-2">
                <x-button variant="secondary" x-dialog:close>Disagree</x-button>
                <x-button>Agree</x-button>
            </div>
        </div>
    </x-dialog.body>
</x-dialog>

<x-button x-data x-dialog:toggle="backdrop-static" >Dialog</x-button>
