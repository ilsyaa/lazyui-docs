@extends('tables.layouts.app')

@section('content')
    <div class="lazy-container-sm">
        <div class="mb-10">
            <div class="text-3xl font-bold">{{ $title }}</div>
            <div class="text-sm text-cat-500"></div>
        </div>
        <div class="prose dark:prose-invert max-w-none prose-img:rounded-lg prose-pre:p-0 prose-pre:m-0 prose-pre:bg-transparent prose-pre:rounded-none">
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
