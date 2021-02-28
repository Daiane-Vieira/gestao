@extends('template/template')

@section('title','Show')

@section('content')

<h1>Visualizar Descanso</h1>

<form action="{{ route('descanso.update', $descanso->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="nome" title="nome" id="nome" placeholder="Nome" value="{{ $descanso->nome ?? old('nome') }}">
    </br>
    <input type="number" name="quantidade" title="quantidade" id="quantidade" placeholder="quantidade" value="{{ $descanso->quantidade ?? old('quantidade') }}">
    </br>
    <button type="submit">Atualizar</button>
</form>

<h2>descanso Etapa1</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($descanso->descansoEtapa1 as $pessoa)
        <tr>
            <th scope="row">{{ $pessoa->id }}</th>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->sobrenome }}</td>
        </tr>
        @endforeach
    </tbody>
    <thead>
        <tr>
            <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        </tr>
    </thead>
</table>

<h2>descanso Etapa2</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($descanso->descansoEtapa2 as $pessoa)
        <tr>
            <th scope="row">{{ $pessoa->id }}</th>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->sobrenome }}</td>
        </tr>
        @endforeach
    </tbody>
    <thead>
        <tr>
            <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        </tr>
    </thead>
</table>

<form action="{{ route('descanso.destroy',$descanso->id) }}" method="post">
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
