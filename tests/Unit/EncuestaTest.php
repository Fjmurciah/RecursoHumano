<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Encuesta;
use App\Models\ResultadoController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EncuestaTest extends TestCase
{
    //Para que no se guarden los datos que se insertan en la base de datos
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_encuesta_belongs_to_resultado()
    {
        $encuesta = new Encuesta();
        $resultado = ResultadoController::create([
            'name' => 'Resultado prueba',
            'tipo' => 'Tipo prueba',
            'url' => 'url.pdf',
        ]);

        $encuesta->resultado_id = $resultado->id;

        $this->assertInstanceOf(ResultadoController::class, $encuesta->resultado);
    }
}
