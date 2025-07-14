@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">
        <div class="mb-10">
            <div class="text-3xl font-bold">Layout</div>
            <div class="text-sm text-cat-500">create dashboard layout with command.</div>
        </div>

        <div class="mb-10">
            <div class="mb-5">
                <div class="mb-5">
                    <div class="text-xl font-bold mb-3">Create Layout</div>
                    <div class="w-full h-px border-b border-cat-200 dark:border-cat-750"></div>
                </div>
            </div>
            <div class="mb-5">
                <div class="text-sm mb-3">Generate layout by running the following command in your Laravel project directory:</div>
                <pre class="text-[0.9rem]"><code class="language-bash">php artisan lazy:layout [path]</code></pre>
            </div>
            <div class="mb-5 flex flex-col gap-3">
                <div class="text-sm">example:</div>
                <pre class="text-[0.9rem]"><code class="language-bash">php artisan lazy:layout admin</code></pre>
                <div class="text-sm">This command will create a file containing the panel template layout located in <code class="bg-cat-200 dark:bg-cat-750">resources/views/admin</code>.</div>
            </div>
        </div>

        <div class="mb-10">
            <div class="mb-5">
                <div class="mb-5">
                    <div class="text-xl font-bold mb-3">Menu Item</div>
                    <div class="w-full h-px border-b border-cat-200 dark:border-cat-750"></div>
                </div>
            </div>
            <div class="mb-5 flex flex-col gap-3">
                <div class="text-sm">You can edit the panel navigation menu in <code class="bg-cat-200 dark:bg-cat-750">resources/views/[path]/menu.blade.php</code></div>
                {{-- <pre class="text-[0.9rem]"><code class="language-bash">php artisan lazy:panel name</code></pre> --}}
                <div class="text-sm">All item navigation components are here: <a href="{{ route('display.nav') }}" class="underline">Navigation Component</a></div>
            </div>
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
