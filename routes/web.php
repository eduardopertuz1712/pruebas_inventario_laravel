<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('productos.index');
});

// Rutas para productos (CRUD)
Route::resource('productos', ProductoController::class);
