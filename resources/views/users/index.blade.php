<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
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
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <table class="table-auto w-full border-collapse border border-gray-800">
                    <thead>
                        <tr>
                            <th class="border border-gray-800 px-4 py-2">ID</th>
                            <th class="border border-gray-800 px-4 py-2">Name</th>
                            <th class="border border-gray-800 px-4 py-2">Email</th>
                            <th class="border border-gray-800 px-4 py-2">View</th>
                            <th class="border border-gray-800 px-4 py-2">Edit</th>
                            <th class="border border-gray-800 px-4 py-2">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border border-gray-800 px-4 py-2">{{ $user->id }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $user->name }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $user->email }}</td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <a href="{{ route('users.show', $user) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        View
                                    </a>
                                </td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <a href="{{ route('users.edit', $user) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </a>
                                </td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <form action="{{ route('users.destroy', $user) }}" method="post"
                                        onsubmit="return confirm('Are you sure?')" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-span-12 text-center py-5">
                <a href="/users/create"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Add user
                </a>
            </div>
            <div class="col-span-12 text-center py-5">
                <a href="/dashboard"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Back
                </a>

        </div>
        </div>
    </div>
</x-app-layout>
