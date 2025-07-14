@extends('tables.layouts.app')

@section('content')
    <div class="lazy-container-sm">
        <div class="mb-10">
            <div class="text-3xl font-bold">{{ $title }}</div>
            <div class="text-sm text-cat-500"></div>
        </div>
        <div class="prose dark:prose-invert max-w-none prose-img:rounded-lg prose-pre:p-0 prose-pre:m-0 prose-pre:bg-transparent prose-pre:rounded-none [&_.hash-link]:no-underline [&_.hash-link]:scroll-mt-20 [&_.hash-link]:text-cat-500 [&_.table-of-contents]:rounded-lg [&_.table-of-contents]:p-3 [&_.table-of-contents]:pl-10 [&_.table-of-contents]:bg-white [&_.table-of-contents]:shadow dark:[&_.table-of-contents]:bg-cat-800">
            {!! $content !!}
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
