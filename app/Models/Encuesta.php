<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecharespuesta',
        'preguntauno',
        'preguntados',
        'preguntatres',
        'preguntacuatro',
        'preguntacinco',
        'preguntaseis',
        'preguntasiete',
        'preguntaocho',
        'resultado_id',
    ];

    public function resultado()
    {
        return $this->belongsTo(ResultadoController::class, 'resultado_id');
    }

}
