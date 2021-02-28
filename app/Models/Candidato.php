<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $table = 'candidatos';
    protected $fillable = [
        'nome',
        'sobrenome',
        'entrevista_etapa1',
        'entrevista_etapa2',
        'descanso_etapa1',
        'descanso_etapa2'
    ];

    public function entrevista1()
    {
        return $this->belongsTo(Entrevista::class, "entrevista_etapa1");
    }

    public function entrevista2()
    {
        return $this->belongsTo(Entrevista::class, "entrevista_etapa2");
    }

    public function descanso1()
    {
        return $this->belongsTo(Descanso::class, "descanso_etapa1");
    }

    public function descanso2()
    {
        return $this->belongsTo(Descanso::class, "descanso_etapa2");
    }

}
