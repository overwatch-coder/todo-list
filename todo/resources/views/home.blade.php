<x-layout>
    <div class="container mx-auto w-1/3 h-1/4 fixed top-20 left-1/2 transform -translate-x-1/2 -translate-y-1/2">

        <h1 class="text-center text-gray-500 font-mono text-4xl py-3 mb-2 mt-4">Todo List App</h1>

        <img src="{{ url('assets/images/todo-cover.jpg') }}" alt="Todo Cover" class="w-full mb-4 object-contain rounded-full">

        <div class="text-center pt-2">
            <a href="{{ route('todo.index') }}" class="uppercase py-2 px-5 bg-cyan-600 text-light hover:bg-gradient-to-r from-cyan-700 to-cyan-600 shadow hover:shadow-lg text-white rounded">See all todos</a>
        </div>
        
    </div>
</x-layout>