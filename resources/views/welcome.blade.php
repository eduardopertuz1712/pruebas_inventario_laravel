<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inventario</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="bg-gradient-to-b from-blue-50 to-white min-h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Sistema de Inventario</h1>
                    <p class="text-xl text-gray-600">Gestiona tus productos de manera eficiente</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">¿Nuevo usuario?</h2>
                        <p class="text-gray-600 mb-6">Regístrate para comenzar a gestionar tu inventario hoy mismo.</p>
                        <a href="{{ route('register') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">
                            Registrarse
                        </a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">¿Ya tienes cuenta?</h2>
                        <p class="text-gray-600 mb-6">Inicia sesión para acceder a tu inventario.</p>
                        <a href="{{ route('login') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg">
                            Iniciar Sesión
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Características principales</h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">Gestión de productos</h3>
                                <p class="mt-2 text-gray-600">Crea, edita y elimina productos fácilmente.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">Control de stock</h3>
                                <p class="mt-2 text-gray-600">Mantén un registro actualizado del inventario.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">Interfaz intuitiva</h3>
                                <p class="mt-2 text-gray-600">Diseño moderno y fácil de usar.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">Autenticación segura</h3>
                                <p class="mt-2 text-gray-600">Tus datos están protegidos con autenticación de dos factores.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
