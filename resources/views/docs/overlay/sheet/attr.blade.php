{{-- auto open --}}
<x-sheet id="sheet-exaple" :is-open="true">
    ...
</x-sheet>


{{-- custom backdrop class --}}
<x-sheet id="sheet-exaple" backdropClass="bg-transparant">
    ...
</x-sheet>


{{-- hide or show scroll --}}
<x-sheet id="sheet-exaple" :scrollbar="true">
    ...
</x-sheet>


<script>
    // events run when overlays such as dialogs, sheets are opened and closed
    window.addEventListener('overlay', (e) => {
        console.log(e.detail);
    })

    // open sheet on javascript
    Alpine.store('sheet').open('idSheet');
</script>
