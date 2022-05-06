<x-layout>
    @include('template.header')

    <x-todo-container>
        @include('template.message')
        <h1 class="text-3xl text-center text-gray-600">All Todos Created</h1>

        @if (count($todos) > 0)
        <div class="mx-auto container flex justify-center mt-5">
            <form action="{{ route('todo.index') }}" method="GET">
                @csrf
                <input type="search" name="search" placeholder="search...." class="focus:ring-0 form-input focus:border-cyan-600 border-2 rounded">
                <input type="submit" name="submit" value="Search" class="form-input px-5 bg-cyan-600 text-light rounded cursor-pointer hover:bg-cyan-700">
            </form>
        </div>

        <section class="container mx-auto mt-7">
            <table class="mx-auto space-x-10 space-y-10 border-3 border-collapse border-cyan-500 w-[70%]">
                <thead class="text-center">                        
                    <tr>
                        <th class="uppercase border-2 border-cyan-600">Title</th>
                        <th class="uppercase border-2 border-cyan-600">Description</th>
                        <th class="uppercase border-2 border-cyan-600">Action</th>
                    </tr>
                </thead>
                <tbody class="text-start">                    
                    @foreach ($todos as $todo)
                    <tr>
                        <td class="py-2 px-1 border-[1px] border-cyan-600">{{ $todo->title}}</td>
                        <td class="py-3 px-1 border-[1px] border-cyan-600">
                            <div>
                                {{ $todo->note }}
                            </div>
                        </td>
                        <td class="py-3 px-8 border-[1px] border-cyan-600">
                            <a href="{{ route('todo.show', ['todo' => $todo->id]) }}" class="rounded bg-green-500 hover:bg-green-600 transition">
                                <i class="px-6 text-light bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $todos->links() }}
            @else
                <p class="text-center mt-5 text-base text-black">Hurray!! there are no todos. <br> Every todo has been crossed out successfully</p>
                <div class="mt-5 pt-5 text-center">
                    <a href="{{ route('todo.create') }}" class="py-2 px-4 bg-cyan-600 rounded hover:bg-cyan-700 transition text-light">Create a new todo</a>
                </div>
            @endif
        </section>
    </x-todo-container>
    <!-- Todo List App Footer -->
    @if (count($todos) >= 5 )
        <x-footer class="bottom-0 mt-4"></x-footer>
    @else
        <x-footer class="bottom-0 absolute"></x-footer>
    @endif
</x-layout>