<?php

namespace App\Http\Livewire;

use App\Models\Task as TaskModel;
use Livewire\Component;

class Task extends Component
{

    public $tasks;
    public TaskModel $task;

    public function rules()
    {
        return [
            'task.text' => 'required|max:10',
        ];
    }

    //run once
    public function mount()
    {
        $this->tasks = TaskModel::orderBy('id','desc')->get();
        $this->task = new TaskModel();
    }

    //check automatic task.text -> ipdated"TaskText"
    public function updatedTaskText()
    {
        $this->validate(['task.text' => 'max:10']);
    }

    //For search save in BD
    public function save()
    {
        $this->validate();
        $this->task->save(); //Save in database
        $this->mount(); //For clear search after the press save
        //session()->flash('message','Task saved successfully'); 
        $this->emitUp('taskSaved', 'Task saved successfully');
    }

    public function render()
    {
        return view('livewire.task');
    }
}
