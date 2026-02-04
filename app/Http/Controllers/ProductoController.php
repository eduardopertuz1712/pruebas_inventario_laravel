<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Mostrar la lista de productos con paginación
     */
    public function index()
    {
        $user = Auth::user();

        if ($user && $user->role === 'admin') {
            $productos = Producto::paginate(5); // admin ve todos
        } else {
            $productos = Producto::where('user_id', $user->id ?? 0)->paginate(5); // usuario ve solo los suyos
        }
        return view('productos.index', compact('productos'));
    }

    /**
     * Mostrar un producto específico
     */
    public function show(Producto $producto)
    {
        $user = Auth::user();
        if ($user->role !== 'admin' && $producto->user_id !== $user->id) {
            abort(403);
        }
        return view('productos.show', compact('producto'));
    }

    /**
     * Mostrar el formulario para crear un nuevo producto
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Guardar el nuevo producto en la BD
     */
    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $validated['user_id'] = Auth::id();

        // Manejar la imagen si se envió
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('productos', 'public');
            $validated['imagen'] = $path;
        }

        // Crear el producto (asociado al usuario autenticado)
        Producto::create($validated);

        return redirect()->route('productos.index')
                        ->with('success', 'Producto creado exitosamente');
    }

    /**
     * Mostrar el formulario para editar un producto
     */
    public function edit(Producto $producto)
    {
        $user = Auth::user();
        if ($user->role !== 'admin' && $producto->user_id !== $user->id) {
            abort(403);
        }
        return view('productos.edit', compact('producto'));
    }

    /**
     * Actualizar el producto en la BD
     */
    public function update(Request $request, Producto $producto)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();
        if ($user->role !== 'admin' && $producto->user_id !== $user->id) {
            abort(403);
        }

        // Actualizar el producto
        if ($request->hasFile('imagen')) {
            // eliminar imagen anterior si existe
            if ($producto->imagen) {
                Storage::disk('public')->delete($producto->imagen);
            }
            $path = $request->file('imagen')->store('productos', 'public');
            $validated['imagen'] = $path;
        }

        $producto->update($validated);

        return redirect()->route('productos.index')
                        ->with('success', 'Producto actualizado exitosamente');
    }

    /**
     * Eliminar un producto
     */
    public function destroy(Producto $producto)
    {
        $user = Auth::user();
        if ($user->role !== 'admin' && $producto->user_id !== $user->id) {
            abort(403);
        }

        // eliminar imagen asociada
        if ($producto->imagen) {
            Storage::disk('public')->delete($producto->imagen);
        }

        $nombre = $producto->nombre;
        $producto->delete();

        return redirect()->route('productos.index')
                        ->with('success', "Producto '$nombre' eliminado exitosamente");
    }
}
