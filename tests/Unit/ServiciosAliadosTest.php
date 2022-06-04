<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\ServiciosAliado;

class ServiciosAliadosTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_servicio_aliado_belongs_to_user()
    {
        $servicio = new ServiciosAliado();
        $servicio->user = User::find(1);

        $this->assertInstanceOf(User::class, $servicio->user);
    }
}
