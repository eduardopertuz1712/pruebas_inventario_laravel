<?php
use App\Http\Controllers\Web\ProductoController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/editar/zapatillas', [HomeController::class, 'editar'])->name('editar');

Route::get('/editar/audifonos', [HomeController::class, 'editar_producto'])->name('editar_producto');

Route::get('/editar/smartwatch', [HomeController::class, 'editar_smartwatch'])->name('editar_smartwatch');

Route::get('/actualizar/zapatillas', [HomeController::class, 'actualizar'])->name('actualizar');

Route::get('/productos', [ProductoController::class, 'index']);
