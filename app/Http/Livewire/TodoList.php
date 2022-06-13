<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $name;
    public $completed;

    public function addTodo()
    {
        $this->validate([
            'name' => 'required',
        ]);

        Todo::create([
            'name' => $this->name,
            'completed' => false,
        ]);

        $this->name = '';
        $this->completed = false;
    }

    public function deleteTodo($id)
    {
        Todo::destroy($id);

        return redirect()->back();

    }

    public function updateTodo($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();

        return redirect()->back();

    }

    public function render()
    {
        $todos = Todo::all();
        return view('livewire.todo-list', compact('todos'));
    }


}
