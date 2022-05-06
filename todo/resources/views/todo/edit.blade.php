<x-layout>
    @include('template.header')
    <x-todo-container>
        <h2 class="text-gray-500 text-2xl font-serif text-center">Edit todo with title - {{ $todo->title }}</h2>
        <section class="w-1/2 relative top-40 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="POST" class="mt-5">
                @csrf
                @method('PUT')
                <div class="mt-3">
                    <label for="title" class="block text-lg text-gray-600 font-semibold">Title</label>

                    <input type="text" name="title" placeholder="Give the todo a title" class="mt-2 form-input w-full focus:ring-0 focus:border-cyan-900 focus:border-2 rounded shadow focus:shadow-lg py-3" value="{{ $todo->title }}">
                    
                    @error('title')
                        <p class="text-red-500 mt-3">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mt-4">
                    <label for="note" class="block text-lg text-gray-600 font-semibold">Leave a note</label>

                    <textarea type="text" name="note" placeholder="Write a little description about the todo" class="mt-2 w-full focus:ring-0 focus:border-cyan-900 focus:border-2 rounded shadow focus:shadow-lg" cols="5" rows="5">
                    {{ $todo->note }}
                    </textarea>

                    @error('note')
                        <p class="text-red-500 mt-3">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mt-5"> 
                    <button class="bg-cyan-500 p-3 shadow hover:shadow-lg transition hover:bg-cyan-600 text-light rounded w-full">Update</button>
                </div>
            </form>
        </section>
    </x-todo-container>
    <x-footer class="bottom-0"></x-footer>
</x-layout>