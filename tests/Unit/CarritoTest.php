<?php

namespace Tests\Unit;

use App\Http\Controllers\CarritoController;
use PhpParser\Node\Stmt\UseUse;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Models\Carrito;

class CarritoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getCarrito()
    {
        $usuario = User::factory()->count(1)->create();
        $carrito = Carrito::factory()->count(5)->create();
        foreach ($carrito as $producto) {
            $producto->usuario_id = $usuario->id;
            $producto->save();
        }
        $productosDelCarrito = Carrito::getCarrito($usuario);
        $this->assertTrue($productosDelCarrito->count() == 5);
    }

    public function test_producto()
    {
        $this->assertTrue(true);
    }
}
