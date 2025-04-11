<x-dropdown>
    <x-dropdown.trigger>
        <x-button>Dropdown</x-button>
    </x-dropdown.trigger>
    <x-dropdown.content class="w-56">
        <x-dropdown.label>My Account</x-dropdown.label>
        <x-dropdown.separator />
        <x-dropdown.group>
            <x-dropdown.item>
                Profile
                <x-dropdown.shortcut>⇧⌘P</x-dropdown.shortcut>
            </x-dropdown.item>
            <x-dropdown.item>
                Prada
                <x-dropdown.shortcut>⇧⌘P</x-dropdown.shortcut>
            </x-dropdown.item>
            <x-dropdown.item>
                Pokemon
                <x-dropdown.shortcut>⇧⌘P</x-dropdown.shortcut>
            </x-dropdown.item>
            <x-dropdown.sub>
                <x-dropdown.sub.trigger>Invite users</x-dropdown.sub.trigger>
                <x-dropdown.sub.content>
                    <x-dropdown.item>Email</x-dropdown.item>
                    <x-dropdown.item>Message</x-dropdown.item>
                    <x-dropdown.separator />
                    <x-dropdown.item>More...</x-dropdown.item>
                    <x-dropdown.sub>
                        <x-dropdown.sub.trigger>Invite users</x-dropdown.sub.trigger>
                        <x-dropdown.sub.content>
                            <x-dropdown.item>Email</x-dropdown.item>
                            <x-dropdown.item>Message</x-dropdown.item>
                            <x-dropdown.separator />
                            <x-dropdown.item>More...</x-dropdown.item>
                        </x-dropdown.sub.content>
                    </x-dropdown.sub>
                </x-dropdown.sub.content>
            </x-dropdown.sub>
        </x-dropdown.group>
        <x-dropdown.separator />
        <x-dropdown.item>
            Log out
            <x-dropdown.shortcut>⇧⌘Q</x-dropdown.shortcut>
        </x-dropdown.item>
    </x-dropdown.content>
</x-dropdown>
