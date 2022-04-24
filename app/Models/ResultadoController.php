<?php

namespace App\Models;

use App\Models\Encuesta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoController extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'tipo',
        'url',

    ];

    public function encuestas()
    {
        return $this->hasMany(Encuesta::class, 'resultado_id');
    }

}
