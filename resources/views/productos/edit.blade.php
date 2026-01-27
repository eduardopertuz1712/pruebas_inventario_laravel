<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Producto: ' . $producto->nombre) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="max-w-md">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Nombre del Producto</label>
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:border-blue-500" required>
                        @error('nombre')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="descripcion" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Descripción</label>
                        <textarea id="descripcion" name="descripcion" rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:border-blue-500">{{ old('descripcion', $producto->descripcion) }}</textarea>
                        @error('descripcion')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="precio" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Precio (en dólares)</label>
                        <input type="number" id="precio" name="precio" value="{{ old('precio', $producto->precio) }}" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:border-blue-500" required>
                        @error('precio')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-6">
                        <label for="stock" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Stock (cantidad)</label>
                        <input type="number" id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" min="0" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded dark:bg-gray-700 dark:text-gray-200 focus:outline-none focus:border-blue-500" required>
                        @error('stock')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                    </div>

                    <div class="flex gap-4">
                        <button type="submit" class="flex-1 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar Cambios</button>
                        <a href="{{ route('productos.index') }}" class="flex-1 text-center bg-gray-300 dark:bg-gray-600 hover:bg-gray-400 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200 font-bold py-2 px-4 rounded">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
