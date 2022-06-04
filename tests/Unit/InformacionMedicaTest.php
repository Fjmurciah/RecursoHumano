<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\InformacionMedica;

class InformacionMedicaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_informacion_medica_belongs_to_user()
    {
        $infomedica = new InformacionMedica();
        $infomedica->user = User::find(1);

        $this->assertInstanceOf(User::class, $infomedica->user);
    }
}
