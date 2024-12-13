<?php

namespace App\Http\Livewire\Program;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.program.index');
    }

    public function create()
    {
        return redirect()->route('program.create');
    }

    public function edit()
    {
        return redirect()->route('program.edit');
    }
}
