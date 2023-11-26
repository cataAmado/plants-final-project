<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrative Module') }}
        </h2>
    </x-slot>

    <div class="font-bold text-xl pt-20">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-20 py-10">
                <div class="mb-4">
                    <a href="{{ route('products.index') }}" class="text-blue-500 hover:underline">Products</a>
                </div>
                <div class="mb-4">
                    <a href="{{ route('categories.index') }}" class="text-green-500 hover:underline">Categories</a>
                </div>
                <div>
                    <a href="{{ route('users.index') }}" class="text-red-500 hover:underline">Users</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
