<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <form action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="text" name="name" required>
            <input type="file" name="resource" id="resource" required>
            <input type="submit" value="Registro" class="bg-white">
            </form>
    </div>
</x-app-layout>
