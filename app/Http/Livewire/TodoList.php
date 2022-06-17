<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class TodoList extends Component
{
    public $name;
    public $completed;

    /**
     * @return void
     */
    public function addTodo(): void
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

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function deleteTodo($id): RedirectResponse
    {
        Todo::destroy($id);

        return redirect()->back();

    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function updateTodo($id): RedirectResponse
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();

        return redirect()->back();

    }

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        $todos = Todo::all();
        return view('livewire.todo-list', compact('todos'));
    }


}
