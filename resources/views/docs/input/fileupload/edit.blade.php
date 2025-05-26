<x-fileupload
    name="image"
    multiple
    max="4"
    :existingFiles="[
        'example/doge.png',
        'example/lambo.webp'
    ]"
    base_url="{{ asset('storage') }}"
/>
