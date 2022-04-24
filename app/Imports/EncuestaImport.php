<?php

namespace App\Imports;

use App\Models\Encuesta;
use Maatwebsite\Excel\Concerns\ToModel;

class EncuestaImport implements ToModel
{
    public $resultado;

    public function __construct($resultado)
    {
        //
        $this->resultado = $resultado;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Encuesta([
            //
            'fecharespuesta' => $row['0'],
            'preguntauno' => $row['1'],
            'preguntados' => $row['2'],
            'preguntatres' => $row['3'],
            'preguntacuatro' => $row['4'],
            'preguntacinco' => $row['5'],
            'preguntaseis' => $row['6'],
            'preguntasiete' => $row['7'],
            'preguntaocho' => $row['8'],
            'resultado_id' => $this->resultado->id,
        ]);
    }
}
