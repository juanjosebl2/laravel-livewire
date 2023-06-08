<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{   

    public $welcome = "Welcome, these are the tasks";

    protected $listeners = ['taskSaved'];

    public function taskSaved($message)
    {
        session()->flash('message', $message);
    }

    public function render()
    {
        return view('livewire.main');
    }
}
