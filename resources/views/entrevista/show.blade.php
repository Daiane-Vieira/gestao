@extends('template/template')

@section('title','Show')

@section('content')

<h1>Visualizar Entrevista</h1>

<form action="{{ route('entrevista.update', $entrevista->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="nome" title="nome" id="nome" placeholder="Nome" value="{{ $entrevista->nome ?? old('nome') }}">
    </br>
    <input type="number" name="quantidade" title="quantidade" id="quantidade" placeholder="quantidade" value="{{ $entrevista->quantidade ?? old('quantidade') }}">
    </br>
    <button type="submit">Atualizar</button>
</form>

<h2>Entrevista Etapa1</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entrevista->entrevistaEtapa1 as $pessoa)
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

<h2>Entrevista Etapa2</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entrevista->entrevistaEtapa2 as $pessoa)
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

<form action="{{ route('entrevista.destroy',$entrevista->id) }}" method="post">
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
