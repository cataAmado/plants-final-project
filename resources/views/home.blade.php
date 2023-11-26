<x-guest-layout>
    <!-- Header -->
    <header class="bg-orange-600 text-white py-4">
        <div class="text-center container mx-auto">
            <!-- Aquí puedes agregar tu contenido del header -->
            <h1 class="text-2xl font-semibold px-5">PLANTS SALE</h1>
        </div>
    </header>

    <!-- Content -->
    <div class="bg-gray-200 container mx-auto py-5 px-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @foreach ($products as $product)
                <div class="mb-4">
                    <div class="bg-gray p-4 border border-gray-300 rounded">
                        <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover mb-2">
                        <p class="text-gray-600 mb-2">{{ $product->description }}</p>
                        <p class="text-gray-700 font-bold">{{ $product->price }} EUR</p>
                        <p class="text-gray-700 font-bold">Stock: {{ $product->stock }}</p>
                        <p class="text-gray-700 font-bold">Category: {{ $product->category->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-orange-600 text-white py-4 ">
        <div class="container mx-auto">
            <!-- Aquí puedes agregar tu contenido del footer -->
            <p class="text-center">&copy; 2023 E-Commerce. All rights reserved.</p>
        </div>
    </footer>
</x-guest-layout>
