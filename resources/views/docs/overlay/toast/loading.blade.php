<x-button onclick="toastLoading()" >Loading</x-button>

<script>
    function toastLoading() {
        const toastl = toast.loading('Loading...');

        setTimeout(() => {
            toastl.success('Success message');
        }, 2000);
    }
</script>
