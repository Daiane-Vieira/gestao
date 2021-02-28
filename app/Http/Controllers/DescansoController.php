<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestDescanso;
use App\Models\Descanso;
use Illuminate\Http\Request;

class DescansoController extends Controller
{
    public function create(){ return view('descanso/create');}

    public function salvar(RequestDescanso $request)
    {
        if(Descanso::create($request->all())){
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
        if(!$descanso = Descanso::where('id',$id)->first()){
            return redirect()->route('index');
        }
        return view('descanso/show',compact('descanso'));
    }

    public function update(RequestDescanso $request,$id){
        if(!$descanso = Descanso::where('id',$id)->first()){
            return redirect()->back();
        }

        $descanso->update($request->all());

        return redirect()
        ->route('index')
        ->with('message',"Atualizado!");
    }

    public function destroy($id)
    {

        if (!$descanso = Descanso::find($id)) {
            return redirect()
                ->route('index')
                ->with('message', "Lugar de descanso não encontrado!");
        }

        $descanso->delete();
        return redirect()
            ->route('index')
            ->with('message', "Apagado!");
    }

}
