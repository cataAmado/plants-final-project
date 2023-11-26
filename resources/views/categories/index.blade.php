<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
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
                            <th class="border border-gray-800 px-4 py-2">Description</th>
                            <th class="border border-gray-800 px-4 py-2">Priority</th>
                            <th class="border border-gray-800 px-4 py-2">View</th>
                            <th class="border border-gray-800 px-4 py-2">Edit</th>
                            <th class="border border-gray-800 px-4 py-2">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="border border-gray-800 px-4 py-2">{{ $category->id }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $category->name }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $category->description }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $category->priority }}</td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <a href="{{ route('categories.show', $category) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        View
                                    </a>
                                </td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <a href="{{ route('categories.edit', $category) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </a>
                                </td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <form action="{{ route('categories.destroy', $category) }}" method="post"
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
                <a href="/categories/create"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Add Category
                </a>
            </div>
        </div>
        <div class="col-span-12 text-center py-5">
            <a href="/dashboard"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Back
            </a>

    </div>
    </div>
</x-app-layout>
