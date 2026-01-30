<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function show(User $user)
    {
        $productos = $user->productos()->paginate(10);
        return view('admin.users.show', compact('user', 'productos'));
    }
}
