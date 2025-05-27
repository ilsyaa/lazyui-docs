<x-form id="form-create" action="{{ route('form-example-store') }}" class="w-full">
    @csrf
    <div class="flex flex-col gap-3">
        <div>
            <x-label for="name">Name</x-label>
            <x-input id="name" name="name" placeholder="Name" />
        </div>
        <div>
            <x-label for="image">Image</x-label>
            <x-filepond
                id="image"
                name="image"
                accept="image/*"
            />
        </div>
        <x-button type="submit">Create</x-button>
    </div>
</x-form>

@push('body')
    <script>
        document.addEventListener('form', ({ detail }) => {
            // only handle if form id is form-create
            if(detail.id != 'form-create') return;

            // if success
            if(detail?.ok) {
                // reset form
                detail.element.target.reset();

                // reset fileupload
                const inputImage = window.filepondInstances.find((item) => item.id == 'image'); // find id image
                if(inputImage) {
                    // remove all files
                    inputImage.removeFiles();
                }

                // or you can redirect
                // window.location.href = '/';
            }
        });
    </script>
@endpush
