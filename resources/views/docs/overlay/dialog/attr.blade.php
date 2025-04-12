{{-- auto open --}}
<x-dialog id="example" :is-open="true">
    ...
</x-dialog>


{{-- custom backdrop class --}}
<x-dialog id="example" backdropClass="bg-transparant">
    ...
</x-dialog>


{{-- hide or show scroll --}}
<x-dialog id="example" :scrollbar="true">
    ...
</x-dialog>

{{-- auto fullscreen --}}
<x-dialog id="example" :is-fullscreen="true">
    ...
</x-dialog>


<script>
    // events run when overlays such as dialogs, sheets are opened and closed
    window.addEventListener('overlay', (e) => {
        console.log(e.detail);
    })

    // open sheet on javascript
    document.addEventListener('alpine:initialized', () => {
        Alpine.store('dialog').open('idDialog');
    })
</script>
