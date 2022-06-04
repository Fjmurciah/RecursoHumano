<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\ServiciosAliado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiciosAliadosTest extends TestCase
{
    //Para que no se guarden los datos que se insertan en la base de datos
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_servicio_aliado_belongs_to_user()
    {
        $user = User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        $servicio = new ServiciosAliado();
        $servicio->user = $user;

        $this->assertInstanceOf(User::class, $servicio->user);
    }
}
