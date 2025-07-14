@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-10">
            <section>
                <div class="mb-5">
                    <div class="text-3xl font-bold">Apexcharts</div>
                    <div class="text-cat-500 text-sm">Modern & Interactive Open-source Charts.</div>
                </div>
                <div>
                    <div class="text-sm mb-3">Before you can use ApexCharts, make sure to include the ApexCharts JavaScript and CSS files on the page where you want to display them.</div>
                    <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                        @php
                            $file = resource_path('views/docs/external/apexcharts/install.blade.php');
                            $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                        @endphp
                        <pre class="text-[0.9rem] p-0"><code class="language-html">{{ $content }}</code></pre>
                    </div>
                </div>
            </section>

            <section>
                <div class="mb-5">
                    <div class="text-xl font-semibold">Multiple Bar</div>
                </div>
                <div x-data="{ tab: 'preview' }">
                    <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                        <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                        <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                    </div>

                    <div>
                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="px-3 py-10">
                                    @include('docs.external.apexcharts.bar')
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/external/apexcharts/bar.blade.php');
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
                    <div class="text-xl font-semibold">Multiple Bar (Multiple)</div>
                </div>
                <div x-data="{ tab: 'preview' }">
                    <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                        <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                        <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                    </div>

                    <div>
                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="px-3 py-10">
                                    @include('docs.external.apexcharts.bar-horizontal')
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/external/apexcharts/bar-horizontal.blade.php');
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
                    <div class="text-xl font-semibold">Area</div>
                </div>
                <div x-data="{ tab: 'preview' }">
                    <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                        <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                        <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                    </div>

                    <div>
                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="px-3 py-10">
                                    @include('docs.external.apexcharts.area')
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/external/apexcharts/area.blade.php');
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
                    <div class="text-xl font-semibold">Donut</div>
                </div>
                <div x-data="{ tab: 'preview' }">
                    <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                        <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                        <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                    </div>

                    <div>
                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="px-3 py-10 flex justify-center max-w-lg mx-auto">
                                    @include('docs.external.apexcharts.donut')
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/external/apexcharts/donut.blade.php');
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
                    <div class="text-xl font-semibold">Pie</div>
                </div>
                <div x-data="{ tab: 'preview' }">
                    <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                        <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                        <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                    </div>

                    <div>
                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="px-3 py-10 flex justify-center max-w-lg mx-auto">
                                    @include('docs.external.apexcharts.pie')
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/external/apexcharts/pie.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem] p-0"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/lazy/vendor/highlight/lazy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lazy/vendor/apexcharts/apexcharts.css') }}">
@endpush

@push('body')
    <script src="{{ asset('assets/lazy/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/lazy/vendor/apexcharts/apexcharts.helper.js') }}"></script>
    <script src="{{ asset('assets/lazy/vendor/highlight/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/lazy/vendor/highlight/lazy.js') }}"></script>
@endpush
