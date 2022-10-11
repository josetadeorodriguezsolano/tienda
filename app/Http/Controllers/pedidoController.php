<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\DetallePedido;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function makePedido(Request $request)
    {
        $tipo_envio = $request->input('opcion_envio');
        $usuario = session()->get('user');

        $id = Pedido::insertGetId([
            'usuario_id' => $usuario->id,
            'estatus' => 'pagado',
            'tipo_de_envio' => $tipo_envio
        ]);

        $carrito = Carrito::getCarrito($usuario);
        foreach($carrito as $car){
            $car->producto;
            $dp = new DetallePedido();
            $dp->pedido_id = $id;
            $dp->producto_id = $car->producto->id;
            $dp->cantidad = $car->cantidad;
            $dp->precio = $car->producto->precio;
            $dp->descuento = $car->producto->descuento;
            $band = $dp->save();
            if($band){
                $carrito = Carrito::find($car->id);
                $carrito->delete();
            }
        }
        return redirect('/');
    }

    public function reporteVentas(Request $request)
    {
        $ventasTotales = Pedido::ventasTotales();
        return view("reporteVentas",["ventasTotales"=>$ventasTotales]);
    }

    public function usuariosConMayoresVentas($nombre)
    {
        $usuarios = Pedido::usuariosConMayoresVentas($nombre);
        return view("reporteUsuariosConMayoresVentas",["usuarios"=>$usuarios]);
    }
}
