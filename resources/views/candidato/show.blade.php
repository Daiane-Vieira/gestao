@extends('template/template')

@section('title','Show')

@section('content')

<h1>Visualizar candidato</h1>

<form action="{{ route('candidato.update', $candidato->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="nome" title="nome" id="nome" placeholder="Nome" value="{{ $candidato->nome ?? old('nome') }}">
    </br>
    <input type="text" name="sobrenome" title="sobrenome" id="sobrenome" placeholder="sobrenome" value="{{ $candidato->sobrenome ?? old('sobrenome') }}">
    </br>
    <button type="submit">Atualizar</button>
</form>

<h2>candidato Etapa1</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Etapa</th>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Entrevista Etapa1</th>
            <th>{{ $candidato->entrevista1->id }}</th>
            <th>{{ $candidato->entrevista1->nome }}</th>
        </tr>
        <tr>
            <th scope="row">Entrevista Etapa2</th>
            <th>{{ $candidato->entrevista2->id }}</th>
            <th>{{ $candidato->entrevista2->nome }}</th>
        </tr>
        <tr>
            <th scope="row">Descanso Etapa1</th>
            <th>{{ $candidato->descanso1->id }}</th>
            <th>{{ $candidato->descanso1->nome }}</th>
        </tr>
        <tr>
            <th scope="row">Descanso Etapa2</th>
            <th>{{ $candidato->descanso2->id }}</th>
            <th>{{ $candidato->descanso2->nome }}</th>
        </tr>
    </tbody>
    <thead>
        <tr>
            <th scope="col">Etapa</th>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
        </tr>
    </thead>
</table>

<form action="{{ route('candidato.destroy',$candidato->id) }}" method="post">
    @csrf
    @method("DELETE")
    <button type="submit">Deletar</button>
</form>

<style>
    h2{
        margin-top:35px;
    }
    h1{
        margin-top: 25px;
    }
    input{
        margin: 10px;
    }
    button{
        margin: 10px;
    }
</style>

@endsection
