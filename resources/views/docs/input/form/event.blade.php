<x-form id="form-lazy" action="{{ route('form-backend') }}" class="w-full">
    @csrf
    @method('POST')
    <div class="flex flex-col gap-3">
        <div>
            <x-label for="name">Name</x-label>
            <x-input id="name" name="name" placeholder="Name" />
        </div>
        <x-button type="submit">Submit</x-button>
    </div>
</x-form>

<script>
    document.addEventListener('form', ({ detail }) => {
        // ignore other forms
        if(detail.id != 'form-lazy') return;

        // if success
        if(detail?.ok) {
            // reset form
            detail.element.target.reset();
        }

        console.log(detail);
    });
</script>
