<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCandidato;
use App\Models\Candidato;
use App\Models\Descanso;
use App\Models\Entrevista;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function create()
    {
        return view('candidato/create');
    }

    public function salvar(RequestCandidato $request)
    {
        $descansos = Descanso::withCount('descansoEtapa1', 'descansoEtapa2')
            ->orderBy('descanso_etapa1_count')
            ->orderBy('descanso_etapa2_count')
            ->get();

        foreach ($descansos as $value) {

            if ($value->descansoEtapa1->count() < $value->quantidade) {
                $descanso1 = $value->id;
                break;
            }
        }

        foreach ($descansos as $value) {

            if (
                $value->descansoEtapa2->count() < $value->quantidade &&
                $value->id != $descanso1
            ) {
                $descanso2 = $value->id;
                break;
            }
        }

        if (!isset($descanso1) || !isset($descanso2)) {
            return redirect()
                ->route('index')
                ->with('message', 'precisa de mais lugares pra descanso!');
        }

        $entrevistas = Entrevista::withCount('entrevistaEtapa1', 'entrevistaEtapa2')
            ->orderBy('entrevista_etapa1_count')
            ->orderBy('entrevista_etapa2_count')
            ->get();

        foreach ($entrevistas as $value) {

            if ($value->entrevistaEtapa1->count() < $value->quantidade) {
                $entrevista1 = $value->id;
                break;
            }
        }

        foreach ($entrevistas as $value) {

            if (
                $value->entrevistaEtapa2->count() < $value->quantidade &&
                $value->id != $entrevista1
            ) {
                $entrevista2 = $value->id;
                break;
            }
        }

        if (!isset($entrevista1) || !isset($entrevista2)) {
            return redirect()
                ->route('index')
                ->with('message', 'precisa de mais lugares para entrevista!');
        }

        $request['descanso_etapa1'] = $descanso1;
        $request['descanso_etapa2'] = $descanso2;
        $request['entrevista_etapa1'] = $entrevista1;
        $request['entrevista_etapa2'] = $entrevista2;

        if (Candidato::create($request->all())) {
            return redirect()
                ->route('index')
                ->with('message', "Candidato {$request->nome} cadastrado!");
        }
    }

    public function show($id)
    {
        if (!$candidato = Candidato::where('id', $id)->first()) {
            return redirect()->route('index');
        }
        return view('candidato/show', compact('candidato'));
    }

    public function update(RequestCandidato $request, $id)
    {
        if (!$candidato = Candidato::where('id', $id)->first()) {
            return redirect()->back();
        }

        $candidato->update($request->all());

        return redirect()
            ->route('index')
            ->with('message', "Atualizado!");
    }

    public function destroy($id)
    {
        if (!$candidato = Candidato::find($id)) {
            return redirect()
                ->route('index')
                ->with('message', "Candidato não encontrado!");
        }

        $candidato->delete();
        return redirect()
            ->route('index')
            ->with('message', "Apagado!");
    }
}
