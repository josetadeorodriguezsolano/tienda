<?php

namespace Database\Seeders;

use App\Models\DetallePedido;
use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\Producto;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::factory()
            ->count(50)
            ->create();
        $pedidos = Pedido::all();
        foreach($pedidos as $pedido)
        {
            $numeroProductos = random_int(1,10);
            $detallePedidos = DetallePedido::factory()->count($numeroProductos);
            foreach($detallePedidos as $detalle)
            {
                $detalle->pedido_id = $pedido->id;
                $detalle->precio = Producto::where('id',$detalle->producto_id)->get()->precio;
            }
            $detallePedidos->create();
        }
    }
}
