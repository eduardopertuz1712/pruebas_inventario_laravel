<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActualizarController extends Controller
{
    public function actualizar()
    {
        return view('components.template.actualizar-producto');
    }
}
