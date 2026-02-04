<x-role-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestión de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-8">
                    <a href="{{ route('productos.create') }}"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        + Nuevo Producto
                    </a>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-gray-200 dark:bg-gray-600">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">ID</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Imagen</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Nombre</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Descripción</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Precio</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Stock</th>
                                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 dark:text-gray-200">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y dark:divide-gray-600">
                            @forelse($productos as $producto)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $producto->id }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        @if($producto->imagen)
                                            <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="w-16 h-16 object-cover rounded">
                                        @else
                                            <div class="w-16 h-16 bg-gray-100 dark:bg-gray-600 rounded flex items-center justify-center text-xs text-gray-500">No imagen</div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">{{ $producto->nombre }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                        {{ Str::limit($producto->descripcion, 50) }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-semibold text-blue-600 dark:text-blue-400">
                                        ${{ number_format($producto->precio, 2) }}
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        @php
                                            $stockClass =
                                                $producto->stock > 10
                                                    ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300'
                                                    : ($producto->stock > 0
                                                        ? 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-300'
                                                        : 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300');
                                        @endphp
                                        <span class="px-3 py-1 text-xs rounded-full {{ $stockClass }}">
                                            {{ $producto->stock }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm flex gap-2 justify-center">
                                        <a href="{{ route('productos.show', $producto->id) }}"
                                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs">
                                            Ver
                                        </a>
                                        <a href="{{ route('productos.edit', $producto->id) }}"
                                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded text-xs">
                                            Editar
                                        </a>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                        No hay productos registrados.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-6">
                    {{ $productos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-role-layout>
