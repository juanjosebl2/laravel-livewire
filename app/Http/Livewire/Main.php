<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{   

    public $welcome = "Welcome, go work tasks";

    public function render()
    {
        return view('livewire.main');
    }
}
