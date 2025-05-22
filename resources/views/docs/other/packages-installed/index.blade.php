@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-10">
            <section>
                <div class="mb-5">
                    <div class="text-3xl font-bold">Packages Installed</div>
                    <div class="text-cat-500 text-sm">Default packages installed.</div>
                </div>
            </section>

            <section>
                <div class="mb-5">
                    <div class="text-xl font-semibold">Composer</div>
                </div>
                <x-card class="p-5">
                    <ul class="list-disc list-inside flex flex-col gap-1">
                        <li><a class="hover:underline" href="https://livewire.laravel.com/" target="_blank">Livewire</a></li>
                        <li><a class="hover:underline" href="https://github.com/gehrisandro/tailwind-merge-laravel" target="_blank">gehrisandro/tailwind-merge-laravel</a></li>
                    </ul>
                </x-card>
            </section>

            <section>
                <div class="mb-5">
                    <div class="text-xl font-semibold">NPM</div>
                </div>
                <x-card class="p-5">
                    <ul class="list-disc list-inside flex flex-col gap-1">
                        <li><a class="hover:underline" href="https://docs.rombo.co/tailwind" target="_blank">tailwindcss-motion</a></li>
                        <li><a class="hover:underline" href="https://github.com/tailwindlabs/tailwindcss-forms" target="_blank">@tailwindcss/forms</a></li>
                        <li><a class="hover:underline" href="https://github.com/Grsmto/simplebar" target="_blank">simplebar</a></li>
                        <li><a class="hover:underline" href="https://atomiks.github.io/tippyjs/" target="_blank">Tippy.js</a></li>
                    </ul>
                </x-card>
            </section>
        </div>

    </div>
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/lazy/vendor/highlight/lazy.css') }}">
@endpush

@push('body')
    <script src="{{ asset('assets/lazy/vendor/highlight/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/lazy/vendor/highlight/lazy.js') }}"></script>
@endpush
