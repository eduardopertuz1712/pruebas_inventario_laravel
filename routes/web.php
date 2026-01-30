<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

// Rutas para productos (CRUD)

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        $isAdmin = $user && $user->role === 'admin';
        $users = collect();

        if ($isAdmin) {
            $users = App\Models\User::withCount('productos')->get();
        }

        return view('dashboard', compact('isAdmin', 'users'));
    })->name('dashboard');

    // Admin: ver detalles de un usuario y sus productos
    Route::get('/admin/users/{user}', [App\Http\Controllers\AdminUserController::class, 'show'])->name('admin.users.show');
    Route::resource('productos', ProductoController::class);
});
