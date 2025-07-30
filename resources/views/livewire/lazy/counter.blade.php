<?php
    use Livewire\Volt\Component;
    use App\Models\User;
    use Livewire\Attributes\Computed;

    new class extends Component {
        public $search = '';

        #[Computed]
        public function users()
        {
            if (empty($this->search)) {
                return collect();
            }

            return User::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->limit(10)
                ->get();
        }

        public function updatedSearch()
        {
            // This method runs every time the search property is updated
            // You can add validation or other logic here if needed
        }
    }
?>

<div class="max-w-md mx-auto p-4">
    <div class="mb-4">
        <input
            type="text"
            id="search"
            wire:model.live.debounce.300ms="search"
            placeholder="Enter name or email..."
            class="w-full px-3 py-2 border border-cat-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            autocomplete="off"
        >
    </div>

    <div class="space-y-2">
        @if ($this->users->count() > 0)
            @foreach ($this->users as $user)
                <div class="p-3 bg-white border border-cat-200 rounded-lg shadow-sm hover:bg-cat-50 transition-colors">
                    <div class="font-medium text-cat-900">{{ $user->name }}</div>
                    <div class="text-sm text-cat-500">{{ $user->email }}</div>
                </div>
            @endforeach
        @elseif (!empty($this->search))
            <div class="text-center text-cat-500 py-4">
                No users found matching "{{ $this->search }}"
            </div>
        @else
            <div class="text-center text-cat-400 py-4">
                Start typing to search users...
            </div>
        @endif
    </div>

    @if ($this->users->count() === 10)
        <div class="text-xs text-cat-500 text-center mt-2">
            Showing first 10 results. Refine your search for more specific results.
        </div>
    @endif
</div>
