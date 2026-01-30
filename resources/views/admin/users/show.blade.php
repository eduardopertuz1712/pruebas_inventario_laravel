<x-role-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Usuario: ') . $user->name }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-4">
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Role:</strong> {{ $user->role }}</p>
                    <p><strong>Productos:</strong> {{ $user->productos()->count() }}</p>
                </div>

                <h3 class="font-semibold mb-2">Productos del usuario</h3>
                @if($productos->count())
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-200 dark:bg-gray-600">
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Precio</th>
                                    <th class="px-4 py-2">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $p)
                                    <tr class="border-t">
                                        <td class="px-4 py-2">{{ $p->id }}</td>
                                        <td class="px-4 py-2">{{ $p->nombre }}</td>
                                        <td class="px-4 py-2">${{ number_format($p->precio,2) }}</td>
                                        <td class="px-4 py-2">{{ $p->stock }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $productos->links() }}
                    </div>
                @else
                    <p>No tiene productos.</p>
                @endif
            </div>
        </div>
    </div>
</x-role-layout>
