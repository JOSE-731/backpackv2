<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tests;

class TestComponent extends Component
{
    public function render()
    {
        $data = Tests::all();

        return view('livewire.test-component', compact('data'));
    }
}
