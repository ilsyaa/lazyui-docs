<x-button onclick="deleteForExample()">
    Confirm
</x-button>

<script>
    function deleteForExample() {
        zalert({
            title: 'Delete',
            text: 'Are you sure want to delete?',
            confirmText: 'Delete',
            cancelText: 'Cancel',
        }).then((res) => {
            if (res?.confirmed) {
                toast.success('Deleted.');
            } else {
                toast.error('Action cancelled.');
            }
        })
    }
</script>
