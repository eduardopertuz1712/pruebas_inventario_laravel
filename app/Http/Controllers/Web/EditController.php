<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
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
}
