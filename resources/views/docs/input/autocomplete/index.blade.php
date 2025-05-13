@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-10">
            <section>
                <div class="mb-5">
                    <div class="text-3xl font-bold">AutoComplete</div>
                    <div class="text-cat-500 text-sm">AutoComplete is an input component that provides real-time suggestions when being typed.</div>
                </div>
                <div>
                    <div class="text-sm mb-3">Before you can use this component, you need to run this command to publish the component to <code class="break-words">resources/views/components</code>.</div>
                    <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                        <pre class="text-[0.9rem]"><code class="language-">php artisan lazy:component autocomplete</code></pre>
                    </div>
                </div>
            </section>

            <section>
                <div class="mb-5">
                    <div class="text-xl font-semibold">Usage</div>
                </div>
                <div x-data="{ tab: 'preview' }">
                    <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                        <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                        <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                    </div>

                    <div>
                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="flex flex-wrap gap-3 justify-center px-3 py-10 max-w-xs mx-auto">
                                    @include('docs.input.autocomplete.basic')
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/input/autocomplete/basic.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem] p-0"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="mb-5">
                    <div class="text-xl font-semibold">Server Side</div>
                </div>
                <div x-data="{ tab: 'preview' }">
                    <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                        <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                        <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                    </div>

                    <div>
                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="flex flex-wrap gap-3 justify-center px-3 py-10 max-w-xs mx-auto">
                                    @include('docs.input.autocomplete.ssr')
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/input/autocomplete/ssr.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem] p-0"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="mb-5">
                    <div class="text-xl font-semibold">Server Side Backend</div>
                    <div class="text-cat-500 text-sm"><a href="https://github.com/ilsyaa/lazyui-docs/blob/master/routes/api.php" target="_blank" class="underline">More example</a></div>
                </div>
                @php
                    $file = resource_path('views/docs/input/autocomplete/be.blade.php');
                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                @endphp
                <pre class="text-[0.9rem] p-0"><code class="language-php">{{ $content }}</code></pre>
            </section>
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
