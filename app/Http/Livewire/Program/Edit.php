<?php

namespace App\Http\Livewire\Program;

use App\Models\Program;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Edit extends Component
{

    public Program $program;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;

    public function render()
    {
        return view('livewire.program.edit');
    }

    public function store() {
        $this->showSuccesNotification = true;
    }
}
