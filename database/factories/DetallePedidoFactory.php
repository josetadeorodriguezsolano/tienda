<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetallePedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pedido_id' => $this->faker->numberBetween(1,5000000),
            'producto_id' => $this->faker->numberBetween(1,50000),
            'cantidad' => $this->faker->numberBetween(1,5),
            'precio' => $this->faker->numberBetween(10,1000),
            'descuento' => $this->faker->numberBetween(0,30)
        ];
    }
}
