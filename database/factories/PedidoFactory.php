<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $estatus = ['carrito','pagado','enviado','recibido','cancelado','devuelto'];
        $envio= ['normal','expres'];
        return [
            'usuario_id' => $this->faker->numberBetween(1,20),
            'estatus' => $estatus[$this->faker->numberBetween(0,5)],
            'tipo_de_envio' => $envio[$this->faker->numberBetween(0,1)]
        ];
    }
}
