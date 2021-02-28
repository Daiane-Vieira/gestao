@extends('template/template')

@section('title','Criar descanso')

@section('content')

<h1>Cadastro de descanso</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all(); as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('descanso.salvar') }}" method="post">
    @csrf
    <input type="text" name="nome" title="nome" id="nome" placeholder="Nome" value="{{ $descanso->nome ?? old('nome') }}">
    </br>
    <input type="number" name="quantidade" title="quantidade" id="quantidade" placeholder="quantidade" value="{{ $descanso->quantidade ?? old('quantidade') }}">
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
