<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-5 px-5">
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

        {{-- Formulario para actualizar nombre y correo electrónico --}}
        <form action="{{ route('users.updateProfile', $user) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="text-gray-700 text-sm font-bold">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                    class="border border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="text-gray-700 text-sm font-bold">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                    class="border border-gray-300 p-2 w-full" required>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Name & Email
                </button>
            </div>
        </form>

        {{-- Formulario para actualizar contraseña --}}
        <form action="{{ route('users.updatePassword', $user) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mt-8 mb-4">
                <label for="current_password" class="text-gray-700 text-sm font-bold">Current password:</label>
                <input type="password" name="current_password" id="current_password"
                    class="border border-gray-300 p-2 w-full" required>
            </div>

            <div class="mt-8 mb-4">
                <label for="password" class="text-gray-700 text-sm font-bold">New Password:</label>
                <input type="password" name="password" id="password" class="border border-gray-300 p-2 w-full"
                    required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="text-gray-700 text-sm font-bold">Confirm New Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="border border-gray-300 p-2 w-full" required>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Password
                </button>
            </div>
        </form>

        <div class="mt-4">
            <a href="{{ route('users.index') }}"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Cancel
            </a>
        </div>
    </div>
</x-app-layout>
