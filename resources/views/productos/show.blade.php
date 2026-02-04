<x-role-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ver Producto: ' . $producto->nombre) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <a href="{{ route('productos.index') }}" class="text-blue-600 dark:text-blue-400 hover:underline mb-4 inline-block">← Volver a productos</a>

                <div class="mt-6">
                    <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-200 mb-4">{{ $producto->nombre }}</h1>

                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            @if($producto->imagen)
                                <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="w-full max-h-96 object-cover rounded mb-4">
                            @endif
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Precio</p>
                            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">${{ number_format($producto->precio, 2) }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Stock</p>
                            @php
                                $stockClass = $producto->stock > 10 ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300' : ($producto->stock > 0 ? 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-300' : 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300');
                            @endphp
                            <p class="text-3xl font-bold {{ $stockClass }} rounded px-3 py-1 inline-block">{{ $producto->stock }}</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Descripción</p>
                        <p class="text-gray-800 dark:text-gray-200 text-lg">{{ $producto->descripcion ?? 'Sin descripción' }}</p>
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ route('productos.edit', $producto->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded">
                            Editar
                        </a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-role-layout>
