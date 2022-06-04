<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\ResultadoController;
use Illuminate\Database\Eloquent\Collection;

class ResultadoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_resultado_has_many_encuestas()
    {
        $resultado = new ResultadoController();
        $this->assertInstanceOf(Collection::class, $resultado->encuestas);
    }
}
