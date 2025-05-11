<x-card class="w-full">
    <div class="p-5">
        <div class="mb-5">
            <div class="text-lg font-medium mb-1">Sign In</div>
            <p class="text-sm">Welcome back.</p>
        </div>
        <div class="flex flex-col gap-3">
            <div>
                <x-label>Email</x-label>
                <x-input name="email" placeholder="Email address" />
            </div>
            <div>
                <x-label>Password</x-label>
                <x-input name="password" placeholder="Password" />
            </div>
            <x-button>Sign In</x-button>
        </div>
    </div>
</x-card>
