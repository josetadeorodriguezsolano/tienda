<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'id' => '1',
            'nombre' => 'Alejandro Villegas',
            'direccion' => 's/d',
            'tarjeta_credito' => '0000111122223333',
            'email' => 'cliente1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'), // password
            'remember_token' => ""
        ]);*/
        // \App\Models\User::factory(10)->create();
        $this->call([
            /*UsersSeeder::class,
            CategoriaSeeder::class,
            ProductoSeeder::class,*/
            PedidoSeeder::class,
            //DetallePedido::class,
        ]);
    }
}
