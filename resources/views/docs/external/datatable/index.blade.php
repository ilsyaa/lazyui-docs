@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-5">
            <section>
                <div class="mb-5">
                    <div class="text-3xl font-bold">Datatables</div>
                    <div class="text-cat-500 text-sm">Read the documentation <a href="{{ route('docs.section', ['section' => 'start', 'page' => 'recommended']) }}" class="underline">LazyUI Tables</a></div>
                </div>
            </section>

            <section>
                <livewire:user-table />
            </section>
        </div>

    </div>
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/lazy/vendor/highlight/lazy.css') }}">
    @LazyUITableStyles
    @LazyUITableThirdPartyStyles
    @LazyUITableScripts
    @LazyUITableThirdPartyScripts
@endpush

@push('body')
    <script src="{{ asset('assets/lazy/vendor/highlight/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/lazy/vendor/highlight/lazy.js') }}"></script>
@endpush
