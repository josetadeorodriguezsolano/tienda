<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrito extends Model
{
    use HasFactory;
    //usuario_id, producto_id, cantidad, precio, fecha
    public static function getCarrito($usuario)
    {
        return Carrito::where('usuario_id',$usuario->id)->get();
    }

    public function producto()
    {
        return Producto::where('id',$this->producto_id)-get()[0];
        //return HasMany()
    }
}
