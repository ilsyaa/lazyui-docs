@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">
        <div class="mb-10">
            <div class="text-3xl font-bold">Installation</div>
            <div class="text-sm text-cat-500">How to install dependencies and structure your app.</div>
        </div>

        <div class="mb-10">
            <div class="mb-5">
                <div class="mb-5">
                    <div class="text-xl font-bold mb-3">Step 1 - Composer</div>
                    <div class="w-full h-px border-b border-cat-200 dark:border-cat-750"></div>
                </div>
            </div>
            <div class="mb-5">
                <div class="text-sm mb-3">You can install this package via composer:</div>
                <pre class="text-[0.9rem]"><code class="language-">composer require kodingin/lazyui</code></pre>
            </div>
            <div>
                <div class="text-sm mb-3">Once installed, you need to add the necessary css, js and assets for the panels and components by running:</div>
                <pre class="text-[0.9rem]"><code class="language-">php artisan lazy:install</code></pre>
            </div>
        </div>

        <div class="mb-10">
            <div class="mb-5">
                <div class="mb-5">
                    <div class="text-xl font-bold mb-3">Step 2 - NPM</div>
                    <div class="w-full h-px border-b border-cat-200 dark:border-cat-750"></div>
                </div>
            </div>
            <div class="mb-5">
                <div class="text-sm mb-3">Open the <code class="bg-cat-200 dark:bg-cat-750">resources/css/app.css</code> and add this line of code under <code class="bg-cat-200 dark:bg-cat-750">@import "tailwindcss"</code></div>
                <pre class="text-[0.9rem]"><code class="language-css">@import './lazy/app.css';</code></pre>
            </div>
            <div class="mb-5">
                <div class="text-sm mb-3">Open the <code class="bg-cat-200 dark:bg-cat-750">resources/js/app.js</code> and add this line of code under <code class="bg-cat-200 dark:bg-cat-750">import './bootstrap';</code></div>
                <pre class="text-[0.9rem]"><code class="language-js">import './lazy/app';</code></pre>
            </div>
            <div class="mb-5">
                <div class="text-sm mb-3">Install npm and run it like you created a project with tailwindcss</code></div>
                <pre class="text-[0.9rem]"><code class="language-bash">npm install && npm run dev</code></pre>
            </div>
        </div>

        <div class="mb-10">
            <div class="mb-5">
                <div class="mb-5">
                    <div class="text-xl font-bold mb-3">Prerequisites</div>
                    <div class="w-full h-px border-b border-cat-200 dark:border-cat-750"></div>
                </div>
            </div>
            <div class="text-sm mb-3">For Lazy UI to work you need to have the following dependencies installed:</div>
            <ul class="text-sm list-disc list-inside">
                <li>Laravel 12</li>
                <li>TailwindCSS 4</li>
                <li>Livewire</li>
            </ul>
        </div>
    </div>
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/lazy/highlight/lazy.css') }}">
@endpush

@push('body')
    <script src="{{ asset('assets/lazy/highlight/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/lazy/highlight/lazy.plugin.js') }}"></script>
    <script>
        hljs.addPlugin(new HljsLazyPlugin());
        hljs.highlightAll();
    </script>
@endpush
