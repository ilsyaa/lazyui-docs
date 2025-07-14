<x-form id="form-edit" action="{{ route('form-example-update', 1) }}" class="w-full">
    @csrf
    <div class="flex flex-col gap-3">
        <div>
            <x-label for="name">Name</x-label>
            <x-input id="name" name="name" placeholder="Name" value="Ilsyaa" />
        </div>
        <div>
            <x-label for="image-edit">Image</x-label>
            <x-filepond
                id="image-edit"
                name="image"
                accept="image/*"
                :existingFiles="[
                    'example/doge.png',
                ]"
                base_url="{{ asset('storage') }}"
            />
        </div>
        <x-button type="submit">Save changes</x-button>
    </div>
</x-form>

@push('body')
    <script>
        document.addEventListener('form', ({ detail }) => {
            // only handle if form id is form-edit
            if(detail.id != 'form-edit') return;

            // if success
            if(detail?.ok) {
                const inputImage = window.filepondInstances.find((item) => item.id == 'image-edit'); // find id image
                if(inputImage) {
                    // sync existing files from the response data
                    // This step is required when implementing existing files.
                    // If you skip it, the backend will re-upload the image on every form submission, even if the image hasn't changed.
                    // inputImage.syncExistingFiles(detail.data.data.existing_image);
                }

                // or you can redirect
                // window.location.href = '/';
            }
        });
    </script>
@endpush
