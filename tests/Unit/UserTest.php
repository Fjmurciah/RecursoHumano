<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_user_has_many_informacion_academica()
    {
        $user = new User();
        $this->assertInstanceOf(Collection::class, $user->informacion_academica);
    }

    public function test_a_user_has_many_informacion_medica()
    {
        $user = new User();
        $this->assertInstanceOf(Collection::class, $user->informacion_medica);
    }

    public function test_a_user_has_many_servicios_aliados()
    {
        $user = new User();
        $this->assertInstanceOf(Collection::class, $user->servicios_aliados);
    }
}
