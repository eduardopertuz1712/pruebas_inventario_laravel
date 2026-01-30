<x-role-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if(isset($isAdmin) && $isAdmin)
                    <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mb-6">Usuarios registrados</h3>
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-gray-200 dark:bg-gray-600">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">ID</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Nombre</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Email</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200">Role</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-200"># Productos</th>
                                    <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 dark:text-gray-200">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y dark:divide-gray-600">
                                @foreach($users as $u)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $u->id }}</td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">{{ $u->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $u->email }}</td>
                                        <td class="px-6 py-4 text-sm">
                                            <span class="px-3 py-1 text-xs rounded-full {{ $u->role === 'admin' ? 'bg-purple-100 text-purple-700 dark:bg-purple-900 dark:text-purple-300' : 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300' }}">
                                                {{ $u->role }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-semibold text-blue-600 dark:text-blue-400">{{ $u->productos_count }}</td>
                                        <td class="px-6 py-4 text-sm text-center">
                                            <a href="{{ route('admin.users.show', $u->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs inline-block">
                                                Ver
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h3 class="font-semibold mb-4">Resumen</h3>
                    <x-welcome />
                @endif
            </div>
        </div>
    </div>
</x-role-layout>
