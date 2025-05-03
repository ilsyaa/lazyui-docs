<x-dialog id="basic">
    <x-dialog.body class="p-5">
        <div class="flex flex-col gap-4">
            <div class="text-lg font-medium">Use Google's location service?</div>
            <p class="text-cat-500 text-sm">Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.</p>
            <div class="text-end">
                <x-button variant="secondary" x-dialog:close>Disagree</x-button>
                <x-button>Agree</x-button>
            </div>
        </div>
    </x-dialog.body>
</x-dialog>

<x-button x-data x-dialog:toggle="basic" >Dialog</x-button>
