@extends('tables.layouts.app')

@section('content')
    <div class="lazy-container-sm">
        <div class="mb-10">
            <div class="text-3xl font-bold">{{ $title }}</div>
            <div class="text-sm text-cat-500"></div>
        </div>
        <div class="prose dark:prose-invert max-w-none prose-img:rounded-lg">
            {!! $content !!}
        </div>
    </div>
@endsection
