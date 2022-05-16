<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    use HasFactory;

    public static function masVendidos()
    {
        $ids = DB::raw("SELECT producto_id, SUM(cantidad) as vendidos".
        "FROM detalle_pedidos".
        "GROUP BY producto_id".
        "ORDER BY vendidos DESC LIMIT 10");
        $arregloids=[];
        foreach ($ids as $id) {
            $arregloids[] = $ids->producto_id;
        }
        return Producto::whereIn("id",$arregloids)->get();
        $administradores = User::where('tipo','administrador')->get();
        foreach ($administradores as $admin) {
            $admin->enviarCorreo("Mensaje");
        }
    }

    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }
}
