@extends('template/template')

@section('title','Criar entrevista')

@section('content')

<h1>Cadastro de entrevista</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all(); as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('entrevista.salvar') }}" method="post">
    @csrf
    <input type="text" name="nome" title="nome" id="nome" placeholder="Nome" value="{{ $entrevista->nome ?? old('nome') }}">
    </br>
    <input type="number" name="quantidade" title="quantidade" id="quantidade" placeholder="quantidade" value="{{ $entrevista->quantidade ?? old('quantidade') }}">
    </br>
    <button type="submit">Cadastrar</button>
</form>

<style>
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
