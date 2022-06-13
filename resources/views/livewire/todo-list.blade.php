<div>
    <h1 class="text-3xl font-bold text-center text-white border border-gray-600 p-3">Todo List Example</h1>
    <div class="mt-10">
        <div class="flex">
            <div class="flex items-center mr-4">
                <input wire:model="name" type="text" class="border-2 border-gray-900 p-2 w-full" placeholder="Add a todo">
            </div>
            <div class="flex items-center mr-4">
                <button wire:click="addTodo" type="button" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Add Todo
                </button>
            </div>
        </div>
    </div>
    <div class="mt-12">
        <h2 class="text-lg font-bold mb-2 text-white text-center">Todo List</h2>
        <ul class="text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @foreach ($todos as $todo)
                <li class="w-full px-4 py-4 border-b border-gray-200 dark:border-gray-600">

                    <div class="flex">
                        <div class="flex items-center mr-4">
                            <input wire:change="updateTodo({{ $todo->id }})" id="todo-{{ $todo->id }}" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @if ($todo->completed) checked @endif>
                            <label for="todo-{{ $todo->id }}" class="@if ($todo->completed) line-through dark:text-gray-400 @endif ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $todo->name }}</label>
                        </div>

                        <div class="flex items-center ml-auto">
                            <button wire:click="deleteTodo({{ $todo->id }})" type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-0 px-4 rounded">
                                Del
                            </button>
                        </div>
                    </div>


                </li>
            @endforeach
        </ul>
    </div>
</div>
