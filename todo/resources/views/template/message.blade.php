
@if (session()->has('message'))
    <div x-data="{show: true}" x-init = "setTimeout( () => show = false, 2000)" x-show = "show" class="container mx-auto mt-5 mb-3 text-center text-green-500 text-sm">
        {{ session('message') }}
    </div>
@endif