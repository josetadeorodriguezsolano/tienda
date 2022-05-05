<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_cataloloProductos()
    {
        $response = $this->get('/catalogo_productos');
        $response->assertStatus(403,'Error autorizo el acceso a un usuario no administrador');

        $user = User::where('id',2)->get()->first();
        $this->be($user);
        $response = $this->get('/catalogo_productos');
        $response->assertStatus(200,'Erro al entrar al catalogo de producto');
    }
}
