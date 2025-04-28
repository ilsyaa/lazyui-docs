<?php

namespace App\Livewire;

use Livewire\Component;

class TestInput extends Component
{
    public $anime = 'one-piece';
    public function render()
    {
        return view('livewire.test-input');
    }
}
