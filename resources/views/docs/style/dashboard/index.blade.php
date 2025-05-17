@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-10">
            <section>
                <div class="mb-5">
                    <div class="text-3xl font-bold">Color Dashboard</div>
                    <div class="text-cat-500 text-sm">Change the base color on the dashboard.</div>
                </div>
                <div>
                    <div class="text-sm mb-3">If you're not satisfied with the current dashboard colors for example, if they aren't dark enough you can customize them here. <br><code class="break-words">resources/css/lazy/app.css</code></div>
                    <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                        @php
                            $file = resource_path('views/docs/style/dashboard/default.blade.php');
                            $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                        @endphp
                        <pre class="text-[0.9rem] p-0"><code class="language-css">{{ $content }}</code></pre>
                    </div>
                </div>
            </section>

            <section>
                <div class="mb-5">
                    <div class="text-xl font-semibold">Presets</div>
                    <div class="text-cat-500 text-sm">I’ve also provided some color presets below that you can use.</div>
                </div>

                <div class="mb-5">
                    <div class="font-semibold mb-3">Default</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="flex flex-wrap gap-3 justify-center p-3 mx-auto">
                                    <div
                                        x-data="{ slider: 50, dragging: false }"
                                        class="relative w-full mx-auto overflow-hidden rounded-xl select-none"
                                        @mousedown="dragging = true"
                                        @mouseup="dragging = false"
                                        @mousemove="if (dragging) slider = Math.max(0, Math.min(100, ($event.clientX - $el.getBoundingClientRect().left) / $el.offsetWidth * 100))"
                                        @touchstart="dragging = true"
                                        @touchend="dragging = false"
                                        @touchmove="if (dragging) slider = Math.max(0, Math.min(100, ($event.touches[0].clientX - $el.getBoundingClientRect().left) / $el.offsetWidth * 100))"
                                    >
                                        <img src="{{ asset('assets/docs/dash-default-light.png') }}" alt="@light" class="w-full h-full object-contain z-0 pointer-events-none" />
                                        <img src="{{ asset('assets/docs/dash-default-dark.png') }}" alt="@dark" class="absolute inset-0 w-full h-full object-contain z-10 pointer-events-none" :style="`clip-path: inset(0 ${100 - slider}% 0 0)`" />
                                        <div class="absolute top-1/2 -translate-y-1/2 w-4 h-4 rounded-full bg-white border border-black z-30 cursor-ew-resize" :style="`left: calc(${slider}% - 0.5rem)`" ></div>
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/style/dashboard/default.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem] p-0"><code class="language-css">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <div class="font-semibold mb-3">Darker</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div class="rounded-xl bg-white dark:bg-cat-800 border border-dashed border-cat-300 dark:border-cat-700">
                            <div x-show="tab === 'preview'">
                                <div class="flex flex-wrap gap-3 justify-center p-3 mx-auto">
                                    <div
                                        x-data="{ slider: 50, dragging: false }"
                                        class="relative w-full mx-auto overflow-hidden rounded-xl select-none"
                                        @mousedown="dragging = true"
                                        @mouseup="dragging = false"
                                        @mousemove="if (dragging) slider = Math.max(0, Math.min(100, ($event.clientX - $el.getBoundingClientRect().left) / $el.offsetWidth * 100))"
                                        @touchstart="dragging = true"
                                        @touchend="dragging = false"
                                        @touchmove="if (dragging) slider = Math.max(0, Math.min(100, ($event.touches[0].clientX - $el.getBoundingClientRect().left) / $el.offsetWidth * 100))"
                                    >
                                        <img src="{{ asset('assets/docs/dash-darker-light.png') }}" alt="@light" class="w-full h-full object-contain z-0 pointer-events-none" />
                                        <img src="{{ asset('assets/docs/dash-darker-dark.png') }}" alt="@dark" class="absolute inset-0 w-full h-full object-contain z-10 pointer-events-none" :style="`clip-path: inset(0 ${100 - slider}% 0 0)`" />
                                        <div class="absolute top-1/2 -translate-y-1/2 w-4 h-4 rounded-full bg-white border border-black z-30 cursor-ew-resize" :style="`left: calc(${slider}% - 0.5rem)`" ></div>
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/style/dashboard/darker.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem] p-0"><code class="language-css">{{ $content }}</code></pre>
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
@endpush

@push('body')
    <script src="{{ asset('assets/lazy/vendor/highlight/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/lazy/vendor/highlight/lazy.js') }}"></script>
@endpush
