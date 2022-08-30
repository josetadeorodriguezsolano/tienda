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

    public function procederPago(){
        $usuario = Auth::user();
        $usuario = session()->get('user');
        $carrito = Carrito::getCarrito($usuario);
        foreach($carrito as $car){
            $car->producto->categoria;
        }
        return view('proceso_pago', ['carrito_productos' => $carrito, 'usuario' => $usuario]);
    }
}
