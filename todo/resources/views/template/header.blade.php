
    <header class="fixed top-0 w-screen z-50 bg-gradient-to-r from-cyan-900 to-blue-600">

        <nav class="relative md:flex justify-between items-center place-items-center py-4 px-3">
            <a href="/" class="text-5xl font-serif font-semibold ml-10 text-light">TDA</a>
            <div class="md:hidden absolute cursor-pointer top-0 right-10 mt-5">
                <i class="bi bi-list text-4xl text-light"></i>
            </div>

            <ul class="hidden md:flex flex-col md:flex-row justify-evenly items-center space-x-6 tracking-wide mr-6">
                <a href="{{ route('todo.index') }}" class="text-light hover:text-light hover:border-b-2 hover:pb-1 hover:scale-110 transform transition">All Todos</a>
                <a href="{{ route('todo.create') }}" class="bg-light py-2 px-4 rounded-full text-dark hover:text-light hover:bg-transparent hover:border-[1px] hover:scale-110 transform transition">Create A Todo</a>
            </ul>
        </nav>

        <ul class="md:hidden flex flex-col justify-center items-start tracking-wide pt-4 mb-6 ml-10 space-y-4">
                <a href="{{ route('todo.index') }}" class="text-light hover:text-black hover:scale-110 ml-2 transform transition">All Todos</a>
                <a href="{{ route('todo.create') }}" class="bg-light py-2 px-4 rounded-full text-dark hover:text-light hover:bg-transparent hover:border-[1px] hover:scale-110 transform transition">Create A Todo</a>
            </ul>
    </header>