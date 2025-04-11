@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container">

        <x-sheet id="test">
            <x-sheet.header title="Sheet" />
            <x-sheet.body class="p-3">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, rerum earum. Minima?</p>
            </x-sheet.body>
            <x-sheet.footer class="p-3">
                test
            </x-sheet.footer>
        </x-sheet>

        <x-button x-data x-sheet:toggle="test">sheet</x-button>

    </div>
@endsection

<script>
    window.addEventListener('overlay', (e) => {
        console.log(e.detail);
    })
</script>
