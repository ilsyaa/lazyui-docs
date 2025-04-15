<x-textarea
    class="w-full"
    placeholder="Enter your message"
    x-init="$el.style.height = $el.scrollHeight + 'px'"
    x-on:input="$el.style.height = 'auto'; $el.style.height = $el.scrollHeight + 'px'"
></x-textarea>
