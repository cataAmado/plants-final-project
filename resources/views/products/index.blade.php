<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
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
                            <th class="border border-gray-800 px-4 py-2">Price</th>
                            <th class="border border-gray-800 px-4 py-2">Stock</th>
                            <th class="border border-gray-800 px-4 py-2">Image</th>
                            <th class="border border-gray-800 px-4 py-2">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="border border-gray-800 px-4 py-2">{{ $product->id }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $product->name }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $product->description }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $product->price }}</td>
                                <td class="border border-gray-800 px-4 py-2">{{ $product->stock }}</td>
                                <td class="border border-gray-800 px-4 py-2"> <img src="{{ $product->image }}"
                                        alt="{{ $product->name }}" class="w-64 h-64 object-cover">
                                </td>
                                <td class="border border-gray-800 px-4 py-2">{{ $product->category->name }}</td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <a href="{{ route('products.show', $product->slug) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        View
                                    </a>
                                </td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </a>
                                </td>
                                <td class="border border-gray-800 px-4 py-2">
                                    <form action="{{ route('products.destroy', $product) }}" method="post"
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
                <a href="/products/create"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Add Product
                </a>
            </div>

            <div class="col-span-12 text-center py-5">
                <a href="/dashboard" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Back
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
