<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center">
        Lista de Productos
    </h1>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <table class="min-w-full text-left">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-4 font-semibold text-gray-700">Nombre</th>
                    <th class="px-6 py-4 font-semibold text-gray-700">Descripción</th>
                    <th class="px-6 py-4 font-semibold text-gray-700">Precio</th>
                    <th class="px-6 py-4 font-semibold text-gray-700">Stock</th>
                    <th class="px-6 py-4 font-semibold text-gray-700 text-center">Acciones</th>
                </tr>
            </thead>

            <tbody class="divide-y">

                <!-- Producto 1 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium">
                        Zapatillas Deportivas
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        Zapatillas cómodas ideales para correr y entrenar.
                    </td>
                    <td class="px-6 py-4 font-semibold text-blue-600">
                        $59.99
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-sm rounded-full bg-green-100 text-green-700">
                            15
                        </span>
                    </td>
                    <td class="px-6 py-4 flex gap-2 justify-center">
                        <x-atoms.button text="Ver" />
                        <a href="editar/zapatillas">
                            <x-atoms.button text="Editar" />
                        </a>
                        <x-atoms.button text="Borrar" class="bg-red-500 hover:bg-red-600" />
                    </td>
                </tr>

                <!-- Producto 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium">
                        Auriculares Bluetooth
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        Sonido de alta calidad con cancelación de ruido.
                    </td>
                    <td class="px-6 py-4 font-semibold text-blue-600">
                        $89.99
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-sm rounded-full bg-yellow-100 text-yellow-700">
                            5
                        </span>
                    </td>
                    <td class="px-6 py-4 flex gap-2 justify-center">
                        <x-atoms.button text="Ver" />
                        <a href="editar/audifonos">
                            <x-atoms.button text="Editar" />
                        </a>
                        <x-atoms.button text="Borrar" class="bg-red-500 hover:bg-red-600" />
                    </td>
                </tr>

                <!-- Producto 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium">
                        Smartwatch
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        Controla tu actividad física y notificaciones.
                    </td>
                    <td class="px-6 py-4 font-semibold text-blue-600">
                        $129.99
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-sm rounded-full bg-red-100 text-red-700">
                            2
                        </span>
                    </td>
                    <td class="px-6 py-4 flex gap-2 justify-center">
                        <x-atoms.button text="Ver" />
                        <a href="editar/smartwatch">
                            <x-atoms.button text="Editar" />
                        </a>
                        <x-atoms.button text="Borrar" class="bg-red-500 hover:bg-red-600" />
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
