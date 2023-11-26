<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-5 px-5">
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="text-gray-700 text-sm font-bold">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="border border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="text-gray-700 text-sm font-bold">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="border border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="password" class="text-gray-700 text-sm font-bold">Password:</label>
                <input type="password" name="password" id="password" class="border border-gray-300 p-2 w-full"
                    required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="text-gray-700 text-sm font-bold">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="border border-gray-300 p-2 w-full" required>
            </div>

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4">
                    <strong>Error:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Create User
                </button>
                <a href="{{ route('users.index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
