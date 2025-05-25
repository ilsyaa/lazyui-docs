<x-fileupload
    name="example"
    multiple
    max="4"
    :existingFiles="[
        'docs/doge.png',
        'docs/laravel.jpg',
        'docs/lambo.webp'
    ]"
    base_url="{{ asset('assets') }}"
/>
