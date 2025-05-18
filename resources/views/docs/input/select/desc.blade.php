<x-select name="role" :search-input="false">
    <x-select.option value="seperadmin">
        <x-slot:label>Super Admin</x-slot:label>
        <x-slot:description>Super admin access</x-slot:description>
    </x-select.option>
    <x-select.option value="admin">
        <x-slot:label>Admin</x-slot:label>
        <x-slot:description>Admin access</x-slot:description>
    </x-select.option>
    <x-select.option value="user">
        <x-slot:label>User</x-slot:label>
        <x-slot:description>User access</x-slot:description>
    </x-select.option>
</x-select>
