<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-5 px-10">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6 mx-auto">
                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">ID:</strong>
                    <span class="text-gray-700 text-sm">{{ $category->id }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Name:</strong>
                    <span class="text-gray-700 text-sm">{{ $category->name }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Description:</strong>
                    <span class="text-gray-700 text-sm">{{ $category->description }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Priority:</strong>
                    <span class="text-gray-700 text-sm">{{ $category->priority }}</span>
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('categories.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Back to Categories
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
