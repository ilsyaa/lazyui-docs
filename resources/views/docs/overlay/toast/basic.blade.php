<x-button onclick="toast.info('Info Message')" >Info</x-button>
<x-button onclick="toast.success('Success Message')" >Success</x-button>
<x-button onclick="toast.warning('Warning Message')" >Warning</x-button>
<x-button onclick="toast.error('Error Message')" >Error</x-button>

<x-button onclick="toastLoading()" >Loading</x-button>
<script>
    function toastLoading() {
        const toastl = toast.loading('Loading...');

        setTimeout(() => {
            toastl.success('Success message');
        }, 2000);
    }
</script>
