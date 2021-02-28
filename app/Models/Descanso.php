<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descanso extends Model
{
    use HasFactory;

    protected $table = 'descansos';
    protected $fillable = [
        'nome',
        'quantidade'
    ];

    public function descansoEtapa1()
    {
        return $this->hasMany(Candidato::class, "descanso_etapa1");
    }

    public function descansoEtapa2()
    {
        return $this->hasMany(Candidato::class, "descanso_etapa2");
    }
}
