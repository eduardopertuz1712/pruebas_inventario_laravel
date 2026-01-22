<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function editar()
    {
        return view('components.template.edit-product');
    }

    public function editar_producto()
    {
        return view('components.template.edit-product-audifonos');
    }

    public function editar_smartwatch()
    {
        return view('components.template.edit-product-smartwatch');
    }

    public function actualizar()
    {
        return view('components.template.actualizar-producto');
    }
}
