<div class="container space-y-8 justify-center align-center mx-auto p-6">
    <x-template.form-product />
    <h1 class="text-3xl font-bold mb-6 text-center">Nuestros Productos</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Producto 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <h2 class="text-xl font-semibold">Zapatillas Deportivas</h2>
                <p class="text-gray-600 text-sm mt-2">
                    Zapatillas cómodas ideales para correr y entrenar.
                </p>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-lg font-bold text-blue-600">$59.99</span>
                    <x-atoms.button text="editar" />
                    <x-atoms.button text="actualizar" />
                    <x-atoms.button text="Comprar" />
                </div>
            </div>
        </div>
    </div>
</div>
