<x-select name="image" :display-icon="true">
    <x-select.option value="id">
        <x-slot:icon>
            <img class="rounded-full aspect-[1/1]" src="https://raw.githubusercontent.com/Yummygum/flagpack-core/21d7c2904af91ccde7b930b50ee342c5f169a964/svg/l/ID.svg" alt="flag">
        </x-slot:icon>
        <x-slot:label>Indonesia</x-slot:label>
    </x-select.option>
    <x-select.option value="jp">
        <x-slot:icon>
            <img class="rounded-full aspect-[1/1]" src="https://raw.githubusercontent.com/Yummygum/flagpack-core/21d7c2904af91ccde7b930b50ee342c5f169a964/svg/l/JP.svg" alt="flag">
        </x-slot:icon>
        <x-slot:label>Japan</x-slot:label>
    </x-select.option>
    <x-select.option value="ru">
        <x-slot:icon>
            <img class="rounded-full aspect-[1/1]" src="https://raw.githubusercontent.com/Yummygum/flagpack-core/21d7c2904af91ccde7b930b50ee342c5f169a964/svg/l/RU.svg" alt="flag">
        </x-slot:icon>
        <x-slot:label>Russia</x-slot:label>
    </x-select.option>
</x-select>
