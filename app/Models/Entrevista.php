<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    use HasFactory;

    protected $table = 'entrevistas';
    protected $fillable = [
        'nome',
        'quantidade'
    ];

    public function entrevistaEtapa1()
    {
        return $this->hasMany(Candidato::class, "entrevista_etapa1");
    }

    public function entrevistaEtapa2()
    {
        return $this->hasMany(Candidato::class, "entrevista_etapa2");
    }
}
