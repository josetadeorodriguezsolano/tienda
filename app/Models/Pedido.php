<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;

class Pedido extends Model
{
    use HasFactory;
    protected $table="pedidos";
    protected $fillable = [
        'usuario_id',
        'estatus',
        'tipo_de_envio',
    ];

    public function ventasTotales()
    {
        $ventas = DB::select(
        "SELECT SUM(detalle_pedidos.precio*detalle_pedidos.cantidad) as vendido
        FROM detalle_pedidos
        INNER JOIN Pedidos
        ON (Pedidos.id = detalle_pedidos.pedido_id)
        WHERE Pedidos.estatus = 'PAGADO'");
        return $ventas[0]->vendido;
    }

    public function usuariosConMayoresVentas($nombre)
    {
        $usuarios_ids = DB::select(
        "SELECT users.id, SUM(detalle_pedidos.precio*detalle_pedidos.cantidad) as vendido
        FROM users
        INNER JOIN Pedidos
        ON (users.id = pedidos.usuario_id)
        INNER JOIN detalle_pedidos
        ON (Pedidos.id = detalle_pedidos.pedido_id)
        WHERE users.nombre like '%$nombre%'
        and Pedidos.estatus = 'PAGADO'
        GROUP BY users.id
        ORDER BY vendido DESC");
        $usuarios = new Collection();
        echo "c".count($usuarios_ids);
        foreach ($usuarios_ids as $ids) {
            $usuario = User::find($ids->id);
            $usuario->vendido = $ids->vendido;
            $usuarios->push($usuario);
        }
        return $usuarios;
    }

}
