<x-tabs>
    <x-tabs.buttons>
        <x-tabs.button>Tab One</x-tabs.button>
        <x-tabs.button :is-active="true">Tab two</x-tabs.button>
        <x-tabs.button>Tab three</x-tabs.button>
    </x-tabs.buttons>

    <x-tabs.contents class="border border-dashed border-cat-300 dark:border-cat-700 rounded-md text-xs text-center">
        <x-tabs.content>This is the content shown for Tab1</x-tabs.content>
        <x-tabs.content>And, this is the content for Tab2</x-tabs.content>
        <x-tabs.content>Finally, this is the content for Tab3</x-tabs.content>
    </x-tabs.contents>
</x-tabs>
