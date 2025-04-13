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
