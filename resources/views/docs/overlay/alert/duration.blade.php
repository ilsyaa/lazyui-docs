<x-button onclick="duration()">
    3000ms
</x-button>

<script>
    function duration() {
        zalert({
            type: 'info',
            title: 'Duration',
            text: 'will close in 3 seconds',
            duration: 3000
        })
    }
</script>
