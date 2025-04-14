@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-5">
            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div>
                        <div class="text-xl font-semibold">Nav</div>
                        <div class="text-cat-500 text-sm">Displays a navigation item for sidebar panel.</div>
                    </div>
                    <div class="text-sm">Before you can use this component, you need to run this command to publish the component to <code>resources/views/components</code>.</div>
                    <pre class="text-[0.9rem]"><code class="language-">php artisan lazy:component nav</code></pre>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Section</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.nav.section')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/nav/section.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Navigation Item</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        <ul class="w-full flex flex-col max-w-xs">
                                            @include('docs.display.nav.item')
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/nav/item.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Navigation Collapse</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        <ul class="w-full flex flex-col max-w-xs">
                                            @include('docs.display.nav.collapse')
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/nav/collapse.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">With Description</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        <ul class="w-full flex flex-col max-w-xs">
                                            @include('docs.display.nav.desc')
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/nav/desc.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Full Example</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        <ul class="w-full flex flex-col max-w-xs">
                                            @include('docs.display.nav.example')
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/nav/example.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Attribute</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        <ul class="w-full flex flex-col max-w-xs gap-1">
                                            @include('docs.display.nav.attr')
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/nav/attr.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

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
