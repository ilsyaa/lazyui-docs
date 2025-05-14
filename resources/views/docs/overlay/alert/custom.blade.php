<x-button onclick="custom()">
    Custom
</x-button>

<script>
    function custom() {
        zalert({
            type: 'info',
            title: 'Custom',
            text: 'Custom Button',
            confirmClass: 'bg-accent-500 dark:bg-accent-500 text-white dark:text-white hover:bg-accent-600 hover:dark:bg-accent-600 w-full',
            cancelClass: 'bg-orange-500 dark:bg-orange-500 text-white dark:text-white hover:bg-orange-600 hover:dark:bg-orange-600 w-full',
            confirmText: 'Yes',
            cancelText: 'No',
        })
    }
</script>
