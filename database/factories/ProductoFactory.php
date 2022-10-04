<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "descripcion" => $this->faker->words(3,true),
            "precio" => $this->faker->numberBetween(10,1000),
            "cantidad" => $this->faker->numberBetween(1,50),
            "descuento" => $this->faker->numberBetween(0,30),
            "foto"=> "/img/galleta_animalitos.jpg",
            //'foto'=>$this->faker->imageUrl(40, 40, 'cats'),
            "especificaciones" => $this->faker->realText(200),
            "categoria_id" => $this->faker->numberBetween(1,100)//$this->faker->numberBetween(1,10),
        ];
    }
}
