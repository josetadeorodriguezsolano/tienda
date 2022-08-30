<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrito extends Model
{
    use HasFactory;
    protected $table="carrito";
    //usuario_id, producto_id, cantidad, precio, fecha
    public static function getCarrito($usuario)
    {
        return Carrito::where('user_id',$usuario->id)->get();
    }

    public function producto()
    {
        return $this->hasOne(Producto::class, 'id', 'producto_id');
    }
}
