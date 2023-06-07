<?php

namespace App\Http\Livewire;

use App\Models\Task as TaskModel;
use Livewire\Component;

class Task extends Component
{
    
    public $tasks;

    //run once
    public function mount()
    {
        $this->tasks = TaskModel::get();
    }

    public function render()
    {
        return view('livewire.task');
    }
}
