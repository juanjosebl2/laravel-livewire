<?php

namespace App\Http\Livewire;

use App\Models\Task as TaskModel;
use Livewire\Component;

class Task extends Component
{

    public $tasks;
    public TaskModel $task;

    public $textSearch;

    public function rules()
    {
        return [
            'task.text' => 'required|max:10',
        ];
    }

    //run once
    public function mount()
    {
        $this->tasks = TaskModel::get();
        $this->task = new TaskModel();
    }

    //For search
    public function save()
    {
        $this->validate();
        $this->task->save(); //Save in database
        $this->mount(); //For clear search after the press save
    }

    public function render()
    {
        return view('livewire.task');
    }
}
