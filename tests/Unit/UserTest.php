<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

use function PHPUnit\Framework\assertTrue;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_enviarCorreo()
    {
        $user = User::where('id',1)->get()->first();
        $correcto = $user->enviarCorreo("Hola");
        $this->assertTrue($correcto);
    }
}
