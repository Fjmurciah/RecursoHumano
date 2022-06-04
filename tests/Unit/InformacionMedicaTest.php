<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\InformacionMedica;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InformacionMedicaTest extends TestCase
{
    //Para que no se guarden los datos que se insertan en la base de datos
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_informacion_medica_belongs_to_user()
    {
        $user = User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        $infomedica = new InformacionMedica();
        $infomedica->user = $user;

        $this->assertInstanceOf(User::class, $infomedica->user);
    }
}
