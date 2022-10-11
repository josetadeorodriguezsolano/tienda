<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Database\Factories\CategoriaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        //Categoria::truncate();
        Categoria::factory()
            ->count(100)
            ->create();
        /*for($i=0;$i<10;$i++)
        {
            $categoria = new Categoria();
            $categoriaFactory = new CategoriaFactory();
            $categoria->nobre = $categoriaFactory->faker->words(1);
            $categoria->save();
        }*/
    }
}
