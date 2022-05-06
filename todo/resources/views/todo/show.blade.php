<x-layout>
    @include('template.header')
    <x-todo-container>
        @include('template.message')
        <h1 class="text-3xl text-center text-gray-600">Todo Title - {{ $todo->title }}</h1>
        <p class="text-sm text-center font-light mt-1 text-gray-500">You can <span class="font-medium text-base text-green-600">edit</span> as well as <span class="font-medium text-base text-red-600">delete</span> this todo</p>

        <section class="container mx-auto mt-7">
            <table class="mx-auto space-x-10 space-y-10 border-3 border-collapse border-cyan-500 w-[70%]">
                <thead class="text-center">                        
                    <tr>
                        <th class="uppercase border-2 border-cyan-600">Id</th>
                        <th class="uppercase border-2 border-cyan-600">Title</th>
                        <th class="uppercase border-2 border-cyan-600">Description</th>
                        <th class="uppercase border-2 border-cyan-600">Date</th>
                    </tr>
                </thead>
                <tbody class="text-start">                    
                    <tr>
                        <td class="p-3 border-[1px] border-cyan-600"> {{ $todo->id }} </td>
                        <td class="py-2 pl-3 border-[1px] border-cyan-600">{{ $todo->title}}</td>
                        <td class="py-3 pl-3 pr-2 border-[1px] border-cyan-600">{{ $todo->note }}</td>
                        <td class="py-3 pl-3 pr-2 border-[1px] border-cyan-600">{{ $todo->created_at->toDateString() }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="space-x-4 flex mt-5 mx-auto justify-center items-center">
                <a href="{{ route('todo.edit', ['todo' => $todo->id]) }}" class="rounded py-2 px-4 bg-green-500 hover:bg-green-600 transition">
                    <span class="text-light"><i class="text-light bi bi-pencil-square mx-3"></i>Edit</span>
                </a>

                <form action="{{ route('todo.destroy', ['todo' => $todo->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="text-light rounded py-2 hover:bg-red-700 px-4 bg-red-500 transition" name="delete"><i class="text-light bi bi-trash mx-3"></i>Delete</button>
                </form>
            </div>

            <p class="text-center mt-5 pt-3 text-base text-gray-600">
                <a href="{{ route('todo.index') }}" class="border-b-2 border-cyan-500 hover:text-cyan-500">Return to all todos</a>
            </p>
        </section>
    </x-todo-container>
    <!-- Todo List App Footer -->
    <x-footer class="bottom-0 absolute"></x-footer>
</x-layout>