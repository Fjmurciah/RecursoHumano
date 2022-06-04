<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\InformacionAcademica;

class InformacionAcademicaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_informacion_academica_belongs_to_user()
    {
        $infoacademica = new InformacionAcademica();
        $infoacademica->user = User::find(1);

        $this->assertInstanceOf(User::class, $infoacademica->user);
    }
}
