@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-5">
            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div>
                        <div class="text-xl font-semibold">Select</div>
                        <div class="text-cat-500 text-sm">A control that allows the user to select one or more options from a list of options.</div>
                    </div>
                    <div class="text-sm">Before you can use this component, you need to run this command to publish the component to <code>resources/views/components</code>.</div>
                    <pre class="text-[0.9rem]"><code class="language-">php artisan lazy:component select</code></pre>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Usage</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center max-w-xs mx-auto">
                                        @include('docs.input.select.default')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/input/select/default.blade.php');
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
                                    <div class="flex flex-wrap gap-3 justify-center max-w-xs mx-auto">
                                        @include('docs.input.select.desc')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/input/select/desc.blade.php');
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
                    <div class="text-xl font-semibold">With Svg ( Icon )</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center max-w-xs mx-auto">
                                        @include('docs.input.select.svg')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/input/select/svg.blade.php');
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
                    <div class="text-xl font-semibold">With Image</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center max-w-xs mx-auto">
                                        @include('docs.input.select.img')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/input/select/img.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-3">
                    <div class="text-xl font-semibold">Using Ajax</div>
                    <div class="text-sm max-w-2xl text-cat-500">To set the default value in select ajax is a little different, you can see it below. <br>For select ajax it doesn't support wire:model and x-model for now.</div>
                    <a target="_blank" href="https://github.com/ilsyaa/lazyui-docs/blob/master/routes/api.php" class="underline text-sm">Example API Backend</a>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center max-w-xs mx-auto">
                                        @include('docs.input.select.ssr')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/input/select/ssr.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="text-xl font-semibold">API</div>
                        @php
                            $file = resource_path('views/docs/input/select/api.blade.php');
                            $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                            @endphp
                        <pre class="text-[0.9rem]"><code class="language-php">{{ $content }}</code></pre>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="text-xl font-semibold">Data</div>
                        <div class="text-sm">This will create 1 option like this <code>&lt;option value=&quot;1&quot;&gt;Ilsyaa&lt;/option&gt;</code></div>
                        @php
                            $file = resource_path('views/docs/input/select/api-res.blade.php');
                            $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                        @endphp
                        <pre class="text-[0.9rem]"><code class="language-php">{{ $content }}</code></pre>
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
