<?php
use App\Http\Controllers\Web\ProductoController;
use App\Http\Controllers\Web\ActualizarController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\EditController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/editar/zapatillas', [EditController::class, 'editar'])->name('editar');

Route::get('/editar/audifonos', [EditController::class, 'editar_producto'])->name('editar_producto');

Route::get('/editar/smartwatch', [EditController::class, 'editar_smartwatch'])->name('editar_smartwatch');

Route::get('/actualizar/zapatillas', [ActualizarController::class, 'actualizar'])->name('actualizar');

Route::get('/productos', [ProductoController::class, 'index']);
