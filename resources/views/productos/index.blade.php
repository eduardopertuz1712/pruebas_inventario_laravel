<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4">
            <h2 class="text-2xl font-bold text-gray-800">Inventario</h2>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Gestión de Productos</h1>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('productos.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                + Nuevo Producto
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Nombre</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Descripción</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Precio</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Stock</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($productos as $producto)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $producto->id }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-800">{{ $producto->nombre }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ Str::limit($producto->descripcion, 50) }}
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-blue-600">
                                ${{ number_format($producto->precio, 2) }}
                            </td>
                            <td class="px-6 py-4 text-sm">
                                @php
                                    $stockClass = $producto->stock > 10 ? 'bg-green-100 text-green-700' : ($producto->stock > 0 ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700');
                                @endphp
                                <span class="px-3 py-1 text-xs rounded-full {{ $stockClass }}">
                                    {{ $producto->stock }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm flex gap-2 justify-center">
                                <a href="{{ route('productos.show', $producto->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs">
                                    Ver
                                </a>
                                <a href="{{ route('productos.edit', $producto->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded text-xs">
                                    Editar
                                </a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">
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
</body>
</html>
