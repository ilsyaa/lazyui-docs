<x-radio.group
    name="game"
    defaultValue="apex"
>
    <div class="flex items-center space-x-3 space-y-0">
        <x-radio.item
            value="apex"
            id="apex"
        />
        <x-label for="apex">
            APEX LEGENDS
        </x-label>
    </div>
    <div class="flex items-center space-x-3 space-y-0">
        <x-radio.item
            value="cs"
            id="cs"
        />
        <x-label for="cs">
            CS 2
        </x-label>
    </div>
    <div class="flex items-center space-x-3 space-y-0">
        <x-radio.item
            value="pubg"
            id="pubg"
        />
        <x-label for="pubg">
            PUBG
        </x-label>
    </div>
</x-radio.group>
