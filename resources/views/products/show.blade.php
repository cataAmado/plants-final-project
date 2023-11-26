<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-5 px-5">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6 mx-auto">
                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">ID:</strong>
                    <span class="text-gray-700 text-sm">{{ $product->id }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Name:</strong>
                    <span class="text-gray-700 text-sm">{{ $product->name }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Description:</strong>
                    <p class="text-gray-700 text-sm">{{ $product->description }}</p>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Price:</strong>
                    <span class="text-gray-700 text-sm">{{ $product->price }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Stock:</strong>
                    <span class="text-gray-700 text-sm">{{ $product->stock }}</span>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Category:</strong>
                    <span class="text-gray-700 text-sm">{{ $product->category->name }}</span>
                </div>


                <div class="mb-4">
                    <strong class="text-gray-700 text-sm font-bold">Image:</strong>
                    @if ($product->image)
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-64 h-64 object-cover">
                    @else
                        <span class="text-gray-700 text-sm">No image available</span>
                    @endif
                </div>


                <div class="flex items-center justify-between">
                    <a href="{{ route('products.edit', $product) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Edit Product
                    </a>
                    <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
