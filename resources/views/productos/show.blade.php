<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $producto->nombre }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4">
            <h2 class="text-2xl font-bold text-gray-800">Inventario</h2>
        </div>
    </nav>

    <div class="container mx-auto p-6 max-w-2xl">
        <a href="{{ route('productos.index') }}" class="text-blue-600 hover:underline mb-4 inline-block">← Volver a productos</a>

        <div class="bg-white rounded-lg shadow-md p-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $producto->nombre }}</h1>

            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <p class="text-gray-600 text-sm">Precio</p>
                    <p class="text-3xl font-bold text-blue-600">${{ number_format($producto->precio, 2) }}</p>
                </div>
                <div>
                    <p class="text-gray-600 text-sm">Stock</p>
                    @php
                        $stockClass = $producto->stock > 10 ? 'bg-green-100 text-green-700' : ($producto->stock > 0 ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700');
                    @endphp
                    <p class="text-3xl font-bold {{ $stockClass }}">{{ $producto->stock }}</p>
                </div>
            </div>

            <div class="mb-6">
                <p class="text-gray-600 text-sm">Descripción</p>
                <p class="text-gray-800 text-lg">{{ $producto->descripcion ?? 'Sin descripción' }}</p>
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
</body>
</html>
