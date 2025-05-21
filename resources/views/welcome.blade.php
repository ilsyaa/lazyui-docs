<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme-mode="light" theme-accent="indigo" theme-aside="show"
    class="lazy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        window.localStorageKey = 'lazy-settings';
        window.eventKey = 'lazy-appearance-change';
    </script>
    <script src="{{ asset('assets/lazy/theme.js?v=15') }}"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
    <style>
        @keyframes gradient-x {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .animate-gradient-x {
            background-size: 300% 300%;
            animation: gradient-x 5s ease infinite;
        }
    </style>
</head>

<body class="lazy-body">
    <div class="h-screen max-h-full w-full flex flex-col justify-center items-center gap-5">
        <div>
            <span class="text-4xl font-bold">LazyUI</span>
            <span class="text-sm">for Laravel</span>
        </div>
        <div class="text-sm max-w-md text-center text-cat-700 dark:text-cat-400 px-3">Beautifully designed components that
            you can copy and paste into your apps. Accessible. Customizable. Open Source.</div>
        <div class="relative inline-flex group">
            <div
                class="absolute -inset-px opacity-70 rounded-xl blur-lg filter group-hover:opacity-100 group-hover:-inset-1 transition-all duration-1000 animate-gradient-x bg-[length:300%_300%] bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E]">
            </div>
            <x-button href="{{ route('installation') }}" class="py-5 z-1" >
                <svg class="size-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <defs>
                        <style>
                            .fa-secondary {
                                opacity: .4
                            }
                        </style>
                    </defs>
                    <path fill="currentColor" class="fa-secondary"
                        d="M118.5 288H24c-8.7 0-16.7-4.7-20.9-12.2s-4.1-16.8 .4-24.2l52.8-86.9C69.3 143.2 92.6 130 117.8 130h80.8c-28.5 45.8-60.7 114.5-80.1 158zM382 313.4v80.8c0 25.2-13.1 48.5-34.6 61.5l-86.9 52.8c-7.4 4.5-16.7 4.7-24.2 .4s-12.2-12.2-12.2-20.9l0-96.2c43.9-19.1 112.4-50.3 158-78.4zM166.5 470C132.3 504.3 66 511 28.3 511.9c-16 .4-28.6-12.2-28.2-28.2C1 446 7.7 379.7 42 345.5c34.4-34.4 90.1-34.4 124.5 0s34.4 90.1 0 124.5zm-46.7-36.4c11.4-11.4 11.4-30 0-41.4s-30-11.4-41.4 0c-10.1 10.1-13 28.5-13.7 41.3c-.5 8 5.9 14.3 13.9 13.9c12.8-.7 31.2-3.7 41.3-13.7z" />
                    <path fill="currentColor" class="fa-primary"
                        d="M223.7 391.9c-4-56-49.1-100.6-105.3-103.8c21.4-47.9 58.4-126.6 88.8-171.5C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-44.7 30.3-123.1 66.2-171.6 87.2zM424 128a40 40 0 1 0 -80 0 40 40 0 1 0 80 0z" />
                </svg>
                Install LazyUI
            </x-button>
        </div>
        <a href="https://github.com/ilsyaa/lazyui" class="text-xs font-medium text-cat-500 hover:underline">Version 1.0.2</a>
    </div>

    <div class="absolute bottom-5 md:right-5 md:translate-x-0 right-1/2 translate-x-1/2">
        <button type="button"
            class="flex gap-3 items-center bg-cat-200 dark:bg-cat-800 rounded-full p-1.5 cursor-pointer" x-data
            x-on:click="$appearance.setTheme('toggle')">
            <div class="size-7 flex justify-center items-center rounded-full bg-cat-300 dark:bg-cat-700">
                <svg class="size-4 dark:hidden block opacity-45" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512">
                    <path fill="currentColor"
                        d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z" />
                </svg>
                <svg class="size-4 hidden dark:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <defs>
                        <style>
                            .fa-secondary {
                                opacity: .4
                            }
                        </style>
                    </defs>
                    <path fill="currentColor" class="fa-secondary"
                        d="M256 112a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm0 352a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM432 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM48 256a32 32 0 1 0 64 0 32 32 0 1 0 -64 0zM160 128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 384a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 384a32 32 0 1 0 64 0 32 32 0 1 0 -64 0z" />
                    <path fill="currentColor" class="fa-primary" d="M160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0z" />
                </svg>
            </div>
            <div class="mr-5 text-xs">
                <span class="hidden dark:block">Switch to Light</span>
                <span class="dark:hidden block">Switch to Dark</span>
            </div>
        </button>
    </div>
    @livewireScripts()
</body>

</html>
