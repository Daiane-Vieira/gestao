<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEntrevista;
use App\Models\Entrevista;
use Illuminate\Http\Request;

class EntrevistaController extends Controller
{
    public function create(){ return view('entrevista/create');}

    public function salvar(RequestEntrevista $request)
    {
        if(Entrevista::create($request->all())){
            return redirect()
            ->route('index')
            ->with('message', "Adicionado!");
        }else{
            return redirect()
            ->route('index')
            ->with('message', "Erro ao adicionar!");
        }

    }

    public function show($id){
        if(!$entrevista = Entrevista::where('id',$id)->first()){
            return redirect()->route('index');
        }
        return view('entrevista/show',compact('entrevista'));
    }

    public function update(RequestEntrevista $request,$id){
        if(!$entrevista = Entrevista::where('id',$id)->first()){
            return redirect()->back();
        }

        $entrevista->update($request->all());

        return redirect()
        ->route('index')
        ->with('message',"Atualizado!");
    }

    public function destroy($id)
    {

        if (!$entrevista = Entrevista::find($id)) {
            return redirect()
                ->route('index')
                ->with('message', "Entrevista não encontrada!");
        }

        $entrevista->delete();
        return redirect()
            ->route('index')
            ->with('message', "Apagado!");
    }

}
