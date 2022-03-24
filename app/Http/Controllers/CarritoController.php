<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carrito;

class CarritoController extends Controller
{
    public function pagar()
    {
        $usuario = Auth::user();
        $carrito = Carrito::getCarrito($usuario);
        return view('contenido.PagarCarrito',[$carrito]);
    }
}
