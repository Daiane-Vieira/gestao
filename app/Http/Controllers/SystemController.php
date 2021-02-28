<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Descanso;
use App\Models\Entrevista;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        $descansos = Descanso::withCount('descansoEtapa1', 'descansoEtapa2')
            ->orderBy('id', 'desc')
            ->paginate();

        $entrevistas = Entrevista::withCount('entrevistaEtapa1', 'entrevistaEtapa2')
            ->orderBy('id', 'desc')
            ->paginate();

        $candidatos = Candidato::orderBy('id', 'desc')->paginate();

        return view('/index', compact('descansos', 'entrevistas','candidatos'));
    }
}
