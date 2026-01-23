<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Gestión de Inventario' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-800">Inventario</h2>
                <a href="{{ route('productos.index') }}" class="text-blue-600 hover:text-blue-800">Productos</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-6">
        {{ $slot }}
    </div>
</body>
</html>
