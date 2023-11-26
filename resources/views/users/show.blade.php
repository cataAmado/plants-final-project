<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-5 px-5">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6 mx-auto">
                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">ID:</strong>
                    <span class="text-gray-700 text-sm">{{ $user->id }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Name:</strong>
                    <span class="text-gray-700 text-sm">{{ $user->name }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Email:</strong>
                    <span class="text-gray-700 text-sm">{{ $user->email }}</span>
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('users.edit', $user) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Edit User
                    </a>
                    <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
